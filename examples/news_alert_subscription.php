<?php
$text = $_REQUEST['text'];
$level = getLevel($text);
if($level == 0){
  //Breaking news, Football, Athletics, Gossip
  $reply = "Safaricom:".PHP_EOL."1. Safaricom+".PHP_EOL."2.M-PESA";
  echo "CON ".$reply;
  exit;
}else{
  //get the input form the previous step
  $news = ['Breaking','Football','Athletics','Gossip'];
  if((trim($text) < 5)&&(trim($text)>0)){
    $reply = "You've subscribed to".$news[$text-1]."news";
  }elseif($text == 2){
    $reply = "We don't have such news but we'll keep you posted";
    //$reply = "The drug is invalid";
  }
  echo "END ".$reply;
}
//User dials the code and is requested to enter the drug verification
//code
//step 2 the code is compared to valid code and if valid gets valid Message
//end at this
function getLevel($text){
  //check if text is empty
  if(empty($text)){
    $level = 0;
  }else{
    $exploded_text = explode('*',$text);
    print_r($exploded_text);
    exit;
    $level = count($exploded_text);
  }
  return $level;
}
 ?>