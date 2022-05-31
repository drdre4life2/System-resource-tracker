<?php

namespace App\Utilities;


class Helper
{
    public function responder($data, $statusCode = 200, $message = null, $headers = [])
    {
        $truthy = $statusCode >= 200 && $statusCode <= 209;
        $isMessageNull = is_null($message) ? true : false;
        if ($isMessageNull && $truthy) {
            $message = 'Action was successful';
        } elseif ($isMessageNull && !$truthy) {
            $message = 'Action was unsuccessful';
        }

        $result = [
            'success' => $truthy ? true : false,
            'data' => $truthy ? $data : [],
            'errors' => !$truthy ? $data : [],
            'message' => $message
        ];
        return response()->json($result, $statusCode, $headers);
    }


}
