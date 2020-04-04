
			
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="sparkline12-hd">
											<div class="main-sparkline12-hd">
												<h1>Input jadwal</h1>
											</div>
										</div>

										<div class="tinymce-single">
												<?php echo form_open_multipart('halaman/aksi_upload_jadwal');?>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Judul</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="judul" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tag SEO</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" name="seo" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tanggal Rilis</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" name="tgl" class="form-control" value="<?php  echo date('Y-m-d');  ?>" />
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Foto</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="file-upload-inner ts-forms">
                                                                    <div class="input prepend-small-btn">
                                                                        <div class="file-button">
                                                                            Browse
                                                                            <input type="file" name="foto" onchange="document.getElementById('prepend-small-btn').value = this.value;">
                                                                        </div>
                                                                        <input type="text" id="prepend-small-btn" placeholder="no file selected">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">  
																		<input  class="btn btn-sm btn-primary login-submit-cs"  type="submit" value="Simpan"> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
												</form>
                                            
											
										</div>
									</div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="no">no</th>
                                                <th data-field="judul">Judul</th>
                                                <th data-field="seo">SEO</th>
                                                <th data-field="tgl">tgl rilis</th>
                                                <th data-field="foto" >Foto</th>
                                                <th data-field="hapus"  >Hapus</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php 
												$user = $this->db->query('SELECT * from jadwal ');
												$no = 1;
												foreach($user->result() as $u){ 
											?>
										
                                            <tr>
                                                <td></td>
                                                <td><?php echo $no++ ?></td>
												<td><?=  $u->judul_jadwal ?></td> 
												<td><?=  $u->seo_jadwal ?></td> 
												<td><?=  $u->tgl_jadwal ?></td> 
												<td><a  href="<?=   base_url( $u->foto_jadwal) ?> "   >Foto </a></td>
												<td><a  href="<?=   base_url('halaman/hapuss/'.$u->id_jadwal) ?>/jadwal/ijadwal"   >Hapus </a></td>
                                                 
                                            </tr>
											
											<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
