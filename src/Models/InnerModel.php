<?php

namespace SuperView\Models;

class InnerModel extends BaseModel
{

    /**
     * 获取内联表信息
     *
     * @param int $is_ztid
     * @param int $classid
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function info($is_ztid = 0, $classid = 0, $limit=0, $order = 'sum')
    {
        return $this->dal['inner']->getInfo($is_ztid, $classid, $limit, $order);
    }
}
