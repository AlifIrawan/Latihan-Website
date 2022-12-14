        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
			<div class="row">
				<div class="col-lg-6">
				<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');
			?>

			<?= $this->session->flashdata('message'); ?>
			<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#newroleModal">Add new role</a>
			<table class="table table-hover mt-4">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Role</th>
						<th scope="col">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($role as $r) : ?>
						<tr>
							<th scope="row"><?= $r['id_level'] ?></th>
							<td><?= $r['nama_level'] ?></td>
							<td>
								<a href="#" class="badge badge-warning">Access</a>
								<a href="#" class="badge badge-success">Update</a>
                                <a href="#" class="badge badge-danger">Delete</a>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>

		
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
				<form action="<?= base_url('admin/role'); ?>" method="POST">
				<div class="modal-body">
					<div class="form-group">
						<label for="Role">Role</label>
						<input type="text" class="form-control" id="Role" name="Role" placeholder="Role name">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
    </div>
</div>
