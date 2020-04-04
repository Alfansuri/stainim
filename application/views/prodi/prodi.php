
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_79">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_80"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-tab-item gdlr-core-js gdlr-core-item-pdb  gdlr-core-left-align gdlr-core-tab-style1-horizontal gdlr-core-item-pdlr">
                                        
                                        <div class="gdlr-core-tab-item-content-image-wrap clearfix">
											<?php 
												$user = $this->db->query('SELECT * from prodi  ORDER BY id_prodi desc limit 1');
												$no = 1;
												foreach($user->result() as $u){ 
											?>
                                            <div class="gdlr-core-tab-item-image  gdlr-core-active" data-tab-id="<?= $no++ ?>">
                                                <!--<a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">-->
                                                    <span class="gdlr-core-tab-item-image-background"  style="background-image: url('<?php echo base_url($u->foto_prodi) ?>');" ></span>
                                                    <!--<i class="fa fa-play" ></i>
                                                </a>-->
                                            </div>
											<?php 
												}
											?>
											<?php 
												$user = $this->db->query('SELECT * from prodi  ORDER BY id_prodi desc limit 1,99');
												$no = 2;
												foreach($user->result() as $u){ 
											?>
                                            <div class="gdlr-core-tab-item-image  " data-tab-id="<?= $no++ ?>">
                                                <!--<a class="gdlr-core-lightgallery gdlr-core-js " href="https://www.youtube.com/watch?v=C5pKtnmHTxg">-->
                                                    <span class="gdlr-core-tab-item-image-background"  style="background-image: url('<?php echo base_url($u->foto_prodi) ?>');" ></span>
                                                    <!--<i class="fa fa-play" ></i>
                                                </a>-->
                                            </div>
											<?php 
												}
											?>
											
                                        </div>

                                        <div class="gdlr-core-tab-item-wrap">
                                            <div class="gdlr-core-tab-item-title-wrap clearfix gdlr-core-title-font">
												<?php 
													$user = $this->db->query('SELECT * from prodi  ORDER BY id_prodi desc limit 1');
													$no = 1;
													foreach($user->result() as $u){ 
												?>
                                                <div class="gdlr-core-tab-item-title  gdlr-core-active" data-tab-id="<?= $no++ ?>"><?= $u->judul_prodi ?></div>
												<?php 
													}
												?>
												<?php 
													$user = $this->db->query('SELECT * from prodi  ORDER BY id_prodi desc limit 1,99');
													$no = 2;
													foreach($user->result() as $u){ 
												?>
                                                <div class="gdlr-core-tab-item-title   " data-tab-id="<?= $no++ ?>"><?= $u->judul_prodi ?></div>
												<?php 
													}
												?> 
                                                
                                            </div>
                                            <div class="gdlr-core-tab-item-content-wrap clearfix">
                                                
											
												<div class="gdlr-core-tab-item-content  gdlr-core-active" data-tab-id="1" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_25">Manajemen Pendidikan Islam<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>Program studi Manajemen Pendidikan Islam (S1) yang dikembangkan STAI An-Najah Indonesia Mandiri Sidoarjo saat ini pada awalnya merupakan salah satu konsentrasi dari salah satu program studi Ilmu Agama Islam. Dalam perkembangan selanjutnya berdasarkan Surat Keputusan Direktur Jenderal Kelembagaan Agama Islam Nomor DJ.I/361/2010, konsentrasi manajemen Pendidikan Islam pada Program Studi Ilmu Agama Islam tersebut dikembangkan menjadi satu program pendidikan dengan gelar S.Pd.I</p> 
													<p>Kehadiran Program Studi Manajemen Pendidikan Islam (S1) didorong semangat untuk merespon perkembangan ilmu pengetahuan dan tuntutan kebutuhan masyarakat global yang mempersyaratkan pentingnya manajemen profesional dalam pengelolaan lembaga pendidikan.</p> 
                                                </div>
												 
                                                <div class="gdlr-core-tab-item-content " data-tab-id="2" >
                                                    <div class="gdlr-core-title-item gdlr-core-item-pdb clearfix  gdlr-core-left-align gdlr-core-title-item-caption-top">
                                                        <div class="gdlr-core-title-item-title-wrap ">
                                                            <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_1dd7_25">Ekonomi Syari’ah<span class="gdlr-core-title-item-title-divider gdlr-core-skin-divider" ></span></h3></div>
                                                    </div>
                                                    <p>Berawal dari sebuah komitmen besar untuk meningkatkan ekonomi umat, prodi Ekonomi Syari’ah menjadi pilihan utama sebagai sebuah media realisasi komitmen tersebut. Prodi ini dibentuk dengan berprinsip pada nilai demokrasi deliberative, yaitu sebuah kinerja yang dibangun berdasar konsensus bersama antara pengurus jurusan dengan civitas akademik Sekolah Tiggi. Prinsip ini dibuat guna menciptakan sebuah iklim akademik dalam sebuah prodi Ekonomi Syari’ah. Iklim akademik tersebut diperkuat dengan maraknya diskusi-diskusi yang dilakukan oleh mahasiswa Ekonomi Syari’ah dengan membahas tentang persoalan-persoalan perekonomian dari berbagai perspektif.</p>
                                                     
                                                </div> 
												
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>