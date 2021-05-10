<?php /*a:1:{s:76:"/Users/liunan/htdocs/qmce-test/public/themes/default/coaching/dbm/index.html";i:1620638815;}*/ ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<title>代表列表</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/weui.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/jquery-weui.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/fonts/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/visit.css">
<style type="text/css">
.weui-media-box_appmsg .weui-media-box__hd{width:60px;height:60px;line-height:60px;}
.weui-media-box__hd .status{border-radius:50%;font-size:14px;}
.weui-media-box__hd .status.status-draft{color:rgba(0,0,0,.3);background-color:#f7f7f7;}
.weui-media-box__hd .status.status-posted{color:#fff;background-color:#4CB4E7;}
.weui-media-box__hd .status.status-finished{color:#fff;background-color:#B3D53A;}
.weui-media-box__info{margin-top:8px;}
.weui-panel__hd span.warn{color:#f43530;font-weight:bold;font-size:14px;padding-right:4px;}
.weui-panel__hd a.link-create{float:right;color:#586c94;}
.weui-panel__hd a.link-stat{float:right;color:#586c94;}
.visit-card .weui-media-box__bd{position:relative;}
.visit-card span.weui-cell__ft{padding-right:13px;position:absolute;right:0;top:48px;}
.visit-card.draft span.weui-cell__ft{top:30px;}
.visit-card span.weui-cell__ft:after{
  content: " ";
  display: inline-block;
  height: 6px;
  width: 6px;
  border-width: 2px 2px 0 0;
  border-color: #c8c8cd;
  border-style: solid;
  -webkit-transform: matrix(.71,.71,-.71,.71,0,0);
  transform: matrix(.71,.71,-.71,.71,0,0);
  top: -2px;
  position: absolute;
  top: 50%;
  margin-top: -4px;
  right: 2px;}
.visit-card .weui-media-box__title span.doctor-count{font-size:13px;color:#999;}
.step{
  display: inline-block;
  border-radius: 3px;
  color: #fff;
  font-size: 12px;
  vertical-align: middle;
  text-align: center;
  line-height: 1.2;
  padding: .15em .4em;}
.step.step-yes{
  background-color: #B3D53A;}
.step.step-no{
  background-color: #d9d9d9;}
body{background-color:#f5f5f5;padding-bottom:50px;}
a.weui-media-box{background-color:#fff;}
</style>
</head>
<body>
<?php $this->load->view('include/watermark'); ?>
<div class="weui-search-bar" id="searchBar">
  <form class="weui-search-bar__form" method='post' action="./?/dbm/search/1">
    <div class="weui-search-bar__box">
      <i class="weui-icon-search"></i>
      <input type="search" class="weui-search-bar__input" id="searchInput" name="searchInput" placeholder="搜索" bindconfirm="searchBtn" focus='ture' > 
      <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
    </div>
    <label class="weui-search-bar__label" id="searchText">
      <i class="weui-icon-search"></i>
      <span>搜索</span>
    </label>
  </form>
  <a href="javascript:" class="weui-search-bar__cancel-btn" id="searchCancel">取消</a>
</div>
<!--
<header class="visit-header">
  <h1 class="visit-title">我的拜访记录</h1>
</header>
-->


  <div class="weui-panel__hd">
    历史总计 <span class="warn"><?php echo count($visits);?></span> 位代表
    <!-- <a href="./?/dbm/chart" class="link-stat"><i class="fa fa-bar-chart"></i> 汇总统计</a> -->
  </div>
  <?php
    foreach($visits as $v) {
  ?>
  <a href="./?/dbm/dbmlist/<?php echo $v['initial'];?>" class="weui-media-box weui-media-box_appmsg visit-card">
    <div class="weui-media-box__hd">
      <div class="status status-posted"><?php echo $v['count(*)'];?>条</div>
      <span class="weui-cell__ft" style="margin-right:8px;"></span>
    </div>
    
    <div class="weui-media-box__bd">
    
      <p class="weui-media-box__desc"><?php echo $v['username'];?> <?php echo $v['initial'];?></p>
      
    </div>
  </a>
  <?php
    }
  ?>
</div>
<script src="<?php echo base_url(); ?>public/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/layer/layer.js"></script>
<script src="<?php echo base_url(); ?>public/js/jquery-weui.js"></script>
<script src="<?php echo base_url(); ?>public/js/visit.js"></script>
<script src="//res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script type="text/javascript">
$(function() {
  $('.link-create').click(function() {
    layer.confirm('您有未提交的申请草稿，是否继续编辑？<br/>创建时间：2018-11-01 10:26', {
      btn: ['继续', '放弃，重新创建'] //按钮
    }, function() {
      window.location = './?/dbm/draft';
    }, function() {
      window.location = './?/dbm/create';
    });
  });
});
</script>
</body>
</html>