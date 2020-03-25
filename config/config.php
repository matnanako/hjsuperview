<?php

return [
    'class_url' => '',
    'info_url' => '',

    // Cache lifetime.
    'cache_minutes' => 120,
    // 是否刷新缓存.
    'refresh_cache' => 0,

    // Api service host.
    'api_base_url' => 'http://hj.api.zz314.com/huajun', //test

    // Models alias map to class.
    'models' => [
        'content' => SuperView\Models\ContentModel::class,
        'category' => SuperView\Models\CategoryModel::class,
        'zt' => SuperView\Models\TopicModel::class,
        'utils' => SuperView\Models\UtilsModel::class,
        'custom' => SuperView\Models\CustomModel::class,
        'comment' => SuperView\Models\CommentModel::class,
        'inner' => SuperView\Models\InnerModel::class,
        'foot' => SuperView\Models\InnerModel::class,
        'other' => SuperView\Models\OtherModel::class,
    ],

    'dals' => [
        'content' => SuperView\Dal\Api\Content::class,
        'category' => SuperView\Dal\Api\Category::class,
        'zt' => SuperView\Dal\Api\Topic::class,
        'utils' => SuperView\Dal\Api\Utils::class,
        'custom' => SuperView\Dal\Api\Custom::class,
        'comment' => SuperView\Dal\Api\Comment::class,
        'inner' => SuperView\Dal\Api\Inner::class,
        'foot' => SuperView\Dal\Api\Inner::class,
        'other' => SuperView\Dal\Api\Other::class,
    ],

    'pagination' => [
        'layout' => '',
        'total' => '',
        'previous' => '',
        'links' => '',
        'link_active' => '',
        'next' => '',
        'dots' => '',
    ],

    //新缓存规则部分是使用
    'type' => [
        'category' => ['category'],
        'soft' => ['soft', 'android', 'ios', 'applet', 'dnb', 'mini'],
        'news' => ['news'],
        'zt' => ['zt'],
        'strategy' => ['strategy'],
        'inner' => ['foot', 'inner'],
        'company' => ['company']
    ],

    //api设置的最小查询limit
    'limit' => 15,

];