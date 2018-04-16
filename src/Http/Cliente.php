<?php
namespace Http;

class Cliente extends \GuzzleHttp\Client
{

    public $service;

    private $url;

    /**
     *
     * @param boolean $service
     * @param string $url
     */
    public function __construct($config = ["service" => false, "url" => 'http://queue.erpflex.com.br/queue'])
    {
        $this->service = $config['service'];
        $this->url = $config['url'];
    }

    /**
     *
     * @param int $messageId
     * @return array['code' => $code,
     *         'reason' => $reason,
     *         'message' => $contents
     *         ]
     */
    public function get($messageId)
    {
        $client = new Client();
        $response = $client->request('GET', $this->url, [
            'json' => [
                'messageId' => $messageId
            ]
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
     * @return array['code' => $code,
     *         'reason' => $reason,
     *         'message' => $contents
     *         ]
     */
    public function post($message = [])
    {
        $message = array_map('utf8_encode', $message);
        
        $client = new Client();
        $response = $client->request('POST', $this->url, [
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