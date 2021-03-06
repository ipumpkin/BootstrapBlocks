<?php
/**
 * Implements hook_form_FORM_ID_alter().
 */
function BootstrapBlocks_form_system_theme_settings_alter(&$form, $form_state) {
  $form['forms'] = array(
    '#type' => 'fieldset',
    '#title' => t('Forms'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#required' => TRUE,
    '#weight' => -20,
  );
  $form['forms']['ignore_element_ids'] = array(
    '#type' => 'textarea',
    '#title' => t('Ignore Forms Elements'),
    '#description' => t('Some form elements do not jive well with being bootstrap-ized. List all form IDs that should not be modified, separated by |. A default list is provided.'),
    '#default_value' => theme_get_setting('ignore_element_ids'),
  );
  $form['buttons'] = array(
    '#type' => 'fieldset',
    '#title' => t('Button Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#weight' => -40,
  );
  $form['buttons']['button_classes'] = array(
    '#type' => 'textarea',
    '#title' => t('Button Classes'),
    '#description' => t('Determines what bootstrap classes should be added to buttons based off of the button title. (For example: Button Title | btn-class)'),
    '#default_value' => theme_get_setting('button_classes'),
  );
  $form['touch_icons'] = array(
    '#type' => 'fieldset',
    '#title' => 'Touch Icons',
    '#collapsible' => TRUE,
    '#description' => t('Settings for touch icons. All touch icons are located in themedir/assets/img/icons/touch-icon-*device.png.'),
    '#collapsed' => TRUE,
    '#required' => TRUE,
    '#weight' => -20,
  );
  $form['touch_icons']['touch_icons_on_off'] = array(
    '#type' => 'checkbox',
    '#title' => t('Touch Icons'),
    '#description' => t('If enabled, adds touch icons to your site.'),
    '#default_value' => theme_get_setting('touch_icons_on_off'),
  );
  $form['touch_icons']['windows_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Windows Start Screen Title'),
    '#description' => t('Your site can be added to the Windows 8 start screen. This title will be used. Defaults to site name.'),
    '#default_value' => theme_get_setting('windows_title'),
  );
  $form['touch_icons']['windows_color'] = array(
    '#type' => 'textfield',
    '#title' => t('Windows Start Screen Color'),
    '#description' => t('This color will be used as the tile color on the Windows 8 start screen. Defaults to white.'),
    '#default_value' => theme_get_setting('windows_color'),
  );
  $form['seo'] = array(
    '#type' => 'fieldset',
    '#title' => 'SEO and Social Settings',
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#required' => TRUE,
    '#weight' => -20,
  );
  $form['seo']['footer_scripts'] = array(
    '#type' => 'textarea',
    '#title' => t('Footer Scripts'),
    '#description' => t('Footer scripts for external services, such as Google Analytic tracking scripts, Online Chat Assistance scripts, etc. Do not add any script tags.'),
    '#default_value' => theme_get_setting('footer_scripts'),
  );
  $form['seo']['author_id'] = array(
    '#type' => 'textfield',
    '#title' => t('Google+ Author ID'),
    '#description' => t('Adds a rel="author" link to the head of your site.'),
    '#default_value' => theme_get_setting('author_id'),
  );
  $form['seo']['social'] = array( 
    '#type' => 'fieldset',
    '#title' => 'Social Links',
    '#description' => t('Links to social accounts related to the site. For use in your theming. (echo theme_get_setting("servicename_link");). These are not used by default in BBB, and you can add more in theme-settings.php.'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#required' => TRUE,
    '#weight' => -20,
  );
  $form['seo']['social']['twitter_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Link'),
    '#description' => t('Full URL to Twitter account belonging to site.'),
    '#default_value' => theme_get_setting('twitter_link'),
  );
  $form['seo']['social']['facebook_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Link'),
    '#description' => t('Full URL to Facebook account belonging to site.'),
    '#default_value' => theme_get_setting('facebook_link'),
  );
  $form['seo']['social']['youtube_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube Link'),
    '#description' => t('Full URL to Youtube account belonging to site.'),
    '#default_value' => theme_get_setting('youtube_link'),
  );
  $form['seo']['social']['linkedin_link'] = array(
    '#type' => 'textfield',
    '#title' => t('LinkedIn Link'),
    '#description' => t('Full URL to LinkedIn account belonging to site.'),
    '#default_value' => theme_get_setting('linkedin_link'),
  );
  $form['seo']['social']['google+_link'] = array(
    '#type' => 'textfield',
    '#title' => t('Google+ Link'),
    '#description' => t('Full URL to Google+ account belonging to site.'),
    '#default_value' => theme_get_setting('google+_link'),
  );
  return $form;
}
