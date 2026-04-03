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
        ],
        "rem" => [
          "type" => "submit",
          "label" => "remove",
          "action" => "removeOne"
        ]
      ]
        ];

        $data['add_it'] = [
          "type" => "submit",
          "label" => "add",
          "action" => "addOne",
          "ajax" => [
            "callback" => "ajaxCallback",
            "wrapper" => "it"
          ]
        ];

        $data['clear'] = [
          "type" => "submit",
          "label" => "x",
          "action" => "clear"
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
