<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Bahan</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Sparepart</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nama" placeholder="Enter Nama Sparepart" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jenis Sparepart</label>
						<div class="col-md-4">
							<select class="form-control" name="jenis" required>
								<option>Hardware</option>
								<option>Alat Tulis</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jumlah Bahan</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="jumlah" placeholder="Jumlah Bahan" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jumlah Bahan Rusak</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="rusak" placeholder="Jumlah Bahan Rusak" required>
						</div>
					</div><hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="create-bahan"><span class="fa fa-plus"></span> Create</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?perangkat=bahan" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>