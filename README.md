# yii2-rocketauth-authclient
This extension adds RocketAuth OAuth2 supporting for [yii2-authclient](https://github.com/yiisoft/yii2-authclient).

## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run
```
composer require rocket-firm/yii2-rocketauth-authclient
```
or add
```
"rocket-firm/yii2-rocketauth-authclient": "^0.1"
```
to the `require` section of your composer.json.

## Usage
You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2-authclient/tree/master/docs)

Register your application [in RocketAuth](https://auth.rocketfirm.com)

and add the RocketAuth client to your auth clients.

```
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'rocketauth' => [
                'class' => 'rocketfirm\authclient\RocketAuth',
                'clientId' => 'rocketauth_client_id',
                'clientSecret' => 'rocketauth_client_secret',
            ],
            // other clients
        ],
    ],
    // ...
 ]
 ```
