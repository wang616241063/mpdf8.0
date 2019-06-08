<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="generator" content="Movable Type 5.2.2">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>录取通知书</title>
</head>
<body style="margin: 0">
    <div style="width: 800px; height: 1090px; padding: 20px; border: 3px solid rgb(189, 174, 163)">
	    <div style="position: relative; margin-bottom: 50px;">
	      <div style="width: 500px; margin: -15px auto 0; text-align: center">
	      	<p style="font-size: 14; color: rgb(193, 189, 193)">本校是教育部批准的具有高等学历教育招生资格的普通高等学校</p>
	        <img src="./img/school.png" alt="" style="display: block; width: 333px; height: 82px; margin-bottom: 10px;" />
	        <img src="./img/notice.png" alt="" style="display: block; width: 333px; height: 82px;" />
	      </div>
	      <img src="./img/qrcode/18330702150626.png" alt="" style="display:block;float:right;margin-top:-210px;margin-bottom:110px; width: 100px; height: 100px;" />
	    </div>
	    <div style="width: 90%; margin: 0 auto;">
		    <div>
			    <div style="text-align: center; float:left; width: 300px; padding-top: 30px;">
			    	<span>1123345566535</span>
			    	<img src="./img/barcode/18330702150626.png" alt="" style="width: 230px; height: 40px;" />
			    	<span>1123345566535</span>
			    	<p style="font-size: 26px; text-align: left; padding-left: 20px;"><b style="font-size: 28px;">张三</b>同学：</p>
			    </div>
		      	<div style="float:right;width:110px;height: 160px;margin-right: 30px; background-image:url(./img/18330702150626.png);background-repeat:no-repeat;background-position:0px 10px; background-size: 100%">
		      	</div>
		    </div>
		    <div style="width: 90%; height: 220px; margin: 0 auto;">
		      <p style="font-size: 26px; text-indent: 2em; line-height: 36px;">经广东省招生委员会批准，你被我校录取到<span style="font-size: 26px; font-weight: bolder;">建筑</span>学院<b style="font-size: 26px;">建筑</b>专业，为<b style="font-size: 26px;">四</b>年制本科生，请凭本通知书于<b style="font-size: 26px;">9月8日</b>到我校<b style="font-size: 26px;">西</b>校区报到。</p>
		    </div>
		    <div style="margin-bottom: 50px;">
		     	<div style="float:left;width:200px;height: 200px;background-image:url(./img/seal.jpeg);background-repeat:no-repeat;background-position:0 20px;background-size: 100%; text-align:center;line-height: 200px;">
		        	<span style="font-size: 24px;">广东工业大学</span>
		      	</div>
		        <div style="float:right;width:300px;height: 80px;background-image:url(./img/from.png);background-repeat:no-repeat; background-position:170px 30px; background-size: 350px 260px;">
		        	<p style="line-height: 100px; font-size: 20px;">签发人（校长）：</p>
			        <p style="font-size: 24px;">2018年7月20日</p>
		      	</div>
		    </div>
	    	<p style="font-size: 12; color: rgb(193, 189, 193); text-align: center;">北京北京北极背笔记法发送的撒</p>
	    </div>
    </div>
</body>
</html>');
/**
 * pdf输出
 * [param] name 保存文件名称
 * [param] F 保存到文件 D下载 I 浏览器输出（默认值）
 * [param] dir 保存到指定位置
 */
// $name = '通知书.pdf';
// $dir = './pdf';
// $mpdf->Output($name, 'F', $dir);
$mpdf->Output();