<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class = "page-header"> Settings</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
			<?php if (isset($message)) {echo $message; }?>
			<?php if (isset($success)) {echo $success; }?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-gear fa-fw"></i> change Password
                </div>
                <div class="panel-body">
                    <form role="form" action="<?= base_url('panel/'.$_SESSION['username'].'/setting')?>" method="POST">
						<input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                        <div class="form-group">
                           <label> Old password </label>
                            <input class="form-control" placeholder="Old Password" name="oldpass" type="password" required>
                        </div>
                        <div class="form-group">
                         <label> New password </label>
                            <input class="form-control" placeholder="New Password" name="password" type="password" required>
                        </div>
                        <div class="form-group">
                         <label> Confirm password </label>
                            <input class="form-control" placeholder="Confirm Password" name="passconf" type="password" required>
                        </div>
                       <button class = "btn btn-primary"> Save </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

