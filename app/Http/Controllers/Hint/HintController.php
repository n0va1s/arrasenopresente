<?php

namespace App\Http\Controllers\Hint;

use App\Models\Gift;
use App\Models\Hint;
use App\Models\Option;
use App\Services\GiftService;
use App\Http\Requests\HintRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HintController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gifts  = DB::table('gifts')
            ->join('profiles', 'gifts.id', '=', 'profiles.gift_id')
            ->join('contacts', 'gifts.id', '=', 'contacts.gift_id')
            ->join('options', 'options.id', '=', 'gifts.occasion_id')
            ->orderby('gifts.created_at', 'desc')
            ->whereNull('gifts.deleted_at')->paginate(10);
        $types  = Option::where('group', 'HNT')->orderBy('title')->get();
        return view('hint.index')
            ->with('gifts', $gifts)
            ->with('types', $types);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(string $code)
    {
        $gift = GiftService::getByCode($code);
        $groups = Option::where('group', 'HNT')->orderBy('title')->get();
        $hints = DB::table('hints')
            ->join('options as groups', 'hints.group_id', '=', 'groups.id')
            ->join('gifts', 'gifts.id', '=', 'hints.gift_id')
            ->select('hints.id', 'hints.title', 'hints.link', 'groups.title as group', 'gifts.code')
            ->where('hints.gift_id', '=', $gift->id)
            ->whereNull('hints.deleted_at')->get();
        return view('hint.create')
            ->with('gift', $gift)
            ->with('groups', $groups)
            ->with('hints', $hints);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\HintRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HintRequest $request)
    {
        $gift_id = Gift::where(
            'code', $request->input('code')
        )->first()->id;
        
        $validated = $request->validated();
        $hint = new Hint();
        $hint->fill($validated);
        $hint->gift_id = $gift_id;
        $hint->code =  Str::uuid()->toString();
        $hint->save();
        
        return redirect()->back()
            ->with('message', 'Dica cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hint  $hint
     * @return \Illuminate\Http\Response
     */
    public function show(Hint $hint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hint  $hint
     * @return \Illuminate\Http\Response
     */
    public function edit(Hint $hint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\HintRequest  $request
     * @param  \App\Models\Hint  $hint
     * @return \Illuminate\Http\Response
     */
    public function update(HintRequest $request, Hint $hint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hint  $hint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hint $hint)
    {
        $qtd = Hint::destroy($hint->id);
        return redirect()->back()->with('message', 'Dica excluída com sucesso');
    }
}
