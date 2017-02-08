</section>
<?php
if (git_get_option('git_superfoot_b') && !G_is_mobile()) { ?>
<div id="footbar" style="border-top: 2px solid #8E44AD;"><ul>
<li><p class="first"><?php
    echo git_get_option('git_foottitle1'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent1'); ?></span></li>
<li><p class="second"><?php
    echo git_get_option('git_foottitle2'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent2'); ?></span></li>
<li><p class="third"><?php
    echo git_get_option('git_foottitle3'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent3'); ?></span></li>
<li><p class="fourth"><?php
    echo git_get_option('git_foottitle4'); ?></p><span max-width="220px"><?php
    echo git_get_option('git_footconent4'); ?></span></li>
</ul>
</div>
<?php
} ?>
<footer style="border-top: 1px solid ;background-image: url('<?php
echo esc_url( get_template_directory_uri() ); ?>/css/img/footbg.jpg'); background-repeat: repeat;" class="footer">
<div class="footer-inner"><div class="footer-copyright" align="center"><?php
if (git_get_option('git_footcode')) echo git_get_option('git_footcode'); ?> <span class="yunluocopyright">Theme by <a id="yunluo" href="http://googlo.me" title="乐趣公园" target="_blank" style="cursor:help;">云落</a> </span>
<!-- 若要删除版权请加乐趣公园(googlo.me)为全站友链，或者赞助乐趣公园(支付宝：sp91@qq.com 20元)，谢谢支持 -->Modified by <a id="yunluo" href="http://blog.qianc.me" title="乐趣公园" target="_blank" style="cursor:help;">祭夜</a><br><script>
    function secondToDate(second) {
        if (!second) {
            return 0;
        }
        var time = new Array(0, 0, 0, 0, 0);
        if (second >= 365 * 24 * 3600) {
            time[0] = parseInt(second / (365 * 24 * 3600));
            second %= 365 * 24 * 3600;
        }
        if (second >= 24 * 3600) {
            time[1] = parseInt(second / (24 * 3600));
            second %= 24 * 3600;
        }
        if (second >= 3600) {
            time[2] = parseInt(second / 3600);
            second %= 3600;
        }
        if (second >= 60) {
            time[3] = parseInt(second / 60);
            second %= 60;
        }
        if (second > 0) {
            time[4] = second;
        }
        return time;
    }</script><script type="text/javascript" language="javascript">
    function setTime() {
        var create_time = Math.round(new Date(Date.UTC(2016, 01, 01, 0, 0, 0)).getTime() / 1000);
        var timestamp = Math.round((new Date().getTime() + 8 * 60 * 60 * 1000) / 1000);
        currentTime = secondToDate((timestamp - create_time));
        currentTimeHtml = currentTime[0] + '年' + currentTime[1] + '天'
                + currentTime[2] + '时' + currentTime[3] + '分' + currentTime[4]
                + '秒';
        document.getElementById("htmer_time").innerHTML = currentTimeHtml;
    }    setInterval(setTime, 1000);</script>本站已运行：<span id="htmer_time" style="color: red;"></span>
<span class="trackcode pull-right"><?php
if (git_get_option('git_track')) echo git_get_option('git_track'); ?></span></div></div></footer>
<?php
if (git_get_option('git_copydialog_b') && is_singular()) echo '<script type="text/javascript">document.body.oncopy=function(){alert("复制成功！若要转载请务必保留原文链接，申明来源，谢谢合作！");}</script>'; ?>
<?php
if (git_get_option('git_topnav_b') && !G_is_mobile()) { ?>
<script type="text/Javascript">
$(function(){
	$('#nav-header').posfixed({
		distance : 0,
		pos : 'top',
		type : 'while',
		hide : false
	});
});
</script>
<?php
} ?>
<?php
if (git_get_option('git_snow_b')) { ?><script type="text/javascript">(function(a){a.fn.snow=function(d){var g=a('<div id="snowbox" />').css({position:"absolute","z-index":"9999",top:"-50px"}).html("&#10052;"),f=a(document).height(),b=a(document).width(),e={minSize:10,maxSize:20,newOn:1000,flakeColor:"#FFF"},d=a.extend({},e,d);var c=setInterval(function(){var l=Math.random()*b-100,j=0.5+Math.random(),h=d.minSize+Math.random()*d.maxSize,i=f-200,k=l-500+Math.random()*500,m=f*10+Math.random()*5000;g.clone().appendTo("body").css({left:l,opacity:j,"font-size":h,color:d.flakeColor}).animate({top:i,left:k,opacity:0.2},m,"linear",function(){a(this).remove()})},d.newOn)}})(jQuery);$(function(){$.fn.snow({minSize:5,maxSize:50,newOn:300})});
</script><?php
} ?>
<?php
if (git_get_option('git_copy_b') && is_singular()) echo '<script type="text/Javascript">document.oncontextmenu=function(e){return false;};document.onselectstart=function(e){return false;};</script><style>body{ -moz-user-select:none;}</style><SCRIPT LANGUAGE=javascript>if (top.location != self.location)top.location=self.location;</SCRIPT><noscript><iframe src=*.html></iframe></noscript>'; ?>
<?php
if (git_get_option('git_footercode')) echo git_get_option('git_footercode'); ?>
<?php
wp_footer();
global $dHasShare;
if ($dHasShare == true) {
    echo '<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="' . get_template_directory_uri() . '/js/share.js?v=89860593.js?cdnversion="+~(-new Date()/36e5)];</script>';
}
?>

<script type="text/javascript" src="<?php
echo esc_url( get_template_directory_uri() ); ?>/js/slider.js"></script>
<!--.浮动小人-->    
<script type="text/javascript">
<?php if(is_home()) echo 'var isindex=true;var title="";';else echo 'var isindex=false;var title="',  get_the_title(),'";'; ?>
<?php if((($display_name = wp_get_current_user()->display_name) != null)) echo 'var visitor="',$display_name,'";'; else if(isset($_COOKIE['comment_author_'.COOKIEHASH])) echo 'var visitor="',$_COOKIE['comment_author_'.COOKIEHASH],'";';else echo 'var visitor="游客";';echo "\n"; ?>
</script>
<script type="text/javascript" src="<?php
echo esc_url( get_template_directory_uri() ); ?>/js/spig.js"></script>
<style>
.spig {display:block;width:130px;height:170px;position:absolute;bottom: 300px;left:160px;z-index:9999;}
#messagexr{color :#191919;border: 1px solid #c4c4c4;background:#ddd;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;min-height:1em;padding:5px;top:-45px;position:absolute;text-align:center;width:auto !important;z-index:10000;-moz-box-shadow:0 0 15px #eeeeee;-webkit-box-shadow:0 0 15px #eeeeee;border-color:#eeeeee;box-shadow:0 0 15px #eeeeee;outline:none;}
.mumu{width:130px;height:170px;cursor: move;background:url(<?php
echo esc_url( get_template_directory_uri() ); ?>/images/spig.png) no-repeat;}
@media (max-width:560px){
    .spig{display: none;}
}
</style>
<div id="spig" class="spig">
    <div id="messagexr">加载中……</div>
    <div id="mumu" class="mumu"></div>
</div>
<span class="hitokoto" id="hitokoto" style="display:none">Loading...</span>
   <div id="hjsbox" style="display:none">
    </div>
<script>
        /*初始化一言*/
        setTimeout("getkoto()",1000);
        /*加载一言*/
        var t;
        function getkoto(){
            var hjs = document.createElement('script');
            hjs.setAttribute('id', 'hjs');
            hjs.setAttribute('src', 'http://api.hitokoto.us/rand?uid=3221&encode=jsc&fun=echokoto');
            document.getElementById("hjsbox").appendChild(hjs);
            t=setTimeout("getkoto()",2000);
        }
        /*输出一言*/
        function echokoto(result){
            var hc = eval(result);
            /*$("#hitokoto").fadeTo(300,0);*/
            document.getElementById("hitokoto").innerHTML = hc.hitokoto;
            /*$("#hitokoto").fadeTo(300,0.75);*/
        }
</script>
<!--.end浮动小人-->
<!--↓↓↓页面加载时间计算↓↓↓-->
<script>
function add(a, b) {
    var c, d, e;
    try {
        c = a.toString().split(".")[1].length;
    } catch (f) {
        c = 0;
    }
    try {
        d = b.toString().split(".")[1].length;
    } catch (f) {
        d = 0;
    }
    return e = Math.pow(10, Math.max(c, d)), (mul(a, e) + mul(b, e)) / e;
}
function sub(a, b) {
    var c, d, e;
    try {
        c = a.toString().split(".")[1].length;
    } catch (f) {
        c = 0;
    }
    try {
        d = b.toString().split(".")[1].length;
    } catch (f) {
        d = 0;
    }
    return e = Math.pow(10, Math.max(c, d)), (mul(a, e) - mul(b, e)) / e;
}
function mul(a, b) {
    var c = 0,
        d = a.toString(),
        e = b.toString();
    try {
        c += d.split(".")[1].length;
    } catch (f) {}
    try {
        c += e.split(".")[1].length;
    } catch (f) {}
    return Number(d.replace(".", "")) * Number(e.replace(".", "")) / Math.pow(10, c);
}
function div(a, b) {
    var c, d, e = 0,
        f = 0;
    try {
        e = a.toString().split(".")[1].length;
    } catch (g) {}
    try {
        f = b.toString().split(".")[1].length;
    } catch (g) {}
    return c = Number(a.toString().replace(".", "")), d = Number(b.toString().replace(".", "")), mul(c / d, Math.pow(10, f - e));
}
$(document).ready(function() {
    var qingzzStopTime1=new Date().getTime();
    var qingzzStopTime=div(qingzzStopTime1,1000);
    var qingzzStartTime=div(qingzzStartTime1,1000);
    $('#qingzzLastTimeShow').text(sub(qingzzStopTime,qingzzStartTime));
})
</script>
</body>
</html>