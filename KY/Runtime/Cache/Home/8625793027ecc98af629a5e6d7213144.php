<?php if (!defined('THINK_PATH')) exit();?><div class="container">
	<form action="javascript:;" method="post" name="sqldataform" id="sqldataform">
		<select name="table">
			<option selected="selected" value="article">文章</option>
			<option value="pic">图片</option>
		</select>

		<select name="field">
			<option selected="selected" value="title">名称</option>
			<option value="content">内容</option>
		</select>
		<input type="submit" class="sqldata" value="确认" />
	</form>
</div>
<script type="text/javascript">
 	$(".sqldata").on('click',function(){
		$.ajax({  
			type: "POST",  
			url: "getData",  
			data: $('#sqldataform').serialize(),  
			success: function(data) {
				var data = $.parseJSON(data);
				CKEDITOR.instances['contenteditor'].setData(data[0].title);
			}
		});
	});
</script>