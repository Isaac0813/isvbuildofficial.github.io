<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="page-wrapper">
	<div class="row">
        <div class="col-lg-12">
            <h4 class="page-header"><i class="fa fa-phone"></i> 
            Add money transfer account </h4>
        </div>
    </div>
    <div class="row">
           <div class="col-xs-6">
			  <?php if (isset($message)) {echo $message;} ?>
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
			   <?= form_open() ?>
					<div class="form-group">
						<label for = "pemilik"> Name </label>
						<input type="text" name="pemilik" class="form-control" id="pemilik" placeholder="but slow but"/>
					</div>
					<div class="form-group">
						<label for = "nohp"> Account number </label>
						<input type="text" name="nohp" class="form-control" id="nohp" placeholder="×××××××××" />
					<small class = "text-muted"> is used for money transfer into accounts (Required) </small>
					</div>
					<div class="form-group">
						<input name="provider" class="form-control" value="True Wallet"/>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary form-control" value ="add"/>
					</div>
			   </form>
		   </div>
		  <div class="col-xs-6">
				<?php if (!empty($asset)):?>
					<h4> active account </h4>
					<div class="table-responsive"><table class="table table-hover">
						<thead>
							<tr> <th> Delete </th> <th> Name </th> <th> Number Wallet </th> <th> Channel </th> </tr>
                        </thead>
                        <tbody>
						<?php foreach ($asset as $row): ?>
							<tr>
									<?php if (empty($row['rekening'])):?>
									<td><a href="<?=base_url('admin/del_hp/'.$row['id'])?>"> Delete</a></td>
									<td><?= $row['pemilik'] ?></td>
									<td><?= $row['nohp']?></td>
									<td><?= $row['provider']?></td>
									<?php endif; ?>
							</tr>
						<?php endforeach; ?>
						</tbody>
					</table></div>
					<?php else: ?>
						<h4 class="page-header">You haven't added any phone numbers.</h4>
				<?php endif; ?>
			</div>
   
    </div>
</div>

