<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">
                SSH account
            </h3>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12 hidden-print">                    
                <?= $user['message']?>
            </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> Create an account
                </div>
                <div class="panel-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Username</td></td><td>:</td><td><?= $user['username']?></td>
                        </tr>
                        <tr>
                            <td>Password</td><td>:</td><td><?= $user['password']?></td>
                        </tr>
                        <tr>
                            <td>Host IP</td><td>:</td><td><?= $user['hostname']?></td>
                        </tr>
                        <tr>
                            <td>Country</td><td>:</td><td><?= $user['location']?></td>
                        </tr>
                        <tr>
                            <td>Openssh</td><td>:</td><td><?= $user['openssh']?></td>
                        </tr>
                         <tr>
                            <td>Dropbear</td><td>:</td><td><?= $user['dropbear']?></td>
                        </tr>
                         <tr>
                            <td>Price</td><td>:</td><td><?= $user['price']?></td>
                        </tr>
                        <tr>
                            <td>expired Dateุ</td><td>:</td><td><?= date("Y-m-d H:i:s",strtotime("+".$user['expired']." days", time() ) )?></td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-muted">
					Description:<br>
					For the used port ( 8080)<br>
                    warning!!! 1 Device only, do not use excess 2 devices at the sametime. If breaking the rules, the system will delete your account by
                </p>
                <div class="hidden-print">
					   <a href="/web/download.html" class="btn btn-warning"><i class="fa fa-download fa-fw"></i> Download file openvpn</a>
					<a href="<?= base_url('panel/reseller/'.$_SESSION['username'].'/server') ?>" class="btn btn-default">Back</a>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
