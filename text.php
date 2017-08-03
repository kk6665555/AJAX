<?php
//    $req = $_SERVER;
//    Foreach($req as $key => $value){
//     echo "{$key} => {$value} <br/>";
//
//     }
    $agent = $_SERVER['HTTP_USER_AGENT'];
    if($agent == "Text"){
    echo "Hellow,Text";
    }else if (strpos($agent,'Chrome') != false){
    echo "Hellow,Chrome";
    }else{
    echo "Hellow,Brower";
    }
?>