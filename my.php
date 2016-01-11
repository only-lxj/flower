<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icon/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style/myCSS.css" />
<title>我的账户</title>
</head>

<body>
<div id="header">
	<img id="banner" src="images/banner.jpg" />
	<div id="nav">
    	<ul>
        	<li class="active"><a id="index" href="#" onClick="active(this);">首页</a></li>
            <li><a href="#" onClick="active(this);">图集</a></li>
            <li><a href="#" onClick="active(this);">百科</a></li>
            <li><a href="#" onClick="active(this);">日志</a></li>
        </ul>
        <div id="info">
			<?php
            error_reporting(0);
            if($_GET['username'])
            {
                echo "Hi,&nbsp; <a id='username' href='javascript:;'>".$_GET['username']."</a>";
            }
            else
            {
                echo "<div id='login'><a href='login.php'><span>登录</span></a><a href='register.php'><span>注册</span></a></div>";
            }
            ?>
            
        </div>
        <div id="slide">
        	<ul>
            	<li></li>
                <li><a id="my" onClick="a1();">我的账户</a></li>
                <li><a id="write" onClick="a2();">上传文章</a></li>
                <li><a href='index.php'>退出登录</a></li>
            </ul>
        </div> 
    </div>
</div>

<div id="main">
    	
	<?php
    
        $username = $_GET['username'];
        if($username!=null||$username!='')
        {
            $conn=mysql_connect('localhost','root','');
            if(!$conn)
            {
                die("连接失败".mysql_errno());
            }
            mysql_query("set names utf8",$conn) or die(mysql_errno());
            mysql_select_db("flower",$conn) or die(mysql_errno());
            
            $sql="select * from article where username='$username' order by No desc";
            $res=mysql_query($sql,$conn);
            $arr = array();
            
            $count = 0;
            while($row=mysql_fetch_assoc($res))
            {
                $arr[$count] = $row;
                $count++;
                echo "<div class='content'><h1>《".$row['title']."》</h1>";
				echo "<p class='date'>".$row['date']."</p>";
                echo "<p class='text'>".$row['text']."</p></div>";
            }	
            if($arr==null)
            {
                echo "<div id='none'><img id='nothing' src='images/nothing.png' /><br/>没有内容？<a id='publish'>点击上传~</a></div>";
            }
            
            
            mysql_free_result($res);
            mysql_close($conn);
            
        }
    
    
    /*
        if(isset($arr)&&$arr != null)
        {
            for($i = $count-1; $i > -1; $i--){
                foreach($arr[$i] as $key => $value)
                {
                    echo $key.":".$value;
                    echo "<br/>";
                }
                echo "<br>";
            }
        }
    */
    ?>

</div>

<div id="footer">
	<ul>
        <li><a href="#">加入我们</a></li>
        <li><a href="#">友情链接</a></li>
        <li><a href="#">意见反馈</a></li>
    </ul>
</div>



<script src="js/myJS.js" type="text/javascript"></script>
</body>
</html>
