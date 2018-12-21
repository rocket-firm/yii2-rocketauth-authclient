<?php

namespace rocketfirm\authclient;

use yii\authclient\OAuth2;

class RocketAuth extends OAuth2
{
    /**
     * {@inheritdoc}
     */
    public $authUrl = 'https://auth.rocketfirm.com/oauth/authorize';
    /**
     * {@inheritdoc}
     */
    public $tokenUrl = 'https://auth.rocketfirm.com/oauth/token';
    /**
     * {@inheritdoc}
     */
    public $apiBaseUrl = 'https://auth.rocketfirm.com';

    /**
     * {@inheritdoc}
     */
    protected function initUserAttributes()
    {
        return $this->api('api/user', 'GET');
    }

    /**
     * {@inheritdoc}
     */
    public function applyAccessTokenToRequest($request, $accessToken)
    {
        $request->getHeaders()->set('Authorization', 'Bearer '. $accessToken->getToken());
    }

    /**
     * {@inheritdoc}
     */
    protected function defaultName()
    {
        return 'rocketauth';
    }

    /**
     * {@inheritdoc}
     */
    protected function defaultTitle()
    {
        return 'RocketAuth';
    }
}