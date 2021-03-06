<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="#login">
    <div class="container">
        <div class="row ver-parent">
            <div class="col-md-4 col-md-offset-4 ver-center">
                <?php if (validation_errors()) : ?>
                    <div class="alert alert-danger"><?= validation_errors() ?></div>
                <?php endif; ?>
                <?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
				<?php endif; ?>
				<div align="center">
				<a href="https://www.animatedimages.org/cat-snakes-290.htm"><img src="https://www.animatedimages.org/data/media/290/animated-snake-image-0029.gif" border="0" alt="animated-snake-image-0029" /></a>
				</div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-sign-in fa-fw"></i>WELCOME! Please Login</h3>
                    </div>
                    <div class="panel-body">
                        <?= form_open() ?>
                            <fieldset>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                        <input class="form-control" placeholder="Password" name="password" type="password" required>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success btn-sm hapus pull-left" value="Login"></input>
                                <a href="<?= base_url('panel/register') ?>" class="btn btn-danger btn-sm hapus pull-right">Register</a>
                            </fieldset>
                        </form>
                    </div>
                 
                </div>
            </div>
          
        </div>
  
    </div>
     
</section>