 <?php
  

function send_LINE($msg){
 $access_token = '5rcIPhcNbvQINKIppl65ibh2m9oFagBaxri+Rmc3btkSIPDIYmEdhjXVmBLfZ4eGg+E5hDj1LSwqppBpZpl5klOO/ej2O60r3N6mv3V9npOyioAShHAMi/V9hTP8U1gXp45aq6VY3UbMqwJSd/4rqQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uc2561dbc5bc29742389faf2f00d0b560',
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