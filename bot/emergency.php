<?php
if (isset($_POST['reason']) && isset($_POST['email']) && isset($_POST['textarea']) && isset($_POST['name'])) {
    define('');
    function sendTelegram($method, $response)
    {
        $ch = curl_init('https://api.telegram.org/bot' . TOKEN . '/' . $method);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $response);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
    }
    $text = '‼️‼️‼️'.PHP_EOL.'<b>'.$_POST['reason'].'</b>'.PHP_EOL.'<em>'.$_POST['email'].'</em>'.PHP_EOL.'<pre>'.$_POST['name'].'</pre>'.PHP_EOL.'<b>'.$_POST['textarea'].'</b>';
    sendTelegram('sendMessage', array('chat_id' => 244602527, 'text' => $text,'parse_mode' => 'HTML'));
    header('Location: https://codepool.ru/emergency.php?error=0');
    exit();
}
else {
    header('Location: https://codepool.ru/emergency.php?error=1');
    exit();
}
