<?php

namespace app\coaching\controller;

use app\coaching\controller\BaseController;
use app\coaching\model\MrModel;
use think\console\Table;

class MrController extends BaseController
{
    protected function initialize()
    {
        parent::initialize();
        $this->assign('watermarkinitial', $this->_initial);
    }

    // mr角色首页，医生列表
    public function index()
    {
        $model = new MrModel();
        $listarr = $model->getList($this->_initial);
        foreach ($listarr as &$l) {
            $l['hospitals'] = str_replace('|', '、', $l['hospitals']);
            if (mb_strlen($l['hospitals'], 'UTF8') > 15) {
                $l['hospitals'] = mb_substr($l['hospitals'], 0, 15) . '...';
            }
            //计算几个医生
            $l['doctornum'] = count(explode('|', $l['doctors']));
        }
        $draft = cache($this->_initial);
        $this->assign('list', $listarr);
        $this->assign('draft', $draft);
        return $this->fetch();
    }

    public function search()
    {
        $hospitals = $this->request->post('searchInput');
        $doctors = $this->request->post('searchInput');
        $model = new MrModel();
        $listarr = $model->searchList($this->_initial, $hospitals, $doctors);
        //医院名字用 、 隔开 大于15个字用 ... 代替
        foreach ($listarr as &$l) {
            $l['hospitals'] = str_replace('|', '、', $l['hospitals']);
            if (mb_strlen($l['hospitals'], 'UTF8') > 15) {
                $l['hospitals'] = mb_substr($l['hospitals'], 0, 15) . '...';
            }
            //计算几个医生
            $l['doctornum'] = count(explode('|', $l['doctors']));
        }
        $this->assign('searchlist',$listarr);
        return $this->fetch();
    }

    public function create()
    {

        return $this->fetch();
    }

    public function add_draft()
    {
        $visit_date = $this->request->post('visit_date');;
        $follows = $this->request->post('follows');
        $doctors = $this->request->post('doctors');
        $draft = array();
        if ($visit_date) {
            $draft['visit_date'] = $visit_date;
        }
        if ($follows) {
            $draft['follows'] = $follows;
        }
        if ($doctors) {
            $draft['doctors'] = $doctors;
        }
        $draft['createtimes'] = date('Y-m-d', time());
        $resulta = cache($this->_initial, $draft, 0);
        $result = array(
            'result' => $resulta,
            'filename' => $this->_initial,
            'draft' => $draft
        );

        echo json_encode($result);
    }
}
