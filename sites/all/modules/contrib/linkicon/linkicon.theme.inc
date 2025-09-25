<?php

/**
 * @file
 * Hooks and preprocess functions for the Linkicon module.
 */

/**
 * Formats a linkicon field widget.
 */
function theme_linkicon($variables) {
  $element  = $variables['element'];
  $build    = '';
  $wrappers = $attributes = array();
  $settings = $element['#config'];

  $wrappers['id']      = $settings['id'];
  $wrappers['class'][] = 'item-list';
  $wrappers['class'][] = 'item-list--linkicon';

  if ($settings['wrapper_class']) {
    $wrappers['class'][] = check_plain($settings['wrapper_class']);
  }

  $attributes['class'][] = 'linkicon';
  if ($settings['load']) {
    if (!$settings['vertical']) {
      $attributes['class'][] = 'linkicon--inline';
    }
    if ($settings['color']) {
      $attributes['class'][] = 'linkicon--color';
    }
    if ($settings['size'] && empty($settings['_preview'])) {
      $attributes['class'][] = 'linkicon--' . $settings['size'];
    }

    foreach (['style', 'tooltip', 'position', 'color', 'no_text'] as $key) {
      if ($settings[$key]) {
        $value = in_array($key, array('tooltip', 'no_text')) ? $key : $settings[$key];
        $attributes['class'][] = 'linkicon--' . str_replace('_', '-', $value);
      }
    }
  }

  $build .= '<div ' . drupal_attributes($wrappers) . '>';
  $build .= '<ul ' . drupal_attributes($attributes) . '>';
  foreach ($element['#items'] as $item) {
    $build .= '<li>' . drupal_render($item) . '</li>';
  }
  $build .= '</ul>';
  $build .= '</div>';

  return $build;
}

/**
 * Formats an individual linkicon item.
 */
function theme_linkicon_item($variables) {
  extract($variables);
  $element = $variables['element'];

  foreach (['attributes', 'icon_name', 'settings', 'title'] as $key) {
    $default = $key == 'attributes' || $key == 'settings' ? [] : '';
    $variables[$key] = isset($element["#$key"]) ? $element["#$key"] : $default;
  }

  $build = $icon = '';
  $settings = $variables['settings'];
  $attributes = &$variables['attributes'];
  $prefix = check_plain(trim($settings['prefix']));
  $icon_class = drupal_clean_css_identifier(drupal_strtolower($prefix . '-' . trim($variables['icon_name'])));
  $title = '<span class="linkicon__text">' . $element['#title'] . '</span>';

  $attributes['class'][] = 'linkicon__icon';

  // Adds consistent styling for Fontawesome >= 4, and non-fontello icons.
  if (isset($settings['prefix']) && $settings['prefix'] != 'icon') {
    $attributes['class'][] = 'icon';
  }

  // Order is important for FontAwesome, else broken, fab far fas come first.
  if (!empty($settings['icon_class'])) {
    $attributes['class'][] = trim($settings['icon_class']);
  }

  $attributes['class'][] = $prefix . ' ' . $icon_class;
  $attributes['class']['aria-hidden'] = 'true';

  if (!empty($settings['bundle'])) {
    // As of this writing, icon API has no consistent way to prefixing icon
    // as appears on fontello, icomoon, fontawesome modules.
    $icons[] = array(
      '#theme'      => 'icon',
      '#bundle'     => $settings['bundle'],
      '#icon'       => $variables['icon_name'],
      '#attributes' => $attributes,
    );
    $icon = drupal_render($icons);

    $title = !empty($icon) ? $title : '<span class="linkicon__noicon">' . $element['#title'] . '</span>';
  }
  else {
    $icon = '<span ' . drupal_attributes($attributes) . '></span>';
  }

  $build = in_array($settings['position'], array('right', 'bottom')) ? $title . $icon : $icon . $title;

  return $build;
}
