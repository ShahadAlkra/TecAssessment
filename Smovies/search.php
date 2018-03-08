
<?php

$request = new HttpRequest();
$request->setUrl('https://api.themoviedb.org/3/search/movie');
$request->setMethod(HTTP_METH_GET);

$request->setQueryData(array(
  'include_adult' => 'false',
  'page' => '1',
  'language' => 'en-US',
  'api_key' => '01c942a7bdb5c9bcd4fced1f07b427dd'
));

$request->setBody('{}');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}

?>
