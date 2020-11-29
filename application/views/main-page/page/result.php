			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 class="h3 mb-4 text-gray-800">Hasil KRS</h1>
				<div class="card shadow mb-4">
					<div class="card-header py-3">
						<h6 class="m-0 font-weight-bold text-primary">
					<?php if(count($prasyarat)):?>
					KRS anda gagal dibuat karena adanya mata kuliah yang tidak memenuhi persyaratan!
					<?php else:?>
					Berikut adalah KRS anda berdasarkan mata kuliah yang dipilih:	
					<?php endif;?>
					</h6>
					</div>
					<div class="card-body text-center">
						<div class="table-responsive">
					<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
						<div class="row">
							<div class="col-sm-12">
							<?php if(count($prasyarat)):?>
							<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th rowspan="1" colspan="1" style="width: 61px;">Nama Mata Kuliah Yang Diambil</th>
										<th rowspan="1" colspan="1" style="width: 50px;">Nama Mata Kuliah Prasyarat</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($prasyarat as $idmkprasyarat => $idmkdiambil):?>
									<tr role="row">
									<td><?=$this->matkul['data'][$idmkdiambil]['nama_mk'];?></td>
									<td><?=$this->matkul['data'][$idmkprasyarat]['nama_mk'];?></td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>
							<?php else:?>
							<table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
								<thead>
									<tr role="row">
										<th rowspan="1" colspan="1" style="width: 61px;">Kode Mata Kuliah</th>
										<th rowspan="1" colspan="1" style="width: 50px;">Nama Mata Kuliah</th>
										<th rowspan="1" colspan="1" style="width: 50px;">SKS</th>
										<th rowspan="1" colspan="1" style="width: 50px;">Jadwal</th>
									</tr>
								</thead>
								<tbody>
									<?php $count = 0;?>
									<?php foreach($diambil as $d):?>
									<tr role="row">
										<td><?=$d;?></td>
										<td><?=$this->matkul['data'][$d]['nama_mk'];?></td>
										<td><?=$this->matkul['data'][$d]['sks'];?></td>
										<td><?=$jadwal[$count]?></td>
									</tr>
									<?php $count = $count + 1;?>
									<?php endforeach;?>
								</tbody>
								<tfoot>
									<th colspan="4">Total SKS: <?=$sks?></th>
								</tfoot>
							</table>
							<?php endif;?>
							</div>
						</div>
					</div>
				</div>
				<?php if(count($prasyarat)):?>
				<a href="<?php echo site_url('');?>" class="btn btn-primary mt-3 text-center" align="center">Kembali ke pilih KRS</a>
				<?php endif;?>
			</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- End of Main Content -->
		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Your Website 2020</span>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->
	</div>
	<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-primary" href="login.html">Logout</a>
			</div>
		</div>
	</div>
</div>
