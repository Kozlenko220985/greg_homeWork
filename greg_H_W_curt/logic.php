<?php


function is_img($ffname)
{
    $farr = explode('.', $ffname);
    $ftypearr = array('jpg', 'jpeg', 'png');
    if (in_array($farr[count($farr) - 1], $ftypearr)) {
        return true;
    } else {
        return false;
    }
}

$uploads_dir = 'img/';

if (isset($_POST['input']) && isset($_FILES['file'])) {

    $ferror = $_FILES["file"]["error"];
    if ($ferror == 0) {
        $tmp_name = $_FILES["file"]["tmp_name"];
        $name = basename($_FILES["file"]["name"]);
        if (is_img($name)) {
            move_uploaded_file($tmp_name, "$uploads_dir"."$name");
//            echo $name . ' is uploaded';
        } else {
            echo 'Invalid file tipe. ' . $name . ' is not image.';
        }
    } else {
        echo 'Not uploaded. Error: ' . $ferror;
    }

    $handle_w = fopen('info.txt', 'a+');
    $arr = $_POST['input'];
    $arr['path'] = "$uploads_dir"."$name";
    foreach ($arr as $item => $value){
       $arr[$item] = htmlspecialchars(strip_tags(trim($value)));
    }

    if (!empty($arr)) {
        flock($handle_w,LOCK_EX);
        fwrite($handle_w, json_encode($arr) . PHP_EOL);
        flock($handle_w,LOCK_UN);
        fclose($handle_w);
    } else {
        echo "Please fill in all required fields.";
    }
}