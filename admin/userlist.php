<?php

include("../inc/header.php");
header("context-type:text/html;charset:utf-8");
include("../inc/mysql_conn.php");
include("../class/Common.php");

//del action
if(@$_GET["action"] == "del" && !empty($_GET["id"])){

    $delsql = "delete from Customer where ID=".$_GET["id"];
    //echo $delsql;
    $delresult = mysqli_query($dbc,$delsql);
    if(!$delresult){
        echo "删除数据出错".mysqli_errno($dbc);
    }else{
        $common = new Common();
        $common->alertMsg("删除成功","userlist.php");
        //mysqli_close($dbc);
    }
}

$sql = "Select * from Customer";

$result = mysqli_query($dbc, $sql);

?>

<table>
    <tr>
        <td>编号</td>
        <td>用户名</td>
        <td>密码</td>
        <td>操作</td>
    </tr>
    <?php
    while($rows = mysqli_fetch_array($result, MYSQL_NUM)){
    ?>
    <tr>
        <td><?php echo $rows[0];?></td>
        <td><?php echo $rows[1];?></td>
        <td><?php echo $rows[2];?></td>
        <td>
            <a href="userlist.php?action=del&id=<?php echo $rows[0];?>" onclick="return confirm('Are you sure delete this?')">删除</a>&nbsp;
            <a href="useredit.php?id=<?php echo $rows[0];?>">编辑</a>
        </td>
    </tr>
    <?php
    }
    mysqli_close($dbc);
    ?>
</table>
<?php
include("../inc/footer.html");
?>