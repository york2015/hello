<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录 - 海林特产网</title>
<link rel="stylesheet" type="text/css" href="/Public/css/Admin/bootstrap.min.css" />
<script type="text/javascript" src="/Public/js/Admin/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/Public/js/Admin/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        
    })
</script>

</head>
<body>

<div class="navbar">
	<div class="navbar-inner">
		<a href="#" class="brand">海林特产网</a>
		<ul class="nav">
			<li class="active"><a href="<?php echo U('index/index');?>">首页</a></li>
			<li><a href="<?php echo U('product/index');?>">产品管理</a></li>
		</ul>
	
		<ul class="nav pull-right">
			<li><a href="<?php echo U('index/logout');?>">退出登陆</a></li>
		</ul>
	
	</div>
</div>











<!--头部结束-->

    <div class="container">
    	<form class="form-horizontal" method="post" enctype="multipart/form-data">
    		<fieldset>
    			<legend><?php if(isset($data['p_id']) && !empty($data['p_id'])): ?>修改<?php else: ?>添加<?php endif; ?>产品</legend>
    			<input type="hidden" name='p_id' value="<?php echo ($data["p_id"]); ?>" />
    			<div class="control-group">
    				<label for="p_name" class="control-label">产品名</label>
    				<div class="controls">
    					<input type="text" name="p_name" id="p_name" value="<?php echo ($data["p_name"]); ?>"/>
    					<p class="help-block">请输入产品名称</p>
    				</div>
    			</div>
    			<div class="control-group">
    				<label for="cate_id" class="control-label">产品分类</label>
    				<div class="controls">
    					<select name="cate_id" id="cate_id" >
    						<option value="0">请选择产品分类</option>
    						<?php if(is_array($cates)): foreach($cates as $key=>$cate): ?><option value="<?php echo ($cate["id"]); ?>" <?php if(($data["cate_id"]) == $cate["id"]): ?>selected<?php endif; ?>><?php echo ($cate["name"]); ?></option>
    						<?php if(isset($cate['child'])): if(is_array($cate['child'])): foreach($cate['child'] as $key=>$cate_son): ?><option value="<?php echo ($cate_son["id"]); ?>" <?php if(($data["cate_id"]) == $cate_son["id"]): ?>selected<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;┗━<?php echo ($cate_son["name"]); ?></option>
    							<?php if(isset($cate_son['child'])): if(is_array($cate['child'])): foreach($cate['child'] as $key=>$cate_sonson): ?><option value="<?php echo ($cate_sonson["id"]); ?>" <?php if(($data["cate_id"]) == $cate_sonson["id"]): ?>selected<?php endif; ?>>&nbsp;&nbsp;&nbsp;&nbsp;┗━━┗━━<?php echo ($cate_sonson["name"]); ?></option><?php endforeach; endif; endif; endforeach; endif; endif; endforeach; endif; ?>
    					</select>
    					
    				</div>
    			</div>
    			<div class="control-group">
    				<label for="thumb" class="control-label">缩略图</label>
    				<div class="controls">
    				<img src = "<?php echo ($data["thumb"]); ?>" width="70" heigh="70" />
    					<input type="file" name="thumbnail" id="thumb" />
    					<input type="hidden" name="thumb" value="<?php echo ($data["thumb"]); ?>" >
    					<p class="help-block">请上传缩略图</p>
    				</div>
    			</div>
    			<div class="control-group">
    				<label for="price" class="control-label">市场价格</label>
    				<div class="controls">
    					<input type="text" name="price" id="price" value="<?php echo ($data["price"]); ?>" />
    					<p class="help-block">请输入市场价</p>
    				</div>
    			</div>
    			<div class="control-group">
    				<label for="sale_price" class="control-label">销售价格</label>
    				<div class="controls">
    					<input type="text" name="sale_price" id="sale_price"  value="<?php echo ($data["sale_price"]); ?>"/>
    					<p class="help-block">请输入销售价格</p>
    				</div>
    			</div>
    			<div class="control-group">
    				<label for="stock" class="control-label">库存</label>
    				<div class="controls">
    					<input type="text" name="stock" id="stock"  value="<?php echo ($data["stock"]); ?>"/>
    					<p class="help-block">请输入库存</p>
    				</div>
    			</div>
    			
    		</fieldset>
    		<div class="form-actions">
    			<input type="submit" class="btn btn-primary" value="提交"/>
    		</div>
    	
    	</form>
    
    
    
    
    
    
    
    </div>


<!--底部结束-->
</body>
</html>