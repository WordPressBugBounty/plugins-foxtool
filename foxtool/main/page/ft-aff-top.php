<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }
// Mảng chứa các khối HTML
$foxtool_aff_top = array(
    '<div class="ft-aff-top1" id="ft-aff-top1">
        <span class="ft-aff-top1-cl" onclick="ftnone(event, \'ft-aff-top1\')">&#215;</span>
        <div class="ft-aff-top1-box">
            <img src="' . FOXTOOL_URL . 'img/ov/cache.png" />
        </div>
        <div class="ft-aff-top1-box2">' . __('Clear the cache to refresh the configuration', 'foxtool') . '</div>
        <div class="ft-aff-top1-box3">' . __('After completing your setup on Foxtool, if you are using speed optimization or caching plugins, please clear all caches so that the new features are updated and functioning properly', 'foxtool') . '</div>
    </div>',
);
$foxtool_random_index = array_rand($foxtool_aff_top);
echo $foxtool_aff_top[$foxtool_random_index];
?>
<style>
.ft-aff-top1{
	margin-top:20px;
	background: linear-gradient(85deg, #fff 0%, rgba(255, 255, 255, 0) 100%);
	padding:20px;
	border-radius:10px;
	font-size:15px;
	border-top: 1px solid #ccc;
	border-left: 1px solid #ccc;
	position: relative;
}
.ft-aff-top1-cl {
    width: 20px;
    height: 20px;
    display: flex;
    border: 1px solid #007bfc;
    color: #007bfc;
    border-radius: 100%;
    align-items: center;
    justify-content: center;
	top:-5px;
	left:-5px;
	background:#fff;
	position: absolute;
	cursor: pointer;
}
.ft-aff-top1-box{
	display: flex;
    align-items: center;
}
.ft-aff-top1-box img{
	width:100px;
}
.ft-aff-top1-box span{
	font-weight:bold;
	margin-left:20px;
	color:#0056b1;
}
.ft-aff-top1-box2{margin-top:10px;font-weight:bold;}
.ft-aff-top1-box3, .ft-aff-top2-box3, .ft-aff-top3-box3{
	margin-top:10px;
	display:block;
	padding: 12px;
	border-radius:5px;
}
.ft-aff-top1-box3{
    background: linear-gradient(85deg, var(--note) 0%, rgba(255, 255, 255, 0) 100%);
}
.ft-aff-top2-box3{
    background: linear-gradient(85deg, #e62c3121 0%, rgba(255, 255, 255, 0) 100%);
}
</style>
