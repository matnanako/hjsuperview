<?php

namespace SuperView\Models;

use SuperView\Utils\Page;

class UtilsModel extends BaseModel
{

    /**
     * 获取分页
     */
    public function renderPage($route, $total, $perPage, $currentPage = null, $simple = false, array $options = [])
    {
        $page = new Page($route, $total, $perPage, $currentPage, $simple, $options);
        return $page->render();
    }

    /**
     * 获取软件相关词
     *
     * @param $softid
     * @return mixed
     */
    public function relationWord($softid = 0)
    {
        return $this->dal['utils']->relationWord($softid);
    }

    /**
     * 新增多端方法plateform方法
     *
     * @param int $softid
     * @param string $model
     * @return mixed
     */
    public function plateform($softid = 0, $model = 'download')
    {
        return $this->dal['utils']->plateform($softid, $model);
    }

}
