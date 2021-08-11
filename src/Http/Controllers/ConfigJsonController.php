<?php

namespace Miladimos\Conf\Http\Controllers;

use Illuminate\Http\Request;
use Miladimos\Conf\Services\ConfigJsonService;

class ConfigJsonController extends Controller
{
    /**
     * show all configs
     * @return array
     */
    public function all()
    {
        return ConfigJsonService::all();
    }

    /**
     * show a config
     * @param int $id
     * @return bool|string
     */
    public function show(int $id)
    {
        return ConfigJsonService::show($id);
    }

    /**
     * store a new config with key
     * @param Request $request
     * @return bool
     */
    public function store(Request $request)
    {
        return ConfigJsonService::store($request->only('key', 'value'));
    }

    /**
     * update a config with id
     * @param Request $request
     * @param int $id
     * @return bool
     */
    public function update(Request $request, int $id)
    {
        return ConfigJsonService::update($request->only('key', 'value'), $id);
    }

    /**
     * delete a config with id
     * @param int $id
     * @return bool
     */
    public function delete(int $id)
    {
        return ConfigJsonService::delete($id);
    }
}
