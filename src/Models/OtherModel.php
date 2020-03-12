<?php

namespace SuperView\Models;

class OtherModel extends BaseModel
{

    /**
     * tdk
     */
    public function sortTdk($classid = 0, $order = 'id')
    {
        return $this->dal['other']->sortTdk($classid, $order);
    }
}
