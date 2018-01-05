<?php use yii\helpers\Url;
Yii::$app->response->format = \yii\web\Response::FORMAT_RAW;
$headers = Yii::$app->response->headers;
$headers->add('Content-Type', 'application/xml');

$message =  '<?xml version="1.0" encoding="UTF-8"?><response><code>10</code><message>Invalid action!</message></response>';

$message1 = str_replace("<![CDATA[", "", $message);
$message2 = str_replace("]]></data>", "", $message1);
$message3 = str_replace("\n", "", $message);
echo $message3;
?>