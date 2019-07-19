     <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>
                   Edit Data
                </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
           <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Data  Lokasi<!--<small>sub title</small>--></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
           
                <?php  foreach ($lokasi as $lokasi) {
                
                ?>
                  <form action="<?php echo base_url()."backend/data_lokasi/update_data_lokasi"; ?>" class="form-horizontal form-label-left" novalidate method="post">

                    <span class="section"></span>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lokasi<span class="required"></span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        
                        <input id="nama_lokasi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nama_lokasi" placeholder="Nama Lokasi" required="required" type="text" value="<?php echo $lokasi->nama_lokasi; ?>">
                        <input id="id_lokasi" name="id_lokasi" placeholder="Nama Lokasi" required="required" type="hidden" value="<?php echo $lokasi->id_lokasi; ?>"> <!--sesuai kontroler, karena di situ kontroler ada dua maka data yang di buat di edit  harus dua meski di hidden-->
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                       <a href="<?php echo site_url('backend/data_lokasi/tampil_data_lokasi');?>" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                        <button id="send" type="submit" class="btn btn-success">Simpan</button>
                      </div>
                    </div>
                  </form>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>

     