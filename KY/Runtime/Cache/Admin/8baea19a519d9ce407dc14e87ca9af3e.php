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
<link rel="stylesheet" type="text/css" href="/KYCMS/Public/dist/css/change.css" media="screen" />
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
<script type="text/javascript" src="/KYCMS/Public/dist/js/change.js"></script>
  <title>后台管理面板</title>
  <meta name="keywords" content="后台管理" />
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
<div id="mws-wrapper">     
    ﻿<div id="mws-sidebar-stitch"></div>
<div id="mws-sidebar-bg"></div>
<div id="mws-sidebar">
	<div id="mws-searchbox" class="mws-inset">
    	
    </div>
    
    <div id="mws-navigation">
    	<ul>
        	<li><a href="<?php echo U('Index/edit');?>" class="mws-i-24 i-home">添加页面设置</a></li>
        	<li><a href="<?php echo U('');?>" class="mws-i-24 i-chart">空缺</a></li>
        	<li><a href="<?php echo U('');?>" class="mws-i-24 i-day-calendar">空缺</a></li>
        	<li><a href="<?php echo U('');?>" class="mws-i-24 i-file-cabinet">空缺</a>
        	<!--<li><a href="table.html" class="mws-i-24 i-table-1">Table</a></li>
        	<li>
            	<a href="#" class="mws-i-24 i-list">Forms</a>
                <ul>
                	<li><a href="form_layouts.html">Layouts</a></li>
                	<li><a href="form_elements.html">Elements</a></li>
                </ul>
            </li>
        	<li><a href="widgets.html" class="mws-i-24 i-cog">Widgets</a></li>
        	<li><a href="typography.html" class="mws-i-24 i-text-styling">Typography</a></li>
        	<li class="active"><a href="grids.html" class="mws-i-24 i-blocks-images">Grids &amp; Panels</a></li>
        	<li><a href="gallery.html" class="mws-i-24 i-polaroids">Gallery</a></li>
        	<li><a href="error.html" class="mws-i-24 i-alert-2">Error Page</a></li>
        	<li>
            	<a href="icons.html" class="mws-i-24 i-pacman">
                	Icons <span class="mws-nav-tooltip mws-inset">2000+</span>
                </a>
            </li>-->
        </ul>
    </div>
</div>
    <div id="mws-container" class="clearfix">
      <div class="container"> 
            <div class="mws-panel-header">
                <span class="mws-i-24 i-table-1">主题颜色修改</span>
            </div>
            <div class="mws-panel-body">
              <div class="dataTables_wrapper">
                <div id="red"></div>
                <div id="green"></div>
                <div id="blue"></div>
                <div id="swatch" class="ui-widget-content ui-corner-all">
                  <input id="confirm" type="button" value="确认"/>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div id="mws-footer">
	Copyright © 2014.JuSou All rights reserved.<a target="_blank" href="http://www.jusou8.com/">巨搜网络公司</a>
</div>
    </div>
<script type="text/javascript">
  $(function(){
    var color = getCookie('themecolor');
    $("#mws-sidebar-bg").css('background',color);
    $("#mws-header").css('background',color);
  })
  
</script>
</div>
</body>
</html>