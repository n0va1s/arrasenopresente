<?php

namespace App\Http\Controllers\Hint;

use App\Http\Controllers\Controller;
use App\Services\GiftService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(string $code)
    {
        $gift = GiftService::getByCode($code);
        $hints = DB::table('hints')
            ->join('options as groups', 'hints.group_id', '=', 'groups.id')
            ->select('hints.id', 'hints.title', 'hints.link', 'groups.title as group')
            ->where('hints.gift_id', '=', $gift->id)->get();
        
        Log::channel('telegram')->notice("Dicas acessadas: $code");
        
        return view('hint.view')
            ->with('gift', $gift)
            ->with('hints', $hints);
    }
}
