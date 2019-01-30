<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="<?php echo base_url().'assets/vendor/bootstrap/css/bootstrap.min.css'?>">
	<title>Admin</title>

</head>

<body>


	<div class="container-fluid">

		<?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<?php echo $this->session->flashdata('success'); ?>
		</div>
		<?php endif; ?>

		<div class="card mb-3">
			<div class="card-body">
				<form action="<?php base_url('web/add/') ?>" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label for="name">Name*</label>
						<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" type="text" name="name"
						 placeholder="Product name" />
						<div class="invalid-feedback">
							<?php echo form_error('name') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="price">Price*</label>
						<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>" type="number" name="price" min="0"
						 placeholder="Product price" />
						<div class="invalid-feedback">
							<?php echo form_error('price') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="name">Photo</label>
						<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>" type="file" name="image" />
						<div class="invalid-feedback">
							<?php echo form_error('image') ?>
						</div>
					</div>

					<div class="form-group">
						<label for="name">Description*</label>
						<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>" name="description"
						 placeholder="Product description..."></textarea>
						<div class="invalid-feedback">
							<?php echo form_error('description') ?>
						</div>
					</div>

					<input class="btn btn-success" type="submit" name="btn" value="Save" />

				</form>
			</div>

			<div class="card-footer small text-muted">
				* required fields
			</div>

		</div>
	</div>


</body>

</html>