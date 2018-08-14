<?PHP
include "config.php";
$s = $_SERVER['QUERY_STRING'];

if ($s==null) {echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
    <title>匿网址 - 隐藏推,广网脚本匿名所有外部链接与niurl.com | 免费隐藏引荐服务！</title>
    <meta name=\"description\" content=\"匿名网站或论坛用匿名者脚本您的所有外部链接。隐藏引荐服务为您提供了隐藏您的访问者推荐人，从被视为其他网站的安全性！我们的免费匿名链接服务使您能够以匿名方式链接到网站，同时隐藏自己的身份。通过这种方式，你可以保持您的网站的保密网。niurl.com\"/>
<meta name=\"keywords\" content=\"外部链接，匿名所有外部链接，链接匿名工具，匿名工具，隐藏引荐，匿名重定向，匿名到网站，隐藏你的网址，链接匿名工具的匿名链接，重定向链接，隐藏链接，URL匿名工具，化名冲浪，重定向URL，隐藏网址，匿名，链接，URL，重定向，易重定向，免费derefer，dereferer服务，保护URL，保护环节，重定向脚本，外部URL，论坛，董事会，脚本，域，外部，匿名一个链接,\"/>
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"脚本匿名所有外部链接与Niurl.com | 免费隐藏引荐服务！\"/>
    <meta property=\"og:description\" content=\"匿名网站或论坛用匿名者脚本您的所有外部链接。隐藏引荐服务为您提供了隐藏您的访问者推荐人，从被视为其他网站的安全性！我们的免费匿名链接服务使您能够以匿名方式链接到网站，同时隐藏自己的身份。通过这种方式，你可以保持您的网站的保密网www。\" />
    <meta property=\"og:url\" content=\"http://www.niurl.com\" />
    <meta property=\"og:site_name\" content=\"脚本匿名所有外部链接与Niurl.com | 免费隐藏引荐服务！\" />
    <meta property=\"og:locale\" content=\"zh-cn\" />
    <meta http-equiv=\"content-language\" content=\"zh-cn\"/>
    <meta name=\"language\" content=\"zh-cn\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />
	<script type=\"text/javascript\" src=\"js/anonymizerTool.js\"></script>
</head>

	
<body>
	<div id=\"container_header\">
		<div id=\"header\">
		  <div id=\"ano_logo\">
            <img src=\"images/logo.png\" alt=\"http:/$url\" title=\"匿网址\"/>
          </div>
          <div class=\"clear_ano\"></div>
          <div id=\"modernbricksmenu\">
            <ul class=\"my-menu\">
              <li id=\"current\"><a href=\"http://$url/\" title=\"首页\">首页</a></li>
			  <li><a href=\"api.php\" title=\"开放API\">开放API</a></li>
			  <li><a href=\"#\" title=\"站长工具\">站长工具</a></li>
			  <li><a href=\"details.php\" title=\"支持文档\">支持文档</a></li>
			  <li><a href=\"http://www.iesay.com\" title=\"主题之家\">主题之家</a></li>
			  <li><a href=\"http://www.iesay.com\" title=\"本站博客\"target=\"_blank\">本站博客</a></li>                                </ul>
          </div>
		  <div id=\"share-buttons\">
		  <a target=\"_blank\" href=\"http://www.facebook.com/share.php?u=http://www.iesay.com\" title=\"分享到臉書！\">
<i class=\"share_icon icon-facebook-squared\"></i></a>
          <a target=\"_blank\" href=\"http://twitter.com/home/?status=http://www.iesay.com\" title=\"分享到維特！\">
<i class=\"share_icon icon-twitter-squared\"></i></a>
          <a href=\"http://v.t.qq.com/share/share.php?url=http://www.iesay.com&amp;title=$sitename &appkey=2b2709f7ce4641f7a6aaab675d868850\" target=\"_blank\" rel=\"nofollow\" title=\"分享到腾讯微博\"><i class=\"share_icon icon-weibo\"></i></a>
		  <a target=\"_blank\" rel=\"nofollow\" href=\"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http://www.iesay.com&title=$sitename&desc=&summary=&site=\" class=\"qq-share\" title=\"QQ空间\"><i class=\"share_icon icon-qq\"></i></a>
		  <a rel=\"nofollow\" href=\"javascript:window.open('http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(document.location.href)+'&amp;title='+encodeURIComponent(document.title));void(0)\"><i class=\"share_icon icon-renren\"></i></a>
           </div>
	</div>			
		
	<div id=\"page\">
		<div id=\"content\">
			<div class=\"sub_content\">
			<h1>隐藏任何外链网址 - niurl.com</h1>
            <div class=\"paypal\">
            <a target=\"_blank\" href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=99839@163.com&lc=GB&item_name=donate me&amount=5&currency_code=USD&no_note=0&bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest\">
            <img src=\"https://www.anonymiz.com/images/paypal.png\"/></a>
			</div>
					
			<div class=\"nav_symbols\">
			<div class=\"details_link\">
                <div class=\"detail_link_content\">
					<a href=\"#singleLink\"><i class=\"zone_fa icon-link\"></i></a><br />
					<a class=\"details_text\" href=\"#singleLink\">生成单个匿名网址</a>
				</div>
                </div>
				<div class=\"details_link\">
                <div class=\"detail_link_content\">
					<a href=\"#multiLink\"><i class=\"zone_fa icon-link\"></i></a><br />
					<a class=\"details_text\" href=\"#multiLink\">整站生成匿名网址</a>
				</div>
                </div>
				<div class=\"details_link\">
                <div class=\"detail_link_content\">
					<a href=\"#info\"><i class=\"zone_fa icon-link\"></i></a><br />
					<a class=\"details_text\" href=\"#info\">为什么使用我们的匿名服务？</a>
				</div>
			</div>
			<div class=\"clearer\"></div>
				
			 <div class=\"ad\">				
             <a href=\"https://s.click.taobao.com/t?e=m%3D2%26s%3D3kojDv4HbLIcQipKwQzePCperVdZeJviEViQ0P1Vf2kguMN8XjClAqeY3HIcyl2M9HN0xZUglNMp%2FebutesI17f5e%2FfIh0h%2B23MP8O4cBqEkKocIEXnMHudn1BbglxZYxUhy8exlzcpAFEHVckI7b93srg%2FL%2FeD3keUEnoKELDlWYetMiZZgV%2BSx6OrKqagyklzFeKMz7Cc%2FGaP4xw11%2FizZhcM3IxQ\" target=\"_blank\"><img src=\"/images/729-90.jpg\" alt=\"阿里云主机\" width=\"728\" height=\"90\"></a>
			</div>
			
			<h2 id=\"singleLink\">输入你要匿名跳转的网址，然后点 \"生成网址\".</h2>
			<p>如果你想匿名使用单一链接到所有外部链接，我们可以生成地址，为您自动处理这个链接，生成标准网址、html格式的网址和论坛ubb格式的网址。</p>
			<form name=\"theform\" onSubmit=\"return go();\" action=\"#\">
				<fieldset>
					<input class=\"anonym_input ano_input2\" type=\"text\" maxlength=\"255\" name=\"nick\" value=\"http://\" />
					<input class=\"anonym_button anonym_FormSubmit\" type=\"button\" onClick=javascript:go() value=\"生成网址\" /><br /><br />
					<h3>生成的匿名网址:</h3>
					<textarea class=\"ano_textarea2 anonym_textarea\" name=\"thelink1\" wrap=\"soft\" cols=\"66\" rows=\"1\" style=\"height: 30px; overflow: auto;\"></textarea><br />
					<h3>生成的匿名网址 HTML 格式:</h3>
					<textarea class=\"ano_textarea2 anonym_textarea_big\" name=\"thelink2\" wrap=\"soft\" cols=\"66\" rows=\"2\" style=\"height: 50px; overflow: auto;\"></textarea><br />
					<h3>生成的匿名网址 UBB 格式:</h3>

					<textarea class=\"ano_textarea2 anonym_textarea_big\" name=\"thelink3\" wrap=\"soft\" cols=\"66\" rows=\"2\" style=\"height: 50px; overflow: auto;\"></textarea><br />
			
				</fieldset>
			</form>
			
			<h2 id=\"multiLink\">页面批量替换</h2>
			
			<form name=\"displayResult\" onsubmit=\"return false;\" action=\"#\">
			<p>如果你想匿名在您的主页，网上论坛，或留言板的所有外部链接，我们可以生成一个脚本，为您自动处理这个对所有网页。输入哪个环节不应被重定向的网站，以niurl.com（比如你自己），点击“生成”按钮。</p>
				<fieldset class=\"embeddingData\">
					<label for=\"embeddingCode\" accesskey=\"2\" style=\"padding-top: 4px; display: block;\">复制下面的代码到页面(在 &lt;/body&gt; 标签之前)。 </label>
			
					<textarea class=\"ano_textarea anonym_textarea\" cols=\"66\" rows=\"8\" id=\"embeddingCode\" name=\"embeddingCode\"></textarea>
					<input class=\"anonym_button anonym_FormSubmit\" type=\"button\" name=\"markAll\" id=\"markAll\" value=\" 全选 \" onclick=\"document.displayResult.embeddingCode.select();\" />

				</fieldset>
			</form>
			
			<p>在页面中嵌入下列JS代码，批量隐藏页面中的网址来源。部分不需要匿名的网址可以在下面关键词配置.</p>
		
			<form name=\"anonymizerForm\" onsubmit=\"generateCode('anonymizerForm', 'embeddingCode'); return false;\" action=\"#\">
				<fieldset class=\"generationData\">
					<label for=\"keywordsInput\" accesskey=\"1\" style=\"padding-top: 4px; display: block;\">不需要匿名的域名 / 关键字 (多个用半角逗号分割: domain1.tld, domain2.tld, keyword1, ...):</label>
					<input type=\"text\" id=\"keywordsInput\" name=\"keywords\" class=\"ano_input anonym_input\" /><br />
					<input type=\"submit\" id=\"submitButton\" value=\"配置\" class=\"anonym_button anonym_FormSubmit\" />

			
				</fieldset>
			</form>
		
			<script type=\"text/javascript\">
			   generateCode(\"anonymizerForm\", \"embeddingCode\");
			</script>
			
			<h2 id=\"info\">使用 $sitename 隐藏网址来源</h2>
			<p>如果您直接链接到一个网站，那么该网站将能够轻松地跟踪哪些网站。</br>有很多网站不想把来源地址透露给目标网址，所以您需要隐藏链接，建立匿名联系.</br>你是从连接，基于一个简单的'引用'检查。但是，通过使用我们的链接匿名工具，所有流量将通过我们的服务器重定向和目标页面获取没有关于所谓的引荐信息。</br>
Niurl.com 正是这么做的：立即创建匿名联系。这项服务是免费的，不需要注册。</p>	
			<h3>使用引荐去除服务是很容易的：</h3>
			<a href=\"http://$url/?http://www.baidu.com\" target=\"_blank\">http://$url/?http://www.baidu.com</a> 产生一位不愿透露姓名的链接 www.baidu.com 这将阻止原始站点出现如提及页面的日志文件引荐。</br>
			这种方式将会匿名访问 <a href=\"http://www.baidu.com.com/\">百度网</a> 目标网址的只会统计到 $url.</p>
			<div class=\"clearer\"></div>

			</div>
		</div>
		
 <div class=\"ad\">				

			</div>
		
		</div><div id=\"footer\">

<!-- Begin footer columns //-->
  
 <div class=\"column1\">
 <h3>网站分析</h3>
      
  </div>
    
 <div class=\"column2\">
 <h3>站长工具</h3>
      
  </div>
  
 <div class=\"column3\">
 <h3>最近新闻</h3>
      
  </div>
  
 <div class=\"column4\">
 <h3>隐私声明</h3>
      
  </div>
  
 <div class=\"column4\">
 <h3>关于本站</h3>
      
  </div>

    
</div>
<div id=\"powered\">
  <span class=\"footer-alignleft\">niurl.com &copy; 2016 | Powered By <a href=\"http://www.niurl.com\">Niurl Network</a></span>
  <span class=\"footer-alignright\">Design by: <a href=\"http://www.niurl.com\" target=\"_blank\">Niurl</a></span>
  <div style=\"clear:both\"></div>
</div>
</body>
</html>"; }
else echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
	<meta http-equiv=\"refresh\" content=\"6; URL=$s\">
    <title>匿网址 - 隐藏推,广网脚本匿名所有外部链接与niurl.com | 免费隐藏引荐服务！</title>
    <meta name=\"description\" content=\"匿名网站或论坛用匿名者脚本您的所有外部链接。隐藏引荐服务为您提供了隐藏您的访问者推荐人，从被视为其他网站的安全性！我们的免费匿名链接服务使您能够以匿名方式链接到网站，同时隐藏自己的身份。通过这种方式，你可以保持您的网站的保密网。niurl.com\"/>
<meta name=\"keywords\" content=\"外部链接，匿名所有外部链接，链接匿名工具，匿名工具，隐藏引荐，匿名重定向，匿名到网站，隐藏你的网址，链接匿名工具的匿名链接，重定向链接，隐藏链接，URL匿名工具，化名冲浪，重定向URL，隐藏网址，匿名，链接，URL，重定向，易重定向，免费derefer，dereferer服务，保护URL，保护环节，重定向脚本，外部URL，论坛，董事会，脚本，域，外部，匿名一个链接,\"/>
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:title\" content=\"脚本匿名所有外部链接与Niurl.com | 免费隐藏引荐服务！\"/>
    <meta property=\"og:description\" content=\"匿名网站或论坛用匿名者脚本您的所有外部链接。隐藏引荐服务为您提供了隐藏您的访问者推荐人，从被视为其他网站的安全性！我们的免费匿名链接服务使您能够以匿名方式链接到网站，同时隐藏自己的身份。通过这种方式，你可以保持您的网站的保密网www。\" />
    <meta property=\"og:url\" content=\"http://www.niurl.com\" />
    <meta property=\"og:site_name\" content=\"脚本匿名所有外部链接与Niurl.com | 免费隐藏引荐服务！\" />
    <meta property=\"og:locale\" content=\"zh-cn\" />
    <meta http-equiv=\"content-language\" content=\"zh-cn\"/>
    <meta name=\"language\" content=\"zh-cn\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
	<link rel=\"stylesheet\" type=\"text/css\" href=\"style.css\" />
	<script type=\"text/javascript\" src=\"js/anonymizerTool.js\"></script>
    <script type=\"text/javascript\">var baseurl=\"http://www.niurl.com\"</script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src=\"http://libs.useso.com/js/jquery/2.0.0/jquery.min.js\"></script>
    <script src=\"js/jquery.countdown360.js\" type=\"text/javascript\" charset=\"utf-8\"></script>
</head>

<body>

<div id=\"container_header\">
		<div id=\"header\">
		  <div id=\"ano_logo\">
            <img src=\"images/logo.png\" alt=\"http://$url/\" title=\"http://$url/\"/>
          </div>
          <div class=\"clear_ano\"></div>
          <div id=\"modernbricksmenu\">
            <ul class=\"my-menu\">
              <li id=\"current\"><a href=\"http://$url/\" title=\"首页\">首页</a></li>
			  <li><a href=\"api.php\" title=\"开放API\">开放API</a></li>
			  <li><a href=\"#\" title=\"站长工具\">站长工具</a></li>
			  <li><a href=\"details.php\" title=\"支持文档\">支持文档</a></li>
			  <li><a href=\"http://www.iesay.com\" title=\"主题之家\">主题之家</a></li>
			  <li><a href=\"http://www.iesay.com\" title=\"本站博客\"target=\"_blank\">本站博客</a></li>                                </ul>
          </div>
		  <div id=\"share-buttons\">
		  <a target=\"_blank\" href=\"http://www.facebook.com/share.php?u=http://www.iesay.com\" title=\"分享到臉書！\">
<i class=\"share_icon icon-facebook-squared\"></i></a>
          <a target=\"_blank\" href=\"http://twitter.com/home/?status=http://www.iesay.com\" title=\"分享到維特！\">
<i class=\"share_icon icon-twitter-squared\"></i></a>
          <a href=\"http://v.t.qq.com/share/share.php?url=http://www.iesay.com&amp;title=$sitename &appkey=2b2709f7ce4641f7a6aaab675d868850\" target=\"_blank\" rel=\"nofollow\" title=\"分享到腾讯微博\"><i class=\"share_icon icon-weibo\"></i></a>
		  <a target=\"_blank\" rel=\"nofollow\" href=\"http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=http://www.iesay.com&title=$sitename&desc=&summary=&site=\" class=\"qq-share\" title=\"QQ空间\"><i class=\"share_icon icon-qq\"></i></a>
		  <a rel=\"nofollow\" href=\"javascript:window.open('http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(document.location.href)+'&amp;title='+encodeURIComponent(document.title));void(0)\"><i class=\"share_icon icon-renren\"></i></a>
           </div>
				
				</div>	
				
				<div id=\"page\">
<div id=\"content\" class=\"cnt\">
	   <div class=\"sub_content\">
<h1>niurl.com - 匿名链接到其它外部网站。</h1>

<div class=\"paypal\">
<a target=\"_blank\" href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=99839@163.com&lc=GB&item_name=donate me&amount=5&currency_code=USD&no_note=0&bn=PP-DonationsBF:btn_donateCC_LG.gif:NonHostedGuest\">
<img src=\"https://www.anonymiz.com/images/paypal.png\"/>
</a></div>
<center>
<div id=\"countdown\"></div>
		<p>请稍等，系统正在为您重新定向到...</br>
		Please wait while you're being redirected to ...<br />
		Espera mientras te redireccionamos a ...</p>
		
		<p id=\"url\" class=\"url_link\"><a href=\"$s\">$s</a></p>
<p><a href=\"$s\" class=\"nowaiting_botton\">不想等待？请点击此处</a>
		<a href=\"http://$url/\" style=\"line-height:18px\">Powered By [$sitename]</a></p>
		
		<div class=\"ad\">
			
		</center>
		
	</div>
<script type=\"text/javascript\" charset=\"utf-8\">
		 	var countdown =  $('#countdown').countdown360({
       	 	radius      : 60,
         	seconds     : 6,
         	fontColor   : '#FFFFFF',
         	autostart   : false,
         	onComplete  : function () { console.log('done') }
		   });
			countdown.start();
			console.log('countdown360 ',countdown);
		 	$(document).on('click','button',function(e){
		 		e.preventDefault();
		 		var type = $(this).attr('data-type');
		 		if(type === 'time-remaining')
		 		{
		 			var timeRemaining = countdown.getTimeRemaining();
		 			alert(timeRemaining);
		 		}
		 		else
		 		{
		 			var timeElapsed = countdown.getElapsedTime();
		 			alert(timeElapsed);
		 		}
		 	});
		  </script>
</div>
<div id=\"footer\">

<!-- Begin footer columns //-->
  
  <div class=\"column1\">
 <h3>网站分析</h3>
      
  </div>
    
 <div class=\"column2\">
 <h3>站长工具</h3>
      
  </div>
  
 <div class=\"column3\">
 <h3>最近新闻</h3>
      
  </div>
  
 <div class=\"column4\">
 <h3>隐私声明</h3>
      
  </div>
  
 <div class=\"column4\">
 <h3>关于本站</h3>
      
  </div>

    
</div>
<div id=\"powered\">
  <span class=\"footer-alignleft\">niurl.com &copy; 2016 | Powered By <a href=\"http://www.niurl.com\">Niurl Network</a></span>
  <span class=\"footer-alignright\">Design by: <a href=\"http://www.niurl.com\" target=\"_blank\">Niurl</a></span>
  <div style=\"clear:both\"></div>
</div>
 
</body>
</html>";
?>