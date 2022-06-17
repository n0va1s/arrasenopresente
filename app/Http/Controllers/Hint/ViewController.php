<?php

namespace App\Http\Controllers\Hint;

use App\Http\Controllers\Controller;
use App\Models\Hint;
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
        try {
            $gift = GiftService::getByCode($code);

            $hints = DB::table('hints')
            ->join('options as groups', 'hints.group_id', '=', 'groups.id')
            ->select(
                'hints.code', 'hints.title', 'hints.link', 
                'hints.is_confirmed', 'groups.title as group'
            )->where('hints.gift_id', '=', $gift->id)->get();

            return view('hint.view')
            ->with('gift', $gift)
            ->with('hints', $hints);
        } catch (\Throwable $th) {
            report($th);
            
            return view('hint.view')
            ->with('gift', null)
            ->with('hints', null);
        }
        //Log::channel('telegram')->notice("Dicas acessadas: $code");
    }

    /**
     * User confirm that liked
     *
     * @return \Illuminate\Http\Response
     */
    public function liked(string $code)
    {
        Hint::where('code', $code)->update(['is_confirmed' => 1]);
        //Log::channel('telegram')->notice("Acertamos: $code");
        return redirect()->back()
        ->with('message', 'Valeu pelo feedback!');
    }

    /**
     * Capturing that user have seen the hint
     *
     * @return \Illuminate\Http\Response
     */
    public function opened(string $code)
    {
        Hint::where('code', $code)->update(['is_seen' => 1]);
        $hint = Hint::where('code', $code)->first();
        return redirect()->away($hint->link);
    }
}
