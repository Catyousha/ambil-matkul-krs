
            <!-- Begin Page Content -->
            <div class="container-fluid">
               <!-- Page Heading -->
               <h1 class="h3 mb-2 text-gray-800">Menu Rancang KRS</h1>
               <p class="mb-4">Silahkan ambil mata kuliah yang tersedia dan pastikan memenuhi <a href="http://elektro.um.ac.id/wp-content/uploads/2016/02/Kurikulum-2019-S1-TI.pdf">persyaratan</a> yang ada.</p>
               <div class="card shadow mb-4">
                  <div class="card-header py-3">
                     <h6 class="m-0 font-weight-bold text-primary">Daftar Mata Kuliah</h6>
                  </div>
                  <div class="card-body text-center">
						<form method="post" action="<?=current_url()?>">
						<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" style="display: none">
                     <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-sm-12">
                                 <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                       <tr role="row">
                                          <th rowspan="1" colspan="1" style="width: 38px;">Check Untuk Ambil</th>
                                          <th rowspan="1" colspan="1" style="width: 61px;">Kode Mata Kuliah</th>
														<th rowspan="1" colspan="1" style="width: 50px;">Nama Mata Kuliah</th>
														<th rowspan="1" colspan="1" style="width: 50px;">SKS</th>
                                       </tr>
                                    </thead>
                                    <tbody>
												<?php foreach($matkul as $mk => $m):?>
                                       <tr role="row">
                                          <td><input style="width: 20px; height: 20px;" type="checkbox" name="ambil_matkul[]" id="" value="<?=$mk?>"></td>
                                          <td><?=$mk;?></td>
														<td><?=$m['nama_mk'];?></td>
														<td><?=$m['sks'];?></td>
														</tr>
												<?php endforeach;?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
							<input class="btn btn-danger mt-3 text-center" align="center" type="submit" value="Submit">
							</form>
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
<?php if($this->session->flashdata('maxSKS')):?>
<script>
	alert("Mata kuliah yang diambil tidak boleh melebihi jumlah SKS maksimal (24 SKS)!");
</script>
<?php endif;?>
