<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>填写订单信息</title>
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('Home/buy/css/base.css') }}">
<link rel="stylesheet" type="text/css" href=" {{ asset('Home/buy/css/checkout.css') }}">
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo " href="http://www.mi.com/index.html" title="小米官网" data-stat-id="ac576a29202325c4" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-ac576a29202325c4', '//www.mi.com/index.html', 'pcpid', '']);"></a>
        </div>
        <div class="header-title" id="J_miniHeaderTitle"><h2>确认订单</h2></div>
        <div class="topbar-info" id="J_userInfo"><span class="user"><a rel="nofollow" class="user-name" href="http://my.mi.com/portal" target="_blank" data-stat-id="5ed902322bc7e0a6" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-5ed902322bc7e0a6', '//my.mi.com/portal', 'pcpid', '']);"><span class="name">少帅</span><i class="iconfont"></i></a><ul class="user-menu"><li><a rel="nofollow" href="http://my.mi.com/portal" target="_blank" data-stat-id="e0b9e1d1fa8052a2" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-e0b9e1d1fa8052a2', '//my.mi.com/portal', 'pcpid', '']);">个人中心</a></li><li><a rel="nofollow" href="http://order.mi.com/user/comment" target="_blank" data-stat-id="04dda61fe46ba720" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-04dda61fe46ba720', 'http://order.mi.com/user/comment', 'pcpid', '']);">评价晒单</a></li><li><a rel="nofollow" href="http://order.mi.com/user/favorite" target="_blank" data-stat-id="8660c1b13ab1c56b" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-8660c1b13ab1c56b', 'http://order.mi.com/user/favorite', 'pcpid', '']);">我的喜欢</a></li><li><a rel="nofollow" href="http://account.xiaomi.com/" target="_blank" data-stat-id="6c2aba14bc7f649a" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-6c2aba14bc7f649a', 'http://account.xiaomi.com/', 'pcpid', '']);">小米账户</a></li><li><a rel="nofollow" href="http://order.mi.com/site/logout" data-stat-id="7014141d5b446729" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-7014141d5b446729', 'http://order.mi.com/site/logout', 'pcpid', '']);">退出登录</a></li></ul></span><span class="sep">|</span><a rel="nofollow" class="link link-order" href="http://static.mi.com/order/" target="_blank" data-stat-id="a9e9205e73f0742c" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-a9e9205e73f0742c', '//static.mi.com/order/', 'pcpid', '']);">我的订单</a></div>
    </div>
</div>
<!-- .site-mini-header END -->
<script type="text/javascript" async="" src="{{ asset('js/unjcV2.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('js/mstr.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('js/jquery.js') }}"></script>
<script type="text/javascript" async="" src="{{ asset('js/xmst.js') }}"></script>

<script type="text/javascript">
var checkoutConfig={
    addressMatch:'common',
    addressMatchVarName: new Function('return ' + 'data'),
    hasPresales:false,
    hasBigTv:false,
    hasAir:false,
    hasScales:false,
    hasWater:false,
    hasWater2:false,
    hasMobile:true,
    hasEboiler:false,
    hasEvent:false,
    hasGiftcard:false,
    totalPrice:1399.00,
    needPayAmount:1399,
    postage:10,//
    postFree:true,
    bcPrice:150,
    activityDiscountMoney:0.00,//活动优惠
    showCouponBox:0,
    showCaptcha:'0',
    invoice:[{"type":"electron","value":4,"desc":"\u7535\u5b50\u53d1\u7968","checked":true},{"type":"personal","value":1,"desc":"\u7eb8\u8d28\u53d1\u7968","checked":false}],
    quickOrder: '0',
    hasBigPro: false,
    onlinePayTips: '支持微信支付、支付宝、银联、财付通、小米钱包等',
    subsidyPrice: 0};
</script>
<div class="page-main">
    <div class="container">
        <div class="checkout-box">
            <div class="section section-address">
                <div class="section-header clearfix">
                    <h3 class="title">收货地址</h3>

                    <!--<div class="tip" style="color: #f00">普通商品1月26日-28日暂停发货，大家电1月26-31日暂停发货  <a href="https://cdn.cnbj0.fds.api.mi-img.com/b2c-data-mishop/da09f7ec70a6.html?2=&needValidHost=false&from=singlemessage&isappinstalled=1" target="_blank" > 了解详情&gt;</a></div>-->

                    <div class="more">
                     </div>
                </div>
                <div class="section-body clearfix" id="J_addressList">
                    <!-- addresslist begin -->
                    <!-- addresslist end -->
                    @foreach($address as $a)
                    @if($a->Address_default == 2)
                         <div class="address-item address-item-new" id="J_newAddress">
                            <dl>
                            <dt>{{ $a->Address_consignee }}
                            </dt>
                            <dd class="utel">{{ $a->Address_consignee_phone }}</dd>
                            <dd class="uaddress">{{ $a->Address_province }} {{ $a->Address_city }} {{ $a->Address_county }} <br>{{ $a->Address_detail }} </dd>
                        </dl>
                       
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            <div class="section section-options section-payment clearfix">
                <div class="section-header">
                    <h3 class="title">支付方式</h3>
                </div>
                <div class="section-body clearfix">
                @foreach($pay as $p)
                    <ul class="J_optionList options ">
                        <li data-type="pay" class="J_option selected" data-value="1">
                            {{ $p->Pay_content}}<span>
                            （支持微信支付、支付宝、银联、财付通、小米钱包等）</span>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="section section-options section-shipment clearfix">
                <div class="section-header">
                    <h3 class="title">配送方式</h3>
                </div>
                @foreach($dilivry as $d)
           
                <div class="section-body clearfix">
                    <ul class="clearfix J_optionList options ">
                        <li data-type="shipment" class="J_option selected" data-amount="0" data-value="1">
                            {{ $d->Dilivery_name }} 快递      
                        </li>
                    </ul>
                    @endforeach
                    <div class="service-self-tip" id="J_serviceSelfTip" style="display: none;"></div>
                </div>
               
            </div>
            <div class="section section-goods">
                <div class="section-header clearfix">
                    <h3 class="title">商品</h3>
                    <div class="more">
                        <a href="">返回购物车<i class="iconfont"></i></a>
                    </div>
                </div>
                <div class="section-body">
                @foreach($ob as $v)
                
                    <ul class="goods-list" id="J_goodsList">
                        <li class="clearfix">
                            <div class="col col-img">
                                <img src="{{ url('Admin/upload'.'/'.$v->Orderlist_goodspic) }}" width="30" height="30">
                            </div>
                           
                            <div class="col col-name"> 

                            @foreach($goods as $g)

                                {{ $g->Goods_body }}
                            
                                                                       
                            <div class="col col-price">
                             <div style="float:left;margin-left:30px;">   
                                {{ $v->Orderlist_goodsname}}
                             </div>

                                {{ $v->Orderlist_price }} x {{ $v->Orderlist_goodsnum }}
                            </div>
                            <div class="col col-status">
                              
                            </div>
                            <div class="col col-total">
                                {{ $v->Orderlist_pricesum }}
                            </div>
                        </li>
                    </ul> 
                    @endforeach
                </div>
            </div>

            <div class="section section-count clearfix">
                <div class="count-actions">
                    <div class="ecard-box hide" id="J_ecardBox">
                        <div class="loading hide">
                            <div class="loader"></div>
                        </div>
                    </div>
                </div>
                <div class="coupon-trigger" id="J_useCoupon" style="margin-left:200px;dispaly:block;"><img src="{{ url('Admin/upload') }}/default.jpg" height="200"></div>
                <div class="money-box" id="J_moneyBox">
                    <ul>
                        <li class="clearfix">
                            <label>商品件数：</label>
                            <span class="val">{{ $v->Orderlist_goodsnum }}件</span>
                        </li>
                        <li class="clearfix">
                            <label>金额合计：</label>
                            <span class="val">{{ $v->Orderlist_total }}元</span>
                        </li>
                        
                       
                        <li class="clearfix total-price">
                            <label>应付总额：</label>
                            <span class="val"><em data-id="J_totalPrice">{{ $v->Orderlist_total }}</em>元</span>
                        </li>
                    </ul>
                @endforeach
                </div>

            </div>

            <div class="section-bar clearfix">
                <div class="fl">
                    <div class="seleced-address hide" id="J_confirmAddress">
                    </div>
                    <div class="big-pro-tip hide J_confirmBigProTip"></div>
                </div>
                <div class="fr">
                <form action=" " method="post" name="myform">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                </form>
                    <a href="javascript:doupdate({{ $v->Orderlist_id }});" class="btn btn-primary" id="J_checkoutToPay" >去结算</a>
                                    </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function doupdate(id){
            //alert(id);
    if(confirm('确定付款吗？')){
        var form = document.myform;
        form.action = "{{ asset('home1/orderlist')}}"+'/'+id;
        form.submit();
    }
}
</script>

<!-- 大家点缺货提示 -->
<div class="big-pro-tip-pop hide" id="J_popBigProTip"></div>

<!-- 禮品卡提示 S-->
<div class="modal fade modal-hide modal-lipin" id="J_lipinTip">
    <div class="modal-header">
        <h3 class="title">温馨提示</h3>
    </div>
    <div class="modal-body">
        <p>
            为保障您的利益与安全，下单后礼品卡将会被使用，<br>
            且订单信息将不可修改。请确认收货信息：
        </p>
        <ul>
            <li class="clearfix">
                <strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong>
                <span id="J_lipinUserName"></span>
            </li>
            <li class="clearfix">
                <strong>联系电话：</strong>
                <span id="J_lipinUserPhone"></span>
            </li>
            <li class="clearfix">
                <strong>收货地址：</strong>
                <span id="J_lipinUserAddress"></span>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
        <a href="javascript:void(0);" class="btn btn-primary" id="J_lipinSubmit" data-stat-id="8e19401adef46ba2" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-8e19401adef46ba2', 'javascript:void0', 'pcpid', '']);">确认下单</a>
        <a href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal" data-stat-id="28800888dda4eee0" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-28800888dda4eee0', 'javascript:void0', 'pcpid', '']);">返回修改</a>
    </div>
</div>
<!--  禮品卡提示 E-->

<!-- 预售提示 S-->
<div class="modal fade modal-hide modal-yushou" id="J_yushouTip">
    <div class="modal-header">
        <h3 class="title">请确认收货地址及发货时间</h3>
    </div>
    <div class="modal-body">
        <ul class="content">
            <li>
                <h3>请确认配送地址，提交后不可变更：</h3>
                <p id="J_yushouAddress"> </p>
                <span class="icon icon-1"></span>
            </li>
            <li>
                <h3>支付后发货</h3>
                <p>如您随预售商品一起购买的商品，将与预售商品一起发货</p>
                <span class="icon icon-2"></span>
            </li>
            <li>
                <h3>以支付价格为准</h3>
                <p>如预售产品发生调价，已支付订单价格将不受影响。</p>
                <span class="icon icon-3"></span>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
        <a href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal" data-stat-id="adbbe3abff3f506a" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-adbbe3abff3f506a', 'javascript:void0', 'pcpid', '']);">返回修改地址</a>
        <a href="javascript:void(0);" class="btn btn-primary" id="J_yushouSubmit" data-stat-id="49b440ef95b2b913" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-49b440ef95b2b913', 'javascript:void0', 'pcpid', '']);">确认并继续下单</a>
    </div>
</div>
<!--  预售提示 E-->

<div class="modal fade modal-hide modal-edit-address" id="J_modalEditAddress">
    <div class="modal-body">
        <iframe allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
    </div>
</div>

<div class="modal fade modal-hide fade modal-alert" id="J_modalAlert">
    <div class="modal-bd">
        <div class="text">
            <h3 id="J_alertMsg"></h3>
        </div>
        <div class="actions">
            <button class="btn btn-primary" data-dismiss="modal">确定</button>
        </div>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="b718c74de11bb9a0" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b718c74de11bb9a0', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
    </div>
</div>

<div class="address-top-bar" id="J_addressTopBar">
    <div class="container">
        <a href="javascript:void(0);" class="btn btn-primary" id="J_addressTopBarBtn" data-stat-id="0263b2497800ada5" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-0263b2497800ada5', 'javascript:void0', 'pcpid', '']);">选择该收货地址</a>
        <div class="content" id="J_addressTopCon">
            <span class="uname">名字</span><span class="utel">名字</span>
        </div>
    </div>
</div>


<div class="modal modal-warning modal-hide" id="warning-bargain-1463">
    <div class="modal-hd">
        <h2 class="title">温馨提示</h2>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="bdb508f1f15790d3" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-bdb508f1f15790d3', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
        <p>
            <b>换卡说明：</b>
            <br><br>移动2G / 3G卡升级为移动4G卡
            <br>传统SIM大卡换小米手机适配的micro卡
        </p>
    </div>
</div>

<div class="modal modal-warning modal-hide" id="warning-bargain-1464">
    <div class="modal-hd">
        <h2 class="title">温馨提示</h2>
        <a class="close" data-dismiss="modal" href="javascript:%20void(0);" data-stat-id="bdb508f1f15790d3" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-bdb508f1f15790d3', 'javascript:void0', 'pcpid', '']);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
        <p>
            <b>换卡说明：</b>
            <br><br>移动2G / 3G卡升级为移动4G卡
            <br>传统SIM大卡换小米手机适配的nano卡
        </p>
    </div>
</div>

<!-- 保险弹窗 -->
<!-- 保险弹窗 -->

<div class="modal in hide modal-baoxian" id="J_baoxian">
    <div class="modal-header">
        <h3>小米意外保障服务/小米意外损坏保险</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
        <div class="con-1">
            <h4>购买保障服务/保险的设备在意外受损时可获得免费维修或换新</h4>
            <ul class="icon-list clearfix">
                <li>
                    <span class="icon icon-1"></span>
                    屏幕碎裂免费换新屏
                </li>
                <li>
                    <span class="icon icon-2"></span>
                    进水、摔落免费修
                </li>
                <li>
                    <span class="icon icon-3"></span>
                    修好为止
                </li>
            </ul>
            <dl class="xuzhi">
                <dt>为保障您的权益，购买前请仔细阅读：</dt>
                <dd>· 本保障服务/保险目前仅适用于有限的产品类型，不同产品的保障规则会有所差异，请以详细条款为准；</dd>
                <dd>· 本保障服务/保险自您收到设备起，有效期为一年，若您在收到设备7日内取消保障服务/保险，请连同设备一起申请退货。</dd>
                <dd>· 故意行为导致的设备损坏以及盗窃、抢劫、遗失设备等不在服务保障范围内（具体以详细条款为准）。<br>
                    <a href="http://www.mi.com/service/safe" target="_blank" class="J_baoxianMore" data-stat-id="13d65618f9fdb846" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-13d65618f9fdb846', 'http://www.mi.com/service/safe', 'pcpid', '']);">阅读详细条款&gt;</a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="modal-footer clearfix">
        <p>
            <span class="J_baoxianAgree"><i class="iconfont icon-checkbox">√</i> 我已经阅读并同意</span>《<a href="http://www.mi.com/service/safe" target="_blank" class="J_baoxianMore" data-stat-id="7013efcb9afc718b" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-7013efcb9afc718b', 'http://www.mi.com/service/safe', 'pcpid', '']);">详细条款</a>》
        </p>
        <a class="btn btn-primary J_buyBaoxian" data-stat-id="ee4f02aededb8e5a" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-ee4f02aededb8e5a', '', 'pcpid', '']);"><span class="num"></span>确认并购买</a>
        <a class="btn btn-gray" data-dismiss="modal" aria-hidden="true" data-stat-id="821a98207fa653c1" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-821a98207fa653c1', '', 'pcpid', '']);">取消</a>
    </div>
</div>


                        
         
<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="http://www.mi.com/static/fast/" target="_blank" data-stat-id="46873828b7b782f4" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-46873828b7b782f4', '//www.mi.com/static/fast/', 'pcpid', '']);"><i class="iconfont"></i>预约维修服务</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#back" target="_blank" data-stat-id="78babcae8a619e26" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-78babcae8a619e26', '//www.mi.com/service/exchange#back', 'pcpid', '']);"><i class="iconfont"></i>7天无理由退货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#free" target="_blank" data-stat-id="d1745f68f8d2dad7" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-d1745f68f8d2dad7', '//www.mi.com/service/exchange#free', 'pcpid', '']);"><i class="iconfont"></i>15天免费换货</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/service/exchange#mail" target="_blank" data-stat-id="f1b5c2451cf73123" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-f1b5c2451cf73123', '//www.mi.com/service/exchange#mail', 'pcpid', '']);"><i class="iconfont"></i>满150元包邮</a></li>
                            <li><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="b57397dd7ad77a31" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b57397dd7ad77a31', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);"><i class="iconfont"></i>520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/account/register/" target="_blank" data-stat-id="e5dad0738a41014f" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-e5dad0738a41014f', '//www.mi.com/service/account/register/', 'pcpid', '']);">账户管理</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/buy/buytime/" target="_blank" data-stat-id="8e128f473e680197" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-8e128f473e680197', '//www.mi.com/service/buy/buytime/', 'pcpid', '']);">购物指南</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/order/sendprogress/" target="_blank" data-stat-id="fd9e3532f60a2f8d" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-fd9e3532f60a2f8d', '//www.mi.com/service/order/sendprogress/', 'pcpid', '']);">订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/service/exchange" target="_blank" data-stat-id="8e282b6f669ba990" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-8e282b6f669ba990', '//www.mi.com/service/exchange', 'pcpid', '']);">售后政策</a></dd>
                
                <dd><a rel="nofollow" href="http://fuwu.mi.com/" target="_blank" data-stat-id="5f2408ab3c808aa2" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-5f2408ab3c808aa2', 'http://fuwu.mi.com/', 'pcpid', '']);">自助服务</a></dd>
                
                <dd><a rel="nofollow" href="http://xiazai.mi.com/" target="_blank" data-stat-id="18c340c920a278a1" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-18c340c920a278a1', 'http://xiazai.mi.com/', 'pcpid', '']);">相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/c/xiaomizhijia/" target="_blank" data-stat-id="b27b566974e4aa67" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b27b566974e4aa67', '//www.mi.com/c/xiaomizhijia/', 'pcpid', '']);">小米之家</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/maintainlocation/" target="_blank" data-stat-id="6dab396f7a873f15" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-6dab396f7a873f15', '//www.mi.com/static/maintainlocation/', 'pcpid', '']);">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/static/familyLocation/" target="_blank" data-stat-id="9af5efe014c3aea2" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-9af5efe014c3aea2', '//www.mi.com/static/familyLocation/', 'pcpid', '']);">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about" target="_blank" data-stat-id="f6d386c65b1f4132" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-f6d386c65b1f4132', '//www.mi.com/about', 'pcpid', '']);">了解小米</a></dd>
                
                <dd><a rel="nofollow" href="http://hr.xiaomi.com/" target="_blank" data-stat-id="4307a445f5592adb" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-4307a445f5592adb', 'http://hr.xiaomi.com/', 'pcpid', '']);">加入小米</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/about/contact" target="_blank" data-stat-id="6842e821365ee45d" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-6842e821365ee45d', '//www.mi.com/about/contact', 'pcpid', '']);">联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="http://weibo.com/xiaomishangcheng" target="_blank" data-stat-id="4d561ee685cd2e15" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-4d561ee685cd2e15', 'http://weibo.com/xiaomishangcheng', 'pcpid', '']);">新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat" target="_blank" data-stat-id="78fdefa9dee561b5" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-78fdefa9dee561b5', 'http://xiaoqu.qq.com/mobile/share/index.htmlurl=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat', 'pcpid', '']);">小米部落</a></dd>
                
                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" data-stat-id="47539f6570f0da90" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-47539f6570f0da90', '#J_modalWeixin', 'pcpid', '']);">官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="http://order.mi.com/queue/f2code" target="_blank" data-stat-id="fdc16dd51892a164" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-fdc16dd51892a164', '//order.mi.com/queue/f2code', 'pcpid', '']);">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="http://www.mi.com/giftcode/" target="_blank" data-stat-id="835607e3820935bb" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-835607e3820935bb', '//www.mi.com/giftcode/', 'pcpid', '']);">礼物码</a></dd>
                
                <dd><a rel="nofollow" href="http://order.mi.com/misc/checkitem" target="_blank" data-stat-id="b08be6bd51351e1a" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b08be6bd51351e1a', '//order.mi.com/misc/checkitem', 'pcpid', '']);">防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">1月27日至2月2日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="http://www.mi.com/service/contact" target="_blank" data-stat-id="a7642f0a3475d686" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-a7642f0a3475d686', '//www.mi.com/service/contact', 'pcpid', '']);"><i class="iconfont"></i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <span class="logo ir">小米官网</span>
        <div class="info-text">
            <p>小米旗下网站：<a href="http://www.mi.com/index.html" target="_blank" data-stat-id="b9017a4e9e9eefe3" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b9017a4e9e9eefe3', '//www.mi.com/index.html', 'pcpid', '']);">小米商城</a><span class="sep">|</span><a href="http://www.miui.com/" target="_blank" data-stat-id="ed2a0e25c8b0ca2f" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-ed2a0e25c8b0ca2f', 'http://www.miui.com/', 'pcpid', '']);">MIUI</a><span class="sep">|</span><a href="http://www.miliao.com/" target="_blank" data-stat-id="826b32c1478a98d5" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-826b32c1478a98d5', 'http://www.miliao.com/', 'pcpid', '']);">米聊</a><span class="sep">|</span><a href="http://www.duokan.com/" target="_blank" data-stat-id="c9d2af1ad828a834" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-c9d2af1ad828a834', 'http://www.duokan.com/', 'pcpid', '']);">多看书城</a><span class="sep">|</span><a href="http://www.miwifi.com/" target="_blank" data-stat-id="96f1a8cecc909af2" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-96f1a8cecc909af2', 'http://www.miwifi.com/', 'pcpid', '']);">小米路由器</a><span class="sep">|</span><a href="http://call.mi.com/" target="_blank" data-stat-id="347f6dd0d8d9fda3" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-347f6dd0d8d9fda3', 'http://call.mi.com/', 'pcpid', '']);">视频电话</a><span class="sep">|</span><a href="http://xiaomi.tmall.com/" target="_blank" data-stat-id="dfe0fac59cfb15d9" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-dfe0fac59cfb15d9', 'http://xiaomi.tmall.com/', 'pcpid', '']);">小米天猫店</a><span class="sep">|</span><a href="http://shop115048570.taobao.com/" target="_blank" data-stat-id="c2613d0d3b77ddff" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-c2613d0d3b77ddff', 'http://shop115048570.taobao.com', 'pcpid', '']);">小米淘宝直营店</a><span class="sep">|</span><a href="http://union.mi.com/" target="_blank" data-stat-id="2f48f953961c637d" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-2f48f953961c637d', 'http://union.mi.com/', 'pcpid', '']);">小米网盟</a><span class="sep">|</span><a href="http://www.mi.com/mimobile/" target="_blank" data-stat-id="f7ea7880c49b687e" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-f7ea7880c49b687e', '//www.mi.com/mimobile/', 'pcpid', '']);">小米移动</a><span class="sep">|</span><a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" data-stat-id="c7ef95929d60f3f1" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-c7ef95929d60f3f1', 'http://www.miui.com/res/doc/privacy/cn.html', 'pcpid', '']);">隐私政策</a><span class="sep">|</span><a href="#J_modal-globalSites" data-toggle="modal" target="_blank" data-stat-id="9db137a8e0d5b3dd" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-9db137a8e0d5b3dd', '#J_modal-globalSites', 'pcpid', '']);">Select Region</a>            </p>
            <p>©<a href="http://www.mi.com/" target="_blank" title="mi.com" data-stat-id="836cacd9ca5b75dd" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-836cacd9ca5b75dd', '//www.mi.com/', 'pcpid', '']);">mi.com</a> 京ICP证110507号 <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" data-stat-id="f96685804376361a" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-f96685804376361a', 'http://www.miitbeian.gov.cn/', 'pcpid', '']);">京ICP备10046444号</a> <a rel="nofollow" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank" data-stat-id="57efc92272d4336b" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-57efc92272d4336b', 'http://www.beian.gov.cn/portal/registerSystemInforecordcode=11010802020134', 'pcpid', '']);">京公网安备11010802020134号 </a><a rel="nofollow" href="http://c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" data-stat-id="c5f81675b79eb130" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-c5f81675b79eb130', '//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg', 'pcpid', '']);">京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a href="http://privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn" target="_blank" data-stat-id="de920be99941f792" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-de920be99941f792', '//privacy.truste.com/privacy-seal/validationrid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&amp;lang=zh-cn', 'pcpid', '']);"><img src="js/truste.png" alt="TRUSTe Privacy Certification"></a>
                    <a href="http://search.szfw.org/cert/l/CX20120926001783002010" target="_blank" data-stat-id="d44905018f8d7096" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-d44905018f8d7096', '//search.szfw.org/cert/l/CX20120926001783002010', 'pcpid', '']);"><img src="js/v-logo-2.png" alt="诚信网站"></a>
                    <a href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&amp;ct=df&amp;pa=461082" target="_blank" data-stat-id="3e1533699f264eac" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-3e1533699f264eac', 'https://ss.knet.cn/verifyseal.dllsn=e12033011010015771301369&amp;ct=df&amp;pa=461082', 'pcpid', '']);"><img src="js/v-logo-1.png" alt="可信网站"></a>
                    <a href="http://www.315online.com.cn/member/315140007.html" target="_blank" data-stat-id="b085e50c7ec83104" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b085e50c7ec83104', 'http://www.315online.com.cn/member/315140007.html', 'pcpid', '']);"><img src="js/v-logo-3.png" alt="网上交易保障中心"></a>
        
        </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>

<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal" data-stat-id="cfd3189b8a874ba4" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-cfd3189b8a874ba4', '', 'pcpid', '']);"><i class="iconfont"></i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <img alt="" src="js/site-weixin.png" width="680" height="340">
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
            <a class="btn btn-primary" id="J_bigtapRetry" data-stat-id="c148a4197491d5bd" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-c148a4197491d5bd', '', 'pcpid', '']);">重试</a>
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
                <img src="js/loading.gif" alt="" width="32" height="32">
                <a id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);" data-stat-id="ce9e5bb5b994ad55" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-ce9e5bb5b994ad55', 'javascript:void0', 'pcpid', '']);">网络错误，点击重新获取验证码！</a>
            </div>
            <div class="mode-action hide" id="J_bigtapModeAction">
                <div class="mode-con" id="J_bigtapModeContent"></div>
                <input name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码" type="text">
                <p class="tip" id="J_bigtapModeTip"></p>
                <a class="btn  btn-gray" id="J_bigtapModeSubmit" data-stat-id="7f083d6abed714f8" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-7f083d6abed714f8', '', 'pcpid', '']);">确认</a>
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
        <a class="close" data-dismiss="modal" data-stat-id="d63900908fde14b1" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-d63900908fde14b1', '', 'pcpid', '']);"><i class="iconfont"></i></a>
        <span class="title">Select Region</span>
    </div>
    <div class="modal-bd">
        <h3>Welcome to Mi.com</h3>
        <p class="modal-globalSites-tips">Please select your country or region</p>
        <p class="modal-globalSites-links clearfix">
            <a href="http://www.mi.com/index.html" data-stat-id="51fe807618ae85f4" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-51fe807618ae85f4', '//www.mi.com/index.html', 'pcpid', '']);">Mainland China</a>
            <a href="http://www.mi.com/hk/" data-stat-id="d8e4264197de1747" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-d8e4264197de1747', 'http://www.mi.com/hk/', 'pcpid', '']);">Hong Kong</a>
            <a href="http://www.mi.com/tw/" data-stat-id="8b54359fb6116e28" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-8b54359fb6116e28', 'http://www.mi.com/tw/', 'pcpid', '']);">Taiwan</a>
            <a href="http://www.mi.com/sg/" data-stat-id="e9c0506f7e4e7161" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-e9c0506f7e4e7161', 'http://www.mi.com/sg/', 'pcpid', '']);">Singapore</a>
            <a href="http://www.mi.com/my/" data-stat-id="d6299ad30ec761a8" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-d6299ad30ec761a8', 'http://www.mi.com/my/', 'pcpid', '']);">Malaysia</a>
            <a href="http://www.mi.com/ph/" data-stat-id="22b601cf7b3ada84" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-22b601cf7b3ada84', 'http://www.mi.com/ph/', 'pcpid', '']);">Philippines</a>
            <a href="http://www.mi.com/in/" data-stat-id="441d26d4571e10dc" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-441d26d4571e10dc', 'http://www.mi.com/in/', 'pcpid', '']);">India</a>
            <a href="http://www.mi.com/id/" data-stat-id="88ccf9755c488ec5" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-88ccf9755c488ec5', 'http://www.mi.com/id/', 'pcpid', '']);">Indonesia</a>
            <a href="http://br.mi.com/" data-stat-id="c41d871bf5ddcd95" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-c41d871bf5ddcd95', 'http://br.mi.com/', 'pcpid', '']);">Brasil</a>
            <a href="http://www.mi.com/en/" data-stat-id="4426c5dac474df5f" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-4426c5dac474df5f', 'http://www.mi.com/en/', 'pcpid', '']);">Global Home</a>
            <a href="http://www.mi.com/mena/" data-stat-id="261bb8cf155fb56b" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-261bb8cf155fb56b', 'http://www.mi.com/mena/', 'pcpid', '']);">MENA</a>
            <a href="http://www.mi.com/pl/" data-stat-id="2e3007e460f40ce3" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-2e3007e460f40ce3', 'http://www.mi.com/pl/', 'pcpid', '']);">Poland</a>
            <a href="http://www.mi.com/ua/" data-stat-id="de8d49aabd1eecdd" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-de8d49aabd1eecdd', 'http://www.mi.com/ua/', 'pcpid', '']);">Ukraine</a>
            <a href="http://www.mi.com/ru/" data-stat-id="886bf2568681dd6b" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-886bf2568681dd6b', 'http://www.mi.com/ru/', 'pcpid', '']);">Russia</a>
            <a href="http://www.mi.com/vn/" data-stat-id="b859ec9bcac672f1" onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b859ec9bcac672f1', 'http://www.mi.com/vn/', 'pcpid', '']);">Vietnam</a>
        </p>
    </div>
</div>
<!-- .modal-globalSites END -->

<!-- <script src="js/base.js"></script> -->
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
        damiaoSite: 'https://tp.hd.mi.com/',
        damiaoGoodsId:[],
        logoutUrl: 'http://order.mi.com/site/logout',
        staticSite: '//static.mi.com',
        quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    //MI.updateMiniCart();
})();
</script>

<script type="text/javascript" src="js/checkout.js"></script>

<script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = '//c1.mifile.cn/f/i/15/stat/js/xmst.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>

</body></html>