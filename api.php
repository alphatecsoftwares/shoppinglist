<?php
session_start();
// $list_items=array();
$task=$_POST['task'];
if($task=="add_item"){
    $new_item_list=json_decode($_POST['encodedList']);
    add_item($new_item_list);
}
else if ($task=="delete"){
    $item=$_POST['item'];
    delete_item($item);

}else if($task=="modify"){
    $pname=$_POST['pname'];
    $new_name=$_POST['new_item'];
    modify_item($new_name,$pname);
}

function modify_item($new_item,$p_item){
    $array=$_SESSION['items'];
    foreach ($array as $key => $value) {
        if($value===$p_item){
            $array[$key]=$new_item;
        }
    }
    $_SESSION['items']=$array;
    print_r(json_encode($_SESSION['items']));
}
function add_item($new_item_list){
    $_SESSION['items']=array();
    foreach ($new_item_list as $item) {
    array_push($_SESSION['items'],$item);
    }
    print_r(json_encode($_SESSION['items']));
}

function delete_item($item){
    $new_array=array();
    $array=$_SESSION['items'];
    foreach ($array as $key => $value) {
        if($value!==$item){
            array_push($new_array,$array[$key]);
        }
    }
    // $array = array_diff($array, array($item));
    $_SESSION['items']=$new_array;
    print_r(json_encode($array));

}
?>
