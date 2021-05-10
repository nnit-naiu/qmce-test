<?php

namespace app\coaching\controller;

use app\coaching\controller\BaseController;
use app\coaching\model\DbmModel;
/**
 * 
 *
 * @Author Liunan naiu@nnit.com
 * @DateTime 2021-05-10
 */
class DbmController extends BaseController
{
  
  protected function initialize()
  {
    parent::initialize();
    if($this->_role != 'DBM') {
      show_error('您不是DBM，无法进入此页面', '500', '提示');
      exit;
    }
  }
  
  // dbm角色首页，mr列表
  public function index()
  {
    $model = new DbmModel();
    $visits = $model->get_by_dbmindex($this->_initial);
    $this->_vdata['visits'] = $visits;
    $this->assign('dbm_index', $this->_vdata);
    return $this->fetch();
  }
  
  // mr详情页，医生列表
  public function mr()
  {
    
  }

}
