<?php

namespace App\Http\Controllers\API;

use App\PreRegistration;
use App\Http\Resources\PreRegistration as PreRegistrationResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PreRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PreRegistrationResource::collection(PreRegistration::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $preRegistration = PreRegistration::create($request->all());

        return new PreRegistrationResource($preRegistration);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PreRegistration  $preRegistration
     * @return \Illuminate\Http\Response
     */
    public function show(PreRegistration $preRegistration)
    {
        return new PreRegistrationResource($preRegistration);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PreRegistration  $preRegistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PreRegistration $preRegistration)
    {
        $preRegistration->update($request->all());

        return new PreRegistrationResource($preRegistration);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PreRegistration  $preRegistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(PreRegistration $preRegistration)
    {
        $preRegistration->delete();

        return response()->json(null, 204);
    }
}
