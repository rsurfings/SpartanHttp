<?php
namespace SpartanHttp;
use GuzzleHttp\Client;

class HttpClient
{

    public $service;

    private $url = 'http://ws.inovacao.erpflex.com.br/queue';

    /**
     *
     * @param unknown $service            
     */
    public function __construct ($service)
    {
        $this->service = $service;
    }

    /**
     *
     * @param array $message            
     * @return unknown[]
     */
    public function get ($message = [])
    {
        
        $client = new Client();
        $response = $client->request('GET', $this->url, 
                [
                        'json' => $message
                ]);
        
        $code = $response->getStatusCode(); // 200
        $reason = $response->getReasonPhrase(); // OK
        
        $stream = $response->getBody();
        $contents = $stream->getContents();
        
        return array(
                'code' => $code,
                'reason' => $reason,
                'message' => $contents
        );
    }

    /**
     *
     * @param array $message            
     * @return unknown[]
     */
    public function post ($message = [])
    {
        
        $message= array_map('utf8_encode', $message);
        
        $client = new Client();
        $response = $client->request('POST', $this->url, 
                [
                        'json' => $message
                ]);
        
        $code = $response->getStatusCode(); // 200
        $reason = $response->getReasonPhrase(); // OK
        $stream = $response->getBody();
        $contents = $stream->getContents();
        
        return array(
                'code' => $code,
                'reason' => $reason,
                'response' => $contents
        );
    }
}