<?php
    session_start();
    // $conn = mysqli_connect('localhost','root','3693','rehome');
    // $conn = mysqli_connect('localhost','root','1234','rehome');
    $conn = mysqli_connect('localhost','cathkid','dothome##3693','cathkid');
    $query = "delete from cart where userid='{$_SESSION['userId']}'";
    // echo $_POST['userid'];
    isset($_SESSION['userId']);
    var_dump($_SESSION);
    $result = mysqli_query($conn, $query);

    if($result) {
        echo "삭제되었습니다.";
    }else {
        echo "실패했습니다.";
    }
    header('Location:http://cathkid.dothome.co.kr/ReHome/member/cart.php');
?>