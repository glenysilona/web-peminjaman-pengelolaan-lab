	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- BEGIN SIDEBAR -->
		<aside class="left-side sidebar-offcanvas">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image">					
						<img src="../gallery/usericon.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info"><br/>
						<p><?php echo $_SESSION['name']; ?></p>
						<a href="?profile=<?php echo $_SESSION['id']; ?>"><i class="fa fa-circle text-green"></i> <?php echo $_SESSION['username']; ?></a>
					</div>
				</div><br/>			
				<ul class="sidebar-menu">
					<li class="active">
						<a href="../dashboard/index.php">
							<i class="fa fa-home"></i><span>Home</span>
						</a>
					</li>
				<?php 
					if (isset($_SESSION['access'])) {
						if ($_SESSION['access'] == 'admin') {
				?>					
					<li class="menu">
						<a href="#">
							<i class="fa fa-users"></i><span>Users</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?users=admin">Admin</a></li>
							<li><a href="?users=guru">Guru</a></li>
							<li><a href="?users=siswa">Siswa</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-laptop"></i><span>Alat Labor</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?perangkat=alat">Alat Laboratorium</a></li>
							<li><a href="?perangkat=bahan">Sparepart Laboratorium</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-align-left"></i><span>Laporan</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?akademik=semester">Laporan Peminjaman</a></li>
							<li><a href="?akademik=tahun">Laporan Pengembalian</a></li>
							<li><a href="?akademik=jenis">Laporan Kerusakan</a></li>
						</ul>
					</li>
				<?php
						}elseif ($_SESSION['access'] == 'guru') {
				?>
					<li class="menu">
						<a href="#">
							<i class="fa fa-laptop"></i><span>Alat Labor</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?perangkat=alat">Alat Laboratorium</a></li>
							<li><a href="?perangkat=bahan">Sparepart Laboratorium</a></li>
						</ul>
					</li>
					<li class="menu">
						<a href="#">
							<i class="fa fa-bar-chart-o"></i><span>Nilai</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?nilai=afektif">Afektif</a></li>
							<li><a href="?nilai=psikomotor">Psikomotor</a></li>
							<li><a href="?nilai=kognitif">Kognitif</a></li>
						</ul>
					</li>
					<li>
						<a href="?jadwal=laboratorium">
							<i class="fa fa-calendar"></i><span>Jadwal Laboratorium</span>
						</a>
					</li>
					<li>
						<a href="?jadwal=absen">
							<i class="fa fa-calendar"></i><span>Absensi</span>
						</a>
					</li>				
				<?php
						}elseif ($_SESSION['access'] == 'siswa') {
				?>
					<li class="menu">
						<a href="#">
							<i class="fa fa-bar-chart-o"></i><span>List</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">							
							<li><a href="?perangkat=listalat">List Alat</a></li>
							<li><a href="?users=list_karyawan">List Karyawan</a></li>
						</ul>
						
					</li>		
					<li class="menu">
						<a href="#">
							<i class="fa fa-book"></i><span>Pengajuan</span>
							<i class="fa fa-angle-left pull-right"></i>
						</a>
						<ul class="sub-menu">
							<li><a href="?perangkat=alat-create1">Peminjaman</a></li>
							<li><a href="#">Pengembalian</a></li>
							<li><a href="#">Kerusakan</a></li>
						</ul>
					</li>
				<?php
						}
					}
				?>										
				</ul>
			</section>
		</aside>
		<!-- END SIDEBAR -->