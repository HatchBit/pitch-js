<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-9月-22
 * Time: 0:28
 */
?><!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>音感テスト</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru|M+PLUS+Rounded+1c&amp;subset=japanese" rel="stylesheet">
    <style type="text/css">
        .container {
            /* font-family: 'Kosugi Maru', sans-serif; */
            font-family: 'M PLUS Rounded 1c', sans-serif;
        }
    </style>
</head>
<body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">音感テスト</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            </ul>
            <span class="navbar-text">満点目指して頑張りましょう！</span>
        </div>
    </nav>
</header>
<!-- /header -->

<!-- Container -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>テストをえらんでね</h1>
        </div>
        <?php foreach ($test_sets as $test_set) : ?>
        <div class="col-sm-3">
            <div class="card">
                <img src="<?php echo base_url('img/'.$test_set['parameter'].'.png'); ?>" class=" rounded" alt="<?php echo $test_set['name']; ?>">
                <div class="card-body">
                    <h5><?php echo $test_set['name']; ?></h5>
                </div>
                <div class="card-footer">
                    <a href="<?php echo base_url('practice/p1/'.$test_set['parameter']); ?>" class="btn btn-primary btn-block">テストにすすむ</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- /Container -->


<!-- Bootstrap core JavaScript ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<!-- /Bootstrap -->
</body>
</html>