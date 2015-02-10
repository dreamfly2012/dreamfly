<?php
namespace Home\Controller;
use Think\Controller;

//Vendor('ckeditor');
class IndexController extends Controller {
    public function index(){
        $this->display('edit');
    }

    
    public function showdb(){
        $m = M();

        $columns = $m->query('show columns from ky_article;');

        $this->assign('Fields',$columns);

        $this->display('showdb');
    }

    public function show_detail(){
        $name = I('request.detail','index','');
        $this->display($name);
    } 

    public function getData(){
        $table = I('request.table');
        $field = I('request.field');

        $m = M($table);

        if($data = $m->field($field)->limit(1)->select()){
            $encode_data = json_encode($data);
            echo $encode_data;
        }else{
            echo '';
        }
    }



    //ajax 请求 返回绑定数据
    public function sqldatasoucre(){
    	$table = I('request.table');
    	$m = M($table);
    	$data = $m->select();
    	$encode_data = json_encode($data);
    	
    	echo $encode_data;

    }

    public function savedrag(){
    	
    }

    public function savehtml(){
    	$content = I('post.content','','');

        $url = I('post.url');

    	$head = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Bootstrap可视化布局系统">
    <meta name="description" content="可拖放排序在线编辑的Bootstrap可视化布局系统">
    <meta name="keywords" content="可视化,布局,系统">
    <title>Bootstrap 可视化布局系统</title>
    <link href="__PUBLIC__/dist/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="__PUBLIC__/dist/css/layoutit.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://apps.bdimg.com/libs/html5shiv/3.7/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="__PUBLIC__/dist/images/favicon.png">
 	<script type="text/javascript" src="__PUBLIC__/dist/js/jquery.min.js"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/1.9.1/jquery.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="__PUBLIC__/dist/js/bootstrap.min.js"></script>
</head>
<body>';

		$foot = '
</body>
</html>';
       
        $file =  APP_PATH.'Home'.DIRECTORY_SEPARATOR.C('DEFAULT_V_LAYER').DIRECTORY_SEPARATOR.'Store'.DIRECTORY_SEPARATOR.$url.'.html';

    	$flag = file_put_contents($file, $head . $content . $foot);
        
    }
}