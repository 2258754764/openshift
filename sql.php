<?php
function button_sql_query()
{
echo "function query ";
    $str=file_get_contents("php://input");

    $q=$_GET["q"];


    echo $q;
  //  $url=$_GET["action"];
//    $url=$str;
//    $url="http://www.baidu.com";
    $url=$q;
//  echo $url;
    $html=file_get_contents($url);
    echo $html;
}
//if($_GET["action"]=="query")
    if(true)
    {
    button_sql_query();
    echo "ok query";
   // $url='http://www.baidu.com';
   // $html=file_get_contents($url);
  //  echo $html;
    }
?>
