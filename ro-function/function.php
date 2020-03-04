<?php
//All Function
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
function cek_angka($angka){
if(!preg_match("/^[0-9]*$/",$angka)){
$angka=true;
}else{
$angka=false;
}
return $angka;
}

function cek_alphabet($alphabet){
if(!preg_match("/^[a-zA-Z ]*$/",$alphabet)){
$alphabet=true;
}else{
$alphabet=false;
}
return $alphabet;
}
?>

