<?php

/**
 * @file
 * Definition of \Drupal\boxout\Plugin\CKEditorPlugin\CodeButton.
 */

namespace Drupal\boxout\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "CodeButton" plugin.
 *
 * @CKEditorPlugin(
 *   id = "boxout",
 *   label = @Translation("CodeButton")
 * )
 */
class CodeButton extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {
  /**
   * Gets a path to module.
   *
   * @return string
   *   Full path to module.
   */
  private function path() {
    return drupal_get_path('module', 'boxout');
  }

  /**
   * Implements CKEditorPluginInterface::getDependencies().
   */
  public function getDependencies(Editor $editor) {
    return array();
  }

  /**
   * Implements CKEditorPluginInterface::getLibraries().
   */
  public function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * Implements CKEditorPluginInterface::isInternal().
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * Implements CKEditorPluginInterface::getFile().
   */
  public function getFile() {
    return $this->path() . "/js/plugins/boxout/plugin.js";
  }

  /**
   * Implements CKEditorPluginButtonsInterface::getButtons().
   */
  public function getButtons() {
    return array(
      'Code' => array(
        'label' => t('Code tag'),
        'image' => $this->path() . '/js/plugins/boxout/icons/code.png',
      ),
    );
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return array();
  }

}
