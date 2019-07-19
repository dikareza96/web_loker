
<!-- page content -->
<div class="right_col" role="main">

  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>
         Edit Data
       </h3>
     </div>

 
  </div>
  <div class="clearfix"></div>

  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Data  Kategori<!--<small>sub title</small>--></h2>
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

                <?php foreach ($kategori as $kategori) {  //foreach ($kategori) ini di ambil dari mana?? di ambil dari data['kategori']
                
                ?>

                <form action="<?php echo base_url()."backend/data_kategori/update_data_kategori" ?>" class="form-horizontal form-label-left" novalidate method="post">

                  <span class="section"></span>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Kategori Perusahaan <span class="required"></span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      
                      <input id="Jenis_Kategori" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="Jenis_Kategori"  required="required" type="text" value="<?php echo $kategori->Jenis_Kategori; ?>">
                      <input id="id_kategori" name="id_kategori" placeholder="Jenis Kategori" required="required" type="hidden" value="<?php echo $kategori->id_kategori; ?>"> <!--sesuai kontroler, karena di situ kontroler ada dua maka data yang di buat di edit  harus dua meski di hidden-->
                      
                    </div>
                  </div>     
                </div> <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                   <a href="<?php echo site_url('backend/data_kategori/tampil_data_kategori');?>" class="btn btn-default m-t-15 waves-effect">Kembali</a>
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

    