<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSS Reset Test</title>  
<link rel="stylesheet" type="text/css" href="css/r.css"/>
<link rel="stylesheet" type="text/css" href="css/b.css"/>
<link rel="stylesheet" type="text/css" href="css/m.css"/>
<link rel="stylesheet" type="text/css" href="css/g.css"/>
<link rel="stylesheet" type="text/css" href="css/mod.css"/>
<style type="text/css" media="screen">
 

#hd{background:#f00;}
#ft{background:#00f;}
.g-u{padding:0 5px;}

</style>
</head>
<body>
<h2>采用流体布局</h2>
<div id="doc" class="">
	<div id="hd">
		<h1>header</h1>
		<div id="nav">
			nav
		</div>
	</div>
	<div id="bd">
		<div class="g-m0s5 l-fix tMarginLg">
			<div class="col-m">
				<div class="m-wrap">
						<?php
					$emod01=array('id'=>'','hd'=>'aaa','bd'=>include "emod01_bd.php",'bdlength'=>10,'className'=>'');
					include "emod01.php"
					?>
				</div>
			</div>
			<div class="col-s">
					<?php
					$emod01=array('id'=>'','hd'=>'aaa','bd'=>include "emod01_bd.php",'bdlength'=>10,'className'=>'');
					include "emod01.php"
					?>
			</div>
		</div>
	</div>
	<div id="ft">
		ft
	</div>
</div>
</body>
</html>