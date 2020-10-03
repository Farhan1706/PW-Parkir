<?php
class parkir{
 public $link='';
 function __construct($lahan1,$lahan2,$lahan3,$lahan4,$lahan5,$lahan6){
  $this->connect();
  $this->storeInDB($lahan1,$lahan2,$lahan3,$lahan4,$lahan5,$lahan6);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Koneksi Gagal');
  mysqli_select_db($this->link,'parkir') or die('Koneksi Gagal');
 }
 
 function storeInDB($lahan1,$lahan2,$lahan3,$lahan4,$lahan5,$lahan6){
  $query = "update status set set lahan_1='".$lahan1."',lahan_2='".$lahan2."',lahan_3='".$lahan3."',lahan_4='".$lahan4."',lahan_5='".$lahan5."',lahan_6='".$lahan6."' where bawaan='nodel'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['lahan_1'] != '' &  $_GET['lahan_2'] != '' &  $_GET['lahan_3'] != '' &  $_GET['lahan_4'] != '' &  $_GET['lahan_5'] != '' &  $_GET['lahan_6'] != ''){
 $Storeparkir=new parkir($_GET['lahan_1'],$_GET['lahan_2'],$_GET['lahan_3'],$_GET['lahan_4'],$_GET['lahan_5'],$_GET['lahan_6']);
}


?>