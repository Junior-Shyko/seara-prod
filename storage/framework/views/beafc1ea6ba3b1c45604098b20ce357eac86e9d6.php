<?php $__env->startSection('title', 'Page Title'); ?>
<?php $__env->startSection('content'); ?>

<?php echo $__env->make('msg.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="<?php echo e(url('/login')); ?>">
                    <?php echo csrf_field(); ?>


                    <h1>Login</h1>
                    <div class="form-group has-feedback <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Email">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <?php if($errors->has('email')): ?>
                            <span class="help-block">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                </span>
                        <?php endif; ?>
                    </div>

                    <div class="form-group has-feedback<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                        <input type="password" class="form-control" placeholder="Senha" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        <?php if($errors->has('password')): ?>
                            <span class="help-block">
                  <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
                        <?php endif; ?>

                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary submit" value="Acessar">
                        <a class="reset_pass" href="<?php echo e(url('/password/reset')); ?>">Esqueceu a Senha?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">
                        <p class="change_link">Não tem conta?
                            <a href="<?php echo e(url('/cadastro')); ?>" class="to_register"> Criar meu Cadastro </a>
                        </p>

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1>Produto Excellence Soft</h1>
                            <p>©2017 Todos os diretiros reservados a <a href="http://excellencesoft.com.br/" target="_blank" style="color: #E67716;">Excellence Soft</a></p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout_app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>