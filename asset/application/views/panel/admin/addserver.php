<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">
              ADD SERVER
            </h3>
        </div>
    </div>
    <div class="row">
            <div class="col-lg-12">
				<?php if (isset($message)) { echo $message; }?>               
            </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-gear fa-fw"></i>Server settings
                </div>
                <div class="panel-body">
                    <form action="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'addserver') ?>" method="POST">
                        <div class="form-group">
                            <label>Set</label>
                            <input class="form-control" placeholder="Servername" name="ServerName" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Server location</label>
                            <input class="form-control" placeholder="Server location" name="Location" type="text" required>     
                        </div>
                        <div class="form-group">
                            <label>Host/Server IP</label>
                            <input class="form-control" placeholder="192.168.1.1 atau www.example-server.com" name="HostName" type="text" required>
                        </div>
                        <div class="form-group">
                            <label>Rental prices</label>
                            <div class="input-group">
                                <span class="input-group-addon">PHP</span>
                                <input class="form-control" placeholder="Price" name="Price" type="number" step="10" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Server password</label>
                            <input class="form-control" placeholder="Server password" name="RootPasswd" type="text">
                        </div>
                        <input type="submit" class="btn btn-primary" value="ADD">
                        <a href="<?= base_url('panel/administrator/'.$_SESSION['username'].'/'.'server') ?>" class="btn btn-default">BACK</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
