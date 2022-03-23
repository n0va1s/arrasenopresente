<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Option;
use App\Http\Requests\ContactRequest;
use App\Mail\NewRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
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
    public function create(int $gift_id)
    {
        $states = Option::where('group', 'STE')->orderBy('title')->get();
        return view('contact')
        ->with('gift_id', $gift_id)
        ->with('states', $states);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $validated = $request->validated();
        $contact = new Contact();
        $contact->fill($validated);
        $contact->save();
        Log::channel('telegram')->notice("Novo pedido: $contact->gift_id");
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new NewRequest($contact->gift));
        return redirect()->route('done');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ContactRequest  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
