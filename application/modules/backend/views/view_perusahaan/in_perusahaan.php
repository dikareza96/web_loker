


  <!-- page content -->
  <div class="right_col" role="main">

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>
           Input Data
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
          


            <form action="<?php echo base_url()."backend/data_perusahaan/input_data_perusahaan"; ?> " class="form-horizontal form-label-left" novalidate method="POST" enctype="multipart/form-data">

              <span class="section"></span>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Perusahaan  <span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nama_perusahaan" placeholder=" Nama Perusahaan" required="required" type="text">
                </div>
              </div>
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Email">Email <span class="required" ></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Email">
                </div>
              </div>
                


                 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kategori</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select  name="kategori" class="select2_single form-control" tabindex="-1">
                          <?php 
						  foreach ($kategori as $row){ //$kategori  ini dari data form_input_data_perusahaan  pada controller
							echo"<option value='$row->id_kategori'>$row->Jenis_Kategori</option>";
						  }?> 
                         
                        </select>
                      </div>
                    </div> 

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lowongan<span class="required"></span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="nama" placeholder=" Nama" required="required" type="text">
                </div>
              </div>
              


            <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Lokasi</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="lokasi" class="select2_single form-control" tabindex="-1">
                          
                           <?php 
              foreach ($lokasi as $row){
              echo"<option value='$row->id_lokasi'>$row->nama_lokasi</option>";
              }?>

                          
                        </select>
                      </div>
                    </div>
            <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Started <span class="required">  </span>
      </label>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="tgl" name="tgl" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
     <div class="item form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tanggal">Ended <span class="required">  </span>
      </label>

      <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" id="tgl1" name="tgl1" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
      </div>
    </div>
      
            
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Telephone <span class="required">  </span>
              </label>
              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="tel" id="telephone" name="telephone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Deskripsi<span class="required"></span>
              </label>
              <div class="col-md-8 col-sm-6 col-xs-12">
               <textarea id="deskripsi" name="editor1">
                 
               </textarea>
                    <script>
                        CKEDITOR.replace( 'editor1' );
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
                <a href="<?php echo site_url('backend/data_perusahaan/tampil_data_perusahaan');?>" class="btn btn-default m-t-15 waves-effect">Kembali</a>
                <button id="send" type="submit" class="btn btn-success">Submit</button>
              </div>
</form>


            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Autocomplete -->
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/autocomplete/countries.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/autocomplete/jquery.autocomplete.js"></script>
  <!-- pace -->
  <script src="<?php echo base_url(); ?>assets/js/pace/pace.min.js"></script>
 
  <script type="text/javascript">
    $(function() {
      'use strict';
      var countriesArray = $.map(countries, function(value, key) {
        return {
          value: value,
          data: key
        };
      });
      // Initialize autocomplete with custom appendTo:
      $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray,
        appendTo: '#autocomplete-container'
      });
    });




    
  </script>
