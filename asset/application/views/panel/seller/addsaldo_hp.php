<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	 <div class="row">
        <div class="col-lg-12">
           <h3 class = "page-header"> Top up credit </h3>
            <div class="well">Remaining credits : <B><?php if (isset($user->saldo)) {echo $user->saldo; }?></B></div>
        </div>
    </div>
    <div class="row">
		 
<div class = "col-sm-6">
<p class = "text-muted"> Details: If payment is made, please click confirm and your balance will automatically increase within 1-2 hours. After receiving confirmation from the administrator :: {Please transfer the money before informing} :: </p>
<h5> There is a problem with the credit top-up. <a href='http://'> <b> Ask </b> </a href> </h5>
<h5> Transfer money to the wallet account 09455205859 <a href='http://'> <b> Send evidence </b> </a href> </h5>
</div>
           <div class="col-sm-6">
			  <?php if (validation_errors()) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
					</div>
					<?php endif; ?>
					<?php if (isset($error)) : ?>
					<div class="col-md-12">
						<div class="alert alert-danger" role="alert"><?= $error ?></div>
					</div>
					<?php endif;?>
					<?php if (isset($message)) : ?>
					<div class="col-md-12">
						<div class="alert alert-success" role="alert"><?= $message ?></div>
					</div>
					<?php endif;?>
			   <?= form_open() ?>
					<div class="form-group">
					<label for = "sender"> Sender wallet number </label>
					<input type = "text" name = "sender" class = "form-control" id = "sender" placeholder = "xxxxxxxxxx" />
					<small class = "text-muted"> for proof of payment. </small>
					</div>
					<div class="form-group">
					<label for = "hp"> Transfer in number </label>
						<select name="hp" id="hp" class="form-control">
							<?php foreach ($this->user_model->view_asset() as $row): ?>
							<?php if (!empty($row['nohp'])): ?>
							<option value="<?= $row['nohp']?>"><?= $row['nohp'].' ('.$row['provider'].')'?></option>
							<?php endif;?>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label for = "hp"> Transfer amount: Actual input: </label>
						<input type="number" name="jumlah" class="form-control" id="jumlah" value="xx"/>
						<small class = "text-muted"> Minimum transfer price is 50 PHP. </small>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value = "confirm" />
					</div>
			   </form>
            </div>
    </div>
</div>
