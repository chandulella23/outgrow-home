<?php

require __DIR__."vendor/mailerlite/vendor/autoload.php";

$groupsApi = (new MailerLiteApi\MailerLite("07c23594acf5764492d5ecae362ff0af"))->groups();

$subscriber = [
    'email' => $_POST['email'],
    'fields' => [
        'name' => $_POST['name'],
    ]
];

$response = $groupsApi->addSubscriber(4265413, $subscriber);
return $response;