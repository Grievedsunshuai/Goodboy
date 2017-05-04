<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>个人中心</title>
<meta name="viewport" content="width=1226">
<meta name="description" content="">
<meta name="keywords" content="小米商城">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{url('/Home/person/base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('/Home/person/main.css') }}">
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a href="">小米商城</a><span class="sep">|</span>
            <a href="" target="_blank" >MIUI</a><span class="sep">|</span>
            <a href="" target="_blank" >米聊</a><span class="sep">|</span>
            <a href="" target="_blank" >游戏</a><span class="sep">|</span>
            <a href="" target="_blank" >多看阅读</a><span class="sep">|</span>
            <a href="" target="_blank">云服务</a><span class="sep">|</span><a href="" target="_blank">金融</a><span class="sep">|</span>
            <a href="" target="_blank" >小米商城移动版</a><span class="sep">|</span>
            <a href="" target="_blank">问题反馈</a><span class="sep">|</span>
            <a href="" data-toggle="modal" >Select Region</a>
        </div>
        <div class="topbar-cart topbar-cart-filled" id="J_miniCartTrigger">
            <a class="cart-mini" id="J_miniCartBtn" href="" ><i class="iconfont"></i>购物车<span class="cart-mini-num J_cartNum">（13）</span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        <div class="topbar-info" id="J_userInfo">

        	<a rel="nofollow" href="/home1/over">退出登录</a>
        	<span class="user">
        	<a rel="nofollow" class="user-name" href="" target="_blank" ><span class="name">{{ session()->get('homeuser')->User_name }}</span><i class="iconfont"></i></a>
        	<ul class="user-menu">
        		<li>
        			<a rel="nofollow" href="" target="_blank" >个人中心</a>
        		</li>
        		<li>
        			<a rel="nofollow" href="" target="_blank" >评价晒单</a>
        		</li>
        		<li>
        			<a rel="nofollow" href="" target="_blank" >我的喜欢</a>
        		</li>
        		<li>
        			<a rel="nofollow" href="" target="_blank" >小米账户</a>
        		</li>
        		<li>
        			<a rel="nofollow" href="">退出登录</a>
        		</li>
        	</ul>
        	</span>
        	<span class="sep">|</span>
        	<span class="message"><a rel="nofollow" href="" >消息通知<i class="J_miMessageTotal"></i></a></span>
        	<span class="sep">|</span>
        	<a rel="nofollow" class="link link-order" href="/home1/orderlist" target="_blank" >我的订单</a>
        
        </div>
    </div>
</div>

<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="http://www.mi.com/index.html" title="小米官网" data-stat-id="f4006c1551f77f22" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f4006c1551f77f22', '//www.mi.com/index.html', 'pcpid', '']);">小米官网</a>
        </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="http://list.mi.com/" data-stat-id="d7d79a744cdeefa8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d7d79a744cdeefa8', '//list.mi.com', 'pcpid', '']);"><span class="text">全部商品分类</span></a>
                <div class="site-category"> <ul id="J_categoryList" class="site-category-list clearfix">  <li class="category-item"> <a class="title" href="http://www.mi.com/buyphone/" data-stat-id="46830753a57a2e5a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-46830753a57a2e5a', '//www.mi.com/buyphone/', 'pcpid', '']);">手机 电话卡<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5c/" data-stat-id="a01315a7d2ac2cb2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a01315a7d2ac2cb2', '//www.mi.com/mi5c/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/5c_80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/5c_140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米手机5c</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5c" data-stat-id="f23a9356cf901e64" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f23a9356cf901e64', '//item.mi.com/buyphone/mi5c', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/minote2/" data-stat-id="4f0d4b136403dfaf" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4f0d4b136403dfaf', '//www.mi.com/minote2/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xmNOTE2-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xmNOTE2-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米Note 2</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/minote2" data-stat-id="e9a44d8c2b92c4b1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e9a44d8c2b92c4b1', '//item.mi.com/buyphone/minote2', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mix/" data-stat-id="59e7a0857a3747f0" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-59e7a0857a3747f0', '//www.mi.com/mix/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/MIX-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/MIX-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米MIX</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mix" data-stat-id="72da6b1fc2fa9761" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-72da6b1fc2fa9761', '//item.mi.com/buyphone/mix', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5s" data-stat-id="fe92bf96c6d2b08d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-fe92bf96c6d2b08d', '//www.mi.com/mi5s', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5S-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5S-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米5s</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5s" data-stat-id="023e81eb5b8ce1a3" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-023e81eb5b8ce1a3', '//item.mi.com/buyphone/mi5s', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5splus/" data-stat-id="4de987fa9c6e580b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4de987fa9c6e580b', '//www.mi.com/mi5splus/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5S-plus-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5S-plus-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米5s Plus</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5splus" data-stat-id="229553e45e382847" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-229553e45e382847', '//item.mi.com/buyphone/mi5splus', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/mi5/" data-stat-id="dcbd42ece248cddf" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-dcbd42ece248cddf', '//www.mi.com/mi5/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/xm5-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/xm5-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米手机5</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/mi5" data-stat-id="79cf129bec5862f2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-79cf129bec5862f2', '//item.mi.com/buyphone/mi5', 'pcpid', '']);">选购</a> </li></ul><ul class="children-list children-list-col children-list-col-2"><li class="star-goods"> <a class="link" href="http://www.mi.com/redminote4x/" data-stat-id="51bf7367056c8f3f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-51bf7367056c8f3f', '//www.mi.com/redminote4x/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4x80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4x140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米Note 4X</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redminote4x" data-stat-id="4af303d692bb8d9d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4af303d692bb8d9d', '//item.mi.com/buyphone/redminote4x', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redminote4/" data-stat-id="2cee87e56a005597" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-2cee87e56a005597', '//www.mi.com/redminote4/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hmnote4-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hmnote4-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米Note 4</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/note4/" data-stat-id="86ef607fd1c99b1b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-86ef607fd1c99b1b', '//item.mi.com/buyphone/note4/', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4x/" data-stat-id="16eb2f0dcad4e4d0" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-16eb2f0dcad4e4d0', '//www.mi.com/redmi4x/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x_80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x_140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4X</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redmi4x" data-stat-id="aef98c3b9eaa3095" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-aef98c3b9eaa3095', '//item.mi.com/buyphone/redmi4x', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4/" data-stat-id="031c221d6bb07cb2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-031c221d6bb07cb2', '//www.mi.com/redmi4/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hm4-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hm4-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buyphone/redmi4" data-stat-id="32e47a4f8801527b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-32e47a4f8801527b', '//item.mi.com/buyphone/redmi4', 'pcpid', '']);">选购</a> </li><li class="star-goods"> <a class="link" href="http://www.mi.com/redmi4a/" data-stat-id="f7e6375371f85580" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f7e6375371f85580', '//www.mi.com/redmi4a/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/hm4A-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/hm4A-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">红米4A</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/product/10000039.html" data-stat-id="47f1963363e66da1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-47f1963363e66da1', '//item.mi.com/product/10000039.html', 'pcpid', '']);">选购</a> </li><li> <a class="link" href="http://www.mi.com/compare/" data-stat-id="d513937922078892" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d513937922078892', '//www.mi.com/compare/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/compare.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/compare.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">对比手机</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/mimobile/" data-stat-id="9f6c18e55ea306ad" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9f6c18e55ea306ad', '//www.mi.com/mimobile/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mimobile.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/mimobile.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米移动 电话卡</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/mibookair/" data-stat-id="2042589582b51b9f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-2042589582b51b9f', '//www.mi.com/mibookair/', 'pcpid', '']);">笔记本 平板<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li class="star-goods"> <a class="link" href="http://www.mi.com/mibookair/" data-stat-id="02bba68268574ef6" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-02bba68268574ef6', '//www.mi.com/mibookair/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米笔记本Air</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/buymibook/air" data-stat-id="4175d784950ce002" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4175d784950ce002', '//item.mi.com/buymibook/air', 'pcpid', '']);">选购</a> </li>  <li class="star-goods"> <a class="link" href="http://www.mi.com/mipad3/" data-stat-id="373d21e6d7ff7a65" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-373d21e6d7ff7a65', '//www.mi.com/mipad3/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米平板3</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="http://item.mi.com/product/10000038.html" data-stat-id="e2ef06ca3832fdcb" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e2ef06ca3832fdcb', '//item.mi.com/product/10000038.html', 'pcpid', '']);">选购</a> </li>  <li> <a class="link" href="http://item.mi.com/1163000011.html" data-stat-id="034361a5f477a490" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-034361a5f477a490', '//item.mi.com/1163000011.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/usbzjqggg80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/usbzjqggg140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">USB-C转接器</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/accessories/tag?id=neidanbao" data-stat-id="5ddea3edf913ea3e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-5ddea3edf913ea3e', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/neidanbao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/meidanbao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米笔记本内胆包</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/mouse/" data-stat-id="4457b3252c3587ab" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4457b3252c3587ab', '//www.mi.com/mouse/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米便携鼠标</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/mouse-2/" data-stat-id="f35d955abbeec998" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f35d955abbeec998', '//www.mi.com/mouse-2/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wxsb80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wxsb140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米无线鼠标</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/buytv/" data-stat-id="6f890a25c91eccd1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6f890a25c91eccd1', '//www.mi.com/buytv/', 'pcpid', '']);">电视 盒子<i class="iconfont"></i></a> <div class="children clearfix children-col-4"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/mitv4A/43/" data-stat-id="d90a841f2eef471e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d90a841f2eef471e', '//www.mi.com/mitv4A/43/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_43.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_43.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 43英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/49/" data-stat-id="37c383314a5ec165" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-37c383314a5ec165', '//www.mi.com/mitv4A/49/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_49.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_49.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 49英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/55/" data-stat-id="7dc9084862fb1d50" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-7dc9084862fb1d50', '//www.mi.com/mitv4A/55/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xp80_55.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xp140_55.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 55英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv4A/65/" data-stat-id="acbd836ebfef905b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-acbd836ebfef905b', '//www.mi.com/mitv4A/65/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/xp80_65.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/xp140_65.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视4A 65英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/48/" data-stat-id="deb3512bb33e8f86" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-deb3512bb33e8f86', '//www.mi.com/mitv3s/48/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mitv3s48.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/mitv3s48.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 48英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/55/" data-stat-id="e1548be4f518c33d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e1548be4f518c33d', '//www.mi.com/mitv3s/55/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/553s80.png?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/553s140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 55英寸</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/mitv3s/60/" data-stat-id="88e61d4431963249" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-88e61d4431963249', '//www.mi.com/mitv3s/60/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/018080.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/01140140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 60英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/65flat/" data-stat-id="d92c3d9093b7c850" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d92c3d9093b7c850', '//www.mi.com/mitv3s/65flat/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/653s80.png?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/653s140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 65英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/65/" data-stat-id="365af1430196b8be" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-365af1430196b8be', '//www.mi.com/mitv3s/65/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/6580side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/65140list.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3s 65英寸 曲面</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/" data-stat-id="e62aa373f82fcd9d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e62aa373f82fcd9d', '//www.mi.com/mitv3/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv60.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tv60.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3 60英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/70/" data-stat-id="4311a86a7b67ef8d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4311a86a7b67ef8d', '//www.mi.com/mitv3/70/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv70.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tv701.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米电视3 70英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mibox3s/" data-stat-id="c0c8578fa61d7279" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c0c8578fa61d7279', '//www.mi.com/mibox3s/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hezi80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3s</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/mibox3c/" data-stat-id="4b8e63bf66a86d26" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4b8e63bf66a86d26', '//www.mi.com/mibox3c/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hezi80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3c</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezi3s/" data-stat-id="2beed28cb767d5e2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-2beed28cb767d5e2', '//www.mi.com/hezi3s/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezizengqiangban80side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/hezizengqiang140list.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子3 增强版</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezimini/" data-stat-id="ae148328f48a33e8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ae148328f48a33e8', '//www.mi.com/hezimini/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezimini.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/hezimini.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米盒子 mini</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154100018.html" data-stat-id="1f26c8471a20f8d4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-1f26c8471a20f8d4', '//item.mi.com/1154100018.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/diyinpao.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/diyinpao.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米低音炮</span></a>  </li><li> <a class="link" href="http://www.mi.com/shb/" data-stat-id="b7f4080020cd39b6" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b7f4080020cd39b6', '//www.mi.com/shb/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/shb.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/shb.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">蓝牙手柄</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=yinxiang" data-stat-id="709f6125bfbbc649" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-709f6125bfbbc649', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/80x80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/140x140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">家庭音响</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-4"><li> <a class="link" href="http://list.mi.com/tvboxpj" data-stat-id="5328b511c8cb8295" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-5328b511c8cb8295', '//list.mi.com/tvboxpj', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianshipeijian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/dianshipeijian.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电视盒子配件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/smart/" data-stat-id="44a546bb64cac00a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-44a546bb64cac00a', '//www.mi.com/smart/', 'pcpid', '']);">路由器 智能硬件<i class="iconfont"></i></a> <div class="children clearfix children-col-4"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://list.mi.com/174" data-stat-id="d8a58aa8d3c77358" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d8a58aa8d3c77358', '//list.mi.com/174', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/doodle/jiqiren.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/doodle/jiqiren.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家扫地机器人及配件</span></a>  </li><li> <a class="link" href="http://www.mi.com/mivr/" data-stat-id="26e30384b2ac1dc4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-26e30384b2ac1dc4', '//www.mi.com/mivr/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xinvr80.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xinvr140.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米VR眼镜</span></a>  </li><li> <a class="link" href="http://www.mi.com/miwifi3/" data-stat-id="94b25b24314c124d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-94b25b24314c124d', '//www.mi.com/miwifi3/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米路由器</span></a>  </li><li> <a class="link" href="http://www.mi.com/scooter/" data-stat-id="74de33e425b1ff9a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-74de33e425b1ff9a', '//www.mi.com/scooter/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/list/scooter.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/scooter.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">九号平衡车</span></a>  </li><li> <a class="link" href="http://www.mi.com/mibicycle/" data-stat-id="06ab7834f91d15b4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-06ab7834f91d15b4', '//www.mi.com/mibicycle/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zxc80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zxc140-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电助力折叠自行车</span></a>  </li><li> <a class="link" href="http://www.mi.com/kettle/" data-stat-id="7c2d76a34f58e647" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-7c2d76a34f58e647', '//www.mi.com/kettle/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shuihu80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shuihu140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家恒温电水壶</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/carair/" data-stat-id="97a860766b02646e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-97a860766b02646e', '//www.mi.com/carair/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/czjhq80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/czjhq140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家车载空气净化器</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=shoubiao" data-stat-id="a878b5641b36eb7a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a878b5641b36eb7a', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianhuashoubiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianhuashoubiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手表</span></a>  </li><li> <a class="link" href="http://www.mi.com/dianfanbao/" data-stat-id="336e4830683b8c09" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-336e4830683b8c09', '//www.mi.com/dianfanbao/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家智能电饭煲</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=shexiangji" data-stat-id="aecc867374f9264b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-aecc867374f9264b', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiaobai80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiaobai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能摄像机</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=jinghuaqilvxin" data-stat-id="f71f91beb34f62f5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f71f91beb34f62f5', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">净化器及滤芯</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=water" data-stat-id="14404578e514d5fc" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-14404578e514d5fc', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">净水器及滤芯</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://list.mi.com/accessories/tag?id=xueyaji" data-stat-id="23ffe916686f0d97" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-23ffe916686f0d97', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">血压计</span></a>  </li><li> <a class="link" href="http://www.mi.com/toyblock/" data-stat-id="42b52f6d39ccec40" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-42b52f6d39ccec40', '//www.mi.com/toyblock/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/jiqiren80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/jiqiren140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔积木机器人</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=smartlamp" data-stat-id="bcf351abbaf0e424" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-bcf351abbaf0e424', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能灯</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitu/" data-stat-id="09532d2c94d4a72a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-09532d2c94d4a72a', '//www.mi.com/mitu/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/gushiji80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/gushiji140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔智能故事机</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/smartsuit" data-stat-id="030b3c5c246e29b0" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-030b3c5c246e29b0', '//list.mi.com/accessories/smartsuit', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">智能家庭组合</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/shouhuan" data-stat-id="cbd3ed384d23885f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-cbd3ed384d23885f', '//list.mi.com/accessories/shouhuan', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shouhuan280.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shouhuan2140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手环及配件</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-4"><li> <a class="link" href="http://www.mi.com/scale/" data-stat-id="e5ab29621c71510d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e5ab29621c71510d', '//www.mi.com/scale/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/scale.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/scale.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">体重秤 / 体脂秤</span></a>  </li><li> <a class="link" href="http://www.mi.com/scooter2/" data-stat-id="c2f562c4e23e5e78" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c2f562c4e23e5e78', '//www.mi.com/scooter2/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huabanche80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huabanche140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">电动滑板车</span></a>  </li><li> <a class="link" href="http://www.mi.com/miuav/" data-stat-id="97ae07fe031958da" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-97ae07fe031958da', '//www.mi.com/miuav/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wurenji80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wurenji140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米无人机</span></a>  </li><li> <a class="link" href="http://www.mi.com/mj-carcorder/" data-stat-id="c10f593e22ba03ae" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c10f593e22ba03ae', '//www.mi.com/mj-carcorder/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jly80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jly140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家行车记录仪</span></a>  </li><li> <a class="link" href="http://www.mi.com/mj-interphone/" data-stat-id="d7107fe1a13a76c4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d7107fe1a13a76c4', '//www.mi.com/mj-interphone/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/djj80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/djj140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米米家对讲机</span></a>  </li><li> <a class="link" href="http://list.mi.com/26?cfrom=search" data-stat-id="56328196a1d010e1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-56328196a1d010e1', '//list.mi.com/26', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">全部智能硬件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/accessories/tag?id=dianyuancunchu" data-stat-id="6fdf11296f89d2d7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6fdf11296f89d2d7', '//list.mi.com/accessories/tag', 'pcpid', '']);">移动电源 电池 插线板<i class="iconfont"></i></a> <div class="children clearfix children-col-2"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/dianyuan/" data-stat-id="3882f3539db6b687" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-3882f3539db6b687', '//www.mi.com/dianyuan/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianyuan280.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianyuan2140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米移动电源</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=powerstrip" data-stat-id="47cf315852ce47da" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-47cf315852ce47da', '//list.mi.com/accessories/tag', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/c1xb343.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/c1xb344.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">插线板</span></a>  </li><li> <a class="link" href="http://list.mi.com/13" data-stat-id="cab063b9360f121b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-cab063b9360f121b', '//list.mi.com/13', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/yidongdianyuan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/pinpaidianyuan.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">品牌移动电源</span></a>  </li><li> <a class="link" href="http://list.mi.com/dyfj" data-stat-id="caeafd5a1bb65f9b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-caeafd5a1bb65f9b', '//list.mi.com/dyfj', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianyuanfujian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/dianyuanfujian.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">移动电源附件</span></a>  </li><li> <a class="link" href="http://list.mi.com/15" data-stat-id="7d140020b5d6e726" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-7d140020b5d6e726', '//list.mi.com/15', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">充电器</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154300033.html" data-stat-id="951e4d241a6179ba" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-951e4d241a6179ba', '//item.mi.com/1154300033.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/5Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/5Battery2.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">彩虹5号电池</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://item.mi.com/1155000010.html" data-stat-id="236dea5d392af150" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-236dea5d392af150', '//item.mi.com/1155000010.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/7Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/7Battery2.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">彩虹7号电池</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/17" data-stat-id="a4277f9d894a1647" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a4277f9d894a1647', '//list.mi.com/17', 'pcpid', '']);">耳机 音箱<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/headphone/" data-stat-id="3258c74135aec1ff" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-3258c74135aec1ff', '//www.mi.com/headphone/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/toudai80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/toudai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米头戴式耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/headphone2/" data-stat-id="0e4c3f316b9dfac5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-0e4c3f316b9dfac5', '//www.mi.com/headphone2/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/tdsqs80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/tdsqs140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">头戴式耳机轻松版</span></a>  </li><li> <a class="link" href="http://www.mi.com/earphonepro/" data-stat-id="9675131e8a287279" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9675131e8a287279', '//www.mi.com/earphonepro/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/qtpro80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/qtpro140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米圈铁耳机 Pro</span></a>  </li><li> <a class="link" href="http://www.mi.com/quantie/" data-stat-id="430e3e6af8c61ab2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-430e3e6af8c61ab2', '//www.mi.com/quantie/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/quantie.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/quantie.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米圈铁耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/capsuleearphone/" data-stat-id="0a2612048f9a6f41" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-0a2612048f9a6f41', '//www.mi.com/capsuleearphone/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/jiaonang80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/jiaonang140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米胶囊耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/huosai3/" data-stat-id="5bb221e94fe05175" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-5bb221e94fe05175', '//www.mi.com/huosai3/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huosai1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huosai.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米活塞耳机清新版</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/bluetooth-earphone/" data-stat-id="a528cb07c5dfba26" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a528cb07c5dfba26', '//www.mi.com/bluetooth-earphone/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/bluetoothheadset.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/bluetoothheadset.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米蓝牙耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/sportearphone/" data-stat-id="4ac325bb680657ec" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4ac325bb680657ec', '//www.mi.com/sportearphone/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/yundong80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/yundong140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米运动蓝牙耳机</span></a>  </li><li> <a class="link" href="http://list.mi.com/18" data-stat-id="1ac7836a67fcaf21" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-1ac7836a67fcaf21', '//list.mi.com/18', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/pinpai80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/pinpai140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">品牌耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/wifispeaker/" data-stat-id="adadf6e20daafa18" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-adadf6e20daafa18', '//www.mi.com/wifispeaker/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/wlyx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/wlyx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米网络音响</span></a>  </li><li> <a class="link" href="http://www.mi.com/pocketaudio/" data-stat-id="5e049552b721056d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-5e049552b721056d', '//www.mi.com/pocketaudio/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/pocketaudio.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/pocketaudio.png?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米蓝牙音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/littleaudio/" data-stat-id="85c59f5f02cc5ba0" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-85c59f5f02cc5ba0', '//www.mi.com/littleaudio/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米随身蓝牙音箱</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://www.mi.com/yinxiang/" data-stat-id="bd054d147716510f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-bd054d147716510f', '//www.mi.com/yinxiang/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-160.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小钢炮音箱 2</span></a>  </li><li> <a class="link" href="http://www.mi.com/bluetooth-speaker/" data-stat-id="6897e3df5ac64dd8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6897e3df5ac64dd8', '//www.mi.com/bluetooth-speaker/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/fhzlyyx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fhzlyyx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米方盒子蓝牙音箱2</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154400010.html" data-stat-id="b62a48144039e657" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b62a48144039e657', '//item.mi.com/1154400010.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/fanghezi.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/fanghezi.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米方盒子音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/alarmclock/" data-stat-id="8db03aff38af4e6c" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8db03aff38af4e6c', '//www.mi.com/alarmclock/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/naozhong80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/naozhong140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米音乐闹钟</span></a>  </li><li> <a class="link" href="http://item.mi.com/1163100008.html" data-stat-id="4047227241adf8a2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4047227241adf8a2', '//item.mi.com/1163100008.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mituyinx80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mituyinx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">小米米兔音箱</span></a>  </li><li> <a class="link" href="http://item.mi.com/1164900007.html" data-stat-id="5d028b104e071601" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-5d028b104e071601', '//item.mi.com/1164900007.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/chechong1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/chechong.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">音乐蓝牙车充</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/7" data-stat-id="b6f0c0b43727498e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b6f0c0b43727498e', '//list.mi.com/7', 'pcpid', '']);">保护套 贴膜<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/9" data-stat-id="62d0a851ec0724a8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-62d0a851ec0724a8', '//list.mi.com/9', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tiemo.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/tiemo.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">贴膜</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/8" data-stat-id="0b6ac701197d497e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-0b6ac701197d497e', '//list.mi.com/8', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/baohu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/baohutao.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">保护套/保护壳</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/1" data-stat-id="1bd93f4ff69cf8cc" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-1bd93f4ff69cf8cc', '//list.mi.com/1', 'pcpid', '']);">线材 支架 存储卡<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/16" data-stat-id="ef406b16595b222d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ef406b16595b222d', '//list.mi.com/16', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/xiancai.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/xiancai.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">线材</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E8%87%AA%E6%8B%8D%E6%9D%86" data-stat-id="b2c4f764ae98c37f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b2c4f764ae98c37f', '//search.mi.com/search_%E8%87%AA%E6%8B%8D%E6%9D%86', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zipaigan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zipaigan.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">自拍杆</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/5" data-stat-id="382f588016d79247" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-382f588016d79247', '//list.mi.com/5', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhijia.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zhijia.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">手机支架</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/27" data-stat-id="8672c4ef1bf1f713" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8672c4ef1bf1f713', '//list.mi.com/27', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/cunchu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/cunchu.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">存储卡</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/134" data-stat-id="11efbd1dcc3783be" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-11efbd1dcc3783be', '//list.mi.com/134', 'pcpid', '']);">箱包 服饰 鞋<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/23" data-stat-id="15fc25d3d493fd50" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-15fc25d3d493fd50', '//list.mi.com/23', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">箱包</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E6%97%85%E8%A1%8C%E7%AE%B1" data-stat-id="1b0efc2ad5e9da7d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-1b0efc2ad5e9da7d', '//search.mi.com/search_%E6%97%85%E8%A1%8C%E7%AE%B1', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/lvxingxiang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/lvxingxiang.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">90分旅行箱</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/22" data-stat-id="a46a70f78139a6cc" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a46a70f78139a6cc', '//list.mi.com/22', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/huise2-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/huise2-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">服饰</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E8%BF%90%E5%8A%A8%E9%9E%8B" data-stat-id="0bc59d4653011403" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-0bc59d4653011403', '//search.mi.com/search_%E8%BF%90%E5%8A%A8%E9%9E%8B', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/ydx80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/ydx140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米家运动鞋 智能版</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/20" data-stat-id="370d463950062b15" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-370d463950062b15', '//list.mi.com/20', 'pcpid', '']);">米兔 生活周边<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://mitu.mi.com/" data-stat-id="378413f5ea4f02c3" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-378413f5ea4f02c3', 'http://mitu.mi.com/', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">米兔玩偶</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/59" data-stat-id="a2783593a9dca913" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a2783593a9dca913', '//list.mi.com/59', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-120.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">鼠标垫</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/24" data-stat-id="b1dc3004db9154b5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b1dc3004db9154b5', '//list.mi.com/24', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/zhoubian1.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">生活周边</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/zazhi/index.html?1021" data-stat-id="e382ade4e301f704" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e382ade4e301f704', '//www.mi.com/zazhi/index.html', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zazhi1021-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zazhi1021-140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">《小米》会刊</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E6%9C%80%E7%94%9F%E6%B4%BB" data-stat-id="0201a0ca781d7637" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-0201a0ca781d7637', '//search.mi.com/search_%E6%9C%80%E7%94%9F%E6%B4%BB', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mj80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mj140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">毛巾/浴巾</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E4%B9%B3%E8%83%B6%E6%9E%95" data-stat-id="7e6308639cdb2631" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-7e6308639cdb2631', '//search.mi.com/search_%E4%B9%B3%E8%83%B6%E6%9E%95', 'pcpid', '']);"><img class="thumb" src="/Home/person/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao140.jpg?width=80&amp;height=80 2x" alt="" width="40" height="40"><span class="text">8H乳胶枕</span></a>  </li>  </ul> </div> </li>  </ul></div></li>
                            <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="a9318c5014b7997f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a9318c5014b7997f', 'javascript:void0', 'pcpid', '']);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5c/" data-stat-id="601ee425ed347afd" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-601ee425ed347afd', '//www.mi.com/mi5c/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mi5c_320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mi5c_320x220.png 2x" alt="小米手机5c" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5c/" data-stat-id="94c51d3d18c0094e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-94c51d3d18c0094e', '//www.mi.com/mi5c/', 'pcpid', '']);">小米手机5c</a></div>
                                    <p class="price">1499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/minote2/" data-stat-id="2363ab38887c8938" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-2363ab38887c8938', 'http://www.mi.com/minote2/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/xiaomiNOTE2-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/xiaomiNOTE2-320-220!320x220.jpg 2x" alt="小米Note 2" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/minote2/" data-stat-id="cb4732f11618bea9" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-cb4732f11618bea9', 'http://www.mi.com/minote2/', 'pcpid', '']);">小米Note 2</a></div>
                                    <p class="price">2799元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mix/" data-stat-id="56cc27dcdc1aa1d7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-56cc27dcdc1aa1d7', 'http://www.mi.com/mix/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/MIX-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/MIX-320-220!320x220.jpg 2x" alt="小米MIX" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mix/" data-stat-id="f447a32155951f85" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f447a32155951f85', 'http://www.mi.com/mix/', 'pcpid', '']);">小米MIX</a></div>
                                    <p class="price">3499元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5s" data-stat-id="ff134bca9c8124a5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ff134bca9c8124a5', 'http://www.mi.com/mi5s', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/xiaomi5S-320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/xiaomi5S-320-220!320x220.jpg 2x" alt="小米5s" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5s" data-stat-id="27f9690961768228" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-27f9690961768228', 'http://www.mi.com/mi5s', 'pcpid', '']);">小米5s</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5splus/" data-stat-id="85d8cdea58971d01" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-85d8cdea58971d01', 'http://www.mi.com/mi5splus/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/5spluse320_220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/5spluse320_220!320x220.jpg 2x" alt="小米5s Plus" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5splus/" data-stat-id="4bb8ae74886eb284" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4bb8ae74886eb284', 'http://www.mi.com/mi5splus/', 'pcpid', '']);">小米5s Plus</a></div>
                                    <p class="price">2299元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mi5/" data-stat-id="1c2a9e9f6beb7a2a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-1c2a9e9f6beb7a2a', '//www.mi.com/mi5/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi5!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi5!320x220.jpg 2x" alt="小米手机5" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mi5/" data-stat-id="6da0badec0155110" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6da0badec0155110', '//www.mi.com/mi5/', 'pcpid', '']);">小米手机5</a></div>
                                    <p class="price">1799元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="f896375cba89aa73" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f896375cba89aa73', 'javascript:void0', 'pcpid', '']);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redminote4x/" data-stat-id="dc37fbccddd914c0" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-dc37fbccddd914c0', '//www.mi.com/redminote4x/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4xtb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hmn4xtb!320x220.jpg 2x" alt="红米Note 4X" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redminote4x/" data-stat-id="6783fa2e7e0592d9" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6783fa2e7e0592d9', '//www.mi.com/redminote4x/', 'pcpid', '']);">红米Note 4X</a></div>
                                    <p class="price">999元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redminote4/" data-stat-id="f644150af3f5a524" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f644150af3f5a524', 'http://www.mi.com/redminote4/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/doodle/hongminote4!160x110.jpg" srcset="http://c1.mifile.cn/f/i/g/doodle/hongminote4!320x220.jpg 2x" alt="红米Note 4" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redminote4/" data-stat-id="e2bd8dc6ad65dba0" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e2bd8dc6ad65dba0', 'http://www.mi.com/redminote4/', 'pcpid', '']);">红米Note 4</a></div>
                                    <p class="price">999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4x/" data-stat-id="c5f26ed13ba65625" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c5f26ed13ba65625', '//www.mi.com/redmi4x/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hm4x320!320x220.jpg 2x" alt="红米4X" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4x/" data-stat-id="32fd622638ec7326" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-32fd622638ec7326', '//www.mi.com/redmi4x/', 'pcpid', '']);">红米4X</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4a/" data-stat-id="f704a959daa18a11" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f704a959daa18a11', 'http://www.mi.com/redmi4a/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/hm4a320.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/hm4a320.png 2x" alt="红米4A" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4a/" data-stat-id="a2f13b5a1b474cb4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a2f13b5a1b474cb4', 'http://www.mi.com/redmi4a/', 'pcpid', '']);">红米4A</a></div>
                                    <p class="price">599元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/redmi4" data-stat-id="cc40e3b07b832a7e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-cc40e3b07b832a7e', 'http://www.mi.com/redmi4', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/320-2202!160x110.jpg" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/320-2202!320x220.jpg 2x" alt="红米4" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/redmi4" data-stat-id="94e511035daf9688" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-94e511035daf9688', 'http://www.mi.com/redmi4', 'pcpid', '']);">红米4</a></div>
                                    <p class="price">799元起</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="b7469322dd753dc5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b7469322dd753dc5', 'javascript:void0', 'pcpid', '']);"><span class="text">平板 · 笔记本</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mipad3/" data-stat-id="3d1bb4d72fde3e12" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-3d1bb4d72fde3e12', '//www.mi.com/mipad3/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_320.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mipad3_320.png 2x" alt="小米平板3 64GB" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mipad3/" data-stat-id="a3ede112480ddd53" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a3ede112480ddd53', '//www.mi.com/mipad3/', 'pcpid', '']);">小米平板3 64GB</a></div>
                                    <p class="price">1499元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="4a5203d2feb9ce64" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4a5203d2feb9ce64', 'http://www.mi.com/mibookair/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!320x220.jpg 2x" alt="小米笔记本Air 12.5" "="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="4913b5bec120e611" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4913b5bec120e611', 'http://www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 12.5"</a></div>
                                    <p class="price">3599元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="4a5203d2feb9ce64" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4a5203d2feb9ce64', 'http://www.mi.com/mibookair/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3" "="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="9b585c9f3acef2dc" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9b585c9f3acef2dc', 'http://www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 13.3"</a></div>
                                    <p class="price">4999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibookair/" data-stat-id="a08ff892b17e19d2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a08ff892b17e19d2', '//www.mi.com/mibookair/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3" 尊享版"="" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibookair/" data-stat-id="8bf584dd077aef07" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8bf584dd077aef07', '//www.mi.com/mibookair/', 'pcpid', '']);">小米笔记本Air 13.3" 尊享版</a></div>
                                    <p class="price">5999元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="8e9363cee7cea5b5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8e9363cee7cea5b5', 'javascript:void0', 'pcpid', '']);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/43/" data-stat-id="ddef9bc0f0c18c37" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ddef9bc0f0c18c37', '//www.mi.com/mitv4A/43/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_43.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_43.png 2x" alt="小米电视4A 43英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/43/" data-stat-id="bb143b73ca7a0143" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-bb143b73ca7a0143', '//www.mi.com/mitv4A/43/', 'pcpid', '']);">小米电视4A 43英寸</a></div>
                                    <p class="price">2099元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/49/" data-stat-id="c9ed4ce4c86772c7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c9ed4ce4c86772c7', '//www.mi.com/mitv4A/49/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_49.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_49.png 2x" alt="小米电视4A 49英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/49/" data-stat-id="7543bb3e6d54dea3" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-7543bb3e6d54dea3', '//www.mi.com/mitv4A/49/', 'pcpid', '']);">小米电视4A 49英寸</a></div>
                                    <p class="price">2599元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/55/" data-stat-id="a86ac88dbedcf862" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a86ac88dbedcf862', '//www.mi.com/mitv4A/55/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_55.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_55.png 2x" alt="小米电视4A 55英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/55/" data-stat-id="3fe2a5ccfc3b4cd9" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-3fe2a5ccfc3b4cd9', '//www.mi.com/mitv4A/55/', 'pcpid', '']);">小米电视4A 55英寸</a></div>
                                    <p class="price">3199元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv4A/65/" data-stat-id="b9e62c2795012149" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b9e62c2795012149', '//www.mi.com/mitv4A/65/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320_65.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320_65.png 2x" alt="小米电视4A 65英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv4A/65/" data-stat-id="b7adb88b23921d5b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b7adb88b23921d5b', '//www.mi.com/mitv4A/65/', 'pcpid', '']);">小米电视4A 65英寸</a></div>
                                    <p class="price">5699元起</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mitv3s/60/" data-stat-id="0aac7cfd93e9417b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-0aac7cfd93e9417b', 'http://www.mi.com/mitv3s/60/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/101860xin.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/101860xin.png 2x" alt="小米电视3s 60英寸" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mitv3s/60/" data-stat-id="92b1616159993bde" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-92b1616159993bde', 'http://www.mi.com/mitv3s/60/', 'pcpid', '']);">小米电视3s 60英寸</a></div>
                                    <p class="price">4799元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/buytv/" data-stat-id="e9805dd2ed58ef84" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e9805dd2ed58ef84', 'http://www.mi.com/buytv/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/70dianshi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/70dianshi.png 2x" alt="查看全部&lt;br/&gt;小米电视" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/buytv/" data-stat-id="42f79b569bcad639" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-42f79b569bcad639', 'http://www.mi.com/buytv/', 'pcpid', '']);">查看全部<br>小米电视</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="764a30c3f697a814" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-764a30c3f697a814', 'javascript:void0', 'pcpid', '']);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibox3s/" data-stat-id="f3407643bc80b176" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f3407643bc80b176', '//www.mi.com/mibox3s/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png 2x" alt="小米盒子3s" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibox3s/" data-stat-id="28a968db4b7f0482" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-28a968db4b7f0482', '//www.mi.com/mibox3s/', 'pcpid', '']);">小米盒子3s</a></div>
                                    <p class="price">299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mibox3c/" data-stat-id="a6e8d1b6b7b8f0db" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a6e8d1b6b7b8f0db', 'http://www.mi.com/mibox3c/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mihezi.png 2x" alt="小米盒子3c" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mibox3c/" data-stat-id="de1fd8d182460bd7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-de1fd8d182460bd7', 'http://www.mi.com/mibox3c/', 'pcpid', '']);">小米盒子3c</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/hezi3s/" data-stat-id="32a01e59d20f9fa7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-32a01e59d20f9fa7', '//www.mi.com/hezi3s/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!320x220.jpg 2x" alt="小米盒子3 增强版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/hezi3s/" data-stat-id="9c415465c2aba107" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9c415465c2aba107', '//www.mi.com/hezi3s/', 'pcpid', '']);">小米盒子3 增强版</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/hezimini/" data-stat-id="695730e7d5d4d4ee" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-695730e7d5d4d4ee', '//www.mi.com/hezimini/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png 2x" alt="小米盒子mini版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/hezimini/" data-stat-id="3e1af0ebc91192a6" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-3e1af0ebc91192a6', '//www.mi.com/hezimini/', 'pcpid', '']);">小米盒子mini版</a></div>
                                    <p class="price">179元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/misurround/" data-stat-id="526e48171ce3082a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-526e48171ce3082a', '//www.mi.com/misurround/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/320x220.png 2x" alt="小米家庭影院" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/misurround/" data-stat-id="d6bcb42cdabcdc8c" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d6bcb42cdabcdc8c', '//www.mi.com/misurround/', 'pcpid', '']);">小米家庭影院</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://item.mi.com/1160800074.html" data-stat-id="102cede91d10b78c" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-102cede91d10b78c', '//item.mi.com/1160800074.html', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!320x220.jpg 2x" alt="小米家庭音响 标准版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://item.mi.com/1160800074.html" data-stat-id="9d7925dc3e0008d1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9d7925dc3e0008d1', '//item.mi.com/1160800074.html', 'pcpid', '']);">小米家庭音响 标准版</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:%20void(0);" data-stat-id="b4d066d2f9a3bd16" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b4d066d2f9a3bd16', 'javascript:void0', 'pcpid', '']);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifihd/" data-stat-id="4bb813fe356e8658" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4bb813fe356e8658', '//www.mi.com/miwifihd/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/lyqhd.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/lyqhd.png 2x" alt="小米路由器 HD" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifihd/" data-stat-id="d1024ed229352ee5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d1024ed229352ee5', '//www.mi.com/miwifihd/', 'pcpid', '']);">小米路由器 HD</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifihd/" data-stat-id="815dac7efc8379b7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-815dac7efc8379b7', '//www.mi.com/miwifihd/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/pro320x220.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/pro320x220.png 2x" alt="小米路由器 Pro" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifihd/" data-stat-id="f37031db00692dbf" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f37031db00692dbf', '//www.mi.com/miwifihd/', 'pcpid', '']);">小米路由器 Pro</a></div>
                                    <p class="price">499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifi3/" data-stat-id="8b371a9da0ece570" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8b371a9da0ece570', '//www.mi.com/miwifi3/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/lyq31.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/lyq31.png 2x" alt="小米路由器 3" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifi3/" data-stat-id="5d3ef0735d93f5f5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-5d3ef0735d93f5f5', '//www.mi.com/miwifi3/', 'pcpid', '']);">小米路由器 3</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miwifi3c/" data-stat-id="9b87aa1b571fc3e9" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9b87aa1b571fc3e9', '//www.mi.com/miwifi3c/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/lyq3c1.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/lyq3c1.png 2x" alt="小米路由器 3C" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miwifi3c/" data-stat-id="faf413cd200ccbd8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-faf413cd200ccbd8', '//www.mi.com/miwifi3c/', 'pcpid', '']);">小米路由器 3C</a></div>
                                    <p class="price">99元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/plc/" data-stat-id="706b9f9844cf0e95" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-706b9f9844cf0e95', '//www.mi.com/plc/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dlm01.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dlm01.png 2x" alt="小米WiFi电力猫" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/plc/" data-stat-id="51a6cd5366b156a7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-51a6cd5366b156a7', '//www.mi.com/plc/', 'pcpid', '']);">小米WiFi电力猫</a></div>
                                    <p class="price">249元</p>                                    <div class="flags"><div class="flag">新品</div></div>                                </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://item.mi.com/1164700010.html" data-stat-id="cd09f4e4166fbd86" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-cd09f4e4166fbd86', '//item.mi.com/1164700010.html', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/fdq2!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fdq2!320x220.jpg 2x" alt="小米WiFi放大器 2" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://item.mi.com/1164700010.html" data-stat-id="a8ef42080b760a7b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a8ef42080b760a7b', '//item.mi.com/1164700010.html', 'pcpid', '']);">小米WiFi放大器 2</a></div>
                                    <p class="price">49元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:void(0);" data-stat-id="9fbb41fbadfac4d7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9fbb41fbadfac4d7', 'javascript:void0', 'pcpid', '']);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/scale2/" data-stat-id="dda2eaaec20ad0cc" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-dda2eaaec20ad0cc', '//www.mi.com/scale2/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/tzc320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/tzc320!320x220.jpg 2x" alt="小米体脂秤" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/scale2/" data-stat-id="0c6d80def31446ff" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-0c6d80def31446ff', '//www.mi.com/scale2/', 'pcpid', '']);">小米体脂秤</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mj-carcorder/" data-stat-id="ca024d2151e58ef2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ca024d2151e58ef2', '//www.mi.com/mj-carcorder/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jjy320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jjy320!320x220.jpg 2x" alt="米家行车记录仪" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mj-carcorder/" data-stat-id="ef74a182640edfdb" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ef74a182640edfdb', '//www.mi.com/mj-carcorder/', 'pcpid', '']);">米家行车记录仪</a></div>
                                    <p class="price">349元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/miuav/" data-stat-id="138672f827512663" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-138672f827512663', 'http://www.mi.com/miuav/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/wrj4k320.png" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/wrj4k320.png 2x" alt="小米无人机 4k 版" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/miuav/" data-stat-id="d58a7c422b5115c1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d58a7c422b5115c1', 'http://www.mi.com/miuav/', 'pcpid', '']);">小米无人机 4k 版</a></div>
                                    <p class="price">2999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/mj-interphone/" data-stat-id="2d4f649120f68e54" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-2d4f649120f68e54', '//www.mi.com/mj-interphone/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/djj320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/djj320!320x220.jpg 2x" alt="小米米家对讲机" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/mj-interphone/" data-stat-id="cbcd0122b61cad98" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-cbcd0122b61cad98', '//www.mi.com/mj-interphone/', 'pcpid', '']);">小米米家对讲机</a></div>
                                    <p class="price">249元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/dianfanbao2/" data-stat-id="4700d369493de286" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4700d369493de286', '//www.mi.com/dianfanbao2/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dfb!320x220.jpg 2x" alt="米家IH电饭煲" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/dianfanbao2/" data-stat-id="8998e99daf641e5c" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8998e99daf641e5c', '//www.mi.com/dianfanbao2/', 'pcpid', '']);">米家IH电饭煲</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="http://www.mi.com/smart/" data-stat-id="03c1c541d27a9a24" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-03c1c541d27a9a24', '//www.mi.com/smart/', 'pcpid', '']);"><img src="/Home/person/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="查看全部&lt;br/&gt;智能硬件" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="http://www.mi.com/smart/" data-stat-id="9c5992491965e45b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9c5992491965e45b', '//www.mi.com/smart/', 'pcpid', '']);">查看全部<br>智能硬件</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="http://www.mi.com/service/" target="_blank" data-stat-id="59049922b2b5c11c" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-59049922b2b5c11c', '//www.mi.com/service/', 'pcpid', '']);"><span class="text">服务</span></a>
                </li>
                                <li class="nav-item">
                    <a class="link" href="http://www.xiaomi.cn/" target="_blank" data-stat-id="359ee71e873842fd" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-359ee71e873842fd', 'http://www.xiaomi.cn', 'pcpid', '']);"><span class="text">社区</span></a>
                </li>
                            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米5s&nbsp;Plus','Rst':5},{'Key':'小米MIX','Rst':1},{'Key':'手环','Rst':6},{'Key':'红米Note&nbsp;4x','Rst':4},{'Key':'小米路由器','Rst':10},{'Key':'移动电源','Rst':16},{'Key':'米家摄像机','Rst':5},{'Key':'小米体重秤','Rst':2},{'Key':'LED灯','Rst':6},{'Key':'优惠套装','Rst':64}]}" type="search">
                <input class="search-btn iconfont" value="" type="submit">
                <div class="search-hot-words">
                    <a href="http://www.mi.com/redmi4x/" data-stat-id="6289c445ab424b25" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6289c445ab424b25', 'http://www.mi.com/redmi4x/', 'pcpid', '']);">红米 4X</a><a href="http://www.mi.com/redminote4/" data-stat-id="d8a304cc48e87a0a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d8a304cc48e87a0a', 'http://www.mi.com/redminote4/', 'pcpid', '']);">红米Note4</a>                </div>
            <div id="J_keywordList" class="keyword-list hide"><ul class="result-list"></ul></div></form>
        </div>
    </div>
<div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"></div></div></div>


<div class="breadcrumbs">
    <div class="container">
        <a href="" >首页</a><span class="sep">&gt;</span><span>个人中心</span>    </div>
</div>

<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                                        <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="/home1/orderlist">我的订单</a></li>
                                <li><a href="" data-count="comment" data-count-style="bracket" >评价晒单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li class="active"><a href="/home1/pinfo">我的个人中心</a></li>
                                
                                <li><a href="/home1/cullect">喜欢的商品</a></li>
                             	<li><a href="/home1/address">收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="" target="_blank">个人信息</a></li>
                                <li><a href="" target="_blank">修改密码</a></li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
<div class="span16">
    <div class="protal-content-update hide">
        <div class="protal-username">
            Hi, 1249847722        </div>
        <p class="msg">我们做了一个小升级：你的用户名可以直接修改啦，去换个酷炫的名字吧。<a href="https://account.xiaomi.com/pass/auth/profile/home" target="_blank" data-stat-id="a7bae9e996d7d321" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a7bae9e996d7d321', 'https://account.xiaomi.com/pass/auth/profile/home', 'pcpid', '']);"> 立即前往&gt;</a></p>
    </div>
    <div class="uc-box uc-main-box">
        <div class="uc-content-box portal-content-box" > 
        <center>
            <div class="box-bd" style="margin-left:200px">
                <div class="portal-main clearfix">
                  
                    <div class="user-card">
                        <h2 class="username">{{ session()->get('homeuser')->User_name}}</h2>
                        <p class="tip">你好～</p>
                        <a class="link" href="" target="_blank">修改个人信息 &gt;</a>
                        <img class="avatar" src="{{ url('Admin/upload'.'/'.session()->get('homeuser')->User_pic) }}" alt="你说什么" width="150" height="150">
                    </div>
                
                </div>
            </center> 
                <div class="portal-sub">
                    <ul class="info-list clearfix">
                        <li>
                            <h3>待支付的订单</h3>
                            <a href="/home1/orderlist/state/0" >查看待支付订单<i class="iconfont"></i></a>
                            <img src="{{url('/Home/person/portal-icon-1.png') }}" alt="">
                        </li>
                        <li>
                            <h3>待收货的订单</h3>
                            <a href="/home1/orderlist/state/2" >查看待收货订单<i class="iconfont"></i></a>
                            <img src="{{ url('/Home/person/portal-icon-2.png') }}" alt="">
                        </li>
                        <li>
                            <h3>待评价商品数</h3>
                            <a href="" >查看待评价商品<i class="iconfont"></i></a>
                            <img src="{{ url('/Home/person/portal-icon-3.png') }}" alt="">
                        </li>
                        <li>
                            <h3>喜欢的商品</h3>
                            <a href="/home1/cullect" >查看喜欢的商品<i class="iconfont"></i></a>
                            <img src="{{ url('/Home/person/portal-icon-4.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>        </div>
    </div>
</div>

<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="http://www.mi.com/static/fast/" target="_blank" data-stat-id="46873828b7b782f4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-46873828b7b782f4', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#back" target="_blank" data-stat-id="78babcae8a619e26" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-78babcae8a619e26', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#free" target="_blank" data-stat-id="d1745f68f8d2dad7" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d1745f68f8d2dad7', '//www.mi.com/service/exchange#free', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#mail" target="_blank" data-stat-id="f1b5c2451cf73123" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f1b5c2451cf73123', '//www.mi.com/service/exchange#mail', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="b57397dd7ad77a31" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b57397dd7ad77a31', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/account/register/" target="_blank" data-stat-id="e5dad0738a41014f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e5dad0738a41014f', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="8e128f473e680197" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8e128f473e680197', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="fd9e3532f60a2f8d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-fd9e3532f60a2f8d', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/exchange" target="_blank" data-stat-id="8e282b6f669ba990" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8e282b6f669ba990', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a></dd>
                
                <dd><a rel="nofollow" href="http://fuwu.mi.com/" target="_blank" data-stat-id="5f2408ab3c808aa2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-5f2408ab3c808aa2', 'http://fuwu.mi.com/', 'pcpid', '']);">自助服务</a></dd>
                
                <dd><a rel="nofollow" href="http://xiazai.mi.com/" target="_blank" data-stat-id="18c340c920a278a1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-18c340c920a278a1', 'http://xiazai.mi.com/', 'pcpid', '']);">相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="b27b566974e4aa67" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b27b566974e4aa67', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="6dab396f7a873f15" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6dab396f7a873f15', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="9af5efe014c3aea2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9af5efe014c3aea2', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about" target="_blank" data-stat-id="f6d386c65b1f4132" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f6d386c65b1f4132', '//www.mi.com/about', 'pcpid', '']);">了解小米</a></dd>
                
                <dd><a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="4307a445f5592adb" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4307a445f5592adb', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about/contact" target="_blank" data-stat-id="6842e821365ee45d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-6842e821365ee45d', '//www.mi.com/about/contact', 'pcpid', '']);">联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="http://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="4d561ee685cd2e15" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4d561ee685cd2e15', 'http://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat" target="_blank" data-stat-id="78fdefa9dee561b5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-78fdefa9dee561b5', 'http://xiaoqu.qq.com/mobile/share/index.htmlurl=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat', 'pcpid', '']);">小米部落</a></dd>
                
                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="47539f6570f0da90" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-47539f6570f0da90', '#J_modalWeixin', 'pcpid', '']);">官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="http://order.mi.com/queue/f2code" target="_blank" data-stat-id="fdc16dd51892a164" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-fdc16dd51892a164', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/giftcode/" target="_blank" data-stat-id="835607e3820935bb" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-835607e3820935bb', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a></dd>
                
                <dd><a rel="nofollow" href="http://order.mi.com/misc/checkitem" target="_blank" data-stat-id="b08be6bd51351e1a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b08be6bd51351e1a', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="http://www.mi.com/service/contact" target="_blank" data-stat-id="a7642f0a3475d686" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a7642f0a3475d686', '//www.mi.com/service/contact', 'pcpid', '']);"><i class="iconfont"></i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
       
        <div class="info-text">
            <p>小米旗下网站：<a href="http://www.mi.com/index.html" target="_blank" data-stat-id="b9017a4e9e9eefe3" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b9017a4e9e9eefe3', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span><a href="http://www.miui.com/" target="_blank" data-stat-id="ed2a0e25c8b0ca2f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ed2a0e25c8b0ca2f', 'http://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span><a href="http://www.miliao.com/" target="_blank" data-stat-id="826b32c1478a98d5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-826b32c1478a98d5', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span><a href="http://www.duokan.com/" target="_blank" data-stat-id="c9d2af1ad828a834" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c9d2af1ad828a834', 'http://www.duokan.com/', 'pcpid', '']);">多看书城</a><span class="sep">|</span><a href="http://www.miwifi.com/" target="_blank" data-stat-id="96f1a8cecc909af2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-96f1a8cecc909af2', 'http://www.miwifi.com/', 'pcpid', '']);">小米路由器</a><span class="sep">|</span><a href="http://call.mi.com/" target="_blank" data-stat-id="347f6dd0d8d9fda3" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-347f6dd0d8d9fda3', 'http://call.mi.com/', 'pcpid', '']);">视频电话</a><span class="sep">|</span><a href="http://xiaomi.tmall.com/" target="_blank" data-stat-id="dfe0fac59cfb15d9" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-dfe0fac59cfb15d9', 'http://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span><a href="http://shop115048570.taobao.com/" target="_blank" data-stat-id="c2613d0d3b77ddff" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c2613d0d3b77ddff', 'http://shop115048570.taobao.com', 'pcpid', '']);">小米淘宝直营店</a><span class="sep">|</span><a href="http://union.mi.com/" target="_blank" data-stat-id="2f48f953961c637d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-2f48f953961c637d', 'http://union.mi.com/', 'pcpid', '']);">小米网盟</a><span class="sep">|</span><a href="http://www.mi.com/mimobile/" target="_blank" data-stat-id="f7ea7880c49b687e" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f7ea7880c49b687e', '//www.mi.com/mimobile/', 'pcpid', '']);">小米移动</a><span class="sep">|</span><a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" data-stat-id="c7ef95929d60f3f1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c7ef95929d60f3f1', 'http://www.miui.com/res/doc/privacy/cn.html', 'pcpid', '']);">隐私政策</a><span class="sep">|</span><a href="#J_modal-globalSites" data-toggle="modal" target="_blank" data-stat-id="9db137a8e0d5b3dd" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-9db137a8e0d5b3dd', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>            </p>
            <p>©<a href="http://www.mi.com/" target="_blank" title="mi.com" data-stat-id="836cacd9ca5b75dd" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-836cacd9ca5b75dd', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="f96685804376361a" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-f96685804376361a', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="57efc92272d4336b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-57efc92272d4336b', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a><a rel="nofollow" href="http://c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" data-stat-id="c5f81675b79eb130" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c5f81675b79eb130', '//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg', 'pcpid', '']);">京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a href="http://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="de920be99941f792" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-de920be99941f792', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img src="/Home/person/truste.png" alt="TRUSTe Privacy Certification"></a>
                    <a href="http://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="d44905018f8d7096" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d44905018f8d7096', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img src="/Home/person/v-logo-2.png" alt="诚信网站"></a>
                    <a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="3e1533699f264eac" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-3e1533699f264eac', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img src="/Home/person/v-logo-1.png" alt="可信网站"></a>
                    <a href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="b085e50c7ec83104" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b085e50c7ec83104', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img src="/Home/person/v-logo-3.png" alt="网上交易保障中心"></a>
        
        </div>
    </div>
<div class="slogan ir">探索黑科技，小米为发烧而生</div></div>

<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal" data-stat-id="cfd3189b8a874ba4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-cfd3189b8a874ba4', '', 'pcpid', '']);"><i class="iconfont"></i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="/Home/person/site-weixin.png" width="680" height="340">
        </div>
    </div>
<!-- .modal-weixin END -->
<div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
    <div class="modal-body">
        <span class="close" data-dismiss="modal" aria-hidden="true">退出排队</span>
        <div class="con">
            <div class="title">正在排队，请稍候喔！</div>
            <div class="queue-tip-box">
                <p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p>
                <p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p>
                <p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p>
                <p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p>
                <p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p>
            </div>
        </div>

        <div class="queue-posters">
            <div class="poster poster-3"></div>
            <div class="poster poster-2"></div>
            <div class="poster poster-1"></div>
            <div class="poster poster-4"></div>
            <div class="poster poster-5"></div>
        </div>
    </div>
</div>
<!-- .xm-dm-queue END -->
<div id="J_bigtapError" class="modal modal-hide modal-bigtap-error">
    <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont"></i></span>
    <div class="modal-body">
        <h3>抱歉，网络拥堵无法连接服务器</h3>
        <p class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>
        <p>
            <a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="c148a4197491d5bd" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c148a4197491d5bd', '', 'pcpid', '']);">重试</a>
        </p>
    </div>
</div>


<div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
        <div class="modal-body">
            <h3 class="title">为防黄牛，请您输入下面的验证码</h3>
             <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br>
    所以，这次劳烦您多输一次验证码，我们一起防黄牛。</p>
            <div class="mode-loading" id="J_bigtapModeLoading">
                <img src="/Home/person/loading.gif" alt="" width="32" height="32">
                <a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="ce9e5bb5b994ad55" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-ce9e5bb5b994ad55', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
            </div>
            <div class="mode-action hide" id="J_bigtapModeAction">
                <div class="mode-con" id="J_bigtapModeContent"></div>
                <input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
                <p class="tip" id="J_bigtapModeTip"></p>
                <a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="7f083d6abed714f8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-7f083d6abed714f8', '', 'pcpid', '']);">确认</a>
            </div>
        </div>
    </div>

<div id="J_bigtapSoldout" class="modal fade modal-hide modal-bigtap-soldout modal-bigtap-soldout-norec">
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
        <div class="modal-body ">
            <div class="content clearfix">
                <span class="mitu"></span>
                <p class="title">很抱歉，人真是太多了<br>您晚了一步...</p>
            </div>

            <div class="bigtap-recomment-goods">
                <div class="hd"><span>这些产品也不错，而且有现货哦！</span></div>
                <ul class="clearfix" id="J_bigtapRecommentList"></ul>
            </div>
        </div>
    </div>
<!-- .xm-dm-error END -->
<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
   <div class="modal-hd">
        <a class="close" data-dismiss="modal" data-stat-id="d63900908fde14b1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d63900908fde14b1', '', 'pcpid', '']);"><i class="iconfont"></i></a>
        <span class="title">Select Region</span>
    </div>
    <div class="modal-bd">
        <h3>Welcome to Mi.com</h3>
        <p class="modal-globalSites-tips">Please select your country or region</p>
        <p class="modal-globalSites-links clearfix">
            <a href="http://www.mi.com/index.html" data-stat-id="51fe807618ae85f4" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-51fe807618ae85f4', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
            <a href="http://www.mi.com/hk/" data-stat-id="d8e4264197de1747" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d8e4264197de1747', 'http://www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
            <a href="http://www.mi.com/tw/" data-stat-id="8b54359fb6116e28" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-8b54359fb6116e28', 'http://www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
            <a href="http://www.mi.com/sg/" data-stat-id="e9c0506f7e4e7161" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e9c0506f7e4e7161', 'http://www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
            <a href="http://www.mi.com/my/" data-stat-id="d6299ad30ec761a8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-d6299ad30ec761a8', 'http://www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
            <a href="http://www.mi.com/ph/" data-stat-id="22b601cf7b3ada84" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-22b601cf7b3ada84', 'http://www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
            <a href="http://www.mi.com/in/" data-stat-id="441d26d4571e10dc" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-441d26d4571e10dc', 'http://www.mi.com/in/', 'pcpid', '']);">India</a>
            <a href="http://www.mi.com/id/" data-stat-id="88ccf9755c488ec5" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-88ccf9755c488ec5', 'http://www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
            <a href="http://br.mi.com/" data-stat-id="c41d871bf5ddcd95" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-c41d871bf5ddcd95', 'http://br.mi.com/', 'pcpid', '']);">Brasil</a>
            <a href="http://www.mi.com/en/" data-stat-id="4426c5dac474df5f" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4426c5dac474df5f', 'http://www.mi.com/en/', 'pcpid', '']);">Global Home</a>
            <a href="http://www.mi.com/mena/" data-stat-id="261bb8cf155fb56b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-261bb8cf155fb56b', 'http://www.mi.com/mena/', 'pcpid', '']);">MENA</a>
            <a href="http://www.mi.com/pl/" data-stat-id="2e3007e460f40ce3" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-2e3007e460f40ce3', 'http://www.mi.com/pl/', 'pcpid', '']);">Poland</a>
            <a href="http://www.mi.com/ua/" data-stat-id="de8d49aabd1eecdd" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-de8d49aabd1eecdd', 'http://www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
            <a href="http://www.mi.com/ru/" data-stat-id="886bf2568681dd6b" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-886bf2568681dd6b', 'http://www.mi.com/ru/', 'pcpid', '']);">Russia</a>
            <a href="http://www.mi.com/vn/" data-stat-id="b859ec9bcac672f1" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b859ec9bcac672f1', 'http://www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
        </p>
    </div>
</div>
<!-- .modal-globalSites END -->

<script type="text/javascript" async="" src="{{ url('/Home/person/mstr_002.js') }}"></script>
<script type="text/javascript" async="" src="{{ url('/Home/person/mstr.js') }}"></script>
<script type="text/javascript" async="" src="{{ url('/Home/person/mstr_003.js') }}"></script>
<script type="text/javascript" async="" src="{{ url('/Home/person/unjcV2.js') }}"></script>
<script type="text/javascript" async="" src="{{ url('/Home/person/mstr_004.js') }}"></script>
<script type="text/javascript" async="" src="{{ url('/Home/person/jquery.js') }}"></script>
<script type="text/javascript" async="" src="{{ url('/Home/person/xmst.js') }}"></script>
<script src="{{url('/Home/person/base.js') }}"></script>
<script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: 'http://order.mi.com',
        wwwSite: '//www.mi.com',
        cartSite: '//cart.mi.com',
        itemSite: '//item.mi.com',
        assetsSite: '//s01.mifile.cn',
        listSite: '//list.mi.com',
        searchSite: '//search.mi.com',
        mySite: '//my.mi.com',
        damiaoSite: 'http://tp.hd.mi.com/',
        damiaoGoodsId:[],
        logoutUrl: 'http://order.mi.com/site/logout',
        staticSite: '//static.mi.com',
        quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script>

<script type="text/javascript" src="{{ url('/Home/person/user.js') }}"></script>

<script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = "{{ url('/Home/person/xmst.js') }}";
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>


</body></html>