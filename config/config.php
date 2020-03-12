<?php

return [
    'class_url' => '',
    'info_url' => '',

    // Cache lifetime.
    'cache_minutes' => 120,
    // 是否刷新缓存.
    'refresh_cache' => 0,

    // Api service host.
    'api_base_url' => 'http://hj.api.zz314.com/huajun', //test001

    // Models alias map to class.
    'models' => [
        'content' => SuperView\Models\ContentModel::class,
        'category' => SuperView\Models\CategoryModel::class,
        'zt' => SuperView\Models\TopicModel::class,
        'utils' => SuperView\Models\UtilsModel::class,
        'chip' => SuperView\Models\ChipModel::class,
        'banner' => SuperView\Models\BannerModel::class,
        'custom' => SuperView\Models\CustomModel::class,
        'comment' => SuperView\Models\CommentModel::class,
        'inner' => SuperView\Models\InnerModel::class,
        'foot' => SuperView\Models\InnerModel::class,
        'mini' => SuperView\Models\MiniModel::class,
        'other' =>  SuperView\Models\OtherModel::class,
    ],

    'dals' => [
        'content' => SuperView\Dal\Api\Content::class,
        'category' => SuperView\Dal\Api\Category::class,
        'zt' => SuperView\Dal\Api\Topic::class,
        'utils' => SuperView\Dal\Api\Utils::class,
        'chip' => SuperView\Dal\Api\Chip::class,
        'banner' => SuperView\Dal\Api\Banner::class,
        'custom' => SuperView\Dal\Api\Custom::class,
        'comment' => SuperView\Dal\Api\Comment::class,
        'inner' => SuperView\Dal\Api\Inner::class,
        'foot' =>  SuperView\Dal\Api\Inner::class,
        'mini' =>  SuperView\Dal\Api\Mini::class,
        'other' =>  SuperView\Dal\Api\Other::class,
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
        'soft' => ['soft','android','ios','miniapp', 'dnb', 'mini'],
        'news' => [ 'news'],
        'zt' => ['zt'],
        'strategy' => ['strategy'],
        'inner' => ['foot', 'inner'],
        'company' => ['company']
    ],


];