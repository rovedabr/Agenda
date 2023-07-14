<?php
  include_once("./config/url.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  <title>Agenda</title>
</head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
          <img id="calendar" src="<?= $BASE_URL ?>img/calendar.svg" alt="">
        </a>
        <div class="navbar-nav">
          <a class="nav-link" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
          <a class="nav-link" id="create-link" href="<?= $BASE_URL ?>create.php">Adicionar usuário</a>
        </div>
      </nav>
    </header>