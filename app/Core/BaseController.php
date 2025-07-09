<?php

namespace App\Core;

use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    // You can add common methods here that will be available to all your controllers.
    // For example, a method to send a standardized JSON response.

    /**
     * Send a success response.
     *
     * @param  mixed  $data
     * @param  string  $message
     * @param  int  $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendSuccess($data, $message = 'Success', $statusCode = 200)
    {
        return response()->json([
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ], $statusCode);
    }

    /**
     * Send an error response.
     *
     * @param  string  $message
     * @param  int  $statusCode
     * @param  array  $errors
     * @return \Illuminate\Http\JsonResponse
     */
    protected function sendError($message, $statusCode = 400, $errors = [])
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($errors)) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $statusCode);
    }
}
