
<!--// Main Section \\-->
            <div class="wm-main-section wm-popular-coursesgrid-full">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="wm-fancy-title-three wm-align-center">
                                <div class="wm-fancy-title-inner">
                                    <!-- <small class="wm-color-three">see our</small> -->
                                    <span class="wm-color-three">Lowongan Terbaru</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="wm-courses wm-courses-grid">
                                <ul class="row">
                                    <?php foreach ($user as $row) {?>
                                    <li class="col-md-3">

                                        <figure><a href=""><img style="width: 175px;height: 220px;" src="<?=base_url()?>assets/uploads/<?=$row->gambar;?>" alt=""></a> <span><?php echo date("d, M Y", strtotime($row->tgl));?></span> <figcaption> <a href="<?php echo base_url("daftar-lowongan/detail/$row->slug")?>" class="wm-coursemodren-btn wm-color-three">Lebih lanjut</a> </figcaption> </figure>
                                        <div class="wm-courses-grid-text">
                                            <h5><a title="<?php echo $row->nm_lowongan?>" href="<?php echo base_url("daftar-lowongan/detail/$row->slug/")?>" class="wm-color-three"><?php
                $limited_word = word_limiter($row->nm_lowongan,4);
                echo $limited_word;?></a></h5>
                                            <ul class="courses-options">
                                                <li><i class="wmicon-social7"></i> <a ><?php echo $row->total_view?></a></li>
                                                <!--<li><i class="wmicon-social6"></i> <a href="#">10</a></li>-->
                                                <li><i class="wmicon-black"></i> <a ><?php echo $row->Jenis_Kategori ?></a></li>
                                                <li><i class="wm-color wmicon-pin"></i> <a ><?php echo $row->nama_lokasi ?></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

