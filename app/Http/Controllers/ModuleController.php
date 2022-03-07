<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

abstract class ModuleController extends Controller
{
    protected $modelName;

    protected $repo = null;

    const REPO_BASE_PATH = 'App\\Repositories\\Repos\\';

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        if (!empty($this->user)) {
            $repoModel = self::REPO_BASE_PATH . $this->modelName . 'Repository';
            $this->repo = new $repoModel;
        }
    }

    /**
     * checking
     *
     * @param  mixed $data
     * @return void
     */
    protected function checking($data)
    {
        if (empty($this->user)) {
            return 'Unauthorize user!';
        }

        if (empty($this->repo)) {
            return 'No Repository found!';
        }

        if (empty($data)) {
            abort(400, 'Missing request parameter');
        }

        return true;
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    protected function store(Request $request)
    {
        $data = $request->except('id');

        $validated = $this->checking($data);
        if ($validated === true) {

            $this->authorize('create', $this->user);

            $this->repo->createRecord($data);
        }

        return response()->json(['status' => $validated]);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return void
     */
    protected function update(Request $request, $id)
    {
        return $request;
    }

    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    protected function delete($id)
    {
        return $id;
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return void
     */
    protected function show($id)
    {
        $validated = $this->checking($id);

        if ($validated === true) {

            $this->authorize('show', $this->user);

            return $this->repo->showRecord($id);
        }

        return response()->json(['status' => $validated]);
    }


    /**
     * showAllRecords
     *
     * @return void
     */
    protected function showAllRecords()
    {
        $this->authorize('show', $this->user);
        $collection = $this->repo->showAllRecords();
        if ($collection instanceof Collection && !$collection->isEmpty()) {
            return $collection;
        }

        return response()->json(['status' => 'Not Data Found']);
    }

    /**
     * searchRecord
     *
     * @return void
     */
    protected function search($searchData, $getRecordsBy)
    {
        $collection = $this->repo->searchRecord($searchData, $getRecordsBy);
        if ($collection instanceof Collection && !$collection->isEmpty()) {
            return $collection;
        }

        return response()->json(['status' => 'No Data Found']);
    }
}