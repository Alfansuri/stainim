					
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_21">
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_22" data-parallax-speed="0.2"></div>
                        </div> 
						
                    </div>
					<div class="gdlr-core-pbf-wrapper " id="div_1dd7_44">
                        <div class="gdlr-core-pbf-background-wrap"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                
                                <div class="gdlr-core-pbf-column gdlr-core-column-40 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_45" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget">
                                                    <div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_46">
                                                        <div class="gdlr-core-block-item-title-inner clearfix">
                                                            <h3 class="gdlr-core-block-item-title" id="h3_1dd7_10">News & Updates</h3>
                                                            <div class="gdlr-core-block-item-title-divider" id="div_1dd7_47"></div>
                                                        </div>
                                                        <a class="gdlr-core-block-item-read-more" href="#" target="_self" id="a_1dd7_5">Read All News</a>
                                                    </div>
                                                    <div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
                                                            <div class="gdlr-core-item-list-inner gdlr-core-item-mglr">
                                                                <?php 
																	$user = $this->db->query('SELECT * from berita where prioritas_berita = "bukan"  AND kategori_berita="Berita" ORDER BY tanggal_berita desc limit 1');
																	$no = 1;
																	foreach($user->result() as $u){ 
																?>
																<div class="gdlr-core-blog-grid ">
                                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                        <a href="#">
                                                                            <img src="<?=   base_url( $u->foto_berita ) ?>" width="700" height="430" alt="" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="gdlr-core-blog-grid-content-wrap">
                                                                        <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                                <a href="#"><?= date('d F Y', strtotime($u->tanggal_berita ))?></a>
                                                                            </span>
                                                                            <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                                <a href="#" rel="tag">STAINIM</a>
                                                                                <span class="gdlr-core-sep">,</span>
                                                                                <a href="#" rel="tag"><?= $u->kategori_berita ?></a>
                                                                            </span>
                                                                        </div>
                                                                        <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_11">
                                                                            <a href="#" ><?= $u->judul_berita ?></a>
                                                                        </h3>
                                                                    </div>
                                                                </div>
                                                                <?php 
																	}
																?>
																
                                                            </div>
                                                        </div>
                                                        <div class="gdlr-core-item-list-wrap gdlr-core-column-30">
														
															<?php 
																	$user = $this->db->query('SELECT * from berita where prioritas_berita = "bukan"  AND kategori_berita="Berita" ORDER BY tanggal_berita desc limit 1,4');
																	$no = 1;
																	foreach($user->result() as $u){ 
															?>
                                                            <div class="gdlr-core-item-list gdlr-core-blog-widget gdlr-core-item-mglr clearfix gdlr-core-style-small">
                                                                <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                                    <a href="#">
                                                                        <img src="<?=   base_url( $u->foto_berita ) ?>" alt="" width="150" height="150" title="Student" />
                                                                    </a>
                                                                </div>
                                                                <div class="gdlr-core-blog-widget-content">
                                                                    <div class="gdlr-core-blog-info-wrapper gdlr-core-skin-divider">
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date">
                                                                            <a href="#"><?= date('d F Y', strtotime($u->tanggal_berita ))?></a>
                                                                        </span>
                                                                        <span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-tag">
                                                                           
                                                                            <a href="#" rel="tag"><?= $u->kategori_berita ?></a>
                                                                        </span>
                                                                    </div>
                                                                    <h3 class="gdlr-core-blog-title gdlr-core-skin-title" id="h3_1dd7_12">
                                                                        <a href="#" ><?= $u->judul_berita ?></a>
                                                                    </h3>
                                                                </div>
                                                            </div>
															<?php 
																	}
															?>
														 
														</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="gdlr-core-pbf-column gdlr-core-column-20" id="gdlr-core-column-8">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js " id="div_1dd7_45" data-sync-height="height-2">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js  gdlr-core-sync-height-content">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-widget">
													
													<div class="gdlr-core-pbf-element">
														<div class="gdlr-core-event-item gdlr-core-item-pdb" id="div_1dd7_94">
															<div class="gdlr-core-block-item-title-wrap  gdlr-core-left-align gdlr-core-item-mglr" id="div_1dd7_95">
																<div class="gdlr-core-block-item-title-inner clearfix">
																	<h3 class="gdlr-core-block-item-title" id="h3_1dd7_32">Even</h3>
																	<div class="gdlr-core-block-item-title-divider" id="div_1dd7_96"></div>
																</div>
															</div>
															<div class="gdlr-core-event-item-holder clearfix">
																<?php 
																	$user = $this->db->query('SELECT * from iven ORDER BY tgl_iven desc limit 3');
																	$no = 1;
																	foreach($user->result() as $u){ 
																?> 
																<div class="gdlr-core-event-item-list gdlr-core-style-widget gdlr-core-item-pdlr  clearfix" id="div_1dd7_98">
																	<span class="gdlr-core-event-item-info gdlr-core-type-start-date-month">
																		<span class="gdlr-core-date" ><?= date('d', strtotime($u->tgl_iven ))?></span>
																		<span class="gdlr-core-month"><?= date('M', strtotime($u->tgl_iven ))?></span>
																	</span>
																	<div class="gdlr-core-event-item-content-wrap">
																		<h3 class="gdlr-core-event-item-title">
																			<a href="#" ><?= $u->judul_iven ?></a>
																		</h3>
																		<div class="gdlr-core-event-item-info-wrap">
																			<span class="gdlr-core-event-item-info gdlr-core-type-time">
																				<span class="gdlr-core-head" >
																					<i class="icon_clock_alt" ></i>
																				</span>
																				<span class="gdlr-core-tail"><?= $u->jam_iven ?></span>
																			</span>
																			<span class="gdlr-core-event-item-info gdlr-core-type-location">
																				<span class="gdlr-core-head" >
																					<i class="icon_pin_alt" ></i>
																				</span>
																				<span class="gdlr-core-tail"><?= $u->lokasi_iven ?></span>
																			</span>
																		</div>
																	</div>
																</div>
																<?php 
																	}
																?> 
															</div>
														</div>
													</div>
													
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
								  
                            </div>
                        </div>
                    </div>
                    