<?php 
require 'vendor/autoload.php'; 
use  App\VerifyBot;
use App\ReceivedMessage;
use App\SendMessage;

require 'cloudinary/Cloudinary.php';
require 'cloudinary/Uploader.php';
require 'cloudinary/Api.php';



$verifyBot = new VerifyBot();
\Cloudinary::config(array( 
  "cloud_name" => "ucosuji", 
  "api_key" => "351433192855887", 
  "api_secret" => "YwfoASvkPRr1t-y7IfL_v_09MVA" 
));

 
$input = json_decode(file_get_contents('php://input'), true);


$receivedMessage = new ReceivedMessage($input);
$sendMessage = new SendMessage($input);

 
if(!empty($receivedMessage->textMessage)) {   
     $sendMessage->text("hello coder");
    
}
 
if($receivedMessage->attachmentType === "image") {
		
	
   $imageProperties = \Cloudinary\Uploader::upload($receivedMessage->attachmentURL,array("resource_type" => "image"));
   $imageUploadURL =$imageProperties['secure_url'];
   $sendMessage->text($imageUploadURL);
			   		 
}else{   
     $sendMessage->text("I was born to handle images, please send me one. ):");
    
}



 
