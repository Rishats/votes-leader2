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
    <link rel="stylesheet" href="assets/css/bulma.css">
    <title>LOGIN</title>
    <style>
        .boder
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
<body class="boder" id="login">
<div class="main">
<div id="email-error" style="padding-left: 30%; padding-right: 30%; padding-top: 3px;"><email-error><email-error/></div>
<form class="center-form" style="margin-top: 100px;">
    <div class="form-group">
        <label for="exampleInputEmail1" style="margin-left: 10px">{{ email }}</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" :placeholder="warning">
    </div>
    <button type="submit" class="btn btn-primary" style="margin-left: 40%; margin-bottom: 8px">{{ submit }}</button>
</form>
</div>
<script src="assets/new/js/vue-erroremail.js"></script>
<script>
    new Vue({
        el: '.center-form',
        data: {
            email: "Ваша почта",
            warning: "Укажите email который Вам выдали.",
            submit: "Подтвердить"
        }
    })
</script>
</body>
</html>
