<?php
require_once '../vendor/autoload.php';
require_once 'helpers/application_helper.php';

$klein = new \Klein\Klein();

// Start Page
$klein->respond('GET', '*', function ($request, $response, $service) {
  $service->layout('views/layouts/application.php');
  $service->render('views/index/index.php');
});

// Results
$klein->respond('POST', '*', function ($request, $response, $service) use ($klein) {

  $params = array('firstURL' => $_POST['firstURL'], 'secondURL' => $_POST['secondURL']);

  // On error redirect back to the previous page
  $klein->onError(function ($klein, $err_msg) {
    $klein->service()->flash($err_msg);
    $klein->service()->back();
  });

  // Request must be a valid http request. Klein's built in isUrl allows for other type of requests to be valid
  $service->addValidator('HttpRequest', function ($str) {
    return preg_match("/\b(?:(?:https?):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $str);
  });

  // If the request doesn't respond with 200 throw an error.
  $service->addValidator('ValidURL', function($url){
    $headers = @get_headers($url, 1);
    $response = substr($headers[0], 9, 3);
    return $response ? true : false;
  });

  // Validate required params
  $service->validateParam('firstURL', 'You must include a valid first URL')->isHttpRequest()->isValidURL();
  $service->validateParam('secondURL', 'You must include a valid second URL')->isHttpRequest()->isValidURL();

  // Render
  $service->layout('views/layouts/application.php');
  $service->render('views/index/results.php', $params);
});

$klein->dispatch();