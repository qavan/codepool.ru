<?php
error_reporting(-1);
echo '<pre>'.var_dump($_POST).'</pre>';
if (isset($_POST['option']) && isset($_POST['email']) && isset($_POST['textarea']) && isset($_POST['date'])) {
    define('TOKEN', '957014155:AAGCwfifbDIDwvDCcvyD0EyqTbhJNFomY4g');
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
    switch ($_POST['option']) {
        case '0':$opt = 'Python GUI';break;
        case '1':$opt = 'Python Scrapping(Parsing)';break;
        case '2':$opt = 'Python 2/Python Legacy';break;
        case '3':$opt = 'Other Legacy';break;
        case '4':$opt = 'Other';break;
    }
    $text = '<b>'.$opt.'</b>'.PHP_EOL.'<em>'.$_POST['email'].'</em>'.PHP_EOL.'<pre>'.$_POST['textarea'].'</pre>'.PHP_EOL.'<b>'.$_POST['date'].'</b>';
    sendTelegram('sendMessage', array('chat_id' => 244602527, 'text' => $text,'parse_mode' => 'HTML'));
    header('Location: https://codepool.ru/contact.php?error=0');
    exit();
}
else {
    header('Location: https://codepool.ru/contact.php?error=1');
    exit();
}
