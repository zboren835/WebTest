<?php
    $Account = $_POST["Account"];
    $Password = $_POST["Password"];
    $url = "http://127.0.0.1:5000/LoginApi/";
    $Data = array("account"=> $Account,"password"=> $Password);
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
                  alert('登入失敗 !!');
              </script>";
    }
    else if($data["Result"] == 1){
        echo "<script>
                location.href='System.html';
                alert('登入成功 !!');
            </script>";
    }
?>