
<div class="row">
	<!-- BEGIN BASIC FORM -->
	<div class="col-md-12">
		<div class="grid">
			<div class="grid-header">
				<i class="fa fa-align-left"></i>
				<span class="grid-title">Alat Laboratorium</span>
				<div class="pull-right grid-tools">
					<a data-widget="collapse" title="Collapse"><i class="fa fa-chevron-up"></i></a>
					<a data-widget="reload" title="Reload"><i class="fa fa-refresh"></i></a>
				</div>
			</div>
			<div class="grid-body">
				<form role="form" class="form-horizontal" action="function/create.php" method="post">
						<div class="form-group">
						<label class="col-sm-2 control-label">Tanggal</label>
						<div class="col-sm-4">
							<div class="input-group date form_date" data-date-format="dd-mm-yyyy" data-link-field="dtp_input3">
								<input type="text" class="form-control" name="tanggal" required>
								<span class="input-group-addon"><i class="fa fa-th"></i></span>
							</div>
							<input type="hidden" id="dtp_input3" value="" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Nama Alat</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="nama" placeholder="Enter Nama Alat" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jenis Alat</label>
						<div class="col-md-4">
							<select class="form-control" name="jenis" required>
								
								<option selected="selected">
									<option>Hardware</option>
									<option>Alat tulis</option>
								</option>
								
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Jumlah Alat</label>
						<div class="col-md-4">
							<input type="text" class="form-control" name="jumlah" placeholder="Jumlah Alat" required>
						</div>
					</div>
					<hr/>
					<div class="form-group">
						<div class="col-md-2"></div>
						<div class="col-md-4 btn-group">
							<button type="submit" class="btn btn-primary" name="create-alat"><span class="fa fa-plus"></span> Create</button>
							<button type="reset" class="btn btn-default"><span class="fa fa-eraser"></span> Cancel</button>
							<a href="?perangkat=alat" class="btn btn-info"><span class="fa fa-reply"></span> Back</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END BASIC FORM -->
</div>