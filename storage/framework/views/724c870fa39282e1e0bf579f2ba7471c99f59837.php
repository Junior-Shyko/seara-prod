<nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo e(url('')); ?>">Seara Contabilidade</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo e(url('login')); ?>">Login <span class="sr-only">(current)</span></a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dúvidas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Contato Seara: (85)3493-4647</a></li>
            <li><a href="http://searacontabilidade.com.br/" target="_blank">Site Seara</a></li>
            <li><a href="<?php echo e(url('login')); ?>">Login</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Seara Contabildade</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
