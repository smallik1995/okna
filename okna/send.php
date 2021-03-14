<?

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $token = "1171876967:AAFmYi7Bw9ebHKpGZW6PqQ_iKWdh7e5y5cw";//?????? ????
    $chat_id = "-534923673";// id ????
    $theme = 'Заявка балкон %0A';

        $bot_url = "https://api.telegram.org/bot{$token}/";

        if (isset($_POST['name'])) {
          if (!empty($_POST['name'])){
            $name = "Имя: " . strip_tags($_POST['name']) . "%0A";
          }
        }
        
        if (isset($_POST['phone'])) {
          if (!empty($_POST['phone'])){
            $phone = "Телефон: " . strip_tags($_POST['phone']) . "%0A";
          }
        }
        if (isset($_POST['square'])) {
          if (!empty($_POST['square'])){
            $square = "Площадь: " . strip_tags($_POST['square']) . "%0A";
          }
        }
        if (isset($_POST['price'])) {
          if (!empty($_POST['price'])){
            $price = "Стоимость: " . strip_tags($_POST['price']) . "%0A";
          }
        }

         $txt = $theme . $name . $phone . $square . $price;
         $sendTextToTelegram = file_get_contents("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", 'r');

}

?>

