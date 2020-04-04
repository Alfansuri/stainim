
            <div class="kingster-page-wrapper" id="kingster-page-wrapper">
                <div class="gdlr-core-page-builder-body">
                    <div class="gdlr-core-pbf-wrapper " style="padding: 0px 0px 0px 0px;">
                        <div class="gdlr-core-pbf-background-wrap" style="background-color: #192f59 ;"></div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-pbf-wrapper-full-no-space">
                                <div class="gdlr-core-pbf-element">
                                    <div class="gdlr-core-revolution-slider-item gdlr-core-item-pdlr gdlr-core-item-pdb " style="padding-bottom: 0px ;">

                                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
                                                <ul>
												<?php 
												$user = $this->db->query('SELECT * from banner');
												$no = 1;
												foreach($user->result() as $u){ 
												?>
                                                    <li data-index="rs-<?php echo $no++ ?>" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="<?php echo base_url('bahan/upload/slider-1-2-100x50.jpg')?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> <img src="<?=   base_url('gambar/banner/'.$u->foto_banner ) ?>" alt="" title="slider-1-2" width="1800" height="1119" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                    </li> 
												<?php } ?>
                                                </ul>
                                                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
            


	