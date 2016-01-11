<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="images/icon/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="style/indexCSS.css" />
<script type="text/javascript" src="js/move.js"></script>
<title>未闻花名</title>
</head>

<body>
<div id="header">
	<img id="banner" src="images/banner.jpg" />
	<div id="nav">
    	<ul>
        	<li class="active"><a href="#" onClick="active(this);">首页</a></li>
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
	<div id="carousel">
        <ul class="pic">
            <div class="prev"><img src="images/prev.png" /></div>
            <div class="next"><img src="images/next.png" /></div>
            <a class="mark_left" href="javascript:;"></a>
            <a class="mark_right" href="javascript:;"></a>
            <li style="z-index:1"><img src="images/carousel/carousel1.jpg" /></li>
            <li><img src="images/carousel/carousel2.jpg" /></li>
            <li><img src="images/carousel/carousel3.jpg" /></li>
    	</ul>
    </div>
    <div id="album">
    	<div class="heading">
        	<img src="images/icon/leftLine.png" />
            <img src="images/icon/rightLine.png" />
            <h1>精选图集</h1>
        </div>
        <div id="albumMain">
        	<ul>
            	<li>
                	<a href="#"><img src="images/album/album1.jpg" /></a>
                	<h1><a href="#">《花痴了》</a></h1>
                    <p><a href="#">上传者：阿尔</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
                <li>
                	<a href="#"><img src="images/album/album2.jpg" /></a>
                	<h1><a href="#">《Flowers》</a></h1>
                    <p><a href="#">上传者：苏格拉</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
                <li>
                	<a href="#"><img src="images/album/album3.jpg" /></a>
                	<h1><a href="#">《捧花》</a></h1>
                    <p><a href="#">上传者：紫萱</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
                <li>
                	<a href="#"><img src="images/album/album4.jpg" /></a>
                	<h1><a href="#">《多多多肉肉肉》</a></h1>
                    <p><a href="#">上传者:小花匠</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
                <li>
                	<a href="#"><img src="images/album/album5.jpg" /></a>
                	<h1><a href="#">《独》</a></h1>
                    <p><a href="#">上传者：莫愁</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
                <li>
                	<a href="#"><img src="images/album/album6.jpg" /></a>
                	<h1><a href="#">《花花世界》</a></h1>
                    <p><a href="#">上传者：波拉拉</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
                <li>
                	<a href="#"><img src="images/album/album7.jpg" /></a>
                	<h1><a href="#">《Beautiful》</a></h1>
                    <p><a href="#">上传者：紫萱</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
                <li>
                	<a href="#"><img src="images/album/album8.jpg" /></a>
                	<h1><a href="#">《花吃了那女孩》</a></h1>
                    <p><a href="#">上传者：仙人掌</a></p>
                    <a href="#"><img src="images/icon/view.png" style="width:16px;height:12px;" /></a>12&nbsp;
                    <a href="#"><img src="images/icon/support.png" style="width:13px;height:11px;" /></a>23
                </li>
            </ul>
        </div>
    </div>
    <div id="baike">
    	<div class="heading">
        	<img src="images/icon/leftLine.png" />
            <img src="images/icon/rightLine.png" />
            <h1>花卉百科</h1>
        </div>
        <div id="baikeMain">
        	<ul>
            	<li>
                	<div class="content">
                		<a href="#"><img src="images/baike/蜡梅.JPG" /></a>
                        <div class="intro">
                            <h1><a href="#">蜡梅</a></h1>
                            <p><a href="#">蜡梅（学名： Chimonanthus praecox (Linn.) Link （《Flora of China》）），中文别名：金梅、腊梅、蜡花、黄梅花。蜡梅科蜡梅属，落叶灌木，常丛生...</a></p>
                        </div>
                    </div>
                </li>
                <li>
                	<div class="content">
                		<a href="#"><img src="images/baike/百合.JPG" /></a>
                        <div class="intro">
                            <h1><a href="#">百合</a></h1>
                            <p><a href="#">百合，学名（Lilium brownii var. viridulum Baker）又名强蜀、番韭、山丹、倒仙、重迈、中庭、摩罗、重箱、中逢花、百合蒜、大师傅蒜、蒜脑薯、夜合花等...</a></p>
                        </div>
                    </div>
                </li>
                <li>
                	<div class="content">
                		<a href="#"><img src="images/baike/牡丹.JPG" /></a>
                        <div class="intro">
                            <h1><a href="#">牡丹</a></h1>
                            <p><a href="#">牡丹（拉丁学名：Paeonia suffruticosa Andr.）是毛茛科、芍药属植物，为多年生落叶小灌木。花色泽艳丽，玉笑珠香，风流潇洒，富丽堂皇，素有“花中之王”的美誉...</a></p>
                        </div>
                    </div>
                </li>
                <li>
                	<div class="content">
                		<a href="#"><img src="images/baike/向日葵.JPG" /></a>
                        <div class="intro">
                            <h1><a href="#">向日葵</a></h1>
                            <p><a href="#">向日葵,拉丁文（Helianthus annuus）属向日葵族，一年生本，高1～3.5米。茎直立，圆形多棱角，质硬被白色粗硬毛。广卵形的叶片通常互生，先端锐突或渐尖...</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="rizhi">
    	<div class="heading">
        	<img src="images/icon/leftLine.png" />
            <img src="images/icon/rightLine.png" />
            <h1>热门日志</h1>
        </div>
        <div id="rizhiMain">
        	<ul>
            	<li>
                	<div class="rizhiLeft">
                    	<img src="images/rizhi/rizhi1.jpg" />
                    </div>
                	<div class="rizhiRight">
                    	<a href="#"><h1>《五角星开出第一朵花》</h1></a>
                        <div>
                        	<img class="head" src="images/icon/head1.png" />
                            <a href="#">奥利奥</a>
                            <span>2015-12-24</span>
                        	<img class="view" src="images/icon/view.png" />12
                            <img class="support" src="images/icon/support.png" />23
                        </div>
                        <p>前年入秋时，我在我家附近，偶然发现了一棵五星花的苗，我不由得十分惊喜。记得前些年，我家曾种过这种花，鲜红鲜红的，就像一颗颗灿烂的小红星点缀在绿叶之中，十分好看。</p>
						<p>我把五星花苗小心翼翼的移植到盆里，并且在花盆里横竖扎了几根竹子。过了几天，花苗竟长到了将近1尺高，翠绿的嫩藤向四面伸展开，真逼人喜爱。我便在盆里插了几根竹子，为了让嫩藤更加展现她的英姿。又过了几天...</p>
                    </div>
				</li>
            	<li>
                	<div class="rizhiLeft">
                    	<img src="images/rizhi/rizhi2.png" />
                    </div>
                	<div class="rizhiRight">
                    	<a href="#"><h1>《秋日的爬山虎》</h1></a>
                        <div>
                        	<img class="head" src="images/icon/head2.png" />
                            <a href="#">灰原哀</a>
                            <span>2015-12-24</span>
                        	<img class="view" src="images/icon/view.png" />12
                            <img class="support" src="images/icon/support.png" />23
                        </div>
                        <p>中秋节一过，大院对面的的铁栅栏上的浓浓密密的爬山虎变红了，在阳光的照射下，像一团焚烧的火焰，热烈而又豪放。</p>
						<p>在每一年瑟瑟的秋风中，大院里的各种花卉渐渐地谢了，小草尽管还有绿色，可是已没有了精气神，好像被秋霜按在了地上。唯有爬山虎，在秋风里唱响漂亮，几乎是一夜秋霜今后，它改变了以前密密丛丛的绿色的身姿，不断的改换色彩，悠然之间便红了、火了...</p>
                    </div>
				</li>
                <li>
                	<div class="rizhiLeft">
                    	<img src="images/rizhi/rizhi3.png" />
                    </div>
                	<div class="rizhiRight">
                    	<a href="#"><h1>《荷花的美》</h1></a>
                        <div>
                        	<img class="head" src="images/icon/head3.png" />
                            <a href="#">三井少爷</a>
                            <span>2015-12-24</span>
                        	<img class="view" src="images/icon/view.png" />12
                            <img class="support" src="images/icon/support.png" />23
                        </div>
                        <p>发区的马路一边，有一大片荷塘，荷塘里的荷花大朵大朵的，讨人喜欢。我走在田埂上，田埂上都是旺盛的杂草，田埂间有水沟，流动的都是浑浊的臭水。杂乱无章的臭水沟，在荷塘间弯曲，日夜灌溉荷塘，每时每刻喂食荷花。</p>
						<p>我大概看了一下，臭水是邻近众多的商品房地下流动来的污水，水泥路下，荷塘上，处处堆积臭哄哄的垃圾。在这么的环境中，在这么的臭水浸泡的污泥里...</p>
                    </div>
				</li>
                <li>
                	<div class="rizhiLeft">
                    	<img src="images/rizhi/rizhi4.png" />
                    </div>
                	<div class="rizhiRight">
                    	<a href="#"><h1>《亲戚家的吊兰》</h1></a>
                        <div>
                        	<img class="head" src="images/icon/head4.png" />
                            <a href="#">花儿与少年</a>
                            <span>2015-12-24</span>
                        	<img class="view" src="images/icon/view.png" />12
                            <img class="support" src="images/icon/support.png" />23
                        </div>
                        <p>人的爱好就是不一样啊，今天去一远方的亲戚家，发现，他的家里也养植物，但是只有一种，就是吊兰。客厅餐厅卧室和阳台上摆放着一盆盆郁郁葱葱的吊兰，清新雅致，令人赏心悦目。。我好奇的问他，他说：好养啊。</p>
						<p>吊兰的叶片层层叠叠，向四周舒展着，并微微向下悬垂。微风吹来，仿佛是朵朵绽开的烟花。金边吊兰的绿叶边缘两侧镶有黄白色的条纹，纯绿叶吊兰叶子全都是绿色的...</p>
                    </div>
				</li>
            </ul>
        </div>
    </div>

</div>




<div id="footer">
	<div>
    	<h1>关于我们</h1>
        <p>养花，是一种生活的格调。纵使工作繁忙，也别忘了抽出一点点时间来养花赏花。</p>
        <p>在“未闻花名”，有专业的摄影师提供精美的花卉图片，也有专业的养花人向你传授养花秘诀，最重要的，他们都是花卉爱好者。</p>
        <p>加入未闻花名，从来都不晚。</p>
    </div>
    <div>
    	<ul>
            <li><a href="#">加入我们</a></li>
            <li><a href="#">友情链接</a></li>
            <li><a href="#">意见反馈</a></li>
        </ul>
    </div>
</div>

<script src="js/indexJS.js" type="text/javascript"></script>
</body>
</html>
