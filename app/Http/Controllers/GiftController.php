<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Option;
use App\Http\Requests\GiftRequest;

use Illuminate\Support\Str;

class GiftController extends Controller
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
    public function create()
    {
        $occasions = Option::where('group', 'OCC')->orderBy('title')->get();
        $range_prices = Option::where('group', 'PRC')->orderBy('id')->get();
        $themes = Option::where('group', 'THM')->orderBy('title')->get();
        return view('gift')
                ->with('occasions', $occasions)
                ->with('range_prices', $range_prices)
                ->with('themes', $themes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\GiftRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GiftRequest $request)
    {
        $validated = $request->validated();
        $gift = new Gift();
        $gift->fill($validated);
        $gift->code =  Str::uuid()->toString();
        $gift->save();
        
        return redirect()->action(
            [ProfileController::class, 'create'], 
            ['code' => $gift->code]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\GiftRequest  $request
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function update(GiftRequest $request, Gift $gift)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gift  $gift
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        //
    }
}
