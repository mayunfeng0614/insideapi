<?php
/**
 * Created by PhpStorm.
 * User: mayunfeng
 * Date: 2018/2/22
 * Time: 14:39
 */

namespace InsideAPI\Core;

class AccessToken
{
    protected $token; //访问token

    protected $accessKey; // 初始access_token

    const ACCESS_TOKEN_PARAMS = 'Accesstoken';

    const SESSION_ID_PARAMS = 'SessionID';

    const USER_ID = 'UserId';


    public function __construct($token,$accessKey)
    {
        $this->token = $token;
        $this->accessKey = $accessKey;

        if (!isset($_SESSION)) {
            @session_start();
        }
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getAccessKey()
    {
        return $this->accessKey;
    }

    public function setAccessToken($accessToken)
    {
        $_SESSION['Accesstoken'] = $accessToken;
    }

    public function setSessionID($sessionId)
    {
        $_SESSION['SessionID'] = $sessionId;
    }

    public function setUserId($userId)
    {
        $_SESSION['UserId'] = $userId;
    }

    public function getAccessToken()
    {
        return $_SESSION['Accesstoken'];
    }

    public function getSessionID()
    {
        return $_SESSION['SessionID'];
    }

    public function getUserId()
    {
        return $_SESSION['UserId'];
    }
}