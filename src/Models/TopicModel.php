<?php

namespace SuperView\Models;

class TopicModel extends BaseModel
{
    /**
     * 专题推荐
     *
     * @param int $showzt
     * @param int $classid
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function good($showzt = 0, $classid = 0 , $limit = 0, $order = 'addtime')
    {
        $page = $this->getCurrentPage();
        return $this->dal['zt']->getGood($showzt, $classid, $page, $limit, $order);
    }

    /**
     * 专题列表
     */
    public function index($zcid = 0, $classid = 0, $limit = 0, $order = 'addtime')
    {
        $page = $this->getCurrentPage();
        return $this->dal['zt']->getList($zcid, $classid, $page, $limit, $order);
    }

    /**
     * index查询结果的总个数
     */
    public function indexCount($zcid = 0, $classid = 0, $limit = 0, $order = 'addtime')
    {
        $page = $this->getCurrentPage();
        $data = $this->dal['zt']->getList($zcid, $classid, $page, $limit, $order);
        if(empty($data['count'])){
            return -1;
        }
        return $data['count'];
    }

    /**
     * 专题详情
     */
    public function info($id, $path = '')
    {
        if (empty($id) && empty($path)) {
            return false;
        }
        $data = $this->dal['zt']->getInfo($id, $path);
        return $data;
    }

    /**
     * 专题分类列表
     */
    public function categories()
    {
        $categories = $this->dal['zt']->getCategories();
        return $categories;
    }

    public function taginfo($ztid,$classid,$limit)
    {
        $page = $this->getCurrentPage();
        return $this->dal['zt']->taginfo($ztid, $classid, $page, $limit);
    }
    /**
     * 详情页定制接口 todo 测试方法待删除
     *
     * @param $id
     * @param string $model
     * @param int $baikelimit
     * @param int $softlimit
     * @return mixed
     */
    public function specials($id, $model = 'soft',$baikelimit = 5, $softlimit = 8)
    {
        $data = $this->dal['zt']->getSpecials($id, $model, $baikelimit, $softlimit);
        foreach ($data AS $key => $datum){
            $data[$key] = $this->addListInfo($datum);
        }
        return $data;

    }


    /**
     * 专题信息列表, 无法指定频道, 使用该方法获取该专题下的所有频道的内容.
     */
    public function superTopic($ztid = 0, $limit = 0)
    {
        if (empty($ztid)) {
            return false;
        }
        $page = $this->getCurrentPage();
        return $this->dal['zt']->getContentByTopicId($ztid, $page, $limit);
    }

    /**
     *
     * ios/安卓 列表页专题定制方法
     *
     * @param int $classid
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function recentInClass($classid = 0 , $limit = 0, $order = 'addtime')
    {
        return $this->dal['zt']->recentInClass($classid, $limit, $order);
    }

    /**
     * DNB 详情页专题定制方法 （通过软件id和classid获取列表）
     *
     * @param $id
     * @param $classid
     * @param $limit
     * @return mixed
     */
    public function listInIdClassId($id = 0, $classid = 0, $limit = 0)
    {
        return $this->dal['zt']->getListInIdClassId($id, $classid, $limit);
    }

    /**
     * 自定义参数请求（参数和值数量必须对应，仅专题可以用）
     *
     * @param array $files 参数&值
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function matchZt($fields, $limit = 0 , $order = 'onclick', $database = 'database')
    {
        return $this->dal['zt']->getMatchZt($fields, $limit, $order, $database);
    }

    /**
     * 自定参数请求（不需要使用关联查询）
     *
     * @param array $filed
     * @param $value
     * @param $limit
     * @param $order
     * @return mixed
     */
    public function match($fields, $limit = 0, $order = 'addtime', $database = 'database')
    {
        $page = $this->getCurrentPage();
        return $this->dal['zt']->getMatch($fields, $limit, $order, $page, $database);
    }

    /**
     * 通过ztid获取soft和ztinfo信息(关联查询)
     *
     * @param string $fields
     * @param string $order
     * @return mixed
     */
    public function softByZtid($fields = '', $order = 'addtime')
    {
        return $this->dal['zt']->getSoftByZtid($fields, $order);
    }

    /**
     * 专题详情页评论 (关联查询)
     *
     * @param $fields
     * @param $limit
     * @param string $group
     * @return mixed
     */
    public function ztCommon($ids, $limit , $group = '')
    {
        return $this->dal['zt']->getztCommon($ids, $limit, $group);
    }

    /**
     *获取多个ztid数据
     *
     * @param array $ztid
     * @return mixed
     */
    public function inZtid($ztid = [])
    {
        return $this->dal['zt']->inZtid($ztid);
    }

    /**
     * ztinfo表通过ztid获取id
     *
     * @param $ztid
     * @return mixed
     */
    public function getIdByZid($ztid = 0)
    {
        return $this->dal['zt']->getIdByZid($ztid);
    }

    /**
     * ztadd & zt表关联信息
     *
     * @param string $fields
     * @param int $limit
     * @param string $order
     * @param string $database
     * @return mixed
     */
    public function ztaddJoinzt($fields = '', $limit = 0, $order = 'onclick', $database = 'database')
    {
        $page = $this->getCurrentPage();
        return $this->dal['zt']->ztaddJoinzt($fields, $limit, $order, $database, $page);
    }

    /**
     * zt表 ztid between 2个值之间的列表
     *
     * @param int $min
     * @param int $max
     * @return mixed
     */
    public function ztBetween($min = 0, $max = 0)
    {
        return $this->dal['zt']->ztBetween($min, $max);
    }

    /**
     * 专题表ztid notin
     *
     * @param array $ztids
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function ztidNotIn($ztids = [], $limit = 0, $order = 'addtime')
    {
        return $this->dal['zt']->ztidNotIn($ztids, $limit, $order);
    }

    /**
     * news站专用方法 (分类自定义方法)
     *
     * @param array $fields
     * @param int $limit
     * @param string string $order
     * @param string $database
     * @return mixed
     */
    public function classMatch($fields, $limit, $order = 'classid', $database = 'database')
    {
        return $this->dal['zt']->classMatch($fields, $limit, $order, $database);
    }

    /**
     * news站专用方法（ztinfo表关联news表查询列表）
     *
     * @param array $fields
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function listByZtinfoNews($fields = [], $limit = 0, $order = 'newstime', $database = 'news')
    {
        return $this->dal['zt']->getListByZtinfoNews($fields, $limit, $order, $database);
    }

    /**
     * 专题首页所有分类
     *
     * @return mixed
     */
    public function ztListType()
    {
        return $this->dal['zt']->getZtListType();
    }
}
