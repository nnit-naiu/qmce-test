<?php

namespace app\coaching\model;

use think\Model;

class MrModel extends Model
{
    protected $table = 'visit.visit_visit';
    public function getList($initial)
    {
        $VisitModel = new MrModel();
        $res = $VisitModel->field('id,visit_date,initial,hospitals,doctors,rate_visit,rate_mgr,rate_coach,version')->where(['initial' => $initial, 'status' => 1])->order('visit_date', 'DESC')->select();
        return $res->toArray();
    }

    public function searchList($initial, $hospitals, $doctors)
    {
        $VisitModel = new MrModel();
        $list = $VisitModel->field('id,visit_date,initial,hospitals,doctors,rate_visit,rate_mgr,rate_coach')
            ->where("`initial`='{$initial}' AND `status`='1' AND (`hospitals` LIKE '%{$hospitals}%' OR `doctors` LIKE '%{$doctors}%')")
            ->order('visit_date', 'DESC')
            ->select()->toArray();
        return $list;
    }
}
