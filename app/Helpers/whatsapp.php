<?php

use GuzzleHttp\Client;

if (!function_exists('sendWhatsAppMessage')) {
    function sendWhatsAppMessage($phoneNumber, $text)
    {
        $botId = "8e1186e3-bde1-48eb-9301-65dd932367b6";
        $apiKey = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjhlMTE4NmUzLWJkYzAxLTY1ZGQ5MzIzNjdiNiIsImlhdCI6MTY4NjI3MjY3M30.KvyD0cCvAQNFC8V4e0ZsZ3eR4M6nKZeC5JCov_yhHXI";
        $endpoint = "https://api.wa.banjarmasinkota.go.id/whatsapp/{$botId}/messages";

        $client = new Client();

        try {
            $response = $client->post($endpoint, [
                'headers' => [
                    'Authorization' => "Bearer {$apiKey}",
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'phoneNumber' => $phoneNumber,
                    'text' => $text,
                ],
            ]);

            return json_decode($response->getBody()->getContents(), true);
        } catch (Exception $e) {
            // Handle exception or error logging
            return [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
    }
}
