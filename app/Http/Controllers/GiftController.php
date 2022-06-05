<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use App\Models\Contact;
use App\Models\Profile;
use App\Models\Option;

use App\Http\Requests\GiftRequest;
use App\Mail\NewRequest;

use Illuminate\Support\Facades\Mail;
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
        $prices = Option::where('group', 'PRC')->orderBy('id')->get();
        $ages = Option::where('group', 'AGE')->orderBy('id')->get();
        $signs = Option::where('group', 'SGN')->orderBy('title')->get();
        $relations = Option::where('group', 'RLT')->orderBy('title')->get();
        $hobbies = Option::where('group', 'HBS')->orderBy('title')->get();
        return view('gift')
                ->with('occasions', $occasions)
                ->with('prices', $prices)
                ->with('ages', $ages)
                ->with('signs', $signs)
                ->with('relations', $relations)
                ->with('hobbies', $hobbies);
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
        $gift = new Gift([
                'occasion_id' => $validated['occasion_id'],
                'price_range_id' => $validated['price_range_id'],
                'code' =>  Str::uuid()->toString(),
        ]);
        $gift->save();

        $profile = new Profile([
                'gift_id' => $gift->id,
                'age_range_id' => $validated['age_range_id'],
                'sign_id' => $validated['sign_id'],
                'relationship_id' => $validated['relationship_id'],
                'who_is' => $validated['who_is'],
                'more_information' => $validated['more_information'],
                'hobby_id' => $validated['hobby_id'],
        ]);
        $gift->profile()->save($profile);

        $contact = new Contact([
                'gift_id' => $gift->id,
                'emailFrom' => $validated['email_from'],
                'name' => $validated['name'],
        ]);
        $gift->contact()->save($contact);
        
        //Mail::to(env('MAIL_TO_ADDRESS'))->send(new NewRequest($gift));
        return redirect()->route('done');
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
