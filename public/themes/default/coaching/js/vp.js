;

$(function() {
  $('.pet_head_gd_ico').on('click',function(){
    $('.pet_more_list').addClass('pet_more_list_show');
  });
  $('.pet_more_close').on('click',function(){
    $('.pet_more_list').removeClass('pet_more_list_show');
  });
  
  $('.label-1-1').click(function() {
    layer.alert('<strong>医生数量：</strong>各大区当前实际添加医生总数<br/><strong>医生指标：</strong>按每位代表添加20位医生得到的预计总数<strong><br/>代表人数：</strong>各大区当前代表总数', {title: '大区医生汇总', area: '70%', shadeClose: true});
  });
  $('.label-2-1-1').click(function() {
    layer.alert('近六月等级变化趋势', {title: '近六月等级变化趋势', area: '70%', shadeClose: true});
  });
  
  $('.label-2-2-1').click(function() {
    layer.alert('各个大区当前月份A、B、C、D四种类型医生的总数', {title: '大区医生等级', area: '70%', shadeClose: true});
  });
  $('.label-2-2-2').click(function() {
    layer.alert('所有医生当前月份A、B、C、D四种类型医生的总数', {title: '所有医生等级', area: '70%', shadeClose: true});
  });
  $('.label-3-1-1').click(function() {
    layer.alert('<strong>医生数量：</strong>各大区当前实际添加医生总数<br/><strong>医生指标：</strong>按每位代表添加20位医生得到的预计总数<strong><br/>代表人数：</strong>各大区当前代表总数', {title: '大区达成汇总', area: '70%', shadeClose: true});
  });
  $('.label-4-1').click(function() {
    layer.alert('每日达成分布', {title: '每日达成分布', area: '70%', shadeClose: true});
  });
  
});