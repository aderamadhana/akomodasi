
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('LaporanSupervisor')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p>
    </div>
<?php echo $this->session->flashdata('message')?>
<?php foreach($survei as $data){?>

<div class="mb-3">
    <a target="_blank" class="btn btn-info" href="<?php echo site_url('HasilSurveiSupervisor/print/'.$data->id_survei)?>"><i class="fa fa-print"> Cetak</i></a>
</div>
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
                    <input readonly type="text" value="<?php echo $data->provinsi?>" class="form-control" name="provinsi" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kabupaten/Kota</label>
                    <input readonly type="text" value="<?php echo $data->kabupatenKota?>" class="form-control" name="kabupatenKota" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kecamatan</label>
                    <input readonly type="text" value="<?php echo $data->kecamatan?>" class="form-control" name="kecamatan" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Keluarahan/Desa</label>
                    <input readonly type="text" value="<?php echo $data->kelurahan?>" class="form-control" name="kelurahan" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="position-relative form-group">
                    <label class="mt-4">Nama Komersial Usaha</label>
                    <input readonly type="text" value="<?php echo $data->namaKomersial?>" class="form-control" name="namaKomersial" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Jenis Akomodasi</label>
                <div class="custom-control custom-radio">
                    <input <?php if($data->jenisAkomodasi == 1) echo 'checked ' ?> readonly type="radio" id="jenisAkomodasi1" name="jenisAkomodasi" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi1">Bintang</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input <?php if($data->jenisAkomodasi == 2) echo 'checked ' ?> readonly type="radio" id="jenisAkomodasi2" name="jenisAkomodasi" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi2">Non Bintang</label>
                </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="position-relative form-group">
                <label class="mt-4">Kelas Akomodasi</label>
                <input readonly type="text" value="<?php echo $data->kelasAkomodasi?>" class="form-control" name="kelasAkomodasi" required>
                </div>
            </div>
            <div class="col-md-12">
                <div class="position-relative form-group">
                <label class="mt-4">Alamat</label>
                <textarea class="form-control" name="alamat" readonly required><?php echo $data->alamat?></textarea>
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->standarHariKerjaSuite?>" name="standarHariKerjaSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->superiorHariKerjaSuite?>" name="superiorHariKerjaSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->deluxeHariKerjaSuite?>" name="deluxeHariKerjaSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->standarHariLiburSuite?>" name="standarHariLiburSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->superiorHariLiburSuite?>" name="superiorHariLiburSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->deluxeHariLiburSuite?>" name="deluxeHariLiburSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->standarHariKerjaNonSuite?>" name="standarHariKerjaNonSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->superiorHariKerjaNonSuite?>" name="superiorHariKerjaNonSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->deluxeHariKerjaNonSuite?>" name="deluxeHariKerjaNonSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->standarHariLiburNonSuite?>" name="standarHariLiburNonSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->superiorHariLiburNonSuite?>" name="superiorHariLiburNonSuite">
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
                        <input type="number" readonly min=0 class="form-control" value="<?php echo $data->deluxeHariLiburNonSuite?>" name="deluxeHariLiburNonSuite">
                    </div>
                </div>
            </div>
        </div>
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

            ?>
            <tbody>
                <?php 
                $totaljumlahKamarTersedia = 0;
                $totalkamarDigunakanKemarin = 0;
                $totaldigunakanKemarin = 0;
                $totalcheckIn = 0;
                $totalcheckOut = 0;
                $totalkemarinAsing = 0;
                $totalkemarinIndonesia = 0;
                $totalmasukAsing = 0;
                $totalmasukIndonesia = 0;
                $totalkeluarAsing = 0;
                $totalkeluarIndonesia = 0;

                foreach($getDetailSurvei as $row){
                ?>
                <tr>
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                    <td style="vertical-align: middle; text-align:center"><?php echo $row->tanggal?><input style="font-size:10.5px; width:100px;" readonly type="hidden" class="form-control" value="<?php echo $row->tanggal?>" name="tanggal[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->jumlahKamarTersedia?>" name="jumlahKamarTersedia[]" ></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->kamarDigunakanKemarin?>" name="kamarDigunakanKemarin[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->digunakanKemarin?>" name="digunakanKemarin[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->checkIn?>" name="checkIn[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->checkOut?>" name="checkOut[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->kemarinAsing?>" name="kemarinAsing[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->kemarinIndonesia?>" name="kemarinIndonesia[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->masukAsing?>" name="masukAsing[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->masukIndonesia?>" name="masukIndonesia[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->keluarAsing?>" name="keluarAsing[]"></td>
                    <td><input readonly type="number" min=0 style="font-size:10.5px; width:60px;"  class="form-control" value="<?php echo $row->keluarIndonesia?>" name="keluarIndonesia[]"></td>
                </tr>
                <?php 
                $totaljumlahKamarTersedia += $row->jumlahKamarTersedia;
                $totalkamarDigunakanKemarin += $row->kamarDigunakanKemarin;
                $totaldigunakanKemarin += $row->digunakanKemarin;
                $totalcheckIn += $row->checkIn;
                $totalcheckOut += $row->checkOut;
                $totalkemarinAsing += $row->kemarinAsing;
                $totalkemarinIndonesia += $row->kemarinIndonesia;
                $totalmasukAsing += $row->masukAsing;
                $totalmasukIndonesia += $row->masukIndonesia;
                $totalkeluarAsing += $row->keluarAsing;
                $totalkeluarIndonesia += $row->keluarIndonesia;
                }?>
                <tr>
                    <th>Total</th>
                    <th><?php echo $totaljumlahKamarTersedia?></th>
                    <th><?php echo $totalkamarDigunakanKemarin?></th>
                    <th><?php echo $totaldigunakanKemarin?></th>
                    <th><?php echo $totalcheckIn?></th>
                    <th><?php echo $totalcheckOut?></th>
                    <th><?php echo $totalkemarinAsing?></th>
                    <th><?php echo $totalkemarinIndonesia?></th>
                    <th><?php echo $totalmasukAsing?></th>
                    <th><?php echo $totalmasukIndonesia?></th>
                    <th><?php echo $totalkeluarAsing?></th>
                    <th><?php echo $totalkeluarIndonesia?></th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title text-center font-size-lg text-capitalize font-weight-normal">
            <strong>3. PERHITUNGAN</strong>
        </div>
        
    </div>
    
    <div class="card-body">
        <table style="font-size: 10.5px; width: 100%; text-align: center" class="table table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th style="vertical-align: middle;" rowspan="2">MKT</th>
                    <th colspan="3">BANYAKNYA MALAM TAMU</th>
                    <th colspan="3">BANYAKNYA JUMLAH TAMU</th>
                    <th style="vertical-align: middle;" rowspan="2">TPK</th>
                    <th style="vertical-align: middle;" rowspan="2">TPTT</th>
                    <th style="vertical-align: middle;" rowspan="2">GPR</th>
                    <th colspan="3">RATA-RATA TAMU MENGINAP</th>
                    <th colspan="3">KOMPOSISI</th>
                    <th style="vertical-align: middle;" rowspan="2">JML TT HITTG</th>
                </tr>
                <tr>
                    <th>ASING</th>
                    <th>DOMESTIK</th>
                    <th>JUMLAH</th>
                    <th>ASING</th>
                    <th>DOMESTIK</th>
                    <th>JUMLAH</th>
                    <th>ASING</th>
                    <th>DOMESTIK</th>
                    <th>JUMLAH</th>
                    <th>ASING</th>
                    <th>DOMESTIK</th>
                    <th>JUMLAH</th>
                </tr>
            </thead>    
            <tbody>
                <!-- <th><?php echo $totaljumlahKamarTersedia?></th>
                    <th><?php echo $totalkamarDigunakanKemarin?></th>
                    <th><?php echo $totaldigunakanKemarin?></th>
                    <th><?php echo $totalcheckIn?></th>
                    <th><?php echo $totalcheckOut?></th>
                    <th><?php echo $totalkemarinAsing?></th>
                    <th><?php echo $totalkemarinIndonesia?></th>
                    <th><?php echo $totalmasukAsing?></th>
                    <th><?php echo $totalmasukIndonesia?></th>
                    <th><?php echo $totalkeluarAsing?></th>
                    <th><?php echo $totalkeluarIndonesia?></th> -->
                <?php 
                    $mkt            = $totaldigunakanKemarin + $totalcheckIn + $totalcheckOut;
                    $malamAsing     = $totalkemarinAsing + $totalmasukAsing + $totalkeluarAsing;
                    $malamDomestik  = $totalkemarinIndonesia + $totalmasukIndonesia + $totalkeluarIndonesia;
                    $totalMalam     = $malamAsing + $malamDomestik;
                    $tamuAsing      = $totalmasukAsing;
                    $tamuDomestik   = $totalmasukIndonesia;
                    $totalTamu      = $tamuAsing + $tamuDomestik;
                    $tpk            = ($mkt/$totaljumlahKamarTersedia)*100;
                    $tptt           = ($totalMalam/$totalkamarDigunakanKemarin)*100;
                    $gpr            = $totalMalam/$mkt;
                    $rLamaAsing     = $malamAsing / $totalmasukAsing;
                    $rLamaDomestik  = $malamDomestik / $totalmasukIndonesia;
                    $totalR         = (($totalkemarinAsing+$totalkemarinIndonesia+$totalmasukAsing+$totalmasukIndonesia)-$totalmasukAsing-$totalkeluarIndonesia)/($totalmasukAsing+$totalmasukIndonesia);
                    $komposisiAsing = ($totalmasukAsing/($totalmasukAsing+$totalmasukIndonesia))*100;
                    $komposisiDomestik = ($totalmasukIndonesia/($totalmasukAsing+$totalmasukIndonesia))*100;
                    $totalKomposisi = $komposisiAsing+$komposisiDomestik;
                ?>
                <tr>
                    <td><?php echo $mkt?></td>
                    <td><?php echo $malamAsing?></td>
                    <td><?php echo $malamDomestik?></td>
                    <td><?php echo $totalMalam?></td>
                    <td><?php echo $tamuAsing?></td>
                    <td><?php echo $tamuDomestik?></td>
                    <td><?php echo $totalTamu?></td>
                    <td><?php echo number_format((float)$tpk, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$tptt, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$gpr, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$rLamaAsing, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$rLamaDomestik, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$totalR, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$komposisiAsing, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$komposisiDomestik, 1, '.', '');?></td>
                    <td><?php echo number_format((float)$totalKomposisi, 1, '.', '');?></td>    
                    <td><?php if($totalkemarinAsing>$totaljumlahKamarTersedia){echo $totalkemarinAsing;}else{echo $totaljumlahKamarTersedia;}?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php }?>
<script>
    $( document ).ready(function() {
        
        $('#formTolak').hide();
        $('#formValidasi').hide();
});
    $('#validasi').on('click', function(e) {
        $('#formValidasi').show();
        $('#submitValidasi').show();
        $('#formTolak').hide();
    });
    $('#tolak').on('click', function(e) {
        $('#formValidasi').hide();
        $('#submitValidasi').hide();
        $('#formTolak').show();
    });
  </script>