<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>ThinkPHP示例：缩略图生成</title>
	<style type="text/css">
	*{ padding: 0; margin: 0;font-size:16px; font-family: "微软雅黑"} 
	div{ padding: 3px 20px;} 
	body{ background: #fff; color: #333;}
	h2{font-size:36px}
	input,textarea {border:1px solid silver;padding:5px;width:350px}
	input{height:30px}
	input.button,input.submit{width:68px; margin:2px 5px;letter-spacing:4px;font-size:16px; font-weight:bold;border:1px solid silver; text-align:center; background-color:#F0F0FF;cursor:pointer}
	div.result{border:1px solid #d4d4d4; background:#FFC;color:#393939; padding:8px 20px;float:auto; width:450px;margin:2px}
	img {border:1px solid silver;padding:1px;margin:5px}
	</style>
 </head>
 <body>
 <div class="main">
 <h2>ThinkPHP示例之：图片上传</h2>
<?php if(!empty($data)): ?><img src="__UPLOAD__/m_<?php echo ($data["image"]); ?>" /> <img src="__UPLOAD__/s_<?php echo ($data["image"]); ?>" /><?php endif; ?>
<form id="upload" method='post' action="__URL__/upload/" enctype="multipart/form-data">
<div class="result" >上传允许文件类型：gif png jpg 图像文件，并生成2张缩略图，其中大图带水印，生成后会删除原图。</div>
<input name="image" id="image" type="file" />
<input type="submit" value="提交" class="button" >
</form>
</div>
</body>
</html>