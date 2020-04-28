<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
	<div id="page-wrapper">
			<div class = "row"> <div class = "col-lg-12"> <h3 class = "page-header"> Edit Server </h3> </div> </div>
				<div class="row"><div class="col-lg-12">
					
					<div class="panel panel-default">
						<div class="panel-heading"></div>
						<div class="panel-body">
							<?php if (isset($message)) : ?>
									<?= $message ?>
							<?php endif; ?>
							<form action="<?= base_url('panel/administrator/edit/'.str_replace(' ','-',$server -> ServerName).'/'.$server->Id ) ?>" method="POST">
								<div class="form-group">
									<label for ="ServerName"> Name</label>
									<input type="text" class="form-control" id="ServerName" name="ServerName" value="<?= $server -> ServerName ?>">
										<p class="help-block"></p>
								</div>
								<div class="form-group">
									<label for = "ServerName"> Location Server </label>
									<input class="form-control" placeholder="Location Demo" name="Location" type="text" required> 
										<p class="help-block"></p>
								</div>
								<div class="form-group">
									<label for = "email"> Price </label>
									<input type="number" class="form-control" id="email" name="Price" value="<?= $server->Price ?>">
								<p class = "help-block"> set to 0, the server will appear on the free statusี</p>
								</div>
								<div class="form-group">
								<label for = "email"> IP host </label>
									<input type="text" class="form-control" id="email" name="HostName" value="<?= $server->HostName ?>"
									<p class="help-block"></p>
								</div>
								<div class="form-group">
									<label for="password_confirm">Server password</label>
									<input type="text" class="form-control" id="password_confirm" name="RootPasswd" value="<?= $server->RootPasswd ?>">
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm"> Account limits</label>
										<input type="number" class="form-control" id="password_confirm" name="MaxUser" value="<?= $server->MaxUser ?>">
									</div>
								</div>			
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm"> Number of valid days </label>
										<input type="number" class="form-control" id="password_confirm" name="Expired" value="<?= $server->Expired ?>">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">Openssh</label>
										<input type="text" class="form-control" id="password_confirm" name="OpenSSH" value="<?= $server->OpenSSH ?>">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group">
										<label for="password_confirm">Dropbear</label>
										<input type="text" class="form-control" id="password_confirm" name="Dropbear" value="<?= $server->Dropbear?>">
									</div>
								</div>
								<div class="form-group">
									<input type="submit" class="btn btn-primary" value="บันทึก">									
									<a href="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'server') ?>" class = "btn btn-default"> Back </a>
								</div>
							</form>
						</div>
					</div>
				</div></div><!-- .row -->
		</div>

