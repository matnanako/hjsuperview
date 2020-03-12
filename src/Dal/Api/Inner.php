<?php

namespace SuperView\Dal\Api;

/**
* Mini Dal.
*/
class Inner extends Base
{
    /**
     * 获取内联表信息
     *
     * @param $is_ztid
     * @param $classid
     * @param $limit
     * @param $order
     * @return array|bool
     */
    public function getInfo($is_ztid, $classid, $limit, $random)
    {
        $params = [
            'is_ztid' => intval($is_ztid),
            'classid' => intval($classid),
            'limit'     => intval($limit),
            'random' => $random,
        ];
        return $this->getData('lists', $params);
    }

    /**
     * 首页底部推荐
     *
     * @param $group
     * @return array|bool
     */
    public function getFooter($group)
    {
        $params = [
            'group' => $group,
        ];
        return $this->getData('footer', $params);
    }

    /**
     * 专题友链
     *
     * @param $ztid
     * @return array|bool
     */
    public function ztFriendLink($ztid)
    {
        $params = [
            'ztid' => $ztid,
        ];
        return $this->getData('ztFriendLink', $params);
    }

    /**
     * 友链
     *
     * @param $ztid
     * @return array|bool
     */
    public function friendLink($webid)
    {
        $params = [
            'webid' => $webid,
        ];
        return $this->getData('friendLink', $params);
    }

    /**
     * 获取内联列表
     *
     * @param $is_ztid
     * @param $order
     * @return array|bool
     */
    public function getSoftInner($is_ztid, $order)
    {
        $params = [
            'is_ztid' => $is_ztid,
            'order' => $order,
        ];
        return $this->getData('softInner', $params);
    }

    /**
     * 正文内联词
     *
     * @param $classid
     * @param $ztid
     * @param $limit
     * @return array|bool
     */
    public function getHotSearchForClass($classid, $ztid, $limit)
    {
        $params = [
            'classid' => $classid,
            'ztid' => $ztid,
            'limit' => $limit,
        ];
        return $this->getData('getHotSearchForClass', $params);

    }

    /**
     * 自定义内联表查询
     *
     * @param $fields
     * @param $vary
     * @param $limit
     * @param $order
     * @param $rand
     * @return array|bool
     */
    public function match($fields, $vary, $limit, $order, $rand)
    {
        $params = [
            'fields' => $fields,
            'vary' => $vary,
            'limit' => $limit,
            'order' => $order,
            'rand' => $rand,
        ];
        return $this->getData('match', $params);
    }
}