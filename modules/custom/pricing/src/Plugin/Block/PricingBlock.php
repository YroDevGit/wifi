<?php
namespace Drupal\pricing\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
/**
 * Provides a 'Pricing' Block.
 *
 * @Block(
 *   id = "pricing_block",
 *   admin_label = @Translation("Pricing Block"),
 *   category = @Translation("Custom Modules")
 * )
 */
class PricingBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function data(array $array = [])
  {
    $data["title"] = [
      "type" => "textfield",
      "label" => "Title",
      "default" => "Sample title"
    ];

    $data["description"] = [
      "type" => "textarea",
      "label" => "Description",
      "default" => "Sample description for YroBox component."
    ];

    //Add more here...

    return $data;
  }

  public static function addOne(array &$form, FormStateInterface $form_state)
  {
    $itemKey = ""; //fieldset item key

    $current = $form_state->get($itemKey);
    $current[] = [
      "title" => "/", //update this field.
      "subtitle" => "/",
      "rem" => "/"
    ];

    $form_state->set($itemKey, $current);
    $newInput = $form_state->getUserInput(); // Save ang form input value antis mg reload para nd madula ang mga value
    $form_state->setUserInput($newInput); // Refresh ang UI para ma update pati ang form.

    $form_state->setRebuild(TRUE);
  }

  public static function removeOne(array &$form, FormStateInterface $form_state)
  {
    $itemKey = "accordions"; //fieldset item key

    $trigger = $form_state->getTriggeringElement();
    $index = $trigger["#index"] ?? 0;
    $items = $form_state->get($itemKey) ?? [];
    unset($items[$index]);
    $newItems = array_values($items);

    $form_state->set($itemKey, $newItems);
    $newInput = $form_state->getUserInput();// Save ang form input value antis mg reload para nd madula ang mga value
    unset($newInput['settings'][$itemKey][$index]); // kakson ang UI sa item nga gn removed
    $newData = array_values($newInput['settings'][$itemKey] ?? []);
    $newInput['settings'][$itemKey] = $newData;
    $form_state->setUserInput($newInput); // Refresh ang UI para ma update pati ang form.
    $form_state->setRebuild(TRUE);
  }

  public static function ajaxCallback(array $form, FormStateInterface $form_state)
  {
    $itemKey = "";
    $complete_form = $form_state->getCompleteForm();

    if (isset($complete_form[$itemKey])) {
      return $complete_form[$itemKey];
    }

    if (isset($complete_form['settings'][$itemKey])) {
      return $complete_form['settings'][$itemKey];
    }
    return $complete_form;
  }

  /**
   * {@inheritdoc}
   */
  public function newVariables(){
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state)
  {
    $except = []; //keys that has custom process below

    $data = $this->data();
    \Ctrx\DrupalHelper::blockSubmiteFilterCTR($data, $except, $form, $form_state, $this->configuration);
  }

  /**
   * {@inheritdoc}
   * This is a core function, modifying it can cause errors
   */
  public function defaultConfiguration()
  {
    $data = $this->data();
    $ret = [];
    foreach($data as $k=>$v){
      if(isset($v['type'])){
        $type =$v['type'];
        if($type == "fieldset"){
          $ret[$k] = [];
        }else if($type == "file" || $type == "file_managed"){
          $ret[$k] = [];
        }else if($type == "submit"){
          continue;
        }else{
          $ret[$k] = $v['default'] ?? "";
        }
      }
    }
    return $ret;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmiteFilterCTR($data, $except, $form, $form_state)
  {
    foreach ($data as $k => $v) {
      if (in_array($v, $except)) continue;
      if (isset($v['type'])) {
        if ($v['type'] == "submit") continue;
        if ($v['type'] == "markup" || $v['type'] == "html") continue;
        if ($v['type'] == "fieldset") {
          $items = $v['items'];
          if (! empty($items)) {
            foreach ($items as $ko => $lo) {
              $this->blockSubmiteFilterCTR($lo, [], $form, $form_state);
            }
          }
        }
        $val = $form_state->getValue($k);
        if($v['type'] == "auto" || $v['type'] == "auto_complete"){
          $node = \Drupal\node\Entity\Node::load($val);
          if($node){
            $url = $node->toUrl()->toString();
            $val = [
              "page_id" => $val,
              "url" => $url
            ];
          }
        }
        $this->configuration[$k] = $val;
      }
    }
  }

  /**
   * {@inheritdoc}
   * This is a core function, modifying it can cause errors
   */
  public function blockForm($form, FormStateInterface $form_state)
  {
    $data = $this->data();
    $form = [];
    $form = \Ctrx\DrupalForm::filterBlockFormCtr($data, $form_state, null, -1, $this->configuration, $this);
    return $form;
  }

  /**
   * {@inheritdoc}
   * This is a core function, modifying it can cause errors
   */
  public function build()
  {
    $token = \Drupal::csrfToken()->get('pricing');
    $_SESSION['csrf_token'] = $token;
    $data = $this->data();

    $ret =  [
      '#theme' => 'pricing',
      '#csrf_token' => $token,
      '#attached' => [
        'library' => [
          'pricing/pricing-styles',
        ],
      ],
    ];
    foreach ($data as $key => $val) {
      $krg = $this->configuration[$key] ?? null;
      if (is_array($krg)) {
        foreach ($krg as $k => $v) {
          if(! is_array($v)) {$ret["#" . $key] = $krg; continue;}
          $num = false;
          foreach ($v as $kk => $vv) {
            if ($vv) $num = true;
          }
          if ($num == true) $ret["#" . $key][] = $krg[$k];
        }
      } else {
        $ret["#" . $key] = $krg;
      }
    }
    $newVar = $this->newVariables();
    $ret = [...$ret, ...$newVar];
    return $ret;
  }
}
