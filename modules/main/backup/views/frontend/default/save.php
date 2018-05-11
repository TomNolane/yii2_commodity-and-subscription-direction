<?php
$request = Yii::$app->request;  
$name = $request->post("name","0");
$email = $request->post("email","0");
$phone = $request->post("phone","0");

$domain = Yii::$app->getRequest()->serverName;

if($name == "0" || mb_strlen($name) < 1 || mb_strlen($name) > 25)
{ 
    echo $name."1";
    return;
}

if($phone == "0" || mb_strlen($phone) < 9 || mb_strlen($phone) > 18)
{  
    echo $phone."2";
    return;
}

$pattern = '/^\d$/';
$phone = preg_replace($pattern,"",$phone);
$connection = Yii::$app->db2;

function mailganer($data){
    $source = array(
        'zaymplus.tk' => 47383
    );
    $post_data = array(
        'api_key' => 'f1c3d5d708e1094e8373920d9d45b034',
        'email' => $data['email'],
        'source_id' => $source[ $data['site'] ]
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://mailganer.com/api/email/add/');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
    $mailganer = curl_exec($ch);
    curl_close($ch);            
    //print_r($mailganer);
    return $mailganer;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{  
    $connection->createCommand()->insert('forms', ['site' => $domain, 'name' => $name, 'phone' => $phone])->execute();
}
else
{
    $connection->createCommand()->insert('forms', ['site' => $domain, 'name' => $name, 'phone' => $phone, 'email' => $email])->execute();

    if(strpos(Yii::$app->getRequest()->serverName, 'zaymplus') !== false)
    {
        $data = array(
            'email' => $email,
            'site' => 'zaymplus.tk'
        );
        $ee = mailganer($data);
        echo $ee;
    } 
}

echo "done";
?>