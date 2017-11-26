<?php

/*
 * ./noyau/protect.php
 * Protection via SESSION
 */

if (!isset($_SESSION[USER])):
  header('location: ' . ROOTPUBLIC .'login/error/2');
endif;
