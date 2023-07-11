<div class="row">
<!-- BEGIN BASIC DATATABLES -->
	<div class="col-md-12">
		<div class="grid no-border">
			<div class="grid-header">
				<i class="fa fa-table"></i>
				<span class="grid-title">Karyawan</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
					<a data-widget="remove" title="Remove"><i class="fa fa-times"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<table id="dataTables1" class="table table-hover display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th width="3%" align="center">#</th>
							<th>No. Induk</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Telepon</th>
							
						</tr>
					</thead>
					<tbody>
						<?php 
							$no 		=	1;
							$guru 		=	mysqli_query($koneksi,"SELECT * FROM users WHERE access='guru'");

							while ($data=mysqli_fetch_array($guru)) {
						?>
						<tr>
							<td><center><?php echo $no; ?></center></td>
							<td><?php echo $data['nomor_induk']; ?></td>
							<td><?php echo $data['name']; ?></td>
							<td><?php echo $data['email']; ?></td>
							<td><?php echo $data['telp']; ?></td>
							<td>
							</td>
						</tr>
						<?php
							$no++;
							}
						?>						
					</tbody>
			
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>