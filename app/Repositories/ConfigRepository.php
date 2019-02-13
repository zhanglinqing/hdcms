<?php
/** .-------------------------------------------------------------------
 * |    Author: 向军 <www.aoxiangjun.com>
 * |    WeChat: houdunren2018
 * |      Date: 2018/11/14
 * | Copyright (c) 2012-2019, www.houdunren.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace App\Repositories;

use App\Models\Config;
use Cache;
use Illuminate\Http\Request;

/**
 * 网站配置
 * Class ConfigRepository
 * @package App\Repositories
 */
class ConfigRepository extends Repository implements RepositoryInterface
{
    protected $model = Config::class;

    /**
     * 保存配置
     * @param Request $request
     * @param string $name
     * @return bool
     */
    public function save(Request $request, string $name, $type = 'module'): bool
    {
        $data = $request->except(['_token', '_method']);
        Cache::forget('config');
        return Config::updateOrCreate(
            [$type => $name],
            [$type => $name, 'data' => array_merge($this->get($name) ?? [], $data)]
        )->save();
    }

    /**
     * 获取默认值
     * @param string $name 支持点语法
     * @param null $default
     * @return mixed|null
     */
    public function get(string $name, $default = null, $type = 'module')
    {
        Cache::forget('config');
        $cache = Cache::rememberForever('config', function () use ($type) {
            return Config::pluck('data', $type);
        });
        return array_get($cache, $name) ?? $default;
    }
}