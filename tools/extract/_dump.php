<?php
$o=[];
foreach(["seoul","gyeonggi","incheon"] as $f){
  $s=require $argv[1]."/$f.php";
  $o[$f]=["sido"=>$s["sido"],"gu"=>[]];
  foreach($s["gu"] as $row){ $meta=array_shift($row); $o[$f]["gu"][]=["meta"=>$meta,"dongs"=>$row]; }
}
echo json_encode($o,JSON_UNESCAPED_UNICODE);