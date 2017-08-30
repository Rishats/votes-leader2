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
</head>
<body>
<form class="center-form">
    <div class="form-group">
        <label for="exampleInputEmail1">{{ email }}</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" :placeholder="warning">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">{{ password }}</label>
        <input type="password" class="form-control" id="exampleInputPassword1" :placeholder="password">
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            {{ check }}
        </label>
    </div>
    <button type="submit" class="btn btn-primary">{{ submit }}</button>
</form>
<script>
    new Vue({
        el: '.center-form',
        data: {
            email: "Ваш код",
            warning: "Укажите секретный код который Вам выдали.",
            password: "Пароль",
            check: "Проверить",
            submit: "Подтвердить"
        }
    })
</script>
</body>
</html>
