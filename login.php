<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icon/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style/loginCSS.css" />
<title>登录</title>
</head>

<body>

<div id="bg">
	<img src="images/login.jpg" />
</div>
	
<div id="main">
	<h1>未闻花名</h1>
    <img src="images/huabian.png" />
    <form id="form" action="loginCheck.php" method="post">  
        <input type="text" name="username" placeholder="姓名	" />  
        <br />  
        <input type="password" name="password" placeholder="密码（6-14位字母、数字组合）" />  
        <br />  
        <input type="submit" name="submit" value="登录" />
    </form>
    
    <div id="error">
		<?php
    
        if(!empty($_GET['errno']))
        {
            $errno=$_GET['errno'];
            if($errno==1)
            {
                echo "<br/><font>您的密码错误</font>";
            }
            if($errno==2)
            {
                echo "<br/><font>用户名不存在</font>";
            }
        }
    
        ?>
    </div>
</div>

</body>
</html>
