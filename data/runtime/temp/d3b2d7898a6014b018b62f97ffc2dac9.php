<?php /*a:1:{s:66:"D:\phpStudy\WWW\nnit\public/themes/default/coaching\mr\create.html";i:1620292129;}*/ ?>

<!DOCTYPE html>
<html>
<head>
    <title>新建拜访</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/themes/default/coaching/css/weui.min.css">
    <link rel="stylesheet" href="/themes/default/coaching/css/jquery-weui.css">
    <link rel="stylesheet" href="/themes/default/coaching/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/themes/default/coaching/css/visit.css">
    <style type="text/css">
        .weui-icon-download, .weui-icon-info-circle{font-size:16px;}
        #input_date{text-align:right;}
        .item-list{padding-left:15px;}
        .item-title{font-size:17px;}
        .weui-media-box__desc{line-clamp:10;-webkit-line-clamp:10;}
        .weui-btn-area{margin-top:0.3em;padding-bottom:0.5em;}
        a.link-back{color:#586c94;}
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
            background-color: #1aad19;}
        .step.step-no{
            background-color: #bbb;}
        #plan-list a.open{box-shadow:0 0 2px #ccc;background-color:#f0f0f0;}
        #plan-list a span.weui-cell__ft{transform:rotate(0deg);}
        #plan-list a.open span.weui-cell__ft{animation:rotate-arrow 0.25s ease forwards;}
        .detail-item{display:none;padding:0 15px 15px;background-color:#f9f9f9;}
        .detail-item .weui-cells__title{margin-top:0;padding-top:12px;color:#e64340;}
        .detail-item .weui-cells.input-box{background:none;}
        .detail-item .weui-cells.input-box>.weui-cell{padding:6px 15px 6px 30px;}
        .detail-item .weui-cells.input-box>.weui-cell input{font-size:15px;}
        .detail-item .weui-btn-area{text-align:right;}
        .detail-item .alert{padding-top:10px;}
        .detail-item .alert .info{
            color: #1aad19;
            font-size: 12px;
            text-align: right;
        }
        .box-plan{display:none;}
        .weui-textarea{background:none;}
        .weui-cell.weui-cell_access.switch{padding:24px 15px;font-size:18px;}
        .mgr{color:#e64340;}
        #follow-list .weui-cell__ft{text-transform:uppercase;}
        .draft-header{text-align:right;padding:8px 10px 2px;box-shadow:0 0 8px #999;position:fixed;z-index:999;width:95%;top:0;background-color:#f9f9f9;}
        body{padding-top:45px;}

        @keyframes rotate-arrow
        {
            from {transform:rotate(0deg);}
            to {transform:rotate(90deg);}
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
    OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF  <br>
    OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF  <br>
    OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF  <br>
    OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF  <br>
    OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF  <br>
    OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF  <br>
    OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF　　　OARF

</div>
<!--
<header class="visit-header">
  <h1 class="visit-title">新建拜访</h1>
</header>
-->
<div class="draft-header">
    <a href="javascript:;" class="weui-btn weui-btn_mini weui-btn_primary" id="draftbtn">保存草稿</a>
</div>
<div class="box-info">
    <div class="weui-cells weui-cells_form" style="margin-top:0;color:#999;">
        <div class="weui-cell">
            <div class="weui-cell__hd"><label for="" class="weui-label">拜访日期</label></div>
            <div class="weui-cell__bd">
                <input id="input_date" class="weui-input" type="text" value="2021-05-07"  placeholder="请输入拜访日期"/>
            </div>
        </div>
    </div>
    <div class="weui-cells__title"><span class="item-title">随访者</span></div>
    <div class="weui-cells item-list">
        <div id="follow-list"></div>
        <a href="javascript:void(0);" class="weui-cell weui-cell_link" id="link-add_follow">
            <div class="weui-cell__bd">+ 添加随访者</div>
        </a>
    </div>
    <div class="weui-cells__title"><span class="item-title">拜访医生</span>（至少添加1名拜访医生）</div>
    <div class="weui-cells item-list">
        <div id="doctor-list"></div>
        <a href="javascript:void(0);" class="weui-cell weui-cell_link" id="link-add_doctor">
            <div class="weui-cell__bd">+ 添加医生</div>
        </a>
    </div>
    <!--
    <div class="weui-cells__title"><span class="weui-cell_warn item-title">拜访简介</span>（不超过200字）</div>
    <div class="weui-cells weui-cells_form">
      <div class="weui-cell">
        <div class="weui-cell__bd">
          <textarea class="weui-textarea" placeholder="请输入此次拜访的大致介绍" rows="3"></textarea>
          <div class="weui-textarea-counter"><span>0</span> / 200</div>
        </div>
      </div>
    </div>
    -->

    <div class="weui-btn-area submit-box">
        <a class="weui-btn weui-btn_primary" href="javascript:" id="submit-btn">提 交</a>
    </div>
</div>
<script src="/themes/default/coaching/js/jquery-3.3.1.min.js"></script>
<script src="/themes/default/coaching/js/layer/layer.js"></script>
<script src="/themes/default/coaching/js/jquery-weui.js"></script>
<script src="/themes/default/coaching/js/visit.js"></script>
<script src="//res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>
<script type="text/javascript">
    var FOLLOWS = [], DOCTORS = [], LAST_DOCTORS = [];
    function add_follow(follow) {
        FOLLOWS.push(follow);
        var _follow =
            '<div class="weui-cell">' +
            '  <div class="weui-cell__bd">' +
            '    <p>' + follow['username'] + ' <span class="mgr">（' + follow['role'] + '）</span></p>' +
            '  </div>' +
            '  <div class="weui-cell__ft">' + follow['initial'] + '</div>' +
            '  <a href="javascript:;" class="weui-progress__opr del-follow" data-initial="' + follow['initial'] + '">' +
            '    <i class="weui-icon-cancel"></i>' +
            '  </a>' +
            '</div>'
        ;
        $(_follow).appendTo($('#follow-list'));
    }
    function del_follow(del_btn) {
        var _initial = del_btn.data('initial');
        for(var i = 0; i < FOLLOWS.length; i++) {
            if(FOLLOWS[i]['initial'] == _initial) {
                FOLLOWS.splice(i, 1);
            }
        }
        del_btn.parent().remove();
    }
    function add_doctor(doctor) {
        DOCTORS.push(doctor);
        var _doctor =
            '<div class="weui-cell">' +
            '  <div class="weui-cell__bd">' +
            '    <p>' + doctor['username'] + '</p>' +
            '    <ul class="weui-media-box__info doc-info">' +
            '      <li class="weui-media-box__info__meta">' + doctor['jobtitle'] + '</li>' +
            '    </ul>' +
            '  </div>' +
            '  <div class="weui-cell__ft">' +
            '    ' + doctor['hospital'] +
            '    <ul class="weui-media-box__info doc-info office">' +
            '      <li class="weui-media-box__info__meta">' + doctor['office'] + '</li>' +
            '    </ul>' +
            '  </div>' +
            '  <a href="javascript:;" class="weui-progress__opr del-doctor" data-stamp="' + doctor['stamp'] + '">' +
            '    <i class="weui-icon-cancel"></i>' +
            '  </a>' +
            '</div>'
        ;
        $(_doctor).appendTo($('#doctor-list'));
    }
    function del_doctor(del_btn) {
        var _stamp = del_btn.data('stamp');
        for(var i = 0; i < DOCTORS.length; i++) {
            if(DOCTORS[i]['stamp'] == _stamp) {
                DOCTORS.splice(i, 1);
            }
        }
        del_btn.parent().remove();
    }
    function add_plan(doctor) {
        var _plan =
            '<a class="weui-cell weui-cell_access switch" href="javascript:;" data-stamp="' + doctor['stamp'] + '">' +
            '  <div class="weui-cell__bd weui-cell_primary">' +
            '    <p>' + doctor['hospital'] + ' - ' + doctor['username'] + '</p>' +
            '  </div>' +
            '  <span class="weui-cell__ft"></span>' +
            '</a>' +
            '<div class="detail-item switch-item item-' + doctor['stamp'] + '" date-stamp="' + doctor['stamp'] + '">' +
            '  <div class="weui-cells__title">产品</div>' +
            '  <div class="weui-cells input-box">' +
            '    <div class="weui-cell">' +
            '      <div class="weui-cell__bd">' +
            '        <input class="weui-input q-plan-1" type="text" placeholder="选择产品">' +
            '      </div>' +
            '    </div>' +
            '  </div>' +
            '  <div class="weui-cells__title">关键信息</div>' +
            '  <div class="weui-cells input-box">' +
            '    <div class="weui-cell">' +
            '      <div class="weui-cell__bd">' +
            '        <input class="weui-input q-plan-2" type="text" placeholder="选择关键信息">' +
            '      </div>' +
            '    </div>' +
            '  </div>' +
            '  <div class="weui-cells__title">本次拜访目标及希望达成的业务结果</div>' +
            '  <div class="weui-cells input-box">' +
            '    <div class="weui-cell">' +
            '      <div class="weui-cell__bd">' +
            '        <input class="weui-input q-plan-3" type="text" placeholder="请输入">' +
            '      </div>' +
            '    </div>' +
            '  </div>' +
            '</div>'
        ;
        $(_plan).appendTo($('#plan-list'));
        // 加载拜访自评选择框
        $('.item-' + doctor['stamp'] + ' .q-plan-1').select({
            title: '选择产品',
            items: [
                {
                    title: '诺和锐30',
                    value: '诺和锐30'
                },
                {
                    title: '诺和锐',
                    value: '诺和锐'
                },
                {
                    title: '诺和平',
                    value: '诺和平'
                },
                {
                    title: '诺和达',
                    value: '诺和达'
                },
                {
                    title: '诺和力',
                    value: '诺和力'
                },
                {
                    title: '诺和龙',
                    value: '诺和龙'
                }
            ],
            onChange: function(d) {

                $('.item-' + doctor['stamp'] + ' .q-plan-2').val('选择关键信息');
                if(d.values == '诺和锐30'){
                    $('.item-' + doctor['stamp'] + ' .q-plan-2').select('update',{
                        title: '选择关键信息',
                        items: [
                            {
                                title: '一种胰岛素，同时控制空腹及餐后血糖，更好降低HbA1c',
                                value: '一种胰岛素，同时控制空腹及餐后血糖，更好降低HbA1c'
                            },
                            {
                                title: '相较预混人胰岛素，更好降低HbA1c，显著降低低血糖风险',
                                value: '相较预混人胰岛素，更好降低HbA1c，显著降低低血糖风险'
                            },
                            {
                                title: '长期控糖的经济之选',
                                value: '长期控糖的经济之选'
                            },
                        ],
                        onChange: function(d) {
                            // console.log(this, d);
                        }
                    });
                }else if(d.values == '诺和锐'){
                    $('.item-' + doctor['stamp'] + ' .q-plan-2').select('update',{
                        title: '选择关键信息',
                        items: [
                            {
                                title: '有效控制餐后血糖',
                                value: '有效控制餐后血糖'
                            },
                            {
                                title: '餐时注射，灵活方便',
                                value: '餐时注射，灵活方便'
                            },
                            {
                                title: '广泛的适用人群',
                                value: '广泛的适用人群'
                            },
                        ],
                        onChange: function(d) {
                            // console.log(this, d);
                        }
                    });
                }else if(d.values == '诺和平'){
                    $('.item-' + doctor['stamp'] + ' .q-plan-2').select('update',{
                        title: '选择关键信息',
                        items: [
                            {
                                title: '一天一次，有效降糖',
                                value: '一天一次，有效降糖'
                            },
                            {
                                title: '适用人群广泛',
                                value: '适用人群广泛'
                            }
                        ],
                        onChange: function(d) {
                            // console.log(this, d);
                        }
                    });
                }else if(d.values == '诺和达'){
                    $('.item-' + doctor['stamp'] + ' .q-plan-2').select('update',{
                        title: '选择关键信息',
                        items: [
                            {
                                title: '相比甘精胰岛素，安全达标率更高',
                                value: '相比甘精胰岛素，安全达标率更高'
                            },
                            {
                                title: '相比甘精胰岛素，显著降低低血糖发生风险',
                                value: '相比甘精胰岛素，显著降低低血糖发生风险'
                            }
                        ],
                        onChange: function(d) {
                            // console.log(this, d);
                        }
                    });
                }else if(d.values == '诺和力'){
                    $('.item-' + doctor['stamp'] + ' .q-plan-2').select('update',{
                        title: '选择关键信息',
                        items: [
                            {
                                title: '显著降低HbA1c最高达1.6%',
                                value: '显著降低HbA1c最高达1.6%'
                            },
                            {
                                title: '明确减少心血管死亡达22%',
                                value: '明确减少心血管死亡达22%'
                            },
                            {
                                title: '快速持久降低体重',
                                value: '快速持久降低体重'
                            },
                        ],
                        onChange: function(d) {
                            // console.log(this, d);
                        }
                    });
                }else if(d.values == '诺和龙'){
                    $('.item-' + doctor['stamp'] + ' .q-plan-2').select('update',{
                        title: '选择关键信息',
                        items: [
                            {
                                title: '强效降低餐后血糖和糖化血红蛋白',
                                value: '强效降低餐后血糖和糖化血红蛋白'
                            },
                            {
                                title: '随餐服用，灵活方便',
                                value: '随餐服用，灵活方便'
                            },
                            {
                                title: '心血管和肾脏安全性号，得到全球20年临床应用的验证',
                                value: '心血管和肾脏安全性号，得到全球20年临床应用的验证'
                            },
                        ],
                        onChange: function(d) {
                            // console.log(this, d);
                        }
                    });
                }
            }
        });
        // 加载拜访自评选择框
        $('.item-' + doctor['stamp'] + ' .q-plan-2').select({
            title: '选择关键信息',
            items: [
                {
                    title: '选择关键信息',
                    value: '选择关键信息'
                }
            ],
            onChange: function(d) {
                // console.log(this, d);
            }
        });
    }
    function del_plan(doctor) {
        $('.switch').each(function() {
            var _switch = $(this);
            if(_switch.data('stamp') == doctor['stamp']) {
                _switch.remove();
            }
        });
        $('.switch-item').each(function() {
            var _switch = $(this);
            if(_switch.data('stamp') == doctor['stamp']) {
                _switch.remove();
            }
        });
    }

    $(function() {

        $('#plan-list').delegate('.switch', 'click', function() {
            var
                _btn = $(this),
                _stamp = _btn.data('stamp')
            ;
            if(_btn.hasClass('open')) {
                _btn.removeClass('open');
                $('.detail-item.item-' + _stamp).hide();
            } else {
                _btn.addClass('open');
                $('.detail-item.item-' + _stamp).show();
            }
        });
        // 下一步按钮
        $('#next-btn').click(function() {
            if(FOLLOWS.length < 1) {
                layer.msg('至少添加一位随访者！', function() {});
                return false;
            }
            if(DOCTORS.length < 1) {
                layer.msg('至少添加一位拜访医生！', function() {});
                return false;
            }
            $.showLoading('生成计划中...');
            // 对比当前添加医生与上一次编辑医生
            for(var i = 0; i < DOCTORS.length; i++) {
                var
                    _doctor = DOCTORS[i],
                    _doctor_exist = false
                ;
                for(var j = 0; j < LAST_DOCTORS.length; j++) {
                    if(_doctor['stamp'] == LAST_DOCTORS[j]['stamp']) {
                        _doctor_exist = true
                        break;
                    }
                }
                if(!_doctor_exist) {
                    // 对比上次新增的，则添加
                    add_plan(_doctor);
                    $('.item-' + _doctor['stamp'] + ' .q-plan-1').val(_doctor['q1']);
                    $('.item-' + _doctor['stamp'] + ' .q-plan-2').val(_doctor['q2']);
                    $('.item-' + _doctor['stamp'] + ' .q-plan-3').val(_doctor['q3']);
                }
            }
            for(var i = 0; i < LAST_DOCTORS.length; i++) {
                var
                    _doctor = LAST_DOCTORS[i],
                    _doctor_exist = false
                ;
                for(var j = 0; j < DOCTORS.length; j++) {
                    if(_doctor['stamp'] == DOCTORS[j]['stamp']) {
                        _doctor_exist = true
                        break;
                    }
                }
                if(!_doctor_exist) {
                    // 对比上次少了的，则删除
                    del_plan(_doctor);
                }
            }
            window.setTimeout(function() {
                $.hideLoading();
                $('.box-info').hide();
                $('.box-plan').show();
            }, 600);
        });
        // 返回基本信息按钮
        $('.link-back').click(function() {
            LAST_DOCTORS = DOCTORS.slice(0);
            $('.box-plan').hide();
            $('.box-info').show();
        });

        $('#input_date').calendar({
            dateFormat : 'yyyy-mm-dd'
        });

        // 添加随访者
        $('#link-add_follow').click(function() {
            layer.open({
                type: 2,
                area: ['90%', '50%'],
                fixed: true,
                title: '添加随访者',
                content: './?/mr/popup/create_follow'
            });
        });
        // 删除随访者
        $('#follow-list').delegate('.del-follow', 'click', function() {
            var _btn = $(this);
            $.confirm('确认删除此随访者吗？', '确认删除', function() {
                del_follow(_btn);
            }, function() {});
        });

        // 添加拜访医生
        $('#link-add_doctor').click(function() {
            // $.post('./?/mr/have_professors',
            //     {

            //     }, function(data) {
            //       if(data){
            //         layer.confirm('添加医生类型', {
            //           btn: ['目标医生', '非目标医生']
            //           ,btn1:function() {
            //             layer.open({
            //               type: 2,
            //               area: ['90%', '60%'],
            //               fixed: true,
            //               title: '添加计划拜访医生',
            //               content: './?/mr/popup/create_professor'
            //             });
            //           }, btn2:function() {
            //             layer.open({
            //               type: 2,
            //               area: ['90%', '60%'],
            //               fixed: true,
            //               title: '添加计划拜访医生',
            //               content: './?/mr/popup/create_doctor'
            //             });
            //           }
            //         });

            //       }else{
            //         layer.open({
            //           type: 2,
            //           area: ['90%', '60%'],
            //           fixed: true,
            //           title: '添加拜访医生',
            //           content: './?/mr/popup/create_doctor'
            //         });
            //       }
            //     }
            //     , 'json'
            //   );
            layer.open({
                type: 2,
                area: ['90%', '60%'],
                fixed: true,
                title: '添加拜访医生',
                content: './?/mr/popup/create_doctor'
            });
        });
        // 删除拜访医生
        $('#doctor-list').delegate('.del-doctor', 'click', function() {
            var _btn = $(this);
            $.confirm('确认删除此医生吗？', '确认删除', function() {
                del_doctor(_btn);
            }, function() {});
        });

        $('#submit-btn').click(function() {
            if(FOLLOWS.length < 1) {
                layer.msg('至少添加一位随访者！', function() {});
                return false;
            }
            if(DOCTORS.length < 1) {
                layer.msg('至少添加一位拜访医生！', function() {});
                return false;
            }
            // 获取基本信息
            var
                _visit_date = $('#input_date').val(),
                _follows = JSON.stringify(FOLLOWS),
                _doctors = JSON.stringify(DOCTORS)
            ;
            // console.log(_doctors);return false;
            $.showLoading('提交计划中...');
            window.setTimeout(function() {
                $.post('./?/mr/create/1',
                    {
                        visit_date  : _visit_date,
                        follows     : _follows,
                        doctors     : _doctors,
                        random      : Math.random(),
                    }, function(data) {
                        $.hideLoading();
                        $.toast('提交成功！', function() {
                            document.location.href = './?/mr/index';
                        });
                        // console.log(data);
                    }
                    , 'json'
                );
            }, 800);
        });

        $('#draftbtn').click(function(){

            // 获取基本信息
            var
                _visit_date = $('#input_date').val(),
                _follows = JSON.stringify(FOLLOWS),
                _doctors = JSON.stringify(DOCTORS)
            ;
            console.log('-----------!-------------');
            console.log(_follows);
            console.log(_doctors);
            console.log('-----------!-------------');
            $.showLoading('草稿中...');
            window.setTimeout(function() {
                $.post('./?/mr/add_draft',
                    {
                        visit_date  : _visit_date,
                        follows     : _follows,
                        doctors     : _doctors,
                        random      : Math.random()
                    }, function(data) {

                        $.hideLoading();
                        $.toast('保存成功！', function() {
                            document.location.href = './?/mr/index';
                        });
                        // console.log(data);
                    }
                    , 'json'
                );
            }, 800);
        });
        var followlist = 0;
        if(followlist){
            for(var i = 0 ; i < followlist.length ; i ++){
                var _followarr = {
                    'username'  : followlist[i].username,
                    'initial'   : followlist[i].initial,
                    'role'      : followlist[i].role,
                    'stamp'     : followlist[i].stamp,
                };
                add_follow(_followarr);
            }
        }
        var doctorlist = 0;
        if(doctorlist){
            for(var i = 0 ; i < doctorlist.length ; i ++){
                var _doctorarr = {
                    'username'   : doctorlist[i].username,
                    'hospital'   : doctorlist[i].hospital,
                    'office'     : doctorlist[i].office,
                    'jobtitle'   : doctorlist[i].jobtitle,
                    'stamp'      : doctorlist[i].stamp,
                };
                add_doctor(_doctorarr);
            }
        }


    });
</script>
</body>
</html>