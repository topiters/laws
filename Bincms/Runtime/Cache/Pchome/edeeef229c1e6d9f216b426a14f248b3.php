<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <!--  <?php echo ($CONFIG['site']['headinfo']); ?> -->
        <title><?php if($CONFIG['title'])echo $CONFIG['title'];else echo $seo_title; ?></title>
        <meta name="keywords" content="<?php echo ($seo_keywords); ?>" />
        <meta name="description" content="<?php echo ($seo_description); ?>" />
		
		
		<link href="__TMPL__statics/css/style.css" type="text/css" rel="stylesheet" />
    <link href="__TMPL__statics/css/drop-down.css" type="text/css" rel="stylesheet" />

   <!--tab-->
   <link href="__TMPL__statics/css/base_v.2.0.css" type="text/css" rel="stylesheet" />
    <link href="__TMPL__statics/css/index_v2.css" type="text/css" rel="stylesheet" />
<!--tab-->
    <link rel="stylesheet" href="__TMPL__statics/css/public.css" />
   <link rel="stylesheet" href="__TMPL__statics/css/homeCss.css"/> 
 
		
		
		
		
        <script> var BAO_PUBLIC = '__PUBLIC__'; var BAO_ROOT = '__ROOT__';</script>
       	<script type="text/javascript" src="__TMPL__statics/js/jquery-1.11.2.js"></script>
		 
        <script src="__PUBLIC__/js/layer/layer.js?v=20160718"></script>
        <script src="__TMPL__statics/js/jquery.flexslider-min.js?v=20160718"></script>
        <script src="__TMPL__statics/js/js.js?v=20160718"></script>
        <script src="__PUBLIC__/js/web.js?v=20160718"></script>
        <script src="__TMPL__statics/js/baocms.js?v=20160718"></script>
		
		
	
<!--jiaodian lunfan js-->
<script src="http://img.jb51.net/jslib/jquery/jquery14.js" type="text/javascript"></script> 
<script type="text/javascript" src="__TMPL__statics/js/homejs.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
 var hm = document.createElement("script");
 hm.src = "//hm.baidu.com/hm.js?31ca8c51b19a606d6547712c451c0a3c";
var s = document.getElementsByTagName("script")[0];
 s.parentNode.insertBefore(hm, s);

})();

</script>

<script type="text/javascript" src="__TMPL__statics/js/main.js"></script>
		
		
  
    </head>
 
    <body>
        <iframe id="baocms_frm" name="baocms_frm" style="display:none;"></iframe> <!-- -头部声明文件-- -->
 
<!--top-->
<div class="top0">
  <div class="top">
  <!--left-->
    <div class="top_top">
     <div class="top_top_left"> 
     <input type="text" name="zh"placeholder="请输入账号" class="zhanghu" value="" />
     <input type="text" name="mm"placeholder="请输入密码" class="mima" value="" />
     <input type="submit" value="登录" class="denglu" />
     <input type="submit" value="三秒快速注册" class="zhuce" />
     </div>
     <!--right-->
     <div class="top_top_right">
       <div class="top_top_right_1">法援热线：<span style="color:#fe5d0e; font-weight:bolder">400-1234-567</span></div>
       <div class="top_top_right_2"><a href="">点击收藏</a></div>
       <div class="top_top_right_3"><ul><li><a href="">返回首页</a></li><li>|</li><li><a href="">援助计划</a></li><li>|</li><li><a href="">金牌会员</a></li></ul></div>
     </div>
     <!--right-->
    </div>
  <!--left-->
  </div>

</div>
<!--top-->



 

<!--开始-->
<div class="toolDiv">

    <div class="logo left"><a href="/" target="_blank"><img src="__TMPL__statics/images/logo.jpg" alt="郑州法律网"/></a></div>

    <div class="childWeb"> </div>

    <div class="ptop">

<div class="m_search">

    <div class="img"><img width="80" height="26" alt="郑州法搜" src="__TMPL__statics/images/logo_fsou.jpg"></div>

    <div class="hd">

        <ul class="type">

            <li><a alt="法律咨询" target="_blank" rel="nofollow" href=""><span>法律咨询</span></a></li>

            <li class="on"><a alt="专业律师" target="_blank" rel="nofollow" href=""><span>专业律师</span></a></li>
        </ul>
    </div>

    <div class="bd">

        <!-- 咨询 -->

        <div style="display:none" class="pan">

            <form target="_blank" method="get">

                <input type="hidden" name="m" value="search">

                <input type="hidden" name="c" value="index">

                <input type="hidden" name="a" value="bdsearch">

                <input type="text" id="bdcsMain" onClick="this.style.color='#000000';" style="color:#999999; padding-left:5px;" onFocus="if(this.value=='请您输入问题的关键字，然后点击搜索'){this.value=''}else{this.style.color='#000000'}" value="请您输入问题的关键字，然后点击搜索" size="45" class="field-txt">



                <input type="submit" class="sbtn" value="">

                <a class="btn" target="_blank" href=""><img width="73" height="25" alt="提问" src="__TMPL__statics/images/btn_ask.jpg"></a>

            </form>

        </div>

        <!-- 律师 -->

        <div class="pan">
      <form target="_blank" id="form1" name="form1" action="" method="Post">
         <input type="hidden" name="search" value="1">
               <input type="text" onKeyDown="if (event.keyCode==13){document.getElementById('form1').submit();return false}" onFocus="if(this.value=='输入律师姓名'){this.value=''}else{this.style.color='#000000'}" value="输入律师姓名" id="zName" name="zName" size="11" class="field-txt" style="width: 150px; padding-left:5px;">

              
                <input name="cityid" id="areaid_1" type="hidden" value="0"/><input name="zonename" id="zonename_1" type="hidden" value=""/><span id="load_area_1">                
                
                </span>
				           
                  <select name="goodsid" style="width:125px" class="field-select">

                    <option value='0'>选择专长</option><option value='3361'>├ 民事类</option><option value='3367'>│├ 婚姻家庭</option><option value='3368'>│├ 遗产继承</option><option value='3369'>│├ 消费维权</option><option value='3370'>│├ 抵押担保</option><option value='3371'>│├ 合同纠纷</option><option value='3372'>│├ 劳动纠纷</option><option value='3373'>│├ 人身损害</option><option value='3374'>│├ 保险理赔</option><option value='3375'>│├ 拆迁安置</option><option value='3376'>│├ 债权债务</option><option value='3377'>│├ 医疗纠纷</option><option value='3378'>│├ 交通事故</option><option value='3362'>├ 经济类</option><option value='3379'>│├ 工程建筑</option><option value='3380'>│├ 房产纠纷</option><option value='3381'>│├ 知识产权</option><option value='3382'>│├ 合伙加盟</option><option value='3383'>│├ 个人独资</option><option value='3384'>│├ 金融证券</option><option value='3385'>│├ 银行保险</option><option value='3386'>│├ 不当竞争</option><option value='3387'>│├ 经济仲裁</option><option value='3388'>│├ 网络法律</option><option value='3389'>│├ 招标投标</option><option value='3422'>│├ 财税</option><option value='3363'>├ 刑事行政法类</option><option value='3390'>│├ 取保候审</option><option value='3391'>│├ 刑事辩护</option><option value='3392'>│├ 刑事自诉</option><option value='3393'>│├ 行政复议</option><option value='3394'>│├ 行政诉讼</option><option value='3395'>│├ 国家赔偿</option><option value='3396'>│├ 工商税务</option><option value='3397'>│├ 海关商检</option><option value='3398'>│├ 公安国安</option><option value='3364'>├ 涉外法律类</option><option value='3399'>│├ 海事海商</option><option value='3400'>│├ 国际贸易</option><option value='3401'>│├ 招商引资</option><option value='3402'>│├ 外商投资</option><option value='3403'>│├ 合资合作</option><option value='3404'>│├ WTO事务</option><option value='3405'>│├ 倾销补贴</option><option value='3406'>│├ 涉外仲裁</option><option value='3365'>├ 公司专项法律类</option><option value='3407'>│├ 公司并购</option><option value='3408'>│├ 股份转让</option><option value='3409'>│├ 企业改制</option><option value='3410'>│├ 公司清算</option><option value='3411'>│├ 破产解散</option><option value='3412'>│├ 资产拍卖</option><option value='3423'>│├ 投资融资</option><option value='3366'>├ 其他非讼法律类</option><option value='3413'>│├ 工商查询</option><option value='3414'>│├ 资信调查</option><option value='3415'>│├ 合同审查</option><option value='3416'>│├ 调解谈判</option><option value='3417'>│├ 常年顾问</option><option value='3418'>│├ 私人律师</option><option value='3419'>│├ 文书代理</option><option value='3420'>│├ 移民留学</option><option value='3421'>│├ 商帐追收</option><option value='3425'>├ 其他类</option><option value='3426'>│├ 专利权</option><option value='3427'>│├ 著作权</option><option value='3428'>│├ 行政许可</option><option value='3429'>│├ 行政处罚</option><option value='3430'>│├ 刑事诉讼</option><option value='3431'>│├ 土地纠纷</option><option value='3432'>│├ 投资融资</option><option value='3433'>│├ 损害赔偿</option><option value='3434'>│├ 私募股权</option><option value='3435'>│├ 司法鉴定</option><option value='3436'>│├ 商标权</option><option value='3437'>│├ 民事诉讼</option><option value='3438'>│├ 律师服务</option><option value='3439'>│├ 公司设立</option><option value='3440'>│├ 公司清算</option><option value='3441'>│├ 公司法务</option><option value='3442'>│├ 非诉讼</option><option value='0'>├ </option>                </select>

                <a title="搜律师" href="#" onClick="if(document.getElementById('zName').value=='输入律师姓名'){document.getElementById('zName').value=''}else{};document.getElementById('form1').submit();return false;" rel="nofollow" class="btn">

                    <img width="73" height="25" alt="搜索" src="__TMPL__statics/images/btn_search.jpg"></a>

                    <a title="提问" rel="nofollow" href="" target="_blank" class="btn"><img width="73" height="25" alt="提问" src="__TMPL__statics/images/btn_ask.jpg"></a>

            </form>

        </div>

        <div style="display:none" class="pan">

            <form name="form_zhishi" action="#" method="post" target="_blank" id="form_zhishi">

                <input type="text" name="query" onFocus="if(this.value=='请输入要查询的法律知识关键字'){this.value=''}else{this.style.color='#000000'};" value="请输入要查询的法律知识关键字" style="color:#999999" onClick="this.style.color='#000000'" onKeyDown="if (event.keyCode==13){document.getElementById('form_zhishi').submit();return false}" id="query" size="45" class="field-txt">

                <a href="javascript:#" onClick="if(document.getElementById('query').value=='请输入您要搜索的关键字'){document.getElementById('query').value=''}else{};document.getElementById('form_zhishi').submit();return false" rel="nofollow" class="btn"><img width="73" height="25" alt="搜索" src="__TMPL__statics/images/btn_search.jpg"></a> <a title="发咨询" rel="nofollow" href="" target="_blank" class="btn"><img width="73" height="25" alt="提问" src="__TMPL__statics/images/btn_ask.jpg"></a>

            </form>

        </div>

        <!-- 法规 -->

        <div style="display:none" class="pan">

            <form name="form_zhishi" action="#" method="post" target="_blank" id="form_zhishi_fagui">

                <input type="text" name="query" id="query_fagui" onFocus="if(this.value=='请输入要查询的法规关键字') this.value=''" value="请输入要查询的法规关键字" size="45" class="field-txt">

                <a onClick="if(document.getElementById('query').value=='请输入您要搜索的关键字'){document.getElementById('query_fagui').value=''}else{};document.getElementById('form_zhishi_fagui').submit();return false" target="_blank" title="搜索" rel="nofollow" href="javascript:#" class="btn"><img width="73" height="25" alt="搜索" src="__TMPL__statics/images/btn_search.jpg"></a>

                <a target="_blank" title="提问" rel="nofollow" href="" class="btn"><img width="73" height="25" alt="提问" src="__TMPL__statics/images/btn_ask.jpg"></a>

            </form>

        </div>

    </div>


   </div>  
  </div>
</div>

<!--nav-->
<div class="nav0">
   <div class="nav">
      <ul>
        <li><a href="<?php echo U('index/index');?>"  >网站首页</a></li>
        <li><a href="<?php echo U('lawask/index');?>">法律咨询</a></li>
        <li><a href="<?php echo U('lawyer/index');?>">律师在线</a></li>
        <li><a href="<?php echo U('lawyerhome/index');?>">律师事务所</a></li>
        <li><a href="<?php echo U('lawyerkown/index');?>">法律知识</a></li>
        <li><a href="<?php echo U('news/index');?>">新闻资讯</a></li>
        <li style=" background:none;"><a href="<?php echo U('lawyercontact/index');?>">联系我们</a></li>     
      </ul>
   </div>
</div>

<!--nav-->
<!--导航下面分类-->
<div class="cd0">
<ul class="cd">
  <li><a href="#" id="cdb1" target="_blank"><font>婚姻家庭</font></a></li>
  <li><a href="#" id="cdb2" target="_blank"><font>刑事辩护</font></a></li>
  <li><a href="#" id="cdb3" target="_blank"><font>知识产权</font></a></li>
  <li><a href="#" id="cdb4" target="_blank"><font>合同纠纷</font></a></li>
  <li><a href="#" id="cdb5" target="_blank"><font>债权债务</font></a></li>
  <li><a href="#" id="cdb6" target="_blank"><font>公司法务</font></a></li>
  <li><a href="#" id="cdb7" target="_blank"><font>劳动纠纷</font></a></li>
  <li><a href="#" id="cdb8" target="_blank"><font>房产律师</font></a></li>
  <li><a href="#" id="cdb9" target="_blank"><font>医疗纠纷</font></a></li>
  <li><a href="#" id="cdb10" target="_blank"><font>损害赔偿</font></a></li>
  <li><a href="#" id="cdb11" target="_blank"><font>交通事故</font></a></li>
  <li><a href="#" id="cdb12" target="_blank"><font>工程建筑</font></a></li>
  <li><a href="#" id="cdb13" target="_blank"><font>金融证券</font></a></li>
  <li><a href="#" id="cdb14" target="_blank"><font>拆迁安置</font></a></li>
  <li style="background:none;"><a href="" id="cdb15" target="_blank"><font>更多</font></a></li>
</ul>
</div>
<!--导航下面分类-->


<!--导航下面分类-->

<div class="containt">
    <div class="sectionBox clearfix">

        <!--法咨询-->

        <div class="leftTab">

            <div class="leftTabTit">

                <span class="bgBefor1">发咨询</span>

                <span class="bgBefor2 after2">找律师</span>

                <span class="bgBefor3">案件委托</span>

            </div>

            <div class="tabInfo hide">

                <div class="text"><img src="__TMPL__statics/images/zxjd.png" alt="免费法律咨询,数万名律师在线解答法律问题"/></div>

                <form action="" method="post" target="_blank" name="frmask" id="frmask">

                <div class="textArea">    
                 
<textarea name="Content" rows="6" id="Content" style="width:190px;color:#666" onfocus="if(this.value=='请输入你想要咨询的内容') {this.value='';}this.style.color='#666';" onblur="if(this.value=='') {this.value='请输入你想要咨询的内容';this.style.color='#666';}"maxlength="20">请输入你想要咨询的内容</textarea> 
                    
                    

                </div>

                <div class="btnDiv"><input type="submit" value="立即咨询"/></div>

                </form>

                <div>

                    <a href="" target="_blank"><img src="__TMPL__statics/images/forPic2.jpg"  alt="法律咨询,免费法律咨询,免费律师咨询"/></a>

                </div>

            </div>

            <!--找律师-->

            <div class="tabInfo">
            
               <div class="zixun1_2_left_2">
          <ul>
           <li><div class="img1"></div><span><a href="">夫妻纠纷</a></span></li>
          
           <li class="right"><div class="img1"></div><span><a href="">夫妻纠纷</a></span></li>
           <li><div class="img1"></div><span><a href="">夫妻纠纷</a></span></li>
           <li class="right"><div class="img1"></div><span><a href="">夫妻纠纷</a></span></li>
         
          </ul>
        </div>
        
             

                <div class="address bgIconPecial">专业</div>

                <form target="_blank" id="form2" name="form2" action="" method="Post">

                    <input type="hidden" name="search" value="1">

                    <div class="secetBox" id="goods_new_0"></div>

                    <div class="secetBox" id="goods_new_1">
                    <select class="ui-select">
                    <option value="请选择子类">请选择分类</option><option value="民事纠纷">民事纠纷</option><option value="刑事纠纷">刑事纠纷</option>
                    </select>
                    <br/>
                     <select class="ui-select" style="margin-top:5px;">
                    <option value="请选择子类">请选择子类</option><option value="民事纠纷">民事纠纷</option><option value="刑事纠纷">刑事纠纷</option>
                    </select>
               
                    
                    </div>

<!--                    <script type="text/javascript">leray_load_area2(0,0,0,"goods_0,goodsid","goods_new_",3360);</script>
-->
                    <div class="btnDivT ptopTwo"><input type="button" id="goodsearch" value="按专业找律师" class="yellowC" style="margin-top:15px;"></div>

                </form>

               <!-- <div class="btnT"><a href="" target="_blank"><img src="__TMPL__statics/images/btn.jpg" alt=""/></a></div>-->
            

                <div class="ptopTwo">

                    <a href="" target="_blank"><img src="__TMPL__statics/images/ad9.jpg" alt="" style="margin-top:3px;"/></a>

                </div>

            </div>

            <!--案件委托-->

            <div class="tabInfo hide">

                

              

                <form name="wtaddForm" action="" method="post" target="_blank" onSubmit="return checkSubmit();">

                
                   

                    <div class="btnDiv"><input type="submit" value="立即委托"/></div>

                </form>

                <div>

                    <a href="" target="_blank"><img src="__TMPL__statics/images/lx.jpg"  alt=""/></a>

                </div>

            </div>

        </div>


         <!--right-->
        <div class="rightCon">
        <!--lfan-->
          <div class="rightCon_1">
          
             <div id="banner"> 
<div id="banner_bg"></div> 
<div id="banner_info"></div> 
<ul> 
<li>1</li> 
<li>2</li> 
<li>3</li> 
<li>4</li> 
</ul> 
<div id="banner_list"> 
<a href="#" target="_blank"><img src="__TMPL__statics/images/01.jpg" title="律师" alt="律师" /></a> 
<a href="#" target="_blank"><img src="__TMPL__statics/images/01.jpg" title="律师" alt="律师" /></a> 
<a href="#" target="_blank"><img src="__TMPL__statics/images/01.jpg" title="律师" alt="律师" /></a> 
<a href="#" target="_blank"><img src="__TMPL__statics/images/01.jpg" title="律师" alt="律师" /></a> 
</div> 
</div> 
<script type="text/javascript">// <![CDATA[ 
var t = n = 0, count; 
$(document).ready(function(){ 
count=$("#banner_list a").length; 
$("#banner_list a:not(:first-child)").hide(); 
$("#banner_info").html($("#banner_list a:first-child").find("img").attr('alt')); 
$("#banner_info").click(function(){window.open($("#banner_list a:first-child").attr('href'), "_blank")}); 
$("#banner li").click(function() { 
var i = $(this).text() - 1;//获取Li元素内的值，即1，2，3，4 
n = i; 
if (i >= count) return; 
$("#banner_info").html($("#banner_list a").eq(i).find("img").attr('alt')); 
$("#banner_info").unbind().click(function(){window.open($("#banner_list a").eq(i).attr('href'), "_blank")}) 
$("#banner_list a").filter(":visible").fadeOut(500).parent().children().eq(i).fadeIn(1000); 
$(this).css({"background":"#be2424",'color':'#000'}).siblings().css({"background":"#6f4f67",'color':'#fff'}); 
}); 
t = setInterval("showAuto()", 4000); 
$("#banner").hover(function(){clearInterval(t)}, function(){t = setInterval("showAuto()", 4000);}); 
}) 

function showAuto() 
{ 
n = n >=(count - 1) ? 0 : ++n; 
$("#banner li").eq(n).trigger('click'); 
} 
// ]]></script> 

          
          </div>
        <!--lfan--> 
        <div class="rightCon_2">
          <div class="rightCon_2_1">郑州律师推荐</div>
          <ul>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
            <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
             <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li style="margin-right:0"><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
            <li><img src="__TMPL__statics/images/ls.png" /><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
             <li><img src="__TMPL__statics/images/ls.png" /><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
           <li style="margin-right:0"><img src="__TMPL__statics/images/ls.png" /><span>姓名--宋玉梅</span><i><a href="">【免费咨询】</a></i></li>
          </ul>
        </div>
        
        </div>
        
        <!--right end-->

    </div>
<!--end-->
</div>











<!--法律咨询-->
<div class="zixun0">
  <div class="zixun">
    <div class="zixun_1"><div class="zixun_1_1">法律咨询</div><div class="zixun_1_2">更多</div></div>
    <div class="zixun_2">
    <!--left-->
      <div class="zixun_2_left">
        <div class="zixun_2_left_1">热门咨询</div>
        <div class="zixun_2_left_2">
          <ul>
           <li><div class="img1"></div><span><a href="">夫妻纠纷</a></span></li>
           <li><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
           <li class="right"><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
           <li><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
           <li><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
           <li class="right"><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
           <li><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
           <li><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
           <li class="right"><img src="__TMPL__statics/images/fq.png" /><span><a href="">夫妻纠纷</a></span></li>
          </ul>
        </div>
        <div class="zixun_2_left_3">
           <div class="xiala" style="height:72px;" >
            <img src="__TMPL__statics/images/ad9.jpg"  height="72"/>
            </div>
              <div class="xiala">
             <select>
               <option>更多热门专长</option>
                <option>夫妻纠纷</option>
                 <option>刑事案件</option>
                  <option>知识产权</option>
                   <option>合同纠纷</option>
                    <option>公司法</option>
                     <option>劳动纠纷</option>
                      <option>房产纠纷</option>
                       <option>交通事故</option>
                        <option>债务债权</option>
                         <option>更多</option>
             </select>
            </div>
            <div class="xiala">     <input type="text" name="gjc"placeholder="请输入关键词搜索" class="ss" value="" /></div>
            <div class="xiala">     <input type="submit" value="搜索咨询" class="tj" /></div>
        </div>
        
      </div>
     <!--center--> 
      <div class="zixun_2_center">
        <div class="zixun_2_center_1">把您的疑问告诉律师吧？</div>
        <div class="zixun_2_center_2"> <input type="text" name="gjc"placeholder="请输入您的问题" class="wt" value="" />
        <a href=""> <input type="submit" value="免费咨询" class="mf" /></a> </div>
        <div class="zixun_2_center_3">
          <div class="zixun_2_center_3_1">已解决问题</div>
          <ul>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产<img src="__TMPL__statics/images/vip.png" /></a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产<img src="__TMPL__statics/images/vip.png" /></a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产</a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产</a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产</a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>

          </ul>
           <div class="zixun_2_center_3_1">最新咨询</div>
          <ul>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产<img src="__TMPL__statics/images/vip.png" /></a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产<img src="__TMPL__statics/images/vip.png" /></a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产</a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产</a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产</a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>
            <li><a href="">你好，我想咨询一下我结婚盖的房子是我父母给盖的这属于婚前财产</a><span style="width:40px; float:right; color:#999; font-size:12px;">16秒前</span></li>

          </ul>
        </div>
      </div>
      <!--right-->
      <div class="zixun_2_right">
        <div class="zixun_2_right_1">解答专家律师</div>
        <div class="zixun_2_right_2">
          <ul>
            <li><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><p>专长：婚姻纠纷</p><i><a href="">【免费咨询】</a></i></li>
            <li style="margin-right:0;"><a href="律师主页.html"><img src="__TMPL__statics/images/ls.png" /></a><span>姓名--宋玉梅</span><p>专长：婚姻纠纷</p><i><a href="">【免费咨询】</a></i></li>
          </ul>
        </div>
        <div class="zixun_2_right_3">律师动态</div>
        <div class="zixun_2_right_4">
          <ul id="zixun_2_right_4">
            <li><div class="dt"><div class="dt_left"><img src="__TMPL__statics/images/dtls.jpg" /></div><div class="dt_right">刘焦律师回答了 结婚盖的房子是我父母给盖的这属于婚前财产<span style="width:40px; height:30px; line-height:30px; float:right;">30秒前</span></div></div></li>
             <li><div class="dt1"><div class="dt1_left"><img src="__TMPL__statics/images/dtls.jpg" /></div><div class="dt1_right">刘焦律师回答了 结婚盖的房子是我父母给盖的这属于婚前财产<span style="width:40px; height:30px; line-height:30px; float:right;">30秒前</span></div></div></li>
              <li><div class="dt"><div class="dt_left"><img src="__TMPL__statics/images/dtls.jpg" /></div><div class="dt_right">刘焦律师回答了 结婚盖的房子是我父母给盖的这属于婚前财产<span style="width:40px; height:30px; line-height:30px; float:right;">30秒前</span></div></div></li>
             <li><div class="dt1"><div class="dt1_left"><img src="__TMPL__statics/images/dtls.jpg" /></div><div class="dt1_right">刘焦律师回答了 结婚盖的房子是我父母给盖的这属于婚前财产<span style="width:40px; height:30px; line-height:30px; float:right;">30秒前</span></div></div></li>
              <li><div class="dt"><div class="dt_left"><img src="__TMPL__statics/images/dtls.jpg" /></div><div class="dt_right">刘焦律师回答了 结婚盖的房子是我父母给盖的这属于婚前财产<span style="width:40px; height:30px; line-height:30px; float:right;">30秒前</span></div></div></li>
             <li><div class="dt1"><div class="dt1_left"><img src="__TMPL__statics/images/dtls.jpg" /></div><div class="dt1_right">刘焦律师回答了 结婚盖的房子是我父母给盖的这属于婚前财产<span style="width:40px; height:30px; line-height:30px; float:right;">30秒前</span></div></div></li>

          </ul>
        </div>
        
        
      </div>
      <!--end-->
    </div>
  </div>
</div>
  <script>
var c,_=Function;
with(o=document.getElementById("zixun_2_right_4")){ innerHTML+=innerHTML; onmouseover=_("c=1"); onmouseout=_("c=0");}
(F=_("if(#%100||!c)#++,#%=o.scrollHeight>>1;setTimeout(F,#%90?10:2500);".replace(/#/g,"o.scrollTop")))();
</script>        
<!--gg-->
<div class="gg0">
  <div class="gg">
    <div class="gg_left"><a href="律师主页.html"><img src="__TMPL__statics/images/gg_01.jpg" width="595" /></a></div>
    <div class="gg_right"><a href="律师主页.html"><img src="__TMPL__statics/images/gg_01.jpg"  width="595"/></a></div>
  </div>
</div>
<!--gg-->




<!--gdft-->
<div class="gdft0">
  <div class="gdft">
   <div class="gdft_1"><div class="gdft_1_1">律师事务所</div><div class="gdft_1_2">更多</div></div>
    <div class="gdft_left">
    <!--  <div class="gdft_left_1"><img src="__TMPL__statics/images/gdls.jpg"  height="240" width="880"/>
      <div>
            	<h3>懒人之家</h3>
	            <p>懒人之家懒人之家懒人之家懒人之家懒人之家懒人之家懒人之家懒人之家懒人之家懒人之家懒人之家懒人之家</p>
            </div>
      
      </div>
      -->
      
      <!-- 第一个demo -->
      
      <div class="gdft_left_3">
         <div class="gdft_left_3_left"><img src="__TMPL__statics/images/gdls.jpg" height="230px;" /></div>
         <div class="gdft_left_3_right"><p style=" line-height:35px; height:35px; font-size:14px; font-weight:bolder;">郑州法律律师事务所简介：</p>
         律师事务所简介律师事务所简介律师事务所简介律师事务所简介律师事务所简介律师事务所简介律师事务所简介律师事务所简介事务所简介律师事务所简介律师事务所简介律师事务所简介事务所简介律师事务所简介律师事务所简介律师事务所简介事务所简介律师事务所简介律师事务所简介律师事务所简介事务所简介律师事务所简介律师事务所简介律师事务所简介事务所简介律师事务所简介律师事务所简介律师事务所简介事务所简介律师事务所简介律事务所简介律师事务所简介律师事务所简介律师事师事务所简介律师事<br/>
         <p style="border:1px solid #0685cc; height:32px; line-height:32px; width:100px; text-align:center; float:left; margin-top:8px;">查看详情</p>
         </div>
      </div>
      
<!--<div id="wrap">
	<ul class="item1">
    	<li>
			<img src="__TMPL__statics/images/gdls.jpg" width="880" height="260" />
			<div>
            	<h3>郑州法律律师事务所</h3>
	            <p>郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所郑州法律律师事务所</p>
            </div>
		</li>
       
    </ul>
</div>-->
<!-- 第二个demo -->
      
      
      <script src="js/lanrenzhijia.js"></script>
      
      
      <div class="gdft_left_2">
       <div class="gdft_left_2_1">律所优秀律师</div>
        <ul>
          <li><img src="__TMPL__statics/images/ls01.png" /><h2>刘传胜律师</h2><span>擅长：交通事故、公司、房地产、婚姻家庭</span><i><a href="">立即咨询</a></i></li>
            <li><img src="__TMPL__statics/images/ls01.png" /><h2>刘传胜律师</h2><span>擅长：交通事故、公司、房地产、婚姻家庭</span><i><a href="">立即咨询</a></i></li>
              <li style="margin-right:0;"><img src="__TMPL__statics/images/ls01.png" /><h2>刘传胜律师</h2><span>擅长：交通事故、公司、房地产、婚姻家庭</span><i><a href="">立即咨询</a></i></li>
        </ul>
      </div>
    </div>
    
    <div class="gdft_right">
      <div class="gdft_right_1">律所首席律师<a href="" style="width:50px; font-size:12px; color:#999; float:right;">更多>></a></div>
      <div class="gdft_right_2">
      <a href="律师主页.html"><img src="__TMPL__statics/images/sxls.jpg" /></a>  
      </div>
      <div class="gdft_right_3"><p style="font-weight:bolder; height:35px; line-height:38px; font-size:14px; text-align:center;">王亚丽律师简介</p>丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽律师简介丽简介丽律师简介丽律师简介丽律师简介</div>
    </div>
  </div>
</div>
<!--gdft-->

<!--zzry-->
<div class="ry0">
  <div class="ry">
    <div class="ry_1"><div class="ry_1_1">资质荣誉</div><div class="ry_1_2">更多</div></div>
  </div>
</div>
 <div id="list" class=" picutre_many"
        style="overflow: hidden; height: 145px; width: 1200px; margin: 0 auto; margin-top:15px;">
        <table cellspacing="0" cellpadding="0"
            style="width: 680px; border: 0px;">
            <tr>
                <td id="list1">
                    <table style="border: 0px;" cellpadding="0" cellspacing="0">
                        <tr id="pic">
                            <td><img style="border: 0px;" alt="" src="1.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="2.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="3.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="4.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="5.jpg" /><span>资质荣誉一</span></td>
                             <td><img style="border: 0px;" alt="" src="1.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="2.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="3.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="4.jpg" /><span>资质荣誉一</span></td>
                            <td><img style="border: 0px;" alt="" src="5.jpg" /><span>资质荣誉一</span></td>
                        </tr>
                    </table>
                </td>
                <td id="list2"></td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
        /*ͼƬ����Ч��*/
        var speedpic = 20;//�ٶ���ֵԽ���ٶ�Խ��
        document.getElementById("list2").innerHTML = document.getElementById("list1").innerHTML;
        function Marqueepic() {
            if (document.getElementById("list2").offsetWidth
                    - document.getElementById("list").scrollLeft <= 0) {
                document.getElementById("list").scrollLeft -= document
                        .getElementById("list1").offsetWidth;
            } else {
                document.getElementById("list").scrollLeft++;
            }
        }
        var MyMarpic = setInterval(Marqueepic, speedpic);

        document.getElementById("list").onmouseover = function() {
            clearInterval(MyMarpic);
        }
        document.getElementById("list").onmouseout = function() {
            MyMarpic = setInterval(Marqueepic, speedpic);
        }
    </script>
<!--zzry-->


<!--tab-->

<div class="w990 ma">
      <div class="title2 mt30 lh30">
            <span class="f28">法律知识</span>

      </div>

        <div id="laws" class="control-tab clearfix">

            <div class="cl-tab-tit">

                <span class="cl-tab-click"><i class="ico-sy i-sy12"></i>婚姻家庭</span>

                <span><i class="ico-sy i-sy12"></i>劳动工伤</span>

                <span><i class="ico-sy i-sy12"></i>房地产</span>

                <span><i class="ico-sy i-sy12"></i>医疗事故</span>

                <span><i class="ico-sy i-sy12"></i>刑法</span>

                <span><i class="ico-sy i-sy12"></i>征地拆迁</span>

                <span><i class="ico-sy i-sy12"></i>合同法</span>

                <span><i class="ico-sy i-sy12"></i>债务债权</span>

                <span><i class="ico-sy i-sy12"></i>交通事故</span>

            </div>

            <div class="cl-tab-nr clearfix">

                <div class="cl-tab-item clearfix" >
                <div class="w540 fl">
                <p class="tc f18"><a target="_blank" href="" title="2016办理结婚证需要什么手续" class="s-oe">2016办理结婚证需要什么手续</a></p>
                <p class="s-c666 mt10 lh22">结婚证是婚姻登记管理机关签发的证明婚姻关系有效成立的法律文书。2015年办理结婚证需要什么手续？下面请看华律小编为大家整理的相关知识，欢迎阅读了解！<a target="_blank" href="" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix">
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="服刑期间能领离婚证吗"><i class="ico-sy i-sy8"></i>服刑期间能领离婚证吗</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="妻子私自把房子过户丈母娘,这样的行为有效吗"><i class="ico-sy i-sy8"></i>妻子私自把房子过户丈母娘,这样...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="离婚之后不抚养孩子一方拒绝支付抚养费怎么办"><i class="ico-sy i-sy8"></i>离婚之后不抚养孩子一方拒绝支付...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="小三生孩子是重婚罪吗,会不会坐牢"><i class="ico-sy i-sy8"></i>小三生孩子是重婚罪吗,会不会坐...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="父母双亡遗产继承比例,父母双亡子女怎么分配遗产"><i class="ico-sy i-sy8"></i>父母双亡遗产继承比例,父母双亡...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="出轨偷拍证据是否侵犯隐私权,证据有效吗"><i class="ico-sy i-sy8"></i>出轨偷拍证据是否侵犯隐私权,证...</a></p></li>
                </ul>
                <p class="f16 mt20 mb15">婚姻家庭分类</p><table width="100%" border="1"><tr><td><a target="_blank" href="">结婚</a></td>
                <td><a target="_blank" href="">离婚</a></td><td><a target="_blank" href="">子女抚养</a></td>
                <td><a target="_blank" href="">夫妻财产</a></td><td><a target="_blank" href="">家庭暴力</a></td>
                </tr><tr><td><a target="_blank" href="">继承法</a></td><td><a target="_blank" href="">赡养</a></td>
                <td><a target="_blank" href="">收养法</a></td><td><a target="_blank" href="">军婚</a></td>
                <td><a target="_blank" href="">涉外婚姻</a></td>
                </tr><tr><td><a target="_blank" href="">婚姻效力</a></td>
                <td><a target="_blank" href="">婚姻法规</a></td>
                </tr></table>
                </div><div class="w220 fr"><p class="f14 title1 pb5">热门婚姻家庭知识</p><ul class="sy-list7">
                <li><em class="rank rank1 mr10">1</em><a target="_blank" href="" title="最新国家法定婚假规定" class="f14 s-c666">最新国家法定婚假规定</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="结婚登记需要什么手续" class="f14 s-c666">结婚登记需要什么手续</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="2016超生二胎不罚款,三胎罚款标准" class="f14 s-c666">2016超生二胎不罚款,...</a></li>                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="新婚姻法结婚年龄规定" class="f14 s-c666">新婚姻法结婚年龄规定</a></li>
                <li><em class="rank  mr10">5</em><a target="_blank" href="" title="新离婚协议书范本" class="f14 s-c666">新离婚协议书范本</a></li>
                <li><em class="rank  mr10">6</em><a target="_blank" href="" title="2016上海独生子女费发放标准" class="f14 s-c666">2016上海独生子女费发...</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="2016生育第三个子女如何办理" class="f14 s-c666">2016生育第三个子女如...</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="新婚姻法全文 有关房产、离婚、孩子抚养" class="f14 s-c666">新婚姻法全文 有关房产、...</a></li>                <li><em class="rank  mr10">9</em><a target="_blank" href="" title="新婚姻法下的离婚条件" class="f14 s-c666">新婚姻法下的离婚条件</a></li>
                <li><em class="rank  mr10">10</em><a target="_blank" href="" title="民通意见" class="f14 s-c666">民通意见</a></li>
                </ul></div></div>

                <div class="cl-tab-item clearfix" style="display:none;"><div class="w540 fl">
                <p class="tc f18"><a target="_blank" href="" title="2016临时工劳动合同法全文" class="s-oe">2016临时工劳动合同法全文</a></p>
                <p class="s-c666 mt10 lh22">为了保护临时工的合法权益，我国相关部门制定了专门的临时工劳动合同法，那么临时工劳动合同法包含了哪些内容呢？下面请跟随华律小编的步伐一起阅读下文进行了解吧，祝您阅...<a target="_blank" href="" class="s-be ml5">[详细]</a></p><ul class="art-list art-list-c2 art-list-le mt15 clearfix">
                <li>
                <p class="pr20"><a target="_blank" class="f14 s-be" href="" title="劳动者在何种情形下可以获得社会保险补偿"><i class="ico-sy i-sy8"></i>劳动者在何种情形下可以获得社会...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="饭店雇佣童工怎么处理,雇佣17岁童工怎么处理"><i class="ico-sy i-sy8"></i>饭店雇佣童工怎么处理,雇佣17...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="公司雇佣童工怎么处罚,雇佣童工罚款怎么罚"><i class="ico-sy i-sy8"></i>公司雇佣童工怎么处罚,雇佣童工...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="2016最新禁止使用童工规定,2016最新禁止使用童工政策规定"><i class="ico-sy i-sy8"></i>2016最新禁止使用童工规定,...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="克扣工资有什么法律责任,怎么认定"><i class="ico-sy i-sy8"></i>克扣工资有什么法律责任,怎么认...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="克扣工资去哪举报,怎么办"><i class="ico-sy i-sy8"></i>克扣工资去哪举报,怎么办</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="雇佣童工从事危重劳动罪,单位雇佣童工构成犯罪吗"><i class="ico-sy i-sy8"></i>雇佣童工从事危重劳动罪,单位雇...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="雇佣童工的后果,雇佣未成年的法律后果"><i class="ico-sy i-sy8"></i>雇佣童工的后果,雇佣未成年的法...</a></p></li>
                </ul><p class="f16 mt20 mb15">劳动工伤分类</p>
                <table width="100%" border="1">
                <tr><td><a target="_blank" href="">劳动合同</a></td><td><a target="_blank" href="">劳动关系</a></td><td><a target="_blank" href="">劳动保障</a></td>
                <td><a target="_blank" href="">劳动保险</a></td><td><a target="_blank" href="">劳动争议</a></td></tr>
                <tr><td><a target="_blank" href="">工伤认定</a></td><td><a target="_blank" href="">工伤鉴定</a></td><td><a target="_blank" href="">工伤赔偿</a></td><td><a target="_blank" href="">保护监察</a></td><td><a target="_blank" href="">劳动法规</a></td></tr>
                </table>
                </div><div class="w220 fr"><p class="f14 title1 pb5">热门劳动工伤知识</p><ul class="sy-list7"><li><em class="rank rank1 mr10">1</em><a target="_blank" href="/laws/106815.aspx" title="退休人员涨工资2016最新消息" class="f14 s-c666">退休人员涨工资2016最...</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="退休年龄的最新规定2016" class="f14 s-c666">退休年龄的最新规定201...</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="2016年企业退休人员涨工资最新消息" class="f14 s-c666">2016年企业退休人员涨...</a></li>
                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="山东退休人员涨工资2016方案" class="f14 s-c666">山东退休人员涨工资201...</a></li>
                <li><em class="rank  mr10">5</em><a target="_blank" href="" title="辽宁省退休人员涨工资细则" class="f14 s-c666">辽宁省退休人员涨工资细则</a></li>
                <li><em class="rank  mr10">6</em><a target="_blank" href="" title="退休人员涨工资2016新政策" class="f14 s-c666">退休人员涨工资2016新...</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="北京退休人员涨工资2016新方案" class="f14 s-c666">北京退休人员涨工资201...</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="上海退休人员涨工资2016最新消息" class="f14 s-c666">上海退休人员涨工资201...</a></li>
                <li><em class="rank  mr10">9</em><a target="_blank" href="" title="法律上规定的女职工退休年龄是多少" class="f14 s-c666">法律上规定的女职工退休年...</a></li>
                <li><em class="rank  mr10">10</em><a target="_blank" href="" title="2016年最新退休人员涨工资计算方法" class="f14 s-c666">2016年最新退休人员涨...</a></li>
                </ul></div></div>

                <div class="cl-tab-item clearfix" style="display:none;">
                <div class="w540 fl">
                <p class="tc f18"><a target="_blank" href="" title="2016二套房的判断标准是什么" class="s-oe">2016二套房的判断标准是什么</a></p>
                <p class="s-c666 mt10 lh22">什么二套房？符合怎样的标准才满足二套房的条件？下面就由华律小编为您整理关于2016二套房的判断标准是什么的知识，欢迎阅读！<a target="_blank" href="" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix"><li>
                <p class="pr20"><a target="_blank" class="f14 s-be" href="" title="房产过户需要准备多少钱,需要哪些资料"><i class="ico-sy i-sy8"></i>房产过户需要准备多少钱,需要哪...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="房产过户应该去哪里办理过户登记,如何办理过户"><i class="ico-sy i-sy8"></i>房产过户应该去哪里办理过户登记...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="安置房有房产证如何过户"><i class="ico-sy i-sy8"></i>安置房有房产证如何过户</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="父母双亡房产怎么过户,父母双亡房产如何过户"><i class="ico-sy i-sy8"></i>父母双亡房产怎么过户,父母双亡...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="2016上海房地产开发注意事项"><i class="ico-sy i-sy8"></i>2016上海房地产开发注意事项</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="2016成都房地产开发评估标准有哪些"><i class="ico-sy i-sy8"></i>2016成都房地产开发评估标准...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="2016上海商品房验收标准是怎样的"><i class="ico-sy i-sy8"></i>2016上海商品房验收标准是怎...</a></p></li><li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="什么是房地产泡沫,北京高房价能坚持多久"><i class="ico-sy i-sy8"></i>什么是房地产泡沫,北京高房价能...</a></p></li>
                </ul><p class="f16 mt20 mb15">房地产分类</p><table width="100%" border="1"><tr><td><a target="_blank" href="">房屋买卖</a></td><td><a target="_blank" href="">房屋租赁</a></td>
                <td><a target="_blank" href="">保障性住房</a></td><td><a target="_blank" href="">业主权利</a></td><td><a target="_blank" href="">土地管理</a></td></tr>
                <tr><td><a target="_blank" href="">农村房产</a></td><td><a target="_blank" href="">其它房产知识</a></td></tr>
                </table></div><div class="w220 fr"><p class="f14 title1 pb5">热门房地产知识</p><ul class="sy-list7"><li><em class="rank rank1 mr10">1</em><a target="_blank" href="" title="2016房产证上加名字" class="f14 s-c666">2016房产证上加名字</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="2016廉租房申请条件是什么" class="f14 s-c666">2016廉租房申请条件是...</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="房产税暂行条例实施细则最新调整" class="f14 s-c666">房产税暂行条例实施细则最...</a></li>
                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="个人房屋租赁税率如何计算" class="f14 s-c666">个人房屋租赁税率如何计算</a></li>
                <li><em class="rank  mr10">5</em><a target="_blank" href="" title="二手房交易税费新规定" class="f14 s-c666">二手房交易税费新规定</a></li>
                <li><em class="rank  mr10">6</em><a target="_blank" href="" title="小产权房最新政策2016" class="f14 s-c666">小产权房最新政策2016</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="不交物业费违法吗及其后果是什么" class="f14 s-c666">不交物业费违法吗及其后果...</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="房地产开发流程（详细）" class="f14 s-c666">房地产开发流程（详细）</a></li><li><em class="rank  mr10">9</em><a target="_blank" href="" title="廉租房申请书怎么写" class="f14 s-c666">廉租房申请书怎么写</a></li>
                <li><em class="rank  mr10">10</em><a target="_blank" href="" title="经济适用房购房申请书范文" class="f14 s-c666">经济适用房购房申请书范文</a></li></ul></div></div>

                <div class="cl-tab-item clearfix" style="display:none;">
                <div class="w540 fl"><p class="tc f18"><a target="_blank" href="" title="2016最新医疗纠纷处理流程" class="s-oe">2016最新医疗纠纷处理流程</a></p>
                <p class="s-c666 mt10 lh22">制定医院医疗纠纷处理流程是为了正确处理医疗纠纷，保障医疗安全，进一步加强医疗质量管理。今天小编就为大家整理了有关医院医疗纠纷处理流程的文章，欢迎大家阅读了解！<a target="_blank" href="" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix">
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="2016包皮医疗事故找谁处理，打官司需要收集哪些证据"><i class="ico-sy i-sy8"></i>2016包皮医疗事故找谁处理，...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="2016包皮医疗事故需要注意什么，怎么处理"><i class="ico-sy i-sy8"></i>2016包皮医疗事故需要注意什...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="2016发生医疗事故怎么索要医疗事故保险费"><i class="ico-sy i-sy8"></i>2016发生医疗事故怎么索要医...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="2016发生医疗事故索要医疗事故保险费需要准备哪些材料"><i class="ico-sy i-sy8"></i>2016发生医疗事故索要医疗事...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="2016发生医疗事故索要医疗事故保险费需要注意什么问题"><i class="ico-sy i-sy8"></i>2016发生医疗事故索要医疗事...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="2016发生医疗事故索要医疗事故保险费有没有时间限制"><i class="ico-sy i-sy8"></i>2016发生医疗事故索要医疗事...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="2016发生医疗事故是医生责任还是医院责任"><i class="ico-sy i-sy8"></i>2016发生医疗事故是医生责任...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="2016严重医疗事故处理流程和一般医疗事故一样吗"><i class="ico-sy i-sy8"></i>2016严重医疗事故处理流程和...</a></p></li>
                </ul><p class="f16 mt20 mb15">医疗事故分类</p><table width="100%" border="1"><tr><td><a target="_blank" href="">医疗事故等级</a></td><td><a target="_blank" href="">医疗事故鉴定</a></td>
                <td><a target="_blank" href="/">医疗事故责任</a></td>
                <td><a target="_blank" href="">医疗事故赔偿</a></td>
                <td><a target="_blank" href="">医疗事故处理</a></td>
                </tr><tr><td><a target="_blank" href="">医疗纠纷</a></td>
                </tr></table>
                </div><div class="w220 fr"><p class="f14 title1 pb5">热门医疗事故知识</p><ul class="sy-list7">
                <li><em class="rank rank1 mr10">1</em><a target="_blank" href="" title="如何填写《设置医疗机构申请书》" class="f14 s-c666">如何填写《设置医疗机构申...</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="医疗纠纷的防范与处理专题法律讲座" class="f14 s-c666">医疗纠纷的防范与处理专题...</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="四级医疗事故赔偿标准" class="f14 s-c666">四级医疗事故赔偿标准</a></li><li><em class="rank  mr10">4</em><a target="_blank" href="" title="《医疗器械分类规则》2016年正式施行" class="f14 s-c666">《医疗器械分类规则》20...</a></li><li><em class="rank  mr10">5</em><a target="_blank" href="" title="医疗事故赔偿计算标准及公式" class="f14 s-c666">医疗事故赔偿计算标准及公...</a></li><li><em class="rank  mr10">6</em><a target="_blank" href="" title="医疗事故该如何处理" class="f14 s-c666">医疗事故该如何处理</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="原告起诉后申请司法过错鉴定而被告申请医疗事故技术鉴定的，法院如何处理？" class="f14 s-c666">原告起诉后申请司法过错鉴...</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="医疗事故等级赔偿标准" class="f14 s-c666">医疗事故等级赔偿标准</a></li>
                <li><em class="rank  mr10">9</em><a target="_blank" href="" title="贵州省最新工伤医疗补助金和就业补助金标准" class="f14 s-c666">贵州省最新工伤医疗补助金...</a></li>
                <li><em class="rank  mr10">10</em><a target="_blank" href="" title="三级乙等医疗事故赔偿标准" class="f14 s-c666">三级乙等医疗事故赔偿标准</a></li></ul></div></div>

                <div class="cl-tab-item clearfix" style="display:none;"><div class="w540 fl">
                <p class="tc f18"><a target="_blank" href="" title="什么是数罪并罚,如何计算的" class="s-oe">什么是数罪并罚,如何计算的</a></p>
                <p class="s-c666 mt10 lh22">数罪并罚，是指一个人在判决宣告以前犯有数罪，或者在判决宣告以后、刑罚执行完毕以前，发现被判刑的犯罪分子在判决宣告以前还有其他罪没有判决<a target="_blank" href="" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix"><li>
                <p class="pr20"><a target="_blank" class="f14 s-be" href="/laws/147539.aspx" title="票据诈骗罪如何认定"><i class="ico-sy i-sy8"></i>票据诈骗罪如何认定</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="票据诈骗罪如何量刑"><i class="ico-sy i-sy8"></i>票据诈骗罪如何量刑</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="票据诈骗罪的立案标准"><i class="ico-sy i-sy8"></i>票据诈骗罪的立案标准</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="李某收到银行错转资金,挥霍银行错转的资金触犯法律了吗"><i class="ico-sy i-sy8"></i>李某收到银行错转资金,挥霍银行...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="口供在什么情况下才具有法律效力,如何才能凭借口供定罪"><i class="ico-sy i-sy8"></i>口供在什么情况下才具有法律效力...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="怎么保护案发现场的痕迹与物证"><i class="ico-sy i-sy8"></i>怎么保护案发现场的痕迹与物证</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="证人拒绝出庭作证要承担哪些法律后果"><i class="ico-sy i-sy8"></i>证人拒绝出庭作证要承担哪些法律...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="电子证据包括什么,电子证据应该怎么收集"><i class="ico-sy i-sy8"></i>电子证据包括什么,电子证据应该...</a></p></li>
                </ul><p class="f16 mt20 mb15">刑法分类</p><table width="100%" border="1"><tr><td><a target="_blank" href="">犯罪</a></td><td><a target="_blank" href="">刑罚种类</a></td><td><a target="_blank" href="">刑罚运用</a></td>
                <td><a target="_blank" href="">刑法罪名</a></td>
                <td><a target="_blank" href="">刑法法律法规</a></td></tr></table>
                </div><div class="w220 fr"><p class="f14 title1 pb5">热门刑法知识</p><ul class="sy-list7"><li><em class="rank rank1 mr10">1</em><a target="_blank" href="/laws/74932.aspx" title="2016最新刑事诉讼法修正案全文" class="f14 s-c666">2016最新刑事诉讼法修...</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="被判处管制的犯罪分子在执行期间应当遵守哪些规定？" class="f14 s-c666">被判处管制的犯罪分子在执...</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="什么是假释？假释的条件是什么？假释的考验期多长？" class="f14 s-c666">什么是假释？假释的条件是...</a></li>
                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="什么是数罪并罚？数罪并罚是如何计算的?" class="f14 s-c666">什么是数罪并罚？数罪并罚...</a></li>
                <li><em class="rank  mr10">5</em><a target="_blank" href="" title="最高人民法院关于执行《中华人民共和国刑事诉讼法》的司法解释" class="f14 s-c666">最高人民法院关于执行《中...</a></li>
                <li><em class="rank  mr10">6</em><a target="_blank" href="" title="宝安看守所地址 深圳宝安区看守所电话 乘车路线" class="f14 s-c666">宝安看守所地址 深圳宝安...</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="最高人民检察院的刑事指定管辖" class="f14 s-c666">最高人民检察院的刑事指定...</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="无期徒刑最少需要服刑多少年" class="f14 s-c666">无期徒刑最少需要服刑多少...</a></li>
                <li><em class="rank  mr10">9</em><a target="_blank" href="" title="监狱探监时间规定" class="f14 s-c666">监狱探监时间规定</a></li><li><em class="rank  mr10">10</em><a target="_blank" href="" title="刑事案件立案标准" class="f14 s-c666">刑事案件立案标准</a></li></ul></div></div>

                <div class="cl-tab-item clearfix" style="display:none;">
                <div class="w540 fl"><p class="tc f18"><a target="_blank" href="" title="2016年如何进行农村宅基地搬迁补偿" class="s-oe">2016年如何进行农村宅基地搬</a></p>
                <p class="s-c666 mt10 lh22">农村宅基地是一种特殊性质的土地，该土地的拥有者只享有对该宅基地的使用权，如果遇到征地拆迁该如何补偿呢？今天小编就为大家整理了有关农村宅基地搬迁补偿的文章，欢迎大...<a target="_blank" href="" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix">
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="新农村安置房能买卖吗"><i class="ico-sy i-sy8"></i>新农村安置房能买卖吗</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="为获拆迁补偿,假离婚怎么处理"><i class="ico-sy i-sy8"></i>为获拆迁补偿,假离婚怎么处理</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="租客明知是动迁房还租赁，租客可以获赔偿吗"><i class="ico-sy i-sy8"></i>租客明知是动迁房还租赁，租客可...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="北京房屋拆迁安置对象有哪些,补偿标准是什么"><i class="ico-sy i-sy8"></i>北京房屋拆迁安置对象有哪些,补...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="租的房屋被拆迁,租客找谁赔偿"><i class="ico-sy i-sy8"></i>租的房屋被拆迁,租客找谁赔偿</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="待动迁房是什么,购买待动迁房的好处"><i class="ico-sy i-sy8"></i>待动迁房是什么,购买待动迁房的...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="北京律师给成都百姓上了一堂生动的拆迁普法课"><i class="ico-sy i-sy8"></i>北京律师给成都百姓上了一堂生动...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="回迁房产权的有效期限最新规定,投资回迁房的风险"><i class="ico-sy i-sy8"></i>回迁房产权的有效期限最新规定,...</a></p></li>
                </ul>
                <p class="f16 mt20 mb15">征地拆迁分类</p><table width="100%" border="1">
                <tr><td><a target="_blank" href="">拆迁补偿</a></td>
                <td><a target="_blank" href="">土地利用</a></td>
                <td><a target="_blank" href="">土地流转</a></td>
                <td><a target="_blank" href="">土地征收</a></td>
                <td><a target="_blank" href="">征地拆迁协议</a></td></tr>
                <tr><td><a target="_blank" href="">征地拆迁纠纷</a></td>
                <td><a target="_blank" href="">土地开发</a></td>
                <td><a target="_blank" href="">土地承包</a></td>
                </tr></table></div><div class="w220 fr"><p class="f14 title1 pb5">热门征地拆迁知识</p>
                <ul class="sy-list7"><li><em class="rank rank1 mr10">1</em><a target="_blank" href="" title="征地补偿新标准2016" class="f14 s-c666">征地补偿新标准2016</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="2016农村征地补偿新政策" class="f14 s-c666">2016农村征地补偿新政...</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="2016农村房屋拆迁补偿标准是什么" class="f14 s-c666">2016农村房屋拆迁补偿...</a></li>
                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="房屋拆迁赔偿协议书" class="f14 s-c666">房屋拆迁赔偿协议书</a></li><li><em class="rank  mr10">5</em><a target="_blank" href="" title="上海市公安局《关于做好人才类"集体户"清理和"社区公共户"落户审批准备工作的通知》" class="f14 s-c666">上海市公安局《关于做好人...</a></li>
                <li><em class="rank  mr10">6</em><a target="_blank" href="" title="拆迁当事人提起诉讼要求撤销裁决，裁决机关申请法院强制执行，法院是否可以强制执行？" class="f14 s-c666">拆迁当事人提起诉讼要求撤...</a></li><li><em class="rank  mr10">7</em><a target="_blank" href="/laws/109672.aspx" title="征地补偿协议" class="f14 s-c666">征地补偿协议</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="2016年如何进行农村宅基地搬迁补偿" class="f14 s-c666">2016年如何进行农村宅...</a></li>
                <li><em class="rank  mr10">9</em><a target="_blank" href="" title="征地补偿的新标准是什么" class="f14 s-c666">征地补偿的新标准是什么</a></li><li>
                <em class="rank  mr10">10</em><a target="_blank" href="" title="2016农村土地流转新政策" class="f14 s-c666">2016农村土地流转新政...</a></li></ul></div></div>

                <div class="cl-tab-item clearfix" style="display:none;">
                <div class="w540 fl"><p class="tc f18"><a target="_blank" href="" title="2016最新合同法(全文)及其司法解释(全文)" class="s-oe">2016最新合同法(全文)及其</a></p>
                <p class="s-c666 mt10 lh22">中人民共和国合同法全文、最高人民法院关于适用《中华人民共和国合同法》若干问题的解释<a target="_blank" href="/laws/83232.aspx" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix"><li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="二手房买卖合同无效的情形"><i class="ico-sy i-sy8"></i>二手房买卖合同无效的情形</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="二手房购房定金合同范本"><i class="ico-sy i-sy8"></i>二手房购房定金合同范本</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="合同诈骗罪的罚金数额怎么确定"><i class="ico-sy i-sy8"></i>合同诈骗罪的罚金数额怎么确定</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="2016最新合同诈骗罪由哪些要件构成"><i class="ico-sy i-sy8"></i>2016最新合同诈骗罪由哪些要...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="企业破产拖欠员工工资如何结算"><i class="ico-sy i-sy8"></i>企业破产拖欠员工工资如何结算</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="索要工程欠款需要提供哪些诉讼证据"><i class="ico-sy i-sy8"></i>索要工程欠款需要提供哪些诉讼证...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="合同诈骗罪最新量刑标准"><i class="ico-sy i-sy8"></i>合同诈骗罪最新量刑标准</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="合同诈骗罪怎么进行处罚,有哪些行使方式"><i class="ico-sy i-sy8"></i>合同诈骗罪怎么进行处罚,有哪些...</a></p></li>
                </ul><p class="f16 mt20 mb15">合同法分类</p>
                <table width="100%" border="1">
                <tr><td><a target="_blank" href="">合同订立</a></td>
                <td><a target="_blank" href="">合同终止</a></td>
                <td><a target="_blank" href="">合同债权</a></td>
                <td><a target="_blank" href="">合同欺诈</a></td>
                <td><a target="_blank" href="">合同效力</a></td></tr>
                <tr>
                <td><a target="_blank" href="">合同纠纷</a></td>
                <td><a target="_blank" href="">合同相关知识</a></td>
                <td><a target="_blank" href="">违约责任</a></td>
                <td><a target="_blank" href="">合同履行</a></td>
                </tr></table>
                </div><div class="w220 fr"><p class="f14 title1 pb5">热门合同法知识</p>
                <ul class="sy-list7"><li><em class="rank rank1 mr10">1</em><a target="_blank" href="" title="合同违约金的上限是多少" class="f14 s-c666">合同违约金的上限是多少</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="承诺书范本" class="f14 s-c666">承诺书范本</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="解除合同后有什么法律后果" class="f14 s-c666">解除合同后有什么法律后果</a></li>
                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="合同法司法解释（一）" class="f14 s-c666">合同法司法解释（一）</a></li>
                <li><em class="rank  mr10">5</em><a target="_blank" href="" title="借款合同如何确定案件管辖地？" class="f14 s-c666">借款合同如何确定案件管辖...</a></li>
                <li><em class="rank  mr10">6</em><a target="_blank" href="" title="二手房买卖合同的范本" class="f14 s-c666">二手房买卖合同的范本</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="新劳动法下关于企业职工退休年龄的规定" class="f14 s-c666">新劳动法下关于企业职工退...</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="最高人民法院关于指定管辖的指导案例" class="f14 s-c666">最高人民法院关于指定管辖...</a></li>
                <li><em class="rank  mr10">9</em><a target="_blank" href="" title="合同法中借贷法律关系相关法条汇总" class="f14 s-c666">合同法中借贷法律关系相关...</a></li>
                <li><em class="rank  mr10">10</em><a target="_blank" href="" title="房屋租赁合同(范本*格式）" class="f14 s-c666">房屋租赁合同(范本*格式...</a></li>
                </ul></div></div>

                <div class="cl-tab-item clearfix" style="display:none;"><div class="w540 fl">
                <p class="tc f18"><a target="_blank" href="" title="欠条、借条和收条的法律效力" class="s-oe">欠条、借条和收条的法律效力</a></p>
                <p class="s-c666 mt10 lh22">"借条"、"欠条"和"收条"是三种最基本的字据凭证，在日常生活、商业往来或经济活动中经常会使用到，这些字据相当于一纸合同，不能不慎重对待。作为日后主张债务权利的...<a target="_blank" href="" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix">
                <li>
                <p class="pr20"><a target="_blank" class="f14 s-be" href="" title="2016不当得利的法院管辖如何确定"><i class="ico-sy i-sy8"></i>2016不当得利的法院管辖如何...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="不当得利拒不返还要承担哪些法律责任"><i class="ico-sy i-sy8"></i>不当得利拒不返还要承担哪些法律...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="哪些条件构成不当得利"><i class="ico-sy i-sy8"></i>哪些条件构成不当得利</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="生活中要是发生不当得利纠纷怎么处理"><i class="ico-sy i-sy8"></i>生活中要是发生不当得利纠纷怎么...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="返还不当得利起诉书2016最新范本怎么写"><i class="ico-sy i-sy8"></i>返还不当得利起诉书2016最新...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="抵押权人的债权怎么确定"><i class="ico-sy i-sy8"></i>抵押权人的债权怎么确定</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="恶意不当得利受益人需要履行哪些义务"><i class="ico-sy i-sy8"></i>恶意不当得利受益人需要履行哪些...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="非债清偿构成不当得利有哪些构成条件"><i class="ico-sy i-sy8"></i>非债清偿构成不当得利有哪些构成...</a></p></li>
                </ul>
                <p class="f16 mt20 mb15">债权债务分类</p>
                <table width="100%" border="1">
                <tr><td><a target="_blank" href="">债的主体</a></td>
                <td><a target="_blank" href="">债的担保</a></td>
                <td><a target="_blank" href="">债的转移</a></td>
                <td><a target="_blank" href="">债的保全</a></td>
                <td><a target="_blank" href="">债的种类</a></td>
                </tr></table>
                </div>
                <div class="w220 fr">
                <p class="f14 title1 pb5">热门债权债务知识</p><ul class="sy-list7">
                <li><em class="rank rank1 mr10">1</em><a target="_blank" href="" title="2016年欠条怎么写才能在法律上生效（律师专业解答）" class="f14 s-c666">2016年欠条怎么写才能...</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="欠钱不还怎么办" class="f14 s-c666">欠钱不还怎么办</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="债务人欺骗担保人担保人仍应承担担保责任" class="f14 s-c666">债务人欺骗担保人担保人仍...</a></li>
                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="借条诉讼时效" class="f14 s-c666">借条诉讼时效</a></li>
                <li><em class="rank  mr10">5</em><a target="_blank" href="" title="最高人民法院关于审理民间借贷案件适用法律若干问题的规定全文" class="f14 s-c666">最高人民法院关于审理民间...</a></li>
                <li><em class="rank  mr10">6</em><a target="_blank" href="" title="什么是担保期限" class="f14 s-c666">什么是担保期限</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="个人债务纠纷起诉流程" class="f14 s-c666">个人债务纠纷起诉流程</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="先履行抗辩权与不安抗辩权的区别" class="f14 s-c666">先履行抗辩权与不安抗辩权...</a></li>
                <li><em class="rank  mr10">9</em><a target="_blank" href="" title="债权债务转让协议" class="f14 s-c666">债权债务转让协议</a></li>
                <li><em class="rank  mr10">10</em><a target="_blank" href="" title="欠条、借条和收条的法律效力" class="f14 s-c666">欠条、借条和收条的法律效...</a></li></ul>
                </div></div>

                <div class="cl-tab-item clearfix" style="display:none;">
                <div class="w540 fl">
                <p class="tc f18"><a target="_blank" href="" title="喝多少酒算酒驾" class="s-oe">喝多少酒算酒驾</a></p>
                <p class="s-c666 mt10 lh22">怎样算酒驾呢?车辆驾驶人有饮酒或者服用国家管制的精神药品、麻醉药品嫌疑的，公安机关交通管理部门应当按照《道路交通安全违法行为处理程序规定》及时抽血或者提取尿样，...<a target="_blank" href="" class="s-be ml5">[详细]</a></p>
                <ul class="art-list art-list-c2 art-list-le mt15 clearfix"><li>
                <p class="pr20"><a target="_blank" class="f14 s-be" href="" title="车祸出院后应该该先走哪个程序"><i class="ico-sy i-sy8"></i>车祸出院后应该该先走哪个程序</a></p>
                </li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="公交急刹车致乘客摔伤死亡谁负责"><i class="ico-sy i-sy8"></i>公交急刹车致乘客摔伤死亡谁负责</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="杜春福热心帮忙被撞致死,能获被救方赔偿吗"><i class="ico-sy i-sy8"></i>杜春福热心帮忙被撞致死,能获被...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="驾驶公交大巴车倒车致人死亡，由谁担责"><i class="ico-sy i-sy8"></i>驾驶公交大巴车倒车致人死亡，由...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="人被车撞了对方全责怎么索赔,对责任认定不服怎么办"><i class="ico-sy i-sy8"></i>人被车撞了对方全责怎么索赔,对...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="人被车撞死了怎么处理,赔偿标准是什么"><i class="ico-sy i-sy8"></i>人被车撞死了怎么处理,赔偿标准...</a></p></li>
                <li><p class="pr20"><a target="_blank" class="f14 s-be" href="" title="人被车撞了对方全责但是对方不给钱怎么办"><i class="ico-sy i-sy8"></i>人被车撞了对方全责但是对方不给...</a></p></li>
                <li><p class="pl20"><a target="_blank" class="f14 s-be" href="" title="郑先生交通事故责任认定为全责,对交警判定责任不服怎么办"><i class="ico-sy i-sy8"></i>郑先生交通事故责任认定为全责,...</a></p></li>
                </ul>
                <p class="f16 mt20 mb15">交通事故分类</p><table width="100%" border="1"><tr><td><a target="_blank" href="">交通事故鉴定</a></td><td><a target="_blank" href="">交通事故认定</a></td>
                <td><a target="_blank" href="">交通事故处理</a></td>
                <td><a target="_blank" href="">交通事故赔偿</a></td>
                <td><a target="_blank" href="">交通肇事</a></td>
                </tr>
                <tr><td><a target="_blank" href="">交通事故保险理赔</a></td>
                <td><a target="_blank" href="">交通事故诉讼</a></td>
                <td><a target="_blank" href="">交通法</a></td>
                </tr></table>
                </div><div class="w220 fr"><p class="f14 title1 pb5">热门交通事故知识</p>
                <ul class="sy-list7"><li><em class="rank rank1 mr10">1</em><a target="_blank" href="" title="交通法规新规定(2016年最新全文)" class="f14 s-c666">交通法规新规定(2016...</a></li>
                <li><em class="rank rank2 mr10">2</em><a target="_blank" href="" title="闯红灯如何处罚" class="f14 s-c666">闯红灯如何处罚</a></li>
                <li><em class="rank rank3 mr10">3</em><a target="_blank" href="" title="最新交通事故赔偿标准" class="f14 s-c666">最新交通事故赔偿标准</a></li>
                <li><em class="rank  mr10">4</em><a target="_blank" href="" title="2016年驾驶证年审新规定" class="f14 s-c666">2016年驾驶证年审新规...</a></li>
                <li><em class="rank  mr10">5</em><a target="_blank" href="" title="我国最新丧葬费赔偿标准" class="f14 s-c666">我国最新丧葬费赔偿标准</a></li><li><em class="rank  mr10">6</em><a target="_blank" href="/laws/83745.aspx" title="最高人民法院关于审理道路交通事故损害赔偿案件司法解释" class="f14 s-c666">最高人民法院关于审理道路...</a></li>
                <li><em class="rank  mr10">7</em><a target="_blank" href="" title="交通事故责任认定的依据和划分标准" class="f14 s-c666">交通事故责任认定的依据和...</a></li>
                <li><em class="rank  mr10">8</em><a target="_blank" href="" title="河北省（石家庄）交通事故赔偿标准（最新）" class="f14 s-c666">河北省（石家庄）交通事故...</a>
                </li><li><em class="rank  mr10">9</em><a target="_blank" href="" title="2016最新交通肇事罪司法解释全文" class="f14 s-c666">2016最新交通肇事罪司...</a></li>
                <li><em class="rank  mr10">10</em><a target="_blank" href="" title="车辆闯红灯扣几分" class="f14 s-c666">车辆闯红灯扣几分</a></li></ul></div></div>

            </div>

        </div>

        <div id="H_GB_" class="mt20 clearfix" mt="div#adlf" n="6"></div>

        

        


</div>

  <script type="text/javascript" src="__TMPL__statics/js/tabs.js"></script>
    <script type="text/javascript">

        // 知名律师

        $(".fs-lr-list").mouseover(function () {

            $(".fs-lr-pop", this).removeClass("none");

        }).mouseout(function () {

            $(".fs-lr-pop", this).addClass("none");

        });

        //知识、

        $('#laws').tabs({

            selected: 0,

            tab: '.cl-tab-tit span',

            content: '.cl-tab-nr div.cl-tab-item',

            activeClass: 'cl-tab-click',

            tabTagName: 'span',

            contentTagName: 'div',

            eventType: 'mouseover'

        });

        //解决方案

        $('#fangan').tabs({

            selected: 0,

            tab: '.cl-tab-tit span',

            content: '.cl-tab-nr div.cl-tab-item',

            activeClass: 'cl-tab-click',

            tabTagName: 'span',

            contentTagName: 'div',

            eventType: 'mouseover',

            onSwitch: function (index) {

                $('#lawyers li').addClass('none').eq(index).removeClass('none');

                var txt = $('#fangan>div.cl-tab-tit span').eq(index).text();

                $('#CateName').text(txt + '主编律师');

            }

        });

        //面对面和访谈

        $('.facetalk').tabs({

            selected: 0,

            tab: '.sy-list4-tab a',

            content: '.sy-list4',

            activeClass: 'tab-hover',

            tabTagName: 'a',

            contentTagName: 'div',

            eventType: 'mouseover',

            onSwitch: function () {

                if ($('.tab-hover').hasClass('showlink')) {

                    $('#backhis').show();

                } else $('#backhis').hide();

            }

        });

        //页面底部友情链接和城市分站

        $('.friendweb').tabs({

            selected: 0,

            tab: '.ft-bl-tab span',

            content: '.ft-bl-list li',

            activeClass: 'bl-tab-ct',

            tabTagName: 'span',

            contentTagName: 'li',

            eventType: 'click'

        });



        $(function () {

            $('body').on('head-getLocationReady', function (event, data) {

                var match = /(?:^|[ ;])a=\d(\d{6});?/g.exec(document.cookie);

                var id = match ? match[1] : '';

                if (id) {

                    $('#pid').combobox('setValue', id.substr(0, 2) + '0000');

                    $('#cid').combobox('setValue', id);

                    $('#quespid').combobox('setValue', id.substr(0, 3) + '000');

                    $('#quescid').combobox('setValue', id);

                    $('#entrustPid').combobox('setValue', id.substr(0, 3) + '000');

                    $('#entrustCid').combobox('setValue', id);

                }

            });

            $('#cateid').combobox();

            $('#projeid').combobox();

            $('#projeqx').combobox();



            $('#btnSearchLawyer').on('click', function () {

                var ids = [$('#pid').val() - 0, $('#cid').val() - 0];

                var id = Math.max.apply(null, ids);

                var py = dist[id] ? dist[id].p : '';

                $('<form target="_blank" method="post"></form>').attr("action", ((py ? "http://www./" : "http://www./") + (py ? py + '/' : ''))).appendTo('body').get(0).submit();

            });

            //咨询搜索

            var result = [{ "text": "请选择专长", "value": "" }];

            for (var k = 0, len = category.length; k < len; k++) {

                result.push({ 'text': category[k][0], 'value': category[k][2] });

            }

            $('#txtCate').combobox().combobox('setItems', result);



            $('#quesearch').on('click', function () {

                var text = $('#quesText').val();

                if ($.trim(text).length > 0) {

                    window.open("http://s.66law.cn/cse/search/?nsid=2&s=18259188589626635806&q=" + text);

                } else {

                    var gid = $('#txtCate').val() - 0;

                    var pid = $('#quespid').val() - 0;

                    var cid = $('#quescid').val() - 0;

                    if (pid > 0 || cid > 0 || gid > 0) {

                        window.open("/Question/301Run.aspx?provinceid=" + pid + "&cityid=" + cid + "&lawcategory=" + gid);

                    }

                }

            });

            //案件搜索

            $('#entrustMoney').combobox();

            $('#entrustState').combobox();

            $('#soEntrust').on('click', function () {

                var mon = $('#entrustMoney').val() - 0;

                var sta = $('#entrustState').val() - 0;

                var pid = $('#entrustPid').val() - 0;

                var cid = $('#entrustCid').val() - 0;

                if (mon > 0 || sta > 0 || pid > 0 || cid > 0) {

                    window.open('/entrust/a' + (cid > 0 ? cid : pid) + '_b' + sta + '_c' + mon + '_d1.aspx');

                } else {

                    window.open('/entrust/a0_b0_c0_d1.aspx');

                }

            });

            //解决方案

            $('#cateid').on('change', function () {

                var items = [{ "text": "请选择问题类别", "value": "0" }];

                var id = $(this).val();

                $.ajax({

                    url: "/ajax/HomeAjax.aspx?op=1",

                    data: {

                        cateid: id

                    },

                    dataType: 'json'

                }).done(function (res) {

                    //console.log(res);

                    $('#projeid').combobox('setItems', res);

                }).fail(function () {

                    $('#projeid').combobox('setItems', items);;

                });//projeqx

            });

            $('#projeid').on('change', function () {

                var items = [{ "text": "请选择问题情形", "value": "0" }];

                var id = $(this).val() - 0;

                if (id > 0) {

                    $.ajax({

                        url: "/ajax/HomeAjax.aspx?op=1",

                        data: {

                            proid: id

                        },

                        dataType: 'json'

                    }).done(function (res) {

                        //console.log(res);



                        $('#projeqx').combobox('setItems', res);

                    }).fail(function () {

                        $('#projeqx').combobox('setItems', items);;

                    });

                } else {

                    $('#projeqx').combobox('setItems', items);

                }

            });

            $('#btnGetSolution').on('click', function () {

                var projqxid = $('#projeqx').val() - 0;

                var cateId = $('#cateid').val() - 0;

                if (projqxid > 0) {

                    window.open('/fangan/anli_' + projqxid + '/');

                } else window.open('/fangan/category_' + cateId + '/');

            });

        });

    </script>
<!--tab-->
<!--通屏广告-->
<div class="tp0">
  <div class="tp"><img src="__TMPL__statics/images/gg1.jpg" /></div>
</div>
<!--通屏广告-->

<!--友情链接-->
<div class="yq0">
  <div class="yq">
    <div class="yq_1"><div class="yq_1_left">友情链接</div><div class="yq_1_right"><a href="">申请友情链接</a></div></div>
    <div class="yq_2">
      <ul>
       <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
        <li><img src="__TMPL__statics/images/yq01.jpg" /></li>
      </ul>
    </div>
    <div class="yq_3">
      <ul>
       <li><a href="">宿迁维权网</a></li><li> |</li> <li><a href="">宿迁维权网</a></li><li>|</li> <li><a href="">宿迁维权网</a></li><li>|</li>
        <li><a href="">宿迁维权网</a></li><li> |</li> <li><a href="">宿迁维权网</a></li><li>|</li> <li><a href="">宿迁维权网</a></li><li>|</li>
       <li><a href="">宿迁维权网</a></li><li> |</li> <li><a href="">宿迁维权网</a></li><li>|</li> <li><a href="">宿迁维权网</a></li><li>|</li>
            <li><a href="">宿迁维权网</a></li><li> |</li> <li><a href="">宿迁维权网</a></li><li>|</li> <li><a href="">宿迁维权网</a></li><li>|</li>
       <li><a href="">宿迁维权网</a></li><li> |</li> <li><a href="">宿迁维权网</a></li><li>|</li> <li><a href="">宿迁维权网</a></li><li>|</li>
       <li><a href="">宿迁维权网</a></li><li> |</li> <li><a href="">宿迁维权网</a></li><li>|</li> <li><a href="">宿迁维权网</a></li><li>|</li>
  
      </ul>
    </div>
  </div>
</div>




<!--foot-->
<div class="foot0">
  <div class="foot">
    <div class="foot_left"><img src="__TMPL__statics/images/dibu_sm.png" /></div>
    <div class="foot_center">
      <div class="foot_center_1">快速提问</div>
      <div class="foot_center_2"> 
      <input type="text" name="mm"placeholder="请输入您的问题" class="foot_center_2_1" value="" />
     <input type="submit" value="快速提问" class="foot_center_2_2"/></div>
      <div class="foot_center_3">
        <ul>
          <li><a href="">律师注册</a></li>
           <li><a href="">关于我们</a></li>
            <li><a href="">手机大律师</a></li>
             <li><a href="">会员服务</a></li>
              <li><a href="">网站导航</a></li>
               <li><a href="">模板展示</a></li>
                <li><a href="">公司动态</a></li>
                 <li><a href="">付款方式</a></li>
                  <li><a href="">修正地区</a></li>
        </ul>
      </div>
    </div>
    <div class="foot_right">
      <div class="foot_right_1">联系我们</div>
      <div class="foot_right_2"><img src="__TMPL__statics/images/QQzx.png" /><img src="__TMPL__statics/images/QQzx.png" /></div>
      <div class="foot_right_3">公司地址：郑州市金水区农业路经五路国际企业中心A座3号2层郑州法律网</div>
      <div class="foot_right_4"><img src="__TMPL__statics/images/dianhua.png" /></div>
    </div>
  </div>
</div>
<!--foot-->
<!--dibu-->
<div class="dibu0">
  <div class="dibu">
    <div class="dibu_1">
    <img src="__TMPL__statics/images/db01.gif" /><img src="__TMPL__statics/images/db02.gif" /><img src="__TMPL__statics/images/db03.gif" /><img src="__TMPL__statics/images/db04.gif" /><img src="__TMPL__statics/images/db05.gif" /><img src="__TMPL__statics/images/db06.gif" /><br/>
    </div>
    <div class="dibu_2">
    增值电信业务经营许可证 Copyright @ 2016-2026 郑州律师网 版权所有<br/>
    法律顾问：郑州律师事务所 | 国家信息产业部备案: 豫ICP备XXXXX号<br/>
    </div>
  </div>
</div>
<!--dibu-->
<!--select-->

<script src="__TMPL__statics/js/jquery-ui.min.js"></script>

<script src="__TMPL__statics/js/select-widget-min.js"></script>


</body>
</html>