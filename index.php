<?php
include("inc/header.php");
?>


    <br>
    <div style="width: 900px;height: 500px;margin: 0 auto;">
        <h1 style="font-size: 24px;">首页</h1>

        <p>欢迎来到PHP的简单留言版，你可以登录或者注册。请点击下面的链接.</p>
        <?php
        session_start();
        if (!isset($_SESSION["username"])) {
            ?>
            <a href="login.php">登录</a>
            <br><br>
            <a href="register.php">注册</a><br>
        <?php } else { ?>

            欢迎您，会员: <?php echo $_SESSION["username"] ?>,你可以选择发表留言，或<a href="logout.php">退出</a>
        <?php } ?>

    </div>
    <div>

    </div>
<?php
include("inc/footer.html");
?>