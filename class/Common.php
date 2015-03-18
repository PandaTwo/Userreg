<?php
/**
 * Created by PhpStorm.
 * User: Dev01
 * Date: 15-3-18
 * Time: 上午11:47
 */

class Common {

    //弹出提示框
    function alertMsg($msg,$url=""){
        $appendurl = "";
        if(!empty($url)){
            $appendurl ="location.href='".$url."';";
        }
        echo "<script>alert('$msg');$appendurl</script>";
    }

}

?>