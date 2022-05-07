<?php

namespace App\Http\Controllers\Hint;

use App\Mail\YourHints;
use App\Models\Gift;
use App\Services\GiftService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class SendController extends Controller
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
     * Send mail with hints.
     *
     * @return void
     */
    public function mail(string $code)
    {
        $gift = GiftService::getByCode($code);
                
        $url = url('hint/view', $code);
        
        Log::channel('telegram')->notice("Dicas enviadas: $code");
        Mail::to($gift->emailFrom)->send(
            new YourHints(
                $gift->name, $gift->who_is, $gift->age_range, $gift->occasion, $url
            )
        );
        
        Gift::where('code', $code)->update(['deleted_at' => now()]);
        
        return redirect()->route('hint.index');
    }
}
