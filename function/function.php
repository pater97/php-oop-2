<?php

function dd(...$params)
{

  foreach ($params as $param) {
    # code...
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
  }
  die();
};

?>