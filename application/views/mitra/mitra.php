
                    <div class="gdlr-core-pbf-wrapper " id="div_1dd7_107">
                        <div class="gdlr-core-pbf-background-wrap" id="div_1dd7_108"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container-custom" id="div_1dd7_109">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-gallery-item gdlr-core-item-pdb clearfix  gdlr-core-gallery-item-style-grid" id="div_1dd7_110">
                                        <div class="gdlr-core-gallery-item-holder gdlr-core-js-2 clearfix" data-layout="fitrows">
                                            <?php 
												$user = $this->db->query('SELECT * from mitra');
												$no = 1;
												foreach($user->result() as $u){ 
												?> 
                                            <div class="gdlr-core-item-list gdlr-core-gallery-column  gdlr-core-column-12 gdlr-core-item-pdlr gdlr-core-item-mgb">
                                                <div class="gdlr-core-gallery-list gdlr-core-media-image"><img src="<?php echo base_url($u->foto_mitra)?>" alt=" " style="height : 80px" title="banner-<?= $no++ ?>" /></div>
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