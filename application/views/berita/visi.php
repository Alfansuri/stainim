
            <div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align">
                 
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr"> 
                        <h1 class="kingster-page-title">Visi Misi STAINIM</h1></div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-sidebar-wrapper ">
                        <div class="gdlr-core-pbf-sidebar-container gdlr-core-line-height-0 clearfix gdlr-core-js gdlr-core-container">
                            
							<div class="gdlr-core-pbf-sidebar-content  gdlr-core-column-40 gdlr-core-pbf-sidebar-padding gdlr-core-line-height gdlr-core-column-extend-left" style="padding: 60px 10px 30px 0px;">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-pbf-sidebar-content-inner">
                                    <div class="gdlr-core-pbf-element">
                                        <div class="gdlr-core-blog-item gdlr-core-item-pdb clearfix  gdlr-core-style-blog-full-with-frame" style="padding-bottom: 40px ;">
                                            
											<?php 
												$user = $this->db->query('SELECT * from atribut where kategori_atribut="visi" ');
											
												foreach($user->result() as $u){ 
											?>
											<div class="gdlr-core-blog-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                                <div class="gdlr-core-item-list gdlr-core-blog-full  gdlr-core-item-mglr gdlr-core-style-left">
                                                    <div class="gdlr-core-blog-thumbnail gdlr-core-media-image  gdlr-core-opacity-on-hover gdlr-core-zoom-on-hover">
                                                        <a href="#"><img src="<?php echo   base_url('gambar/logo.png') ?>" width="900" height="500"  alt="" /> 
                                                        </a>
                                                    </div>
													
													
                                                    <div class="gdlr-core-blog-full-frame gdlr-core-skin-e-background">
                                                        
                                                        <div class="gdlr-core-blog-content"><?=  $u->isi_atribut  ?>...
                                                            <div class="clear"></div> 
														</div>
                                                    </div>
                                                </div>
                                            </div>
												<?php }?>
											
											 
											
											
                                            <!--<div class="gdlr-core-pagination  gdlr-core-style-round gdlr-core-left-align gdlr-core-item-pdlr"><span aria-current='page' class='page-numbers current'>1</span> <a class='page-numbers' href='page/2/index.html'>2</a> <a class='page-numbers' href='page/3/index.html'>3</a>
                                                <a class="next page-numbers" href="page/2/index.html"></a>
                                            </div>-->
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                            <div class="gdlr-core-pbf-sidebar-right gdlr-core-column-extend-right  kingster-sidebar-area gdlr-core-column-20 gdlr-core-pbf-sidebar-padding  gdlr-core-line-height">
                                <div class="gdlr-core-pbf-background-wrap" style="background-color: #f7f7f7 ;"></div>
                                <div class="gdlr-core-sidebar-item gdlr-core-item-pdlr">
                                    <div id="text-5" class="widget widget_text kingster-widget">
                                        <h3 class="kingster-widget-title">Share</h3><span class="clear"></span>
                                        <div class="textwidget"> 
											<a class="gdlr-core-price-table-button gdlr-core-button" href="#" target="_self" style="font-size:20px"><i class="fa fa-instagram" ></i></a>
											<a class="gdlr-core-price-table-button gdlr-core-button" href="#" target="_self" style="font-size:20px"><i class="fa fa-twitter" ></i></a>
											<a class="gdlr-core-price-table-button gdlr-core-button" href="#" target="_self" style="font-size:20px"><i class="fa fa-facebook" ></i></a>
											<a class="gdlr-core-price-table-button gdlr-core-button" href="#" target="_self" style="font-size:20px"><i class="fa fa-whatsapp" ></i></a>
										</div>
										 
                                    </div>
                                    <div id="gdlr-core-recent-post-widget-1" class="widget widget_gdlr-core-recent-post-widget kingster-widget">
                                        <h3 class="kingster-widget-title">Berita Terbaru</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-post-widget-wrap gdlr-core-style-1">
                                            <?php 
												$user1 = $this->db->query('SELECT * from berita ORDER BY rand() limit 4 ');
											
												foreach($user1->result() as $u1){ 
											?>
											
                                            <div class="gdlr-core-recent-post-widget clearfix">
                                                <div class="gdlr-core-recent-post-widget-thumbnail gdlr-core-media-image"><img src="<?=   base_url( $u1->foto_berita ) ?>" alt="" width="150" height="150" title="Student" /></div>
                                                <div class="gdlr-core-recent-post-widget-content">
                                                    <div class="gdlr-core-recent-post-widget-title"><a href="#"><?= $u1->judul_berita ?></a></div>
                                                    <div class="gdlr-core-recent-post-widget-info"><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-date"><a href="#"><?= date('d F Y', strtotime($u1->tanggal_berita ))?></a></span><span class="gdlr-core-blog-info gdlr-core-blog-info-font gdlr-core-skin-caption gdlr-core-blog-info-author"> <a href="#" title="Posts by John Smith" rel="author"><?= $u1->kategori_berita ?></a></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }?>
											
                                        </div>
                                    </div>
                                     
                                    <div id="gdlr-core-recent-portfolio-widget-1" class="widget widget_gdlr-core-recent-portfolio-widget kingster-widget">
                                        <h3 class="kingster-widget-title">GALERY</h3><span class="clear"></span>
                                        <div class="gdlr-core-recent-portfolio-widget-wrap clearfix">
                                              <?php 
												$user1 = $this->db->query('SELECT * from galeri ORDER BY rand() limit 6');
											
												foreach($user1->result() as $u1){ 
											?>
                                            <div class="gdlr-core-recent-portfolio-widget gdlr-core-media-image">
                                                <a href="#"><img src="<?=   base_url( $u1->foto_galeri ) ?>" alt="" width="150" height="150" title="rawpixel-577480-unsplash" /><span class="gdlr-core-image-overlay "><i class="gdlr-core-image-overlay-icon gdlr-core-size-15 icon_link_alt"  ></i></span></a>
                                            </div> 
											<?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
