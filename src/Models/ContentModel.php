<?php

namespace SuperView\Models;

class ContentModel extends BaseModel
{

    /**
     * 获取信息详情.
     */
    public function info($id = 0)
    {
        $data = $this->dal()->getInfo($id);
        return $data;
    }

    /**
     * 最新信息列表.
     */
    public function recent($classid = 0, $limit = 0, $isPic = 0)
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getRecentList($classid, $page, $limit, $isPic);
    }

    /**
     * 推荐信息列表.
     */
    public function good($level = 0, $classid = 0, $limit = 0, $isPic = 0, $order = 'newstime')
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getLevelList('good', $classid, $page, $limit, $isPic, $level, $order);
    }

    /**
     *  排序信息列表
     */
    public function order($classid = 0, $limit = 0, $order = 'newstime', $database = 'database')
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getOrderList($classid, $page, $limit, $order, $database);
    }

    /**
     * 置顶信息列表.
     */
    public function top($level = 0, $classid = 0, $limit = 0, $isPic = 0, $order = 'newstime')
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getLevelList('top', $classid, $page, $limit, $isPic, $level, $order);
    }

    /**
     * 头条信息列表.
     */
    public function firsttitle($level = 0, $classid = 0, $limit = 0, $isPic = 0, $order = 'newstime')
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getLevelList('firsttitle', $classid, $page, $limit, $isPic, $level, $order);
    }

    /**
     * 信息搜索列表：根据指定字段指定值
     */
    public function match($field, $value, $classid = 0, $limit = 0, $isPic = 0, $order = 'newstime')
    {
        $field = trim($field);
        $value = trim($value);

        if (empty($field) || empty($value)) {
            return [];
        }
        $page = $this->getCurrentPage();
        return $this->dal()->getListByFieldValue($field, $value, $classid, $page, $limit, $isPic, $order);
    }

    /**
     * 数量统计.
     */
    public function count($period = 'all', $classid = 0)
    {
        $data = $this->dal()->getCount($period, $classid);
        return intval($data);
    }

    /**
     * 相同标题信息列表.
     */
    public function title($title = '', $classid = 0, $limit = 0, $isPic = 0, $order = 'newstime')
    {
        if (empty($title)) {
            return false;
        }
        $page = $this->getCurrentPage();
        return $this->dal()->getListByTitle($title, $classid, $page, $limit, $isPic, $order);
    }

    /**
     * 信息相关列表.(仅可用户article模型)
     */
    public function related($id = 0, $limit = 0, $isPic = 0, $order = 'newstime')
    {
        if (empty($id)) {
            return false;
        }
        $page = $this->getCurrentPage();
        return $this->dal()->getRelatedList($id, $page, $limit, $isPic, $order);
    }

    /**
     * TAG信息列表.(仅可用户article模型)
     */
    public function tag($tag = '',$classid = 0, $limit = 0, $isPic = 0, $order = 'newstime')
    {
        if (empty($tag)) {
            return false;
        }
        $page = $this->getCurrentPage();
        return $this->dal()->getListByTag($tag, $classid, $page, $limit, $isPic, $order);
    }


    /**
     * 获取dal模型.
     *
     * @return object
     */
    private function dal()
    {
        return $this->dal['content:' . $this->virtualModel];
    }

    /**
     * 查询多个class下的推荐数据
     *
     * @param int $firsttitle 头条等级
     * @param array $classidArr 分类数组
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function firsttitleInClass($firsttitle = 1, $classidArr = [], $limit = 0, $order = 'newstime')
    {
        return $this->dal()->firsttitleInClass($firsttitle, $classidArr, $limit, $order);
    }

    /**
     * 查询classid不等于某个值
     *
     * @param int $classid
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function neq($classid = 0, $limit = 0, $order = 'newstime')
    {
        return $this->dal()->getNeq($classid, $limit, $order);
    }

    /**
     * 获取信息所属专题列表.
     */
    public function infoTopics($id = 0, $limit = 0)
    {
        if (empty($id)) {
            return false;
        }
        return $this->dal()->getInfoTopics($id, $limit);
    }

    /**
     * 通过cid获取厂商
     *
     * @param int $cid
     * @return mixed
     */
    public function company($cid = 0)
    {
        return $this->dal()->getCompany($cid);
    }

    /**
     * 获取厂商列表（仅限厂商使用）
     *
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function companyList($limit = 0, $order = "dnb_num")
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getCompanyList($limit, $order, $page);
    }

    /**
     * 通过path获取厂商信息
     *
     * @param $company_path
     * @return mixed
     */
    public function companyPath($company_path = '')
    {
        return $this->dal()->companyPath($company_path);
    }

    /**
     * 攻略列表
     *
     * @param int $game_id
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function strategy($game_id = 0, $limit = 0, $order = 'lastdotime')
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getStrategy($game_id, $page, $limit, $order);
    }

    /**
     * 通过$downstatus和$isgood获取热门游戏推荐列表
     *
     * @param int $downstatus
     * @param int $isgood
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function rankRule($downstatus = 0, $isgood = 0, $limit = 0, $order = 'lastdotime')
    {
        return $this->dal()->getrankRule($downstatus, $isgood, $limit, $order);
    }

    /**
     * 通过id不等级和game_id等于获取攻略
     *
     * @param $id
     * @param int $game_id
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function otherStrategy($id, $game_id = 0, $limit = 0, $order = 'newstime')
    {
        return $this->dal()->getOtherStrategy($id, $game_id, $limit, $order);
    }

    /**
     * 小编推荐
     *
     * @param $softid
     * @param $classid
     * @return mixed
     */
    public function tuijian($softid = 0, $classid = 0, $limit = 3)
    {
        return $this->dal()->getTuijian($softid, $classid, $limit);
    }

    /**
     * 自定义参数请求（参数和值数量必须对应）
     *
     * @param $fileds
     * @param $values
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function customList($fields, $limit = 0, $order = 'lastdotime')
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getCustomList($fields, $limit, $order, $page);
    }

    /**
     * dnb 列表 （id not in&operator_id in）
     *
     * @param array $ids
     * @param int $cid
     * @param string $order
     * @return mixed
     */
    public function allGameByIdAndCid($ids, $cid = 0, $order = 'onclick')
    {
        return $this->dal()->allGameByIdAndCid($ids, $cid, $order);
    }

    /**
     * 获取评论
     *
     * @param int $softid
     * @param int $checked
     * @param int $limit
     * @return mixed
     */
    public function getPl($softid = 0, $checked = 0, $limit = 0)
    {
        return $this->dal()->getPl($softid, $checked, $limit);
    }

    /**
     * 获取所有评论
     *
     * @param $id
     * @param string $order
     * @return mixed
     */
    public function getAllPl($id, $order = 'saytime')
    {
        return $this->dal()->getAllPl($id, $order);
    }

    /**
     * 获取其他版本
     *
     * @param $softid
     * @return mixed
     */
    public function otherSoft($softid)
    {
        return $this->dal()->otherSoft($softid);
    }

    /**
     * 存在不等于的组合查询
     *
     * @param array $fields
     * @param array $vary
     * @param int $limit
     * @param string $order
     * @return mixed
     */
    public function customVary($fields = [], $vary = [], $limit = 0, $order = 'weekip')
    {
        return $this->dal()->customVary($fields, $vary, $limit, $order);
    }

    /**
     * miniapp自定义字段查询数据(关联查询)
     *
     * @param string $field 字段名
     * @param int $value 值
     * @param int $limit
     * @param int $order
     * @return mixed
     */
    public function infoList($field = '', $value = 0, $limit = 0, $order = 'lastdotime')
    {
        $page = $this->getCurrentPage();
        return $this->dal()->getinfoList($field, $value, $page, $limit, $order);
    }
}
