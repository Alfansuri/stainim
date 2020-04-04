
            <div class="kingster-page-title-wrap  kingster-style-medium kingster-left-align">
                 
                <div class="kingster-page-title-container kingster-container">
                    <div class="kingster-page-title-content kingster-item-pdlr"> 
                        <h1 class="kingster-page-title">Staf STAINIM</h1></div>
                </div>
            </div>
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper ">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #f5f5f5 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-portfolio-item gdlr-core-item-pdb clearfix  gdlr-core-portfolio-item-style-grid" style="padding-bottom: 10px ;">

                                        <div class="filter light-filter clearfix gdlr-core-filterer-wrap gdlr-core-js  gdlr-core-item-pdlr gdlr-core-style-text gdlr-core-center-align">
                                            <ul>
                                                <li><a href="#" class="active" data-filter="*">All</a></li>
												<?php 
												$user = $this->db->query('SELECT DISTINCT jabatan_staf from staf'); 
												foreach($user->result() as $u){ 
												?>
                                                <li><a href="#" data-filter=".<?=  $u->jabatan_staf	 ?>" ><?=  $u->jabatan_staf	 ?></a></li> 
												<?php } ?>
                                            </ul>
                                        </div>   

                                        <div class="gdlr-core-portfolio-item-holder gdlr-core-js-2 filter-container clearfix" data-layout="fitrows">

											<?php 
												$user = $this->db->query('SELECT * from staf'); 
												foreach($user->result() as $u){ 
											?>

                                            <div class="gdlr-core-item-list <?=  $u->jabatan_staf?> gdlr-core-item-pdlr gdlr-core-column-15 ">
                                                <div class="gdlr-core-portfolio-grid  gdlr-core-left-align gdlr-core-style-with-frame gdlr-core-js" data-sync-height="portfolio-item-1">
                                                    <div class="gdlr-core-portfolio-grid-frame gdlr-core-skin-e-background" style="opacity: 1 ;"></div>
                                                    <div class="gdlr-core-portfolio-thumbnail gdlr-core-media-image  gdlr-core-style-title-icon">
                                                        <div class="gdlr-core-portfolio-thumbnail-image-wrap  gdlr-core-zoom-on-hover" style="max-height:290px">
															<img src="<?php echo base_url($u->foto_staf)?>" width="700" height="450"  alt="" />
															<span class="gdlr-core-image-overlay  gdlr-core-portfolio-overlay gdlr-core-image-overlay-center-icon gdlr-core-js">
																<span class="gdlr-core-image-overlay-content" >
																	<span class="gdlr-core-portfolio-title gdlr-core-title-font " style="font-size: 18px ;font-weight: 400 ;letter-spacing: 1px ;text-transform: none ;"  >
																		<a href="#" ><?=  $u->nama_staf	 ?></a>
																	</span>
																	<span class="gdlr-core-portfolio-icon-wrap">
																		<a class="gdlr-core-lightgallery gdlr-core-js "  href="<?php echo base_url($u->foto_staf)?>" data-lightbox-group="gdlr-core-img-group-1">
																			<i class="gdlr-core-portfolio-icon arrow_expand" ></i>
																		</a>
																	</span>
																</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="gdlr-core-portfolio-content-wrap gdlr-core-skin-divider">
                                                        <h3 class="gdlr-core-portfolio-title gdlr-core-skin-title" style="font-size: 21px ;font-weight: 600 ;letter-spacing: 0px ;text-transform: none ;">
															<a class="gdlr-core-lightgallery gdlr-core-js "  href="<?php echo base_url($u->foto_staf)?>" data-lightbox-group="gdlr-core-img-group-1"><?=  $u->nama_staf	 ?></a>
														</h3>
														<span class="gdlr-core-portfolio-info gdlr-core-portfolio-info-tag gdlr-core-info-font gdlr-core-skin-caption"> 
															<span class="gdlr-core-sep"><?=  $u->jabatan_staf		 ?></span>
														</span>
                                                    </div>
                                                </div>
                                            </div>
											
											<?php } ?>

                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
