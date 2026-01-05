<?php
    $NewName = $_POST["NewName"];
    $NewAccount = $_POST["NewAccount"];
    $NewPassword = $_POST["NewPassword"];

    $url = "http://127.0.0.1:5000/RegisterApi/";
    $Data = array("name"=> $NewName,"account"=> $NewAccount,"password"=> $NewPassword);
    $JsonData = json_encode($Data);
    $options = array(
        'http' => array(
            'header' => "Content-type: application/json; charset=utf-8",
            'method' => 'POST',
            'content'=> $JsonData
        ),
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $data = json_decode($result, true);
    if($data["Result"] == 0){
        echo "<script>
                  location.href='Login.html';
                  alert('註冊成功 !!');
              </script>";
    }
    else if($data["Result"] == 1){
        echo "<script>
                location.href='Register.html';
                alert('註冊失敗 !!');
            </script>";
    }
?>