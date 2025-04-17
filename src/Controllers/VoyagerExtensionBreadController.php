<?php

namespace SoinalaStudio\VoyagerExtension\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use Session;

class VoyagerExtensionBreadController extends VoyagerBreadController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index()
    {
        if (Session::has('redirect_to')) {
            $redirectToURL = Session::get('redirect_to');
            Session::forget('redirect_to');
            return redirect($redirectToURL);
        }
        return parent::index();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        set_session_redirect($request);
        return parent::store($request);
    }

    /**
     * @param Request $request
     * @param number $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(Request $request, $id)
    {
        set_session_redirect($request);
        return parent::update($request, $id);
    }


}
