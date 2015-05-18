<?php

namespace Ejimba\LaravelAtApi;

use \GuzzleHttp\Client;
use Config;

class LaravelAtApi {
    
    protected $username;
    protected $apiKey;

    protected $smsUrl;
    protected $voiceUrl;
    protected $userDataUrl;
    protected $subscriptionUrl;
    protected $airtimeUrl;

    protected $responseBody;
    protected $responseInfo;

    public function __construct(){

        $this->username = Config::get('laravel-at-api::username');
        $this->apiKey = Config::get('laravel-at-api::api_key');

        $this->smsUrl = Config::get('laravel-at-api::url.sms_url');
        $this->voiceUrl = Config::get('laravel-at-api::url.voice_url');
        $this->userDataUrl = Config::get('laravel-at-api::url.user_data_url');
        $this->subscriptionUrl = Config::get('laravel-at-api::url.subscription_url');
        $this->airtimeUrl = Config::get('laravel-at-api::url.airtime_url');

        $this->responseBody = null;
        $this->responseInfo = null;

    }

    public function sendMessage($to, $message, $from = null, $bulkSMSMode = 1, $options = array())
    {
        if(is_null($to)){
            throw new LaravelAtApiException("Missing the recepient of the message", 1);
        }

        if(is_null($message)){
            throw new LaravelAtApiException("Missing message to send", 1);
        }

        $client = new Client();
        $request = $client->createRequest('POST', $this->smsUrl);
        $request->setHeader('ApiKey', $this->apiKey);
        $request->setHeader('Accept', 'application/json');
        $postBody = $request->getBody();
        $postBody->setField('username', $this->username);
        $postBody->setField('message', $message);
        $postBody->setField('to', $to);
        $postBody->setField('bulkSMSMode', $bulkSMSMode);

        if(!is_null($from)){
            $postBody->setField('from', $from);
        }

        if (count($options) > 0) {
            $allowedKeys = array ('enqueue', 'keyword', 'linkId', 'retryDurationInHours');

            //Check whether data has been passed in options_ parameter
            foreach ($options as $key => $value) {
                if (in_array($key, $allowedKeys) && strlen($value) > 0 )
                {
                    $postBody->setField($key, $value);
                }
                else
                {
                    throw new LaravelAtApiException("Invalid key in options array: [$key]");
                }
            }
        }

        // Send the POST request
        $response = $client->send($request);
        $this->responseBody = $response;
        return true;
    }
}