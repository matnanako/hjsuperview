<?php

namespace SuperView\Dal\Api;

/**
 * tag Dal.
 */
class Tag extends Base
{
    /**
     * 获取tag
     *
     * @param $softid
     * @param $status
     * @return array|bool|mixed
     */
    public function getTag($softid)
    {
        $params = [
            'softid' => $softid,
        ];

        return $this->getData('tag', $params);
    }

    /**
     * 获取tag词详情
     *
     * @param $id
     * @return array|bool|mixed
     */
    public function getTagInfo($id)
    {
        $params = [
           'id' => $id
        ];

        return $this->getData('taginfo', $params);
    }

    /**
     * tag词id获取tag关联软件
     *
     * @param $id
     * @param $platform
     * @param $order
     * @param $limit
     * @return array|bool|mixed
     */
    public function getTagRelationSoft($id, $platform, $order, $limit, $page)
    {
        $params = [
            'id' => $id,
            'platform' => $platform,
            'order' => $order,
            'limit' => $limit,
            'page' => $page
        ];

        return $this->getData('tagRelationSoft', $params);
    }

    /**
     * tag对应关联软件根据最近更新取其他tag词
     *
     * @param $id
     * @return array|bool|mixed
     */
    public function getTagSoftTag($id)
    {
        $params = [
            'id' => $id
        ];

        return $this->getData('tagSoftTag', $params);
    }

    /**
     *  tag各平台个数
     *
     * @param $id
     * @return array|bool|mixed
     */
    public function getCountTag($id)
    {
        $params = [
            'id' => $id
        ];

        return $this->getData('countTag', $params);
    }

    /**
     * 最近更新标签
     *
     * @param $order
     * @param $limit
     * @return array|bool|mixed
     */
    public function getRecent($limit)
    {
        $params = [
            'limit' => $limit
        ];

        return $this->getData('recent', $params);
    }

}