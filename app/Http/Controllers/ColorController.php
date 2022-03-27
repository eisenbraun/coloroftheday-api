<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColorController extends Controller
{
    private function getHex ($num) {
        $hash = hash("md5", $num, true);
        return substr(bin2hex($hash), 0, 6);
    }

    public function index (Request $request) {
        $response = [];
        $date = $request->input('date') ? $request->input('date') : date('Y-m-d');

        if (preg_match('/\d{4}-\d{2}-\d{2}/', $date)) {
            $color = $this->getHex($date);
            $response['date'] = $date;
            $response['color'] = "#{$color}";

            return response()->json($response, 200);
        }

        $response['error'] = 'Invalid request';

        return response()->json($response, 200);
    }
}
