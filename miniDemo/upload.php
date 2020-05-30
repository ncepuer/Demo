<?php
    if(!empty($_FILES['file'])){
        //获取扩展名
        $pathinfo=pathinfo($_FILES['file']['name']);
        $exename=strtolower($pathinfo['extension']);
        //检测扩展名
        if($exename!='png' && $exename!='jpg' && $exename!='gif'){
            echo('非法扩展名!');
        }
        //检测通过
        else{
            $imageSavePath='image/1.'.$exename;  //创建文件路径
            //移动上传文件到指定位置
            if(move_uploaded_file($_FILES['file']['tmp_name'], $imageSavePath)){
                echo '上传成功!';
            }
        }
    }
    else{
        echo '上传失败!';
    }
?>