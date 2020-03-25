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

}