<?php
include("connect.php");
//echo $_POST['urname'];
//Wecho $_POST['pass'];
if(isset($_POST['urname'])&&isset($_POST['pass'])){
    $sql = "SELECT COUNT(id) AS aid FROM user WHERE urname = '".$_POST['urname']."' 
    AND password = '".MD5($_POST['pass'])."'";

    echo $sql;
}else{

}
?>