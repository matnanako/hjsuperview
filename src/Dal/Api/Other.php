<?php

namespace SuperView\Dal\Api;

/**
 * Other Dal.
 */
class Other extends Base
{
    public function sortTdk($classid, $order)
    {
        $params = [
            'classid' => $classid,
            'order' => $order,
        ];

        return $this->getData('sortTdk', $params);
    }

}