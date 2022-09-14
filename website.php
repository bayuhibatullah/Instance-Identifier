<?php

  #The URL root is the AWS meta data service URL where metadata
  # requests regarding the running instance can be made
  $urlRoot="http://169.254.169.254/latest/meta-data/";

  # Get the instance ID from meta-data and print to the screen
  $instance = file_get_contents($urlRoot . 'instance-id');

  # Availability Zone
  $az = file_get_contents($urlRoot . 'placement/availability-zone');

?>

<center>
  <h1>Selamat Datang di Website</h1>
  Halaman ini dibuat oleh instance <b><?= $instance ?></b> di Availability Zone <b><?= $az ?></b>.
</center>