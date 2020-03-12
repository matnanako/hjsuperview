<?php

namespace SuperView\Dal\Api;

/**
* Mini Dal.
*/
class Mini extends Base
{
    /**
     * miniapp自定义字段查询数据
     *
     * @param $field
     * @param $value
     * @param $limit
     * @param $order
     * @return array|bool
     */
    public function getinfoList($field, $value, $page, $limit, $order)
    {
        $params = [
            'limit' => intval($limit),
            'order' => $order,
            'field' => $field,
            'value' => $value,
            'page' => $page
        ];
        return $this->getData('infoList', $params);
    }
}