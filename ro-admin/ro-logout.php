<?php
session_start();
session_destroy();
 echo '<script language="javascript">alert("Anda telah keluar"); document.location="../ro-index";</script>';
?>