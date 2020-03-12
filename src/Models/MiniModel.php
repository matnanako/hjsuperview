<?php

namespace SuperView\Models;

class MiniModel extends BaseModel
{

    /**
     * miniapp自定义字段查询数据
     *
     * @param string $field 字段名
     * @param int $value     值
     * @param int $limit
     * @param int $order
     * @return mixed
     */
    public function infoList($field = '', $value = 0, $limit=0 ,$order = 1)
    {
        $page = $this->getCurrentPage();
        return $this->dal['mini']->getinfoList($field, $value, $page, $limit, $order);
    }

}
