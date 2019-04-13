<?php if(!defined('wmblog'))exit; ?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<title>评论列表_<?php echo $webtitle;?></title>
<meta name="keywords" content="微博,日志,无名" />
<meta name="description" content="这里放微博简介" />
<link href="assets/<?php echo $template;?>/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrap">
  <?php include "head.php";?>
  <div id="content">
  <div id="main">
     <div id="comment_list">
	    <h4>评论列表</h4>
         <?php foreach($list as $v){ ?>
		<div class="comlist" id="Com-<?php echo $v['id']; ?>"><div id="Ctext-<?php echo $v['id']; ?>"><p><strong><?php echo $v['pname']; ?></strong>：<?php if($v['isn']==1 && $admin===0){echo '评论审核中...'; } else { echo $v['pcontent'];}?>  <a href="<?php echo vurl($v['cid']); ?>#Com-<?php echo $v['id']; ?>">[查看]</a></p>
		<?php if($v['rcontent']<>""){?><p class="re">&nbsp;&nbsp;<strong style="color:#C00">回复</strong>：<span><?php echo $v['rcontent']; ?></span></p><?php }?>
		</div><p class="time"><?php echo $v['ptime']; ?></p><?php if($admin ===1){?><p class="navPost"><a href="javascript:void(0)" onclick="repl('<?php echo $v['id']; ?>','<?php echo $v['cid']; ?>')" title="回复评论">回复</a>&nbsp;<a href="javascript:void(0)" onclick="delpl('<?php echo $v['id']; ?>','<?php echo $v['cid']; ?>')" class="item">删除</a><?php if($v['isn'] ==1){?><a id="sh-<?php echo $v['id']; ?>" href="javascript:void(0)" onclick="shpl('<?php echo $v['id']; ?>')" class="item">&nbsp;审核</a><?php }?></p><?php }?></div>
       <?php } ?>
		
	 </div> 
	 <div id="pager">
		<span class="info"> 共计：<?php echo $count; ?> 条记录 每页:<?php echo $per_page; ?>条</span><?php echo $pagelist; ?>
	</div>
	 </div>
    <?php include "right.php";?>
  </div>
  <div id="footer"><?php include "foot.php";?></div>
</div>
<script type="text/javascript" language="javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/js/ajax.js"></script>
</body>
</html> 