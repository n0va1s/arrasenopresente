<?php

namespace App\Http\Controllers;

use App\Http\Requests\GiftRequest;
use App\Services\GiftService;
use App\Mail\WelcomeEmail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GiftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('request.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find()
    {
        $options = GiftService::getOptions();
        return view('request.find')
                ->with('occasions', $options['occasions'])
                ->with('prices', $options['prices'])
                ->with('ages', $options['ages'])
                ->with('signs', $options['signs'])
                ->with('relations', $options['relations'])
                ->with('hobbies', $options['hobbies'])
                ->with('hints', []);
    }

    /**
     * Show all gifts for selecte options
     *
     * @param  Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $options = GiftService::getOptions();
        $hints = GiftService::filter($request->all());
        return view('request.find')
            ->with('occasions', $options['occasions'])
            ->with('prices', $options['prices'])
            ->with('ages', $options['ages'])
            ->with('signs', $options['signs'])
            ->with('relations', $options['relations'])
            ->with('hobbies', $options['hobbies'])
            ->with('hints', $hints);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = GiftService::getOptions();
        return view('request.form')
                ->with('occasions', $options['occasions'])
                ->with('prices', $options['prices'])
                ->with('ages', $options['ages'])
                ->with('signs', $options['signs'])
                ->with('relations', $options['relations'])
                ->with('hobbies', $options['hobbies']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\GiftRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GiftRequest $request)
    {
        $gift = GiftService::create($request->validated());
        Mail::to($gift->contact->emailFrom)->queue(new WelcomeEmail($gift));
        return view('request.done');
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
