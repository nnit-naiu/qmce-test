<?php /*a:2:{s:66:"D:\phpStudy\WWW\nnit\public/themes/default/coaching\mr\search.html";i:1620630742;s:69:"D:\phpStudy\WWW\nnit\public/themes/default/coaching\mr\watermark.html";i:1620617096;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>搜索结果</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/themes/default/coaching/css/weui.min.css">
    <link rel="stylesheet" href="/themes/default/coaching/css/jquery-weui.css">
    <link rel="stylesheet" href="/themes/default/coaching/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/themes/default/coaching/css/visit.css">
    <style type="text/css">
        .weui-media-box_appmsg .weui-media-box__hd {
            width: 60px;
            height: 60px;
            line-height: 60px;
        }

        .weui-media-box__hd .status {
            border-radius: 50%;
            font-size: 14px;
        }

        .weui-media-box__hd .status.status-draft {
            color: rgba(0, 0, 0, .3);
            background-color: #f7f7f7;
        }

        .weui-media-box__hd .status.status-posted {
            color: #fff;
            background-color: #4CB4E7;
        }

        .weui-media-box__hd .status.status-finished {
            color: #fff;
            background-color: #B3D53A;
        }

        .weui-media-box__info {
            margin-top: 8px;
        }

        .weui-panel__hd span.warn {
            color: #f43530;
            font-weight: bold;
            font-size: 14px;
            padding-right: 4px;
        }

        .weui-panel__hd a.link-create {
            float: right;
            color: #586c94;
        }

        .weui-panel__hd a.link-stat {
            float: right;
            color: #586c94;
        }

        .visit-card .weui-media-box__bd {
            position: relative;
        }

        .visit-card span.weui-cell__ft {
            padding-right: 13px;
            position: absolute;
            right: 0;
            top: 48px;
        }

        .visit-card.draft span.weui-cell__ft {
            top: 30px;
        }

        .visit-card span.weui-cell__ft:after {
            content: " ";
            display: inline-block;
            height: 6px;
            width: 6px;
            border-width: 2px 2px 0 0;
            border-color: #c8c8cd;
            border-style: solid;
            -webkit-transform: matrix(.71, .71, -.71, .71, 0, 0);
            transform: matrix(.71, .71, -.71, .71, 0, 0);
            top: -2px;
            position: absolute;
            top: 50%;
            margin-top: -4px;
            right: 2px;
        }

        .visit-card .weui-media-box__title span.doctor-count {
            font-size: 13px;
            color: #999;
        }

        .step {
            display: inline-block;
            border-radius: 3px;
            color: #fff;
            font-size: 12px;
            vertical-align: middle;
            text-align: center;
            line-height: 1.2;
            padding: .15em .4em;
        }

        .step.step-yes {
            background-color: #B3D53A;
        }

        .step.step-no {
            background-color: #d9d9d9;
        }

        body {
            background-color: #f5f5f5;
            padding-bottom: 50px;
        }

        a.weui-media-box {
            background-color: #fff;
        }
    </style>
</head>
<body>

<style type="text/css">
    .watermark{
        z-index:9999;
        position:fixed;
        top:-20px;
        left:-160px;
        white-space:nowrap;
        font-size:24px;
        line-height:130px;
        font-weight:500;
        color:rgba(211,211,211,0.3);
        transform:rotate(-30deg);
        pointer-events: none;
    }
</style>

<div class="watermark">
    <?php echo $watermarkinitial .'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial;?>  <br>
    <?php echo $watermarkinitial .'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial;?>  <br>
    <?php echo $watermarkinitial .'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial;?>  <br>
    <?php echo $watermarkinitial .'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial;?>  <br>
    <?php echo $watermarkinitial .'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial;?>  <br>
    <?php echo $watermarkinitial .'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial;?>  <br>
    <?php echo $watermarkinitial .'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial.'　　　'. $watermarkinitial;?>

</div>

<div class="weui-search-bar" id="searchBar">
    <form class="weui-search-bar__form" method='post' action="./mr/search">
        <div class="weui-search-bar__box">
            <i class="weui-icon-search"></i>
            <input type="search" class="weui-search-bar__input" id="searchInput" name="searchInput" placeholder="搜索"
                   bindconfirm="searchBtn" focus='ture'>
            <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
        </div>
        <label class="weui-search-bar__label" id="searchText"
               style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
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

<div class="weui-panel__bd">

    <div class="weui-panel__hd">
        搜索结果 <span class="warn"><?php echo count($searchlist);?></span> 条
        <a href="./index" class="link-stat"> 返回首页</a>
    </div>
    <?php
    foreach($searchlist as $v){
  ?>
    <a href="./mr/detail/<?php echo $v['id'];?>" class="weui-media-box weui-media-box_appmsg visit-card">
        <div class="weui-media-box__hd">
            <?php
        if($v['rate_visit'] == 1 && $v['rate_mgr'] == 1){
    ?>
            <div class="status status-finished">已完成</div>
            <?php
        }else{
    ?>
            <div class="status status-posted">已提交</div>
            <?php
      }
    ?>
        </div>
        <div class="weui-media-box__bd">
            <h4 class="weui-media-box__title"><?php echo $v['visit_date'];?> <span
                    class="doctor-count">（<?php echo $v['doctornum'];?>位医生）</span></h4>
            <p class="weui-media-box__desc"><?php echo $v['hospitals'];?> </p>
            <ul class="weui-media-box__info">
                <li class="weui-media-box__info__meta">
                    <?php
            if($v['rate_visit'] == 1){
        ?>
                    <span class="step step-yes">随访者已评</span>
                    <?php
            }else{
        ?>
                    <span class="step step-no">随访者未评</span>
                    <?php
            }
        
            if($v['rate_mgr'] == 1){
        ?>
                    <span class="step step-yes">经理已评</span>
                    <?php
            }else{
        ?>
                    <span class="step step-no">经理未评</span>
                    <?php
            }
        
            if($v['rate_coach'] == 1){
        ?>
                    <span class="step step-yes">已辅导反馈</span>
                    <?php
            }else{
        ?>
                    <span class="step step-no">未辅导反馈</span>
                    <?php
            }
        ?>
                </li>
            </ul>
            <span class="weui-cell__ft"></span>
        </div>
    </a>
    <?php
    }
  ?>

</div>
<script src="/themes/default/coaching/js/jquery-3.3.1.min.js"></script>
<script src="/themes/default/coaching/js/layer/layer.js"></script>
<script src="/themes/default/coaching/js/jquery-weui.js"></script>
<script src="/themes/default/coaching/js/visit.js"></script>
<script src="//res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script type="text/javascript">
    $(function () {
        $('.link-create').click(function () {
            layer.confirm('您有未提交的申请草稿，是否继续编辑？<br/>创建时间：2018-11-01 10:26', {
                btn: ['继续', '放弃，重新创建'] //按钮
            }, function () {
                window.location = './mr/create';
            }, function () {
                window.location = './mr/create';
            });
        });
    });
</script>
</body>
</html>