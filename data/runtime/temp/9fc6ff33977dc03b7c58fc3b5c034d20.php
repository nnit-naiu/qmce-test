<?php /*a:2:{s:75:"/Users/liunan/htdocs/qmce-test/public/themes/default/coaching/mr/index.html";i:1620630802;s:79:"/Users/liunan/htdocs/qmce-test/public/themes/default/coaching/mr/watermark.html";i:1620617098;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <title>我的拜访记录</title>
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
            background-color: #009BDF;
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
            top: 38px;
        }

        .visit-card.draft span.weui-cell__ft {
            top: 22px;
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

        .weui-media-box__title.visit-date {
            font-size: 14px;
            line-height: 18px;
        }

        #btn-create {
            position: fixed;
            z-index: 999;
            bottom: 40px;
            right: 20px;
            background-color: #03A8F3;
            color: #fff;
            line-height: 18px;
            font-size: 12px;
            text-align: center;
            width: 60px;
            padding: 12px 0;
            border-radius: 50%;
            box-shadow: 0 0 15px #03A8F3;
        }

        #btn-create i {
            font-size: 14px;
        }

        body {
            background-color: #f5f5f5;
            padding-bottom: 50px;
        }

        a.weui-media-box {
            background-color: #fff;
        }

        .weui-panel__hd.total-bar {
            padding: 4px 15px 4px;
        }
    </style>
</head>
<body>

<style type="text/css">
    .watermark {
        z-index: 9999;
        position: fixed;
        top: -20px;
        left: -160px;
        white-space: nowrap;
        font-size: 24px;
        line-height: 130px;
        font-weight: 500;
        color: rgba(211, 211, 211, 0.3);
        transform: rotate(-30deg);
        pointer-events: none;
    }
</style>


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

<a href="javascript:;" id="btn-create"><i class="fa fa-edit"></i><br/>新建</a>
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

<?php if($draft == ''): ?>
    <div class="weui-panel__hd">
        <span class="warn">1</span>条草稿尚未提交
    </div>
    <div class="weui-panel__bd">
        <a href="./mr/create/1" class="weui-media-box weui-media-box_appmsg visit-card draft">
            <div class="weui-media-box__hd">
                <div class="status status-draft">待提交</div>
            </div>
            <div class="weui-media-box__bd">
                <h4 class="weui-media-box__title"></h4>
                <p class="weui-media-box__desc">创建时间：<?php echo $draft['createtimes'];?></p>
                <ul class="weui-media-box__info">
                    <li class="weui-media-box__info__meta">点击继续编辑或提交</li>
                </ul>
                <span class="weui-cell__ft"></span>
            </div>
        </a>
    </div>
    <?php else: ?>
    <div class="weui-panel__hd">
        历史总计 <span class="warn"><?php echo count($list);?></span> 条
    </div>
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;if($v['version'] == 1): ?>
            <a href="./mr/detail/<?php echo $v['id']; ?>" class="weui-media-box weui-media-box_appmsg visit-card">
                <?php else: ?>
                <a href="./mr/detail_new/<?php echo $v['id']; ?>" class="weui-media-box weui-media-box_appmsg visit-card">
        <?php endif; ?>
        <div class="weui-media-box__hd">
            <?php if($v['rate_visit'] == 1  and $v['rate_mgr'] == 1): ?>
                <div class="status status-finished">已完成</div>
                <?php else: ?>
                <div class="status status-posted">已提交</div>
            <?php endif; ?>
        </div>
        <div class="weui-media-box__bd">
            <h4 class="weui-media-box__title"><?php echo $v['visit_date']; ?><span class="doctor-count">（ <?php echo $v['doctornum']; ?>位医生）</span></h4>
            <p class="weui-media-box__desc"><?php echo $v['hospitals']; ?></p>
            <ul class="weui-media-box__info">
                <li class="weui-media-box__info__meta">
                    <?php if($v['rate_mgr'] == 1): ?>
                        <span class="step step-yes">经理已评</span>
                        <?php else: ?>
                        <span class="step step-no">经理未评</span>
                    <?php endif; if($v['version'] == 1): if($v['rate_visit'] == 1): ?>
                            <span class="step step-yes">随访者已评</span>
                            <?php else: ?>
                            <span class="step step-no">随访者未评</span>
                        <?php endif; if($v['rate_coach'] == 1): ?>
                            <span class="step step-yes">已辅导反馈</span>
                            <?php else: ?>
                            <span class="step step-no">未辅导反馈</span>
                        <?php endif; ?>
                    <?php endif; ?>
                    </li>
                </ul>
                <span class="weui-cell__ft"></span>
            </div>
        </a>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php endif; ?>
<script src="/themes/default/coaching/js/jquery-3.3.1.min.js"></script>
<script src="/themes/default/coaching/js/layer/layer.js"></script>
<script src="/themes/default/coaching/js/jquery-weui.js"></script>
<script src="/themes/default/coaching/js/visit.js"></script>
<script src="//res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script type="text/javascript">
    $(function () {
        $('#btn-create').click(function () {
            var d = 0;
            if (d) {
                layer.confirm('您有未提交的申请草稿，是否继续编辑？<br/>创建时间：2018-11-01 10:26', {
                    btn: ['继续', '放弃，重新创建'] //按钮
                }, function () {
                    window.location = './mr/create/1';
                }, function () {
                    window.location = './mr/create/3';
                });
            } else {
                window.location = './create/2';
            }


        });
    });
</script>
</body>
</html>