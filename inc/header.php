<?php
require "connection.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <title>Sammy Blog!</title>
<style>
    html, body {
      height: 100%;
      margin: 0;
    }

    .page-wrapper {
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* full viewport height */
    }

    .content {
      flex: 1; /* main content grows */
      overflow-y: auto; /* scroll if content is taller than viewport */
    }

   footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  background: #333;
  color: #fff;
  padding: 10px;
}
  </style>
  </head>
  <body>