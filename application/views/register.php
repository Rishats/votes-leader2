<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--    //////////// JS ////////////////////////-->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vue.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/tether.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <!--    /////////// CSS //////////////////////////////////-->
    <link rel="stylesheet" href="assets/css/tether.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bulma.css">
    <title>LOGIN</title>
    <style>
        .boder
        {
            background-color: #8193ff;
        }
        #main
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
<div id="main">
    <div id="email-error" v-if="emailerror" style="padding-left: 30%; padding-right: 30%; padding-top: 3px;"><email-error><email-error/></div>
    <div id="email-good" v-if="emailgood" style="padding-left: 30%; padding-right: 30%; padding-top: 3px;"><email-good><email-good/></div>
    <form method="POST" action="<?php echo base_url(); ?>user/auth/" class="center-form" style="margin-top: 100px;">
        <div class="form-group">
            <label for="exampleInputEmail1" style="margin-left: 10px">{{ email }}</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="emailwriting">
            <label for="exampleInputEmail1" style="margin-left: 10px">{{ code }}</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" v-model="codewriting">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 40%; margin-bottom: 8px" v-bind:disabled="enableButton">{{ submit }}</button>
    </form>
</div>
<script src="assets/new/js/vue-goodemail.js"></script>
<script src="assets/new/js/vue-erroremail.js"></script>
<script>
    new Vue({
        el: '#main',
        data: {
            email: "Ваша почта",
            emailwriting: "Укажите email который Вам выдали.",
            code: "Ваш код",
            codewriting: "Укажите код который Вам пришел.",
            submit: "Подтвердить",
            emailerror: false,
            emailgood: false,
            enableButton: false
        },
        watch: {
            emailwriting: function (val) {
                var re = new RegExp('^[\\w.+\\-]+@iuca\\.kg$');
                if(re.test(this.emailwriting)){
                    this.enableButton = false;
                    this.emailerror = false;
                    this.emailgood = true;
                }
                else{
                    this.enableButton = true;
                    this.emailerror = true;
                    this.emailgood = false;
                }


            }
        }
    })
</script>
</body>
</html>

