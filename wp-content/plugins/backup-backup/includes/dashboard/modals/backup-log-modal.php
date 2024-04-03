<?php

  // Namespace
  namespace BMI\Plugin\Dashboard;

  // Exit on direct access
  if (!defined('ABSPATH')) exit;


  $downloadLogNote = __('Do not share it to public as it may contain sensitive details, instead use <b>%s1Secure Download%s2</b>','backup-backup');
  $downloadLogNote = str_replace(
    ['%s1' , '%s2'],
    [
      '<a href="#" class="link download-backup-log-url" download="secure-backup-log.txt">',
      '</a>'
    ],
    $downloadLogNote
    );
?>

<div class="bmi-modal bmi-modal-no-close" id="backup-logs-modal"> 
  <div class="bmi-modal-wrapper no-hpad" style="max-width: 780px; max-width: min(780px, 80vw); padding-top: 25px;">
    <span class="bmi-modal-back">
    </span>
    <a href="#" class="bmi-modal-close">×</a>
    <div class="bmi-modal-content center">

        <div class="f26 bold black title">
          <?php _e('Backup logs', 'backup-backup') ?>
        </div>
        <div class="f16 align-right">
          <a href="#" class="nlink hoverable download-backup-log-url uncensored" download="backup-logs.txt">
            <?php _e('Download logs', 'backup-backup') ?>
          </a>
        </div>
        <div class="log-wrapper">
          <pre></pre>
          <div class="f14 semibold">
              <?php echo $downloadLogNote ?>
          </div>
        </div>

    </div>
  </div>
</div>
