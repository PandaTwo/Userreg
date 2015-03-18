<?php
include("inc/header.php");
?>
    <div style="width: 1000px;">
        <form action="class/register.class.php" onsubmit="return validate_input();" method="post">
            <div style="width: 950px;">
                <table style="margin: 0 auto;width: 400px;height: 260px;text-align: center;">
                    <tr>
                        <Td colspan="2" style="font-size: 18px;font-weight: bold;">用户注册</Td>
                    </tr>
                    <Tr>
                        <td>用户名:</td>
                        <td><input type="text" value="" id="username" name="username"></td>
                    </Tr>
                    <Tr>
                        <td>密码:</td>
                        <td><input type="password" value="" id="pwd" name="pwd"></td>
                    </Tr>
                    <Tr>
                        <td>重复密码:</td>
                        <td><input type="password" value="" id="pwd1" name="pwd1"></td>
                    </Tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="注册"/>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
<?php
include("inc/footer.html")
?>
<Script>
    function validate_input(){
        var user_name = $("#username").val();
        var pwd =$("#pwd").val();
        var pwd1 =$("#pwd1").val();
        if(user_name == ""){
            alert("请输入用户名.");
            return false;
        }
        if(pwd == "" || pwd1 == ""){
            alert("请输入密码");
            return false;
        }
        if(pwd!=pwd1){
            alert("两次输入的密码不一致。");
            return false;
        }
        return true;
    }
</Script>