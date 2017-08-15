<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('/','NewsController@index');
Macaw::get('/home','NewsController@home');
Macaw::get('/testredis','NewsController@testredis');


Macaw::error(function() {
  throw new Exception("404 not found", 1);
});


Macaw::dispatch();

