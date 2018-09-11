<?php


namespace App;

Class Config {

   
  static $facebookCredentials = [

    'verifyToken' => 'example',

    'accessToken' => 'EAAP4tgvAakcBAHH8hAEvk7KWbIhpCnSxKROtQ6h1lO9VA16q9RehMtKvf3ugvF4piDQTxpiaqrabPCnCdMolGPYf4b1sH55J1D52IxPnNTf5sU3DQTkjC1ZC694MSp6wwcG150DLHUulVdVuBv0K9f4lvuQmEW7OkbgletgZDZD'

  ];

   
  static function getVerifyToken() {

    return  Config::$facebookCredentials['verifyToken'];

  }

  static function getAccessToken() {

    return  Config::$facebookCredentials['accessToken'];

  }

  

}
