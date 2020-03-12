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
    public function lists($is_ztid = 0, $classid = 0, $limit=0 ,$random = 1)
    {
        return $this->dal['inner']->getInfo($is_ztid, $classid, $limit, $random);
    }


    /**
     * 首页底部推荐
     *
     * @param string $group
     * @return mixed
     */
    public function footer($group = 'data_type')
    {
        return $this->dal['foot']->getFooter($group);
    }

    /**
     * 专题友链
     *
     * @param $ztid
     * @return mixed
     */
    public function ztFriendLink($ztid = 0)
    {
        return $this->dal['inner']->ztFriendLink($ztid);
    }

    /**
     * 友链
     *
     * @param $ztid
     * @return mixed
     */
    public function friendLink($webid)
    {
        return $this->dal['inner']->friendLink($webid);
    }

    /**
     * 获取内联列表
     *
     * @param int $is_ztid
     * @param string $order
     * @return mixed
     */
    public function softInner($is_ztid = 0, $order = 'sum')
    {
        return $this->dal['inner']->getSoftInner($is_ztid, $order);
    }

    /**
     * 正文内联词
     *
     * @param int $classid
     * @param int $ztid
     * @param int $limit
     * @return mixed
     */
    public function getHotSearchForClass($classid = 0, $ztid = 0, $limit = 0)
    {
        return $this->dal['inner']->getHotSearchForClass($classid, $ztid, $limit);
    }

    /**
     * 自定义内联表查询
     *
     * @param array $fields
     * @param array $vary
     * @param int $limit
     * @param string $order
     * @param int $rand
     * @return mixed
     */
    public function match($fields = [], $vary = [], $limit = 0, $order = 'sum', $rand = 0)
    {
        return $this->dal['inner']->match($fields, $vary, $limit, $order, $rand);
    }
}
