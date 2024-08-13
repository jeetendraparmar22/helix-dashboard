<?php

namespace App\Traits;

use Illuminate\Http\Client\Response;

// Create Trait
trait ApiResponceTrait
{
    // Success
    public static function success($data, $message = 'SUCCESS', $code = 200)
    {
        return response()->json(
            [
                'status' => 1,
                'data' => $data,
                'message' => $message
            ],
            $code
        );
    }

    // Error

}
