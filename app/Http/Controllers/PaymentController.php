<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Services\CyberSourceService;

class PaymentController extends Controller
{
    public function showForm()
    {
        return view('payment.form');
    }

    public function confirm(Request $request)
    {
        $params = $request->all();
        $signature = CyberSourceService::sign($params);

        return view('payment.confirm', compact('params', 'signature'));
    }

    public function receipt(Request $request)
    {
        // Read raw POST body
        $raw = file_get_contents('php://input');

        // Parse POST data if available
        $post = $request->post();
        if (empty($post) && !empty($raw)) {
            parse_str($raw, $post); // convert raw data to array
        }

        // Log to file like old PHP script
        $logFile = storage_path('logs/cybersource_log.txt');
        file_put_contents($logFile, '=== ' . now() . " ===\n", FILE_APPEND);
        file_put_contents($logFile, "POST:\n" . print_r($post, true) . "\nRAW:\n" . $raw . "\n\n", FILE_APPEND);

        // Return Blade view
         return view('payment.receipt', compact('post', 'raw'));
    }
}
