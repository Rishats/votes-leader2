<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<!--    //////////// JS ////////////////////////-->
    <script src="assets/js/vue.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/tether.js"></script>
    <script src="assets/js/bootstrap.js"></script>
<!--    /////////// CSS //////////////////////////////////-->
    <link rel="stylesheet" href="assets/css/tether.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <title>LOGIN</title>
    <style>
        .main-body
        {
            background-color: #8193ff;
        }
        .main
        {
            background-color: #8193ff;
        }
        .center-form
        {
            background-color: #3b7cff;
            margin: 300px;
            border-radius: 20px;
        }
    </style>
</head>
<body class="main-body">
<div class="main">
<form class="center-form">
    <div class="form-group">
        <label for="exampleInputEmail1" style="margin-left: 10px">{{ email }}</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" :placeholder="warning">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="margin-left: 10px">{{ password }}</label>
        <input type="password" class="form-control" id="exampleInputPassword1" :placeholder="password">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 40%; margin-bottom: 8px">{{ submit }}</button>
</form>
</div>
<script>
    new Vue({
        el: '.center-form',
        data: {
            email: "Ваш код",
            warning: "Укажите секретный код который Вам выдали.",
            password: "Пароль",
            submit: "Подтвердить"
        }
    })
</script>
</body>
</html>
