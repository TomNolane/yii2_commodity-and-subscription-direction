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

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{  
    $connection->createCommand()->insert('forms', ['site' => $domain, 'name' => $name, 'phone' => $phone])->execute();
}
else
{
    $connection->createCommand()->insert('forms', ['site' => $domain, 'name' => $name, 'phone' => $phone, 'email' => $email])->execute();
}

echo "done";
?>