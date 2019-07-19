


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
          <h2>Data  Lowongan<!--<small>sub title</small>--></h2>
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

          <?php foreach ($loker as $loker) {

           ?>

           <form action="<?php echo base_url()."backend/data_perusahaan/update_data_perusahaan"; ?> " class="form-horizontal form-label-left" novalidate method="POST" enctype="multipart/form-data">
        <input  type="hidden" name="id_loker" value="<?php echo $loker->id_loker; ?>">
            <span class="section"></span>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Perusahaan  <span class="required"></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nm_perusahaan" placeholder=" Nama Perusahaan" required="required" type="text" value="<?php echo $loker->nm_perusahaan; ?>">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Email">Email <span class="required" ></span>
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email" value="<?php echo $loker->email; ?>">
              </div>
            </div>



            <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select  name="id_kategori" class="select2_single form-control" tabindex="-1">
               <?php foreach ($kategori as $tp):?>
                                         <option value="<?php echo $tp->id_kategori; ?>" 
                                         <?php if ($tp->id_kategori==$loker->id_kategori): ?>
                                             <?php echo 'Selected' ?>
                                         <?php endif ?>>
                                         <?php echo $tp->Jenis_Kategori; ?></option>
                                        <?php endforeach;?>

           </select>
         </div>
       </div> 

       <div class="item form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lowongan<span class="required"></span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nama_pofesi" placeholder=" Nama" required="required" type="text" value="<?php echo $loker->nm_lowongan; ?>">
        </div>
      </div>



      <div class="form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select  name="id_lokasi" class="select2_single form-control" tabindex="-1">
               <?php foreach ($lokasi as $tp):?>
                                         <option value="<?php echo $tp->id_lokasi; ?>" 
                                         <?php if ($tp->id_lokasi==$loker->id_lokasi): ?>
                                             <?php echo 'Selected' ?>
                                         <?php endif ?>>
                                         <?php echo $tp->nama_lokasi; ?></option>
                                        <?php endforeach;?>

           </select>
         </div>
       </div> 
<div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Started <span class="required">  </span>
      </label>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="tgl" name="tgl" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo $loker->tgl ?>">
      </div>
    </div>
     <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Tanggal">Ended <span class="required">  </span>
      </label>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="tgl1" name="tgl1" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo $loker->tgl_akhir ?>">
      </div>
    </div>

     <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select  name="status" class="select2_single form-control" tabindex="-1">
                  <option><?php echo $loker->status ?></option>
                         <option value="Show">1. Show</option>
                         <option value="Hidden">2. Hidden</option> 
                        </select>
                </div>
              </div>
    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">  </span>
      </label>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="tel" id="telephone" name="tlp" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12" value="<?php echo $loker->tlp ?>">
      </div>
    </div>

    <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Deskripsi<span class="required"></span>
              </label>
              <div class="ckeditor col-md-8 col-sm-6 col-xs-12">
               <textarea id="deskripsi" name="Deskripsi">
                 <?php echo $loker->Deskripsi;?>
               </textarea>
                    <script>
                        CKEDITOR.replace( 'Deskripsi' );
                    </script>
              </div>
              </div>

    <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Foto<span class="required">  </span>
      </label>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="file" id="gambar" name="gambar" class="form-control col-md-7 col-xs-12">
      </div>
    </div> 



    <div class="ln_solid"></div>
    <div class="form-group">
      <div class="col-md-6 col-md-offset-3">
        <a href="<?php echo site_url('backend/data_perusahaan/tampil_data_perusahaan');?>" class="btn btn-primary m-t-15 waves-effect">Kembali</a>
        <button id="send" type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
    <?php } ?>

  </div>
</div>
</div>
</div>
</div>


