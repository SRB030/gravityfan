<?php
      set_error_handler('err_handler');
               function err_handler($errno, $errmsg, $filename, $linenum) {
                  $date = date('Y-m-d H:i:s (T)');
               $f = fopen('errors.txt', 'a');
             if (!empty($f)) {
           $filename  =str_replace($_SERVER['DOCUMENT_ROOT'],'',$filename);
          $err  = "$errmsg = $filename = $linenum\logs\godlogs.txt";
     fwrite($f, $err);
    fclose($f);
  }
}
?>
