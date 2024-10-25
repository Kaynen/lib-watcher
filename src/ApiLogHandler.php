<?php

namespace RodrigoMariano\LumenApiLogger;

use Monolog\Logger;
use GuzzleHttp\Client;
use Monolog\Handler\AbstractProcessingHandler;

class ApiLogHandler extends AbstractProcessingHandler
{
    protected $client;
    protected $apiUrl;

    public function __construct($apiUrl, $level = Logger::DEBUG, $bubble = true)
    {
        parent::__construct($level, $bubble);
        $this->client = new Client();
        $this->apiUrl = $apiUrl;
    }

    protected function write(array $record): void
    {
        $token = env('LOG_API_TOKEN', '');
        try {
            $this->client->post($this->apiUrl, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token, // Inclui o token no cabeçalho
                ],
                'json' => [
                    'level' => $record['level_name'],
                    'message' => $record['message'],
                    'context' => $record['context'],
                    'datetime' => $record['datetime']->format('Y-m-d H:i:s'),
                    'environment' => env('APP_ENV', 'production'),
                ],
            ]);
        } catch (\Exception $e) {
            // Lide com erros de envio, se necessário
        }
    }
}
