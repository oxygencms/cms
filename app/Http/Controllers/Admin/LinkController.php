<?php

namespace App\Http\Controllers\Admin;

use App\Models\Link;
use App\Models\Menu;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LinkRequest;

class LinkController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Menu $menu
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(Menu $menu)
    {
        $this->authorize('create', Link::class);

        $data = [
            'menu' => $menu,
            'link' => null,
        ];

        return view('admin.menus.links.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Menu        $menu
     * @param LinkRequest $request
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Menu $menu, LinkRequest $request)
    {
        $this->authorize('create', Link::class);

        $link = $menu->links()->create($request->validated());

        notification("$link->model_name successfully created.");

        return redirect()->route('menu.edit', $menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Menu $menu
     * @param Link $link
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function edit(Menu $menu, Link $link)
    {
        $this->authorize('update', Link::class);

        return view('admin.menus.links.edit', compact('menu', 'link'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Menu        $menu
     * @param Link        $link
     * @param LinkRequest $request
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Menu $menu, Link $link, LinkRequest $request)
    {
        $this->authorize('update', Link::class);

        $link->update($request->validated());

        notification("$link->model_name successfully updated.");

        return redirect()->route('menu.edit', $menu);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Menu $menu
     * @param Link $link
     *
     * @return \Illuminate\Http\Response
     * @throws \Exception
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function destroy(Menu $menu, Link $link)
    {
        $this->authorize('delete', Link::class);

        $link->delete();

        return jsonNotification($link->model_name . ' successfully deleted.');
    }
}
