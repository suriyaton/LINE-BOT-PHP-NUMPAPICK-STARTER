 <?php
  

function send_LINE($msg){
 $access_token = 'L251Y3XTAdYxI8aE1brFn58ob3Qjaej76QiEWG9r4DCzKNCnmElKH03h6G4v84gIm2+uik7bGT8TTHfEmqgAsUfyG8BOfsorBJzJmOrhUtaZULT39rAX/mxJ9XbwNZ/+U9Jxcf37mLlVGZo1XGXDpwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '91d92ef78dabe8d1c878d211ea9894ab',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
