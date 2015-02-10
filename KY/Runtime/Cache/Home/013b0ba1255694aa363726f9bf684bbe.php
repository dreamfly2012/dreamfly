<?php if (!defined('THINK_PATH')) exit();?><div class="container">
	<form action="javascript:;" method="post" name="sqldataform" id="sqldataform">
		<select name="table">
			<option selected="selected" value="article">文章</option>
		</select>

		<select name="field">
			<?php if(is_array($Fields)): foreach($Fields as $key=>$vo): ?><option value="<?php echo ($vo["Field"]); ?>"><?php echo ($vo["Field"]); ?></option><?php endforeach; endif; ?>
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