<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
  <!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/themes/css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/fonts/ptsans/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/fluid.css" media="screen" />

<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/mws.style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/icons/icons.css" media="screen" />

<!-- Demo and Plugin Stylesheets -->
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/demo.css" media="screen" />

<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/colorpicker/colorpicker.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/jimgareaselect/css/imgareaselect-default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/fullcalendar/fullcalendar.print.css" media="print" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/tipsy/tipsy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/sourcerer/Sourcerer-1.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/jgrowl/jquery.jgrowl.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/plugins/spinner/spinner.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/jui/jquery.ui.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/common.css" media="screen" />

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/mws.theme.css" media="screen" />
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/themes/css/jquery.fancybox.css" media="screen" />

<!-- JavaScript Plugins -->

<script type="text/javascript" src="/KYCMS/Public/themes/js/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jimgareaselect/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jgrowl/jquery.jgrowl.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jquery.filestyle.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jquery.dataTables.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="/KYCMS/Public/plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/flot/jquery.flot.stack.min.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/sourcerer/Sourcerer-1.2.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jquery.placeholder.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jquery.validate.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/js/jquery-ui.js"></script>

<script type="text/javascript" src="/KYCMS/Public/themes/js/mws.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/js/demo.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/js/themer.js"></script>
<script type="text/javascript" src="/KYCMS/Public/themes/js/jquery.fancybox.js"></script> 
  <title>开源后台管理</title>
  <meta name="keywords" content="[keywords]" />
</head>
<body>
<div id="mws-header" class="clearfix">
	<div id="mws-logo-container">
    	<div id="mws-logo-wrap">
        	<img src="/KYCMS/Public/themes/images/mws-logo.png" alt="mws admin">
		  </div>
    </div>
    
    <div id="mws-user-tools" class="clearfix">
    	<div id="mws-user-info" class="mws-inset">
        	<?php if(!is_null(session('username'))): ?>
                <div id="mws-user-photo">
                
                </div>
                <div id="mws-user-functions">
                    <div id="mws-username">
                        你好,<?php echo session('username'); ?> 
                    </div>
                    <ul>
                    	  <li><a href="<?php echo U('Index/changepass');?>">修改密码</a></li>
                        <li><a href="<?php echo U('Admin/logout');?>">退出</a></li>
                    </ul>
                </div>
             <?php else: ?>
                   <span style="color:#c5d52b;font-size:22px;">你好，请
                      <a href="<?php echo U('Index/index');?>" style="color:#FFFFFF;text-decoration: none;">登陆</a>
                   </span>
             <?php endif; ?>
        </div>
    </div>
</div>
    <div id="mws-login">
    	<h1>登陆</h1>
        <div class="mws-login-lock"><img src="/KYCMS/Public/themes/css/icons/24/locked-2.png" alt="" /></div>
    	<div id="mws-login-form">
        	<form class="mws-form" action="<?php echo U('Admin/login');?>" method="post">
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input type="text" class="mws-login-username mws-textinput" placeholder="username" name="username" />
                    </div>
                </div>
                <div class="mws-form-row">
                	<div class="mws-form-item large">
                    	<input type="password" class="mws-login-password mws-textinput" placeholder="password" name="password"/>
                    </div>
                </div>
                <div class="mws-form-row">
                	<input type="submit" value="Login" class="mws-button green mws-login-button" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>