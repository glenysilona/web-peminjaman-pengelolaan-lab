<div class="row">
<!-- BEGIN BASIC DATATABLES -->
	<div class="col-md-12">
		<div class="grid no-border">
			<div class="grid-header">
				<i class="fa fa-table"></i>
				<span class="grid-title">Alat</span>
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
							<th width="3%" align="center">Id</th>
							<th>Nama</th>
							<th>Jenis</th>
							<th>Jumlah Alat</th>
							<th>Status</th>
							
							</center></th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$no 		=	1;
							$alat 		=	mysqli_query($koneksi,"SELECT * FROM alat ");

							while ($data=mysqli_fetch_array($alat)) {
						?>
						<tr>
							<td><center><?php echo $no; ?></center></td>
							<td><?php echo $data['alat_nama']; ?></td>
							<td><?php echo $data['alat_jenis']; ?></td>
							<td><?php echo $data['alat_jumlah']; ?></td>
							<td><?php echo $data['Status']; ?></td>
							<?php
									}
							?>
						</tr>
						<?php
							$no++;
						?>						
					</tbody>
				</table>
							
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>