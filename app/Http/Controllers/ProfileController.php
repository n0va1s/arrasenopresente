<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Profile;
use App\Models\Gift;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(string $code)
    {
        $range_ages             = Option::where('group', 'AGE')->orderBy('id')->get();
        $segments               = Option::where('group', 'SGM')->orderBy('title')->get();
        $rests                  = Option::where('group', 'RLX')->orderBy('id')->get();
        $sexual_orientations    = Option::where('group', 'SXO')->orderBy('title')->get();
        $signs                  = Option::where('group', 'SGN')->orderBy('title')->get();
        $relations              = Option::where('group', 'RLT')->orderBy('title')->get();
        return view('profile')
        ->with('code', $code)
        ->with('range_ages', $range_ages)
        ->with('segments', $segments)
        ->with('rests', $rests)
        ->with('sexual_orientations', $sexual_orientations)
        ->with('signs', $signs)
        ->with('relations', $relations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        $validated = $request->validated();
        $profile = new Profile();
        $profile->fill($validated);
        $profile->gift_id = Gift::where(
            'code', $request->input('code')
        )->first()->id;
        $profile->save();

        return redirect()->action(
            [ContactController::class, 'create'], 
            ['code' => $request->input('code')]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
