
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('Survei')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p>
    </div>
<?php echo $this->session->flashdata('message')?>

<?php foreach($survei as $data){
if($data->alasanPenolakan != null){
?>
<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title text-center font-size-lg text-capitalize font-weight-normal">
            <strong>Alasan Penolakan</strong>
        </div>
        
    </div>
    <div class="card-body">
        <span><strong><?php echo $data->alasanPenolakan ?></strong></span>
        <p>Silahkan melakukan input ulang!</p>
    </div>
</div>
<?php }?>
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
            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Periode Pengisian</label>
                <input disabled type="text" value="<?php echo date("F Y", strtotime($data->periode));?>" class="form-control" name="periode" required>
                </div>
            </div>
            <div class="col-md-8">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->standarHariKerjaSuite?>" name="standarHariKerjaSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->superiorHariKerjaSuite?>" name="superiorHariKerjaSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->deluxeHariKerjaSuite?>" name="deluxeHariKerjaSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->standarHariLiburSuite?>" name="standarHariLiburSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->superiorHariLiburSuite?>" name="superiorHariLiburSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->deluxeHariLiburSuite?>" name="deluxeHariLiburSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->standarHariKerjaNonSuite?>" name="standarHariKerjaNonSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->superiorHariKerjaNonSuite?>" name="superiorHariKerjaNonSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->deluxeHariKerjaNonSuite?>" name="deluxeHariKerjaNonSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->standarHariLiburNonSuite?>" name="standarHariLiburNonSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->superiorHariLiburNonSuite?>" name="superiorHariLiburNonSuite">
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
                        <input type="number" min=0 style="font-size:10.5px;"  class="form-control" value="<?php echo $data->deluxeHariLiburNonSuite?>" name="deluxeHariLiburNonSuite">
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
    
    
    <div class="card-body">
        <table style="font-size: 10.5px; width: 100%;" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th style="width:105px; vertical-align: middle; text-align:center" rowspan="3">Tanggal</th>
                <th style="vertical-align: middle; text-align:center" rowspan="3">Jumlah Kamar Tersedia</th>
                <th style="vertical-align: middle; text-align:center" rowspan="3">Kapasitas Tempat Tidur</th>
                <th style="vertical-align: middle; text-align:center" colspan="3">Banyaknya Kamar</th>
                <th style="vertical-align: middle; text-align:center" colspan="6">Banyaknya Tamu Menginap</th>
            </tr>
            <tr>
                <th style="vertical-align: middle; text-align:center" rowspan="2">Digunakan kemarin</th>
                <th style="vertical-align: middle; text-align:center" rowspan="2">Check in</th>
                <th style="vertical-align: middle; text-align:center" rowspan="2">Check out</th>
                <th style="vertical-align: middle; text-align:center" colspan="2">Kemarin</th>
                <th style="vertical-align: middle; text-align:center" colspan="2">Masuk Hari ini</th>
                <th style="vertical-align: middle; text-align:center" colspan="2">Keluar Hari ini</th>
            </tr>
            <tr>
                <th style="vertical-align: middle; text-align:center">Asing</th>
                <th style="vertical-align: middle; text-align:center">Indonesia</th>
                <th style="vertical-align: middle; text-align:center">Asing</th>
                <th style="vertical-align: middle; text-align:center">Indonesia</th>
                <th style="vertical-align: middle; text-align:center">Asing</th>
                <th style="vertical-align: middle; text-align:center">Indonesia</th>
            </tr>
            </thead>
            <?php 
                $getDetailSurvei = $this->db->select('*')->from('detailtarifsurvei')->where('id_survei', $data->id_survei)->get()->result();

                if($getDetailSurvei == null){
            ?>
            <tbody>
                <?php
                $getPeriode = strtotime($data->periode);
                $periodePlusMonth = date("Y-m", strtotime("+1 month", $getPeriode));
                
                $array = array();
                $period = new DatePeriod(
                    new DateTime($data->periode),
                    new DateInterval('P1D'),
                    new DateTime($periodePlusMonth)
                );
                $i = 0; 
                foreach ($period as $key => $value) {
                    $i++;
                    $tanggal = $value->format('Y-m-d');
                ?>
                <form action="<?php echo site_url('Survei/tambahSurvei')?>" method="post"> 
                <tr>
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                    <td style="vertical-align: middle; text-align:center"><?php echo $tanggal?><input style="font-size:10.5px; width:100px;" readonly type="hidden" class="form-control" value="<?php echo $tanggal?>" name="tanggal[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="jumlahKamarTersedia[]" ></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="kamarDigunakanKemarin[]"></td>
                    <?php if($i == 1){?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="digunakanKemarin[]"></td>
                    <?php }else {?>
                    <td><input readonly type="hidden" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="0" name="digunakanKemarin[]"></td>
                    <?php }?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="checkIn[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="checkOut[]"></td>
                    <?php if($i == 1){?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="kemarinAsing[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="kemarinIndonesia[]"></td>
                    <?php }else {?>
                    <td><input readonly type="hidden" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="0" name="kemarinAsing[]"></td>
                    <td><input readonly type="hidden" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="0" name="kemarinIndonesia[]"></td>
                    <?php }?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="masukAsing[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="masukIndonesia[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="keluarAsing[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" name="keluarIndonesia[]"></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>

            <?php }else{?>

            <tbody>
                <form action="<?php echo site_url('Survei/tambahSurvei')?>" method="post"> 
                <?php $i = 0; foreach($getDetailSurvei as $row){
                    $i++;
                ?>
                <tr>
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                    <td style="vertical-align: middle; text-align:center"><?php echo $row->tanggal?><input style="font-size:10.5px; width:100px;" readonly type="hidden" class="form-control" value="<?php echo $row->tanggal?>" name="tanggal[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->jumlahKamarTersedia?>" name="jumlahKamarTersedia[]" ></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->kamarDigunakanKemarin?>" name="kamarDigunakanKemarin[]"></td>
                    <?php if($i == 1){?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->digunakanKemarin?>" name="digunakanKemarin[]"></td>
                    <?php }else {?>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $digunakanKemarin?>" name="digunakanKemarin[]"></td>
                    <?php }?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->checkIn?>" name="checkIn[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->checkOut?>" name="checkOut[]"></td>
                    <?php if($i == 1){?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->kemarinAsing?>" name="kemarinAsing[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->kemarinIndonesia?>" name="kemarinIndonesia[]"></td>
                    <?php }else {?>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $kemarinAsing?>" name="kemarinAsing[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $kemarinIndonesia?>" name="kemarinIndonesia[]"></td>
                    <?php }?>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->masukAsing?>" name="masukAsing[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->masukIndonesia?>" name="masukIndonesia[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->keluarAsing?>" name="keluarAsing[]"></td>
                    <td><input type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->keluarIndonesia?>" name="keluarIndonesia[]"></td>
                </tr>
                <?php 
                    $digunakanKemarin = 0;
                    $kemarinAsing = 0;
                    $kemarinIndonesia = 0;
                    $digunakanKemarin += $row->checkIn;
                    $kemarinAsing += $row->masukAsing;
                    $kemarinIndonesia += $row->masukIndonesia;
                }?>
            </tbody>
            <?php }?>
        </table>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        <section id="selesai">
            <?php if($this->session->flashdata('selesai')){?>
                <?php echo $this->session->flashdata('selesai')?>
                <form action="<?php echo site_url('Survei/simpanSemua')?>" method="post">
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                    <input type="hidden" class="form-control" name="id_job_desc" value="<?php echo $data->id_job_desc?>">
                    <div style="display: hidden">
                    </div>
                    <?php $i = 0; foreach($getDetailSurvei as $row){
                    $i++;
                    if($i != 1){
                ?>
                    <input style="font-size:10.5px; width:100px;" readonly type="hidden" class="form-control" value="<?php echo $row->tanggal?>" name="tanggal[]">
                    <input readonly type="hidden" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $digunakanKemarin?>" name="digunakanKemarin[]">
                    
                    <input readonly type="hidden" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $kemarinAsing?>" name="kemarinAsing[]">
                    <input readonly type="hidden" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $kemarinIndonesia?>" name="kemarinIndonesia[]">
                
                
                <?php }
                    $digunakanKemarin = 0;
                    $kemarinAsing = 0;
                    $kemarinIndonesia = 0;
                    $digunakanKemarin += $row->checkIn;
                    $kemarinAsing += $row->masukAsing;
                    $kemarinIndonesia += $row->masukIndonesia;
                }?>
                    <button class="btn btn-info" type="submit">
                        <i class="glyphicon glyphicon-plus"></i> Simpan semua survei
                    </button>
                </form>
            <?php }?>
        </section>
    </div>
</div>
<?php }?>