<head>
<meta charset="UTF-8">
</head>
<?php
include("connect.php");

$sql = "INSERT INTO `user` (`id`, `fname`, `lname`, `tel.`, `ur name`, `password`, `statuts`) 
VALUES (NULL, '". $_POST["fname"]."', '". $_POST["lname"]."', '". $_POST["tel"]."', '". $_POST["urname"]."', '".MD5($_POST["password"])."', '1');";
if($result = mysqli_query($conn , $sql)){
    ?>
    <script>
        alert("คุณได้บันทึกเรียบร้อยแล้ว");
        history.back();
    </script>
    <?php
     
}else{
    ?>
    <script>
        alert("คุณบันทึกไม่สำเร็จ");
        history.back();
    </script>
    <?php
}
?>
