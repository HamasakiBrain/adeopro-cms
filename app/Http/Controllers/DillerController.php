<?php

namespace App\Http\Controllers;

use App\Models\Diller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $dillers = Diller::all();
        return view('admin.dillers.create')->with([
            'dillers' => $dillers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Diller::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param Diller $diller
     * @return Response
     */
    public function show(Diller $diller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Diller $diller
     * @return Response
     */
    public function edit(Diller $diller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Diller $diller
     * @return Response
     */
    public function update(Request $request, Diller $diller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Diller $diller
     * @return Response
     */
    public function destroy($id)
    {
        Diller::destroy($id);
        return redirect()->back();
    }
}
