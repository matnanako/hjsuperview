<?php

namespace SuperView\Dal\Api;

/**
 * Utils Dal.
 */
class Utils extends Base
{
    /**
     * 获取软件相关词
     *
     * @param $softid
     * @return array|bool
     */
    public function relationWord($softid)
    {
        $params = [
            'softid' => $softid,
        ];
        return $this->getData('relationWord', $params);
    }

    /**
     * 新增多端方法plateform方法
     *
     * @param $softid
     * @param $model
     * @return array|false|mixed
     */
    public function plateform($softid, $model)
    {
        $params = [
            'softid' => $softid,
            'model' => $model
        ];
        return $this->getData('plateform', $params);
    }

}