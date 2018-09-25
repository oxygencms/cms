<?php

namespace App\Http\Controllers\Admin;

use JavaScript;
use App\Models\Permission;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PermissionRequest;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('index', Permission::class);

        $models = Permission::allWithAccessors(['edit_url', 'model_name']);

        JavaScript::put(['models' => $models]);

        return view('admin.permissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
        $this->authorize('create', Permission::class);

        $permission = null;

        return view('admin.permissions.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PermissionRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(PermissionRequest $request)
    {
        $this->authorize('create', Permission::class);

        $permission = Permission::create($request->validated());

        notification("$permission->model_name successfully stored.");

        return redirect()->route('permission.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Permission $permission
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Permission $permission)
    {
        $this->authorize('update', Permission::class);

        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PermissionRequest $request
     * @param Permission        $permission
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $this->authorize('update', Permission::class);

        $permission->update($request->validated());

        notification("$permission->model_name successfully updated.");

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Permission $permission
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Permission $permission)
    {
        $this->authorize('delete', Permission::class);

        $permission->delete();

        return jsonNotification($permission->model_name . ' successfully deleted.');
    }
}
