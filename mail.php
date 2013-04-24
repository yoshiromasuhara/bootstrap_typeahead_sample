<?php 
    //レスポンス
    $response = array();

    //検索文字列パラメータ
    $searchStr=@$_GET["q"];
    if($searchStr!=""){
    
        //メールアドレス一覧
        $mails[]="test1@yoshi.com";
        $mails[]="sample1@yoshi.com";
        $mails[]="dummy1@yoshi.com";
        $mails[]="test2@yoshi.com";
        $mails[]="sample2@yoshi.com";
        $mails[]="dummy2@yoshi.com";
        $mails[]="test3@yoshi.com";
        $mails[]="sample3@yoshi.com";
        $mails[]="dummy3@yoshi.com";
        
        //検索文字列が含まれているアドレスを戻す
        foreach ($mails as $mail) {
            if(strpos($mail,$searchStr)!==false){
                $response[]=$mail;
            }
        }
    }
    //json形式で戻す
    echo json_encode($response);
?>