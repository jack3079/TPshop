<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>

    <link href="/KeNong/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/KeNong/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/KeNong/Public/admin/css/animate.css" rel="stylesheet">
    <link href="/KeNong/Public/admin/css/style.css" rel="stylesheet">
    <!-- 基础脚本 -->
    <script src="/KeNong/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/KeNong/Public/js/bootstrap.min.js"></script>
    <script src="/KeNong/Public/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/KeNong/Public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="/KeNong/Public/admin/js/plus.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">

                        <div class="dropdown profile-element"> <span>
                            <img class="img-circle" src="/KeNong/Public/admin/img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo ($Manage); ?></strong>
                             </span>  <span class="text-muted text-xs block">网站管理员 <b class="caret"></b></span> </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="/KeNong/index.php/Manage/Admin/editAdmin/admin_id/<?php echo ($Manageid); ?>">修改密码</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="/KeNong/index.php/Manage/Public/logout">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            科农
                        </div>

                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">商城设置</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Index/index">后台首页</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/System/index">网站设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/System/weixin">微信设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/System/sms">短信设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Ad/index">广告管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Admin/index">管理员管理</a>
                            </li>
                        </ul>
                    </li>                    

                    <li>
                        <a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="nav-label">商品管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Goods/index">商品列表</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Goods/addGoods">添加商品</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Category/index">商品分类</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Brand/index">品牌管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span class="nav-label">交易管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Order/index">订单管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-plane"></i> <span class="nav-label">物流管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Shipping/index">快递管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Freight/index">运费设置</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-credit-card"></i> <span class="nav-label">支付管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/Pay/alipay">支付宝设置</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Pay/wxpay">微信支付设置</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="img-circle glyphicon glyphicon-user"></i> <span class="nav-label">客户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/User/index">客户列表</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/Rank/index">客户组管理</a>
                            </li>
                            <li><a href="">分销提成</a>
                            </li>
                            <li><a href="">提现管理</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-edit"></i> <span class="nav-label">内容管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/KeNong/index.php/Manage/NewsCate/index">分类管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/News/index">新闻管理</a>
                            </li>
                            <li><a href="/KeNong/index.php/Manage/News/about">单页管理</a>
                            </li>
                        </ul>
                    </li>
               </ul>     
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><a href="/KeNong/index.php/Manage" title="返回首页"><i class="fa fa-home"></i></a>欢迎<?php echo ($Manage); ?>登录后台管理中心</span>
                        </li>
                        <li>
                            <a href="/KeNong/index.php/Manage/Public/logout">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                    </ul>

                </nav>
            </div> 
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">
    <title><?php echo ($system["sitename"]); ?>后台管理中心 - 支付管理 - <?php echo ($pay["payname"]); ?></title>
    
    
</head>

<body>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><?php echo ($pay["payname"]); ?>设置</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="/KeNong/index.php/Manage/Index/index">主页</a>
                        </li>
                        <li>
                            <a href="/KeNong/index.php/Manage/Pay/wxpay">支付设置</a>
                        </li>
                        <li>
                            <strong><?php echo ($pay["payname"]); ?>设置</strong>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5><?php echo ($pay["payname"]); ?>接口配置</h5>
                            </div>
                            <div class="ibox-content">
                                <form  role="form" id="form" method="post" action="/KeNong/index.php/Manage/Pay/save_wxpay" class="form-horizontal" />
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">身份标识</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="appid" value="<?php echo ($payconfig["appid"]); ?>" placeholder="请输入微信公众号身份的唯一标识">
                                            <span class="help-block m-b-none">微信支付接口申请：http://open.wx.qq.com</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Appsecret</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="appsecret" value="<?php echo ($payconfig["appsecret"]); ?>" placeholder="请输入JSAPI接口中获取openid">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">API密钥(KEY)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="key" value="<?php echo ($payconfig["key"]); ?>" placeholder="请输入商户支付密钥Key">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">商户ID(MCHID)</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="mchid" value="<?php echo ($payconfig["mchid"]); ?>" placeholder="请输入受理商ID">
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">支付状态</label>
                                        <div class="col-sm-10">
                                            <input name="paystatus" type="radio" value="1" <?php if($pay["paystatus"] == 1): ?>checked<?php endif; ?>><span>开启</span>
                                            <input name="paystatus" type="radio" value="0"  <?php if($pay["paystatus"] == 0): ?>checked<?php endif; ?>><span>关闭</span>
                                        </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                        <input type="hidden" name="payid" value="<?php echo ($pay["payid"]); ?>">
                                            <button class="btn btn-primary" type="submit">保存内容</button>
                                            <button class="btn btn-white" type="reset">取消</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>

            <div class="footer">
                <div class="pull-right">
                    By：<a href="<?php echo C('Site_Url');?>" target="_blank"><?php echo ($system["sitename"]); ?></a>
                </div>
                <div>
                   Copyright©2016<a href="<?php echo ($system["url"]); ?>"><?php echo ($system["copyright"]); ?></a> 
                </div>
            </div>
        </div>
    </div>


</body>
</html>