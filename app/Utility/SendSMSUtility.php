<?php

namespace App\Utility;

use App\Models\OtpConfiguration;
use Illuminate\Support\Facades\Http;

class SendSMSUtility
{
    public static function sendSMS($to, $from, $text, $template_id)
    {
        if (OtpConfiguration::where('type', 'mimsms')->first()->value == 1) {
            try {
                $url = "https://mimsms.com.bd/smsAPI";
                $response = Http::get($url, [
                    "sendsms" => '',
                    "apikey" => env('MIM_API_KEY'),
                    "apitoken" => env('MIM_API_TOKEN'),
                    "type" => "sms",
                    "to" => $to,
                    "from" => env('MIM_SENDER_ID'),
                    "text" => $text,
                ]);

                \Log::alert('SMS sent to ' . $to . ' from ' . $from . ' with text ' . $text . ' and template id ' . $template_id);

                return $response;
            } catch (\Exception $e) {
                \Log::error($e->getMessage());
                return $e->getMessage();
            }
        }

        \Log::alert('SMS not sent');

        return false;
    }
}
