<?php

namespace SuperView\Models;

class TagModel extends BaseModel
{
    /**
     * 软件id获取tag词
     *
     * @param $softid
     * @param int $status
     * @return mixed
     */
    public function tag($softid)
    {
        return $this->dal['tag']->getTag($softid);
    }

    /**
     * tag词详情
     *
     * @param $id
     * @return mixed
     */
    public function tagInfo($id)
    {
        return $this->dal['tag']->getTagInfo($id);
    }

    /**
     * tag词id获取tag关联软件
     *
     * @param $id
     * @param int $platform 1.PC软件 2.安卓软件 3.IOS软件 4.其他软件 0全部
     * @param string $order
     * @param int $limit
     * @return mixed
     */
    public function tagRelationSoft($id, $platform = 0, $order = 'lastdotime', $limit = 10)
    {
        $page = $this->getCurrentPage();
        return $this->dal['tag']->getTagRelationSoft($id, $platform, $order, $limit, $page);
    }

    /**
     * tag对应关联软件根据最近更新取其他tag词
     *
     * @param $id
     * @return mixed
     */
    public function tagSoftTag($id)
    {
        return $this->dal['tag']->getTagSoftTag($id);
    }

    /**
     * tag各平台个数
     *
     * @return mixed
     */
    public function countTag($id)
    {
        return $this->dal['tag']->getCountTag($id);
    }

    /**
     * 最近更新
     *
     * @return mixed
     */
    public function recent($limit = 20)
    {
        return $this->dal['tag']->getRecent($limit);
    }
}
