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

  public static function clear(array &$form, FormStateInterface $form_state){
    \Ctrx\DrupalHelper::clearItems("", $form_state);
  }

  public static function addOne(array &$form, FormStateInterface $form_state)
  {
    \Ctrx\DrupalHelper::addOne("", ["text", "rem"], $form_state);
  }

  public static function removeOne(array &$form, FormStateInterface $form_state)
  {
    \Ctrx\DrupalHelper::removeOne("", $form_state);
  }

  public static function ajaxCallback(array &$form, FormStateInterface $form_state)
  {
    return \Ctrx\DrupalHelper::ajaxCallback("", $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function newVariables(){
    $list = \Ctrx\DrupalHelper::getTaxonomy("pac", ["id", "name", "field_price", "field_popular", "field_url", "field_items"]);
    //dump($list);
    return [
      "#pac" => $list
    ];
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
    return \Ctrx\DrupalHelper::defaultConfig($data);
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
