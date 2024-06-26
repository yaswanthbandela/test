<?php

// Namespace
namespace BMI\Plugin\Checker;

// Use
use BMI\Plugin\BMI_Logger AS Logger;
use BMI\Plugin\Progress\BMI_ZipProgress AS Progress;
use BMI\Plugin\Backup_Migration_Plugin as BMP;

// Exit on direct access
if (!defined('ABSPATH')) exit;

/**
 * BMI_Checker
 */
class BMI_Checker {

  public $issues = array();
  public $progress;

  function __construct($progress = false) {

    $this->progress = $progress;

  }

  public function logs($log, $status = 'INFO') {

    if ($this->progress) {
      $this->progress->log($log, $status);
    }

  }

  public function is_enabled($func) {

    $disabled = explode(',', ini_get('disable_functions'));
    $isDisabled = in_array($func, $disabled);
    if (!$isDisabled && function_exists($func)) return true;
    else return false;

  }

  public function check_free_space($size, $hideRequire = false) {

    if (!$hideRequire) {
      $this->logs(__('Requires at least ', 'backup-backup') . $size . __(' bytes.', 'backup-backup') . ' [' . BMP::humanSize($size) . ']');
    }
    
    $maxTime = 60;
    if ($this->is_enabled('get_ini')) {
      $maxTime = @ini_get('max_execution_time');
      if ($this->is_enabled('ini_set')) @ini_set('max_execution_time', '259200');
    }
    
    $shouldUseDiskFreeSpaceIfAvailable = false;
    
    // If free disk space is larger lower than 50 GBs 
    // OR {
    //   If there is low execution time use space check, as the other may take too much time
    //   If size of the backup is larger than 3 GBs (as it may be to slow to check)
    // }
    if ($this->is_enabled('disk_free_space') && (disk_free_space(BMI_BACKUPS) < 1024*1024*1024*50 || ($size > 1024*1024*1024*3 && $maxTime <= 60)))
      $shouldUseDiskFreeSpaceIfAvailable = true;
    
    if ($this->is_enabled('disk_free_space') && intval(disk_free_space(BMI_BACKUPS)) > 100 && $shouldUseDiskFreeSpaceIfAvailable) {

      $this->logs(__('Disk free space function is not disabled - using it...', 'backup-backup'));
      $this->logs(__('Checking this path/partition: ', 'backup-backup') . BMI_BACKUPS);
      $free = intval(disk_free_space(BMI_BACKUPS));
      $this->logs(__('There is ', 'backup-backup') . number_format($free / 1024 / 1024, 2) . __(' MB free.', 'backup-backup') . ' [' . BMP::humanSize($free) . ']', 'SUCCESS');
      if ($free > $size) {
        $this->logs(__('Great! We have enough space.', 'backup-backup'), 'SUCCESS');
        return true;
      } else {
        return false;
      }

    } else {

      // Log
      $this->logs(__('Disk free space function is disabled by hosting.', 'backup-backup'));
      $this->logs(__('Using dummy file to check free space (it can take some time).', 'backup-backup'));

      // TMP Filename
      $file = BMI_BACKUPS . '/' . '.space_check';
      try {

        // 2 GB = (1024 * 1024 * 1024 * 2)
        $total = $size;

        $fh = fopen($file, 'w');
        $chunk = 1024;
        while ($size > 0) {
          fputs($fh, str_pad('', min($chunk, $size)));
          $size -= $chunk;
        }
        fclose($fh);

        $fs = filesize($file);
              @unlink($file);

        if ($fs > ($total - 100)) return true;
        else return false;

      } catch (\Exception $e) {

        Logger::error($e);
        if (file_exists($file)) unlink($file);

        return false;

      } catch (\Throwable $e) {

        Logger::error($e);
        if (file_exists($file)) unlink($file);

        return false;

      }

    }

  }

}
