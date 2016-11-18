<?php
include __DIR__ . '/vendor/autoload.php'; // 引入 composer 入口文件
use EasyWeChat\Foundation\Application;
use EasyWeChat\Message\Text;
$options = [
    'debug'  => true,
    'app_id' => 'wx4132ddb79a1b5f46',
    'secret' => 'ade08e4dff2e7b9af744df169335b149',
    'token'  => 'AkCrEJquifbw93hCn1Hq',
    // 'aes_key' => null, // 可选
    'log' => [
        'level' => 'debug',
        'file'  => 'D:/WWW/easywechat-demo/easywechat.log', // XXX: 绝对路径！！！！
    ],
    //...
];
$app = new Application($options);

//file_put_contents('D:/WWW/easywechat-demo/test.log', print_r($app->server, true).'r\n', FILE_APPEND);
$ cd vendor/apanly/browser-detector on master$ git remote -vcomposerhttps://github.com/apanly/browser-detector.git (fetch)composerhttps://github.com/apanly/browser-detector.git (push)originhttps://github.com/apanly/browser-detector.git (fetch)origingit@github.com:apanly/browser-detector.git (push)

// ...
$app->server->setMessageHandler(function ($message) {
    switch ($message->MsgType) {
        case 'event':
            # 事件消息...
            break;
        case 'text':
            # 文字消息...
            break;
        case 'image':
            # 图片消息...
            break;
        case 'voice':
            # 语音消息...
            break;
        case 'video':
            # 视频消息...
            break;
        case 'location':
            # 坐标消息...
            break;
        case 'link':
            # 链接消息...
            break;
        // ... 其它消息
        default:
            # code...
            break;
    }


    return $text = new Text(['content' => '您好！overtrue。']);
    // ...
    //return "您好！欢迎关注我!";
});


$response = $app->server->serve();
//file_put_contents('test.log', print_r($response, true).'r\n', FILE_APPEND);

// 将响应输出
//file_put_contents('D:/WWW/easywechat-demo/test.log', print_r($user, true).'r\n', FILE_APPEND);

$response->send(); // Laravel 里请使用：return $response;
$text = new Text(['content' => '您好！overtrue。']);






/*
$response = $app->server->serve();
// 将响应输出
$response->send(); // Laravel 里请使用：return $response;
*/