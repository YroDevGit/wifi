<?php

namespace Drupal\hero_banner\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'Hero_banner' Block.
 *
 * @Block(
 *   id = "hero_banner_block",
 *   admin_label = @Translation("Hero banner Block"),
 *   category = @Translation("Custom Modules")
 * )
 */
class Hero_bannerBlock extends BlockBase
{
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

    $data['promo_check'] = [
      "type" => "checkbox",
      "label" => "Show promos",
      "default" => 0
    ];

    $data['explore_url'] = [
      "type" => "auto",
      "label" => "Explore plans URL"
    ];

    $data['install_url'] = [
      "type" => "auto",
      "label" => "Install URL"
    ];

    $data['img'] = [
      "type" => "file",
      "picker" => "media",
      "label" => "Banner Image"
    ];

    $data['it'] = [
      "type" => "fieldset",
      "label" => "menus",
      "items" => [
        "text" => [
          "type" => "textfield",
          "label" => "Text"
        ]
      ]
        ];

        $data['add_it'] = [
          "type" => "submit",
          "label" => "add",
          "action" => "addOne"
        ];


    //Add more here...

    return $data;
  }

  public static function addOne(array &$form, FormStateInterface $form_state)
  {
    $itemKey = "it"; //fieldset item key

    $current = $form_state->get($itemKey);
    $current[] = [
      "text" => "/", //update this field.
    ];

    $form_state->set($itemKey, $current);
    $newInput = $form_state->getUserInput(); // Save ang form input value antis mg reload para nd madula ang mga value
    $form_state->setUserInput($newInput); // Refresh ang UI para ma update pati ang form.

    $form_state->setRebuild(TRUE);
  }

  public static function removeOne(array &$form, FormStateInterface $form_state)
  {
    $itemKey = "promos"; //fieldset item key

    $trigger = $form_state->getTriggeringElement();
    $index = $trigger["#index"] ?? 0;
    $items = $form_state->get($itemKey) ?? [];
    unset($items[$index]);
    $newItems = array_values($items);

    $form_state->set($itemKey, $newItems);
    $newInput = $form_state->getUserInput(); // Save ang form input value antis mg reload para nd madula ang mga value
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


  public function newVariables(){
    $ret = [];
    $promos = \Ctrx\DrupalHelper::getTaxonomy("promos");
    if($promos){
      $ret["#promos"] = $promos;
    }
    $gb = \Drupal\ctrx_settings\SettingsStorage::get("gb");

    if($gb){
      $ret["#gb"] = $gb;
    }
    return [...$ret];
  }

  /**
   * {@inheritdoc}
   * This is a core function, modifying it can cause errors
   */
  public function blockSubmit($form, FormStateInterface $form_state)
  {
    $except = []; //keys that has custom process below

    $data = $this->data();
    \Ctrx\DrupalHelper::blockSubmiteFilterCTR($data, $except, $form, $form_state, $this->configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration()
  {
    $data = $this->data();
    $ret = [];
    foreach ($data as $k => $v) {
      if (isset($v['type'])) {
        $type = $v['type'];
        if ($type == "fieldset") {
          $ret[$k] = [];
        } else if ($type == "file" || $type == "file_managed") {
          $ret[$k] = [];
        } else if ($type == "submit") {
          continue;
        } else {
          $ret[$k] = $v['default'] ?? "";
        }
      }
    }
    return $ret;
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
    $token = \Drupal::csrfToken()->get('hero_banner');
    $_SESSION['csrf_token'] = $token;
    $data = $this->data();

    $ret =  [
      '#theme' => 'hero_banner',
      '#csrf_token' => $token,
      '#attached' => [
        'library' => [
          'hero_banner/hero_banner-styles',
        ],
      ],
    ];
    foreach ($data as $key => $val) {
      $krg = $this->configuration[$key] ?? null;
      if (is_array($krg)) {
        foreach ($krg as $k => $v) {
          if (! is_array($v)) {
            $ret["#" . $key] = $krg;
            continue;
          }
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
