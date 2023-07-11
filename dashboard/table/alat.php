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
							<th>Tanggal</th>
							<th>Nama Alat</th>
							<th>Jenis Alat</th>
							<th>Jumlah Alat</th>
							<th>Status</th>
							<th width="20%"><center>
								<?php 
									if (isset($_SESSION['access'])) {
										if ($_SESSION['access'] == 'admin') {
											echo "Action";
										}elseif ($_SESSION['access'] == 'guru') {
											echo "Tersedia";
										}
									}
								?>
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
							<td><?php echo $data['tgl']; ?></td>
							<td><?php echo $data['alat_nama']; ?></td>
							<td><?php echo $data['alat_jenis']; ?></td>
							<td><?php echo $data['alat_jumlah']; ?></td>
							<td><?php echo $data['Status']; ?></td>
							
							
								
							</td>
							<?php 
								if (isset($_SESSION['access'])) {
									if ($_SESSION['access'] == 'admin') {
							?>
							<td>
								<center>
									<a href="?alat-edit=<?php echo $data['alat_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
									<a href="?alat-delete=<?php echo $data['alat_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
								</center>
							</td>
							
							<td class="btn-info">
								
							</td>
							<?php
								}	
								}
							?>
						</tr>
						<?php
							$no++;
							}
						?>						
					</tbody>
				</table>
				<?php 
					if (isset($_SESSION['access'])) {
						if ($_SESSION['access'] == 'admin') {
				?>
				<a href="?perangkat=alat-create" class="btn btn-primary"><span class="fa fa-plus"></span> Create</a>
				<?php
						}
					}
				?>				
			</div>
		</div>
	</div>
	<!-- END BASIC DATATABLES -->
</div>