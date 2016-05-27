<?php
function escape($db,$s) {
  $retval = $s;
  if (get_magic_quotes_gpc()) {
      $reval = stripslashes($retval);
  }
  $retval = mysqli_real_escape_string($db,$retval);
      return $retval;
}
?>
