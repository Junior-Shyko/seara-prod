<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="_token" content="<?php echo e(csrf_token()); ?>">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title>Seara Contabilidade - Sistema de Clientes </title>
  <link rel="icon" href="<?php echo e(asset('img/favicon.png')); ?>">
  <!-- Gentelella -->
  <link href="<?php echo e(asset('css/gentelella.min.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link href="gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"> -->
  <style type="text/css">
    .navbar{
      background: #D9D9D9;
    }

  </style>

  <?php echo $__env->yieldPushContent('stylesheets'); ?>

</head>

<body class="login">
  <?php echo $__env->make('layouts.header_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="container body">

    <div class="main_container">

     <?php echo $__env->yieldContent('content'); ?>

    </div>

  </div>
 
  <!-- Custom Theme Scripts -->

  <script>
    var SearaApp = {};

    SearaApp.assetURL = "<?php echo e(asset('')); ?>";
    SearaApp.baseURL = "<?php echo e(url('')); ?>";
  </script>


  <script src="<?php echo e(asset("js/gentelella.min.js")); ?>"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
