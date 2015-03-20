<?php
include("inc/header.php");

?>
<form action="/class/login.class.php" method="post">
    <div style="">
        <table style="width: 650px;margin: 0 auto;">
            <tr>
                <td colspan="2" style="text-align: center;"><h1>用户登录</h1></td>
            </tr>
            <tr>
                <td style="text-align: right;">用户名：</td>
                <td>
                    <input type="text" name="username">

                </td>
            </tr>
            <tr>
                <td style="text-align: right;">密码：</td>
                <td>
                    <input type="text" name="pwd">

                </td>
            </tr>
            <tr>
                <td style="text-align: right;">验证码：</td>
                <td>
                    <input type="text" name="vcode" style="width: 60px;" maxlength="4">
                    <img src="/inc/vcode.php" id="vcode">
                </td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">
                    <input type="submit" value="登 录" style="margin: 5px 5px;">
                </td>
            </tr>
        </table>
    </div>
</form>
<script>
    $(function(){
        $("#vcode").bind("click",function(){
            this.src = "/inc/vcode.php?"+Math.random();
        })
    })
</script>
<?php
include("inc/footer.html");
?>