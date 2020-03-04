<?php

if(!isset($_SESSION['admin'])){
    echo '<script language="javascript">alert
    ("Maaf Anda Harus Login dulu!");document.location="login";</script>';
}

?>