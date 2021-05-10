<?php

namespace app\coaching\model;

use think\Model;
use think\Db;

class DbmModel extends Model
{
    protected $table ='visit.visit_visit';
    function __construct() {
      parent::__construct();
    }
    public function get_by_dbmindex($initial){
      $sql = "select count(*),v.*,m.username from visit.visit_visit v
              left join visit.visit_follow f on v.id = f.visitid
              left join visit.visit_mrep m on m.initial = v.initial
              where f.initial = '{$initial}' and f.role = 'dbm'
              group by v.initial
              order by visit_date desc";
      $res = DbmModel::query($sql);
      return $res;
    }
}
