
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('Survei')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p>
    </div>
<?php echo $this->session->flashdata('message')?>
<?php foreach($survei as $data){?>
<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title text-center font-size-lg text-capitalize font-weight-normal">
            <strong>PENGENALAN USAHA</strong>
        </div>
        
    </div>
    <div class="card-body">
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Provinsi</label>
                    <input disabled type="text" value="<?php echo $data->provinsi?>" class="form-control" name="provinsi" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kabupaten/Kota</label>
                    <input disabled type="text" value="<?php echo $data->kabupatenKota?>" class="form-control" name="kabupatenKota" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kecamatan</label>
                    <input disabled type="text" value="<?php echo $data->kecamatan?>" class="form-control" name="kecamatan" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Keluarahan/Desa</label>
                    <input disabled type="text" value="<?php echo $data->kelurahan?>" class="form-control" name="kelurahan" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="position-relative form-group">
                    <label class="mt-4">Nama Komersial Usaha</label>
                    <input disabled type="text" value="<?php echo $data->namaKomersial?>" class="form-control" name="namaKomersial" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Jenis Akomodasi</label>
                <div class="custom-control custom-radio">
                    <input <?php if($data->jenisAkomodasi == 1) echo 'checked ' ?> disabled type="radio" id="jenisAkomodasi1" name="jenisAkomodasi" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi1">Bintang</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input <?php if($data->jenisAkomodasi == 2) echo 'checked ' ?> disabled type="radio" id="jenisAkomodasi2" name="jenisAkomodasi" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi2">Non Bintang</label>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="position-relative form-group">
                <label class="mt-4">Kelas Akomodasi</label>
                <input disabled type="text" value="<?php echo $data->kelasAkomodasi?>" class="form-control" name="kelasAkomodasi" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="position-relative form-group">
                <label class="mt-4">Alamat</label>
                <textarea class="form-control" name="alamat" disabled required><?php echo $data->alamat?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title text-center font-size-lg text-capitalize font-weight-normal">
            <strong>1. HARGA TARIF KAMAR PER HARI</strong>
        </div>
        
    </div>
    
    <form action="<?php echo site_url('Survei/tambahTarif')?>" method="post"> 
    <div class="card-body">
        <label><strong>Suite</strong></label>
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Standard (Hari Kerja)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                        <input type="text" class="form-control" value="<?php echo $data->standarHariKerjaSuite?>" name="standarHariKerjaSuite">
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Superior (Hari Kerja)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->superiorHariKerjaSuite?>" name="superiorHariKerjaSuite">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Deluxe (Hari Kerja)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->deluxeHariKerjaSuite?>" name="deluxeHariKerjaSuite">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Standard (Hari Libur)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->standarHariLiburSuite?>" name="standarHariLiburSuite">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Superior (Hari Libur)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->superiorHariLiburSuite?>" name="superiorHariLiburSuite">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Deluxe (Hari Libur)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->deluxeHariLiburSuite?>" name="deluxeHariLiburSuite">
                    </div>
                </div>
            </div>
        </div>
        <label><strong>Non Suite</strong></label>
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Standard (Hari Kerja)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->standarHariKerjaNonSuite?>" name="standarHariKerjaNonSuite">
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Superior (Hari Kerja)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->superiorHariKerjaNonSuite?>" name="superiorHariKerjaNonSuite">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Deluxe (Hari Kerja)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->deluxeHariKerjaNonSuite?>" name="deluxeHariKerjaNonSuite">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Standard (Hari Libur)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->standarHariLiburNonSuite?>" name="standarHariLiburNonSuite">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Superior (Hari Libur)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->superiorHariLiburNonSuite?>" name="superiorHariLiburNonSuite">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Deluxe (Hari Libur)</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Rp</div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $data->deluxeHariLiburNonSuite?>" name="deluxeHariLiburNonSuite">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title text-center font-size-lg text-capitalize font-weight-normal">
            <strong>2. HARGA TARIF KAMAR, TEMPAT TIDUR DAN TAMU</strong>
        </div>
        
    </div>
    
    <form action="<?php echo site_url('Survei/tambahSurvei')?>" method="post"> 
    <div class="card-body contr">
        
        <div class="control-group after-add-more">
        <?php 
            $query = $this->db->get_where('detailtarifsurvei', array('id_survei' => $data->id_survei))->result();
            
            if(count($query) == 0){
                $d = [
                   'id_survei' => $data->id_survei  
                ];

                $this->load->view('petugas/survei/vPoin2', $d);
            }else{

                foreach($query as $db){
        ?>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Tanggal</label>
                        <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                        <input require type="date" class="form-control" value="<?php echo $db->tanggal?>" name="tanggal[]">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Jumlah kamar tersedia</label>
                        <input type="text" class="form-control" name="jumlahKamarTersedia[]" value="<?php echo $db->jumlahKamarTersedia?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Kamar digunakan kemarin</label>
                        <input type="text" class="form-control" name="kamarDigunakanKemarin[]" value="<?php echo $db->kamarDigunakanKemarin?>">
                    </div>
                </div>
            </div>
            <label><strong>Banyaknya Kamar</strong></label>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Digunakan kemarin</label>
                        <input type="text" class="form-control" name="digunakanKemarin[]" value="<?php echo $db->digunakanKemarin?>">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Check in</label>
                        <input type="text" class="form-control" name="checkIn[]" value="<?php echo $db->checkIn?>">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Check out</label>
                        <input type="text" class="form-control" name="checkOut[]" value="<?php echo $db->checkOut?>">
                    </div>
                </div>
            </div>

            <label><strong>Banyaknya Tamu Menginap</strong></label><br>
            
            <div class="form-row">
                <div class="col-md-4">
                    <label><strong>Kemarin</strong></label><br>
                    <div class="position-relative form-group">
                        <label>Asing</label>
                        <input type="text" class="form-control" name="kemarinAsing[]" value="<?php echo $db->kemarinAsing?>">
                    </div>
                    <div class="position-relative form-group">
                        <label>Indonesia</label>
                        <input type="text" class="form-control" name="kemarinIndonesia[]" value="<?php echo $db->kemarinIndonesia?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <label><strong>Masuk hari ini</strong></label><br>
                    <div class="position-relative form-group">
                        <label>Asing</label>
                        <input type="text" class="form-control" name="masukAsing[]" value="<?php echo $db->masukAsing?>">
                    </div>
                    <div class="position-relative form-group">
                        <label>Indonesia</label>
                        <input type="text" class="form-control" name="masukIndonesia[]" value="<?php echo $db->masukIndonesia?>">
                    </div>
                </div>
                <div class="col-md-4">
                    <label><strong>Keluar hari ini</strong></label><br>
                    <div class="position-relative form-group">
                        <label>Asing</label>
                        <input type="text" class="form-control" name="keluarAsing[]" value="<?php echo $db->keluarAsing?>">
                    </div>
                    <div class="position-relative form-group">
                        <label>Indonesia</label>
                        <input type="text" class="form-control" name="keluarIndonesia[]" value="<?php echo $db->keluarIndonesia?>">
                    </div>
                </div>
            </div>
            <hr>
            <?php }}?>
        
        </div>

        <button class="btn btn-secondary add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Tambah baris</button>
        
        <button class="btn btn-success" type="submit">
            <i class="glyphicon glyphicon-plus"></i> Simpan
        </button>
        <br><br>

        

        </form>
        <section id="selesai">
            <?php if($this->session->flashdata('selesai')){?>
                <?php echo $this->session->flashdata('selesai')?>
                <form action="<?php echo site_url('Survei/simpanSemua')?>" method="post">
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                    <input type="hidden" class="form-control" name="id_job_desc" value="<?php echo $data->id_job_desc?>">
                    <button class="btn btn-info" type="submit">
                        <i class="glyphicon glyphicon-plus"></i> Simpan semua survei
                    </button>
                </form>
            <?php }?>
        </section>
        
        <div class="copy hide" style="display:none">
            <div class="control-group rem"><br>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal[]" require>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label>Jumlah kamar tersedia</label>
                            <input type="text" class="form-control" name="jumlahKamarTersedia[]">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label>Kamar digunakan kemarin</label>
                            <input type="text" class="form-control" name="kamarDigunakanKemarin[]">
                        </div>
                    </div>
                </div>
                <label><strong>Banyaknya Kamar</strong></label>
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label>Digunakan kemarin</label>
                            <input type="text" class="form-control" name="digunakanKemarin[]">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label>Check in</label>
                            <input type="text" class="form-control" name="checkIn[]">
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            <label>Check out</label>
                            <input type="text" class="form-control" name="checkOut[]">
                        </div>
                    </div>
                </div>

                <label><strong>Banyaknya Tamu Menginap</strong></label><br>
                
                <div class="form-row">
                    <div class="col-md-4">
                        <label><strong>Kemarin</strong></label><br>
                        <div class="position-relative form-group">
                            <label>Asing</label>
                            <input type="text" class="form-control" name="kemarinAsing[]">
                        </div>
                        <div class="position-relative form-group">
                            <label>Indonesia</label>
                            <input type="text" class="form-control" name="kemarinIndonesia[]">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Masuk hari ini</strong></label><br>
                        <div class="position-relative form-group">
                            <label>Asing</label>
                            <input type="text" class="form-control" name="masukAsing[]">
                        </div>
                        <div class="position-relative form-group">
                            <label>Indonesia</label>
                            <input type="text" class="form-control" name="masukIndonesia[]">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label><strong>Keluar hari ini</strong></label><br>
                        <div class="position-relative form-group">
                            <label>Asing</label>
                            <input type="text" class="form-control" name="keluarAsing[]">
                        </div>
                        <div class="position-relative form-group">
                            <label>Indonesia</label>
                            <input type="text" class="form-control" name="keluarIndonesia[]">
                        </div>
                    </div>
                </div>    
                <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                <hr>
            </div>
        </div>
    </div>
</div>
<?php }?>

<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){ 
          var html = $(".copy").html();
          $(".after-add-more").append(html);
      });

      
      // saat tombol remove dklik control group akan dihapus 
      $("body").on("click",".remove",function(){ 
          $(this).parents(".rem").remove();
      });
    });
</script>