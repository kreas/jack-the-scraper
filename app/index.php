<?php
require_once '../vendor/autoload.php';

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {
  renderView('views/index/index.php');
});

$klein->respond('POST', '/', function () {
  renderView('views/index/results.php');
});

$klein->dispatch();

/**
 * @param string $content content that you would like to render
 * @param string $template template to use for the view
 */
function renderView($content, $template = 'views/layouts/application.php')
{
  include $template;
}