<?php
if($_POST['action']=='typer'){
    myfun();
}
function myfun(){
    $arr=array(1,2,3,4);
    $tel=json_encode($arr);
    echo $arr;
    
}

?>