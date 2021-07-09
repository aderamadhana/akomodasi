
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('Survei')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p>
    </div>
<?php echo $this->session->flashdata('message')?>
<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK I: PENGENALAN TEMPAT</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok1')?>" method="post">
        <div class="row mb-3">
            
        <?php foreach($survei as $data){
            $nama_petugas = $data->nama_petugas;
            $tanggal_survei = $data->tanggal_survei;
            $id_user = $data->id_user;
        ?>
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">
                    <label class="mt-4">1. Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" value="<?php echo $data->provinsi?>">
                    <input type="hidden" class="form-control" name="id_blok1" value="<?php echo $data->id_blok1?>">
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
                    <input type="hidden" class="form-control" name="id_job_desc" value="<?php echo $data->id_job_desc?>">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">2. Kabupaten/Kota *</label>
                    <input type="text" class="form-control" name="kabupatenkota" value="<?php echo $data->kabupatenkota?>" required>
                </div>
                
                <div class="form-group">
                    <label class="mt-4">3. Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" value="<?php echo $data->kecamatan?>">
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">
                    <label class="mt-4">4. Keluarahan/Desa</label>
                    <input type="text" class="form-control" name="kelurahan" value="<?php echo $data->kelurahan?>">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">5. Nomor Identitas Perusahaan/Usaha (nomor SBR)</label>
                    <input type="text" class="form-control" name="nomorSBR" value="<?php echo $data->nomor_sbr?>">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">6. ID Infrastruktur Wilkerstat</label>
                    <input type="text" class="form-control" name="idInfrastruktur" value="<?php echo $data->id_infrastruktur_wilkerstat?>">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">
                    <label class="mt-4">7. a. Nama Komersial Usaha</label>
                    <input type="text" class="form-control" disabled name="namaKemersialUsaha" value="<?php echo $data->nama_komersial_usaha?>">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">7. b. Nama Perusahaan/Usaha</label>
                    <input type="text" class="form-control" disabled name="namaPerusahaan" value="<?php echo $data->nama_perusahaan?>">
                </div>

                <div class="form-group">
                    <label class="mt-4">8. Alamat Lokasi Perusahaan</label><br>
                    <label class="mt-4">Jalan</label>
                    <input type="text" class="form-control" name="jalan" value="<?php echo $data->jalan?>">
                </div>

                <div class="form-group">
                    <label class="mt-4">Kode POS</label>
                    <input type="text" class="form-control" name="kodePOS" value="<?php echo $data->kode_pos?>">
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-lg-6"> 
                <div class="form-group">
                    <label class="mt-4">No Telepon</label>
                    <input type="text" class="form-control" name="noTelp" value="<?php echo $data->no_telepon?>">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $data->email?>">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">Twitter</label>
                    <input type="text" class="form-control" name="twitter" value="<?php echo $data->twitter?>">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">Facebook</label>
                    <input type="text" class="form-control" name="facebook" value="<?php echo $data->facebook?>">
                </div>

                <div class="form-group">
                    <label class="mt-4">Website</label>
                    <input type="text" class="form-control" name="website" value="<?php echo $data->website?>">
                </div>
            </div>
        </div>
        <section id="blok1">
        <div class="form-group">
            <label class="mt-4">Nama Pengusaha/penanggung jawab</label>
            <input type="text" class="form-control" name="namaPengusaha" value="<?php echo $data->nama_pengusaha?>">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        
        </section>
        
        <?php echo $this->session->flashdata('blok1')?>
    </div>
    </form>
    
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK II: KETERANGAN PETUGAS</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok2')?>" method="post" enctype="multipart/form-data">
        
        <table class="table table-bordered">
            <tr>
                <th>Uraian</th>
                <th>Pengawas</th>
            </tr>
            <tr>
                <th>Nama</th>
                <td>
                    <?php echo $nama_petugas?>
                </td>
            </tr>
            <tr>
                <th>Tanggal Pelaksanaan</th>
                <td>
                    <?php echo $tanggal_survei?>
                </td>
            </tr>
            <tr>
                <th>Tanda Tangan</th>
                <td>
                    <div class="form-group">
                        <input type="file" class="form-control" name="ttdPengawas" required>
                        <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>" required>
                        <?php if(!empty($data->ttd_petugas)){?>
                        <img src="<?php echo $data->ttd_petugas ?>">
                        <?php }?>
                    </div>
                </td>
            </tr>
        </table>  
        
        <section id="blok2">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </section>

        <?php echo $this->session->flashdata('blok2')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.A: KETERANGAN UMUM PERUSAHAAN/USAHA</strong>
        </div>
        
    </div>
    <div class="card-body">
    <label><b>1. Klasifikasi usaha akomodasi ini</b></label> 
        <form action="<?php echo site_url('Survei/updateBlok3a')?>" method="post"> 
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>" required>
                    <input type="radio" id="klasifikasiUsaha1" name="klasifikasiUsaha" value="1" <?php if($data->klasifikasiUsaha == 1) echo 'checked '?>class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha1">Bintang 5</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha2" name="klasifikasiUsaha" value="2" <?php if($data->klasifikasiUsaha == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha2">Bintang 4</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha3" name="klasifikasiUsaha" value="3" <?php if($data->klasifikasiUsaha == 3) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha3">Bintang 3</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha4" name="klasifikasiUsaha" value="4" <?php if($data->klasifikasiUsaha == 4) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha4">Bintang 2</label>
                </div>
                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha5" name="klasifikasiUsaha" value="5" <?php if($data->klasifikasiUsaha == 5) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha5">Bintang 1</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha6" name="klasifikasiUsaha" value="6" <?php if($data->klasifikasiUsaha == 6) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha6">Melati</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha7" name="klasifikasiUsaha" value="7" <?php if($data->klasifikasiUsaha == 7) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha7">Pondok Wisata (Home stay)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha8" name="klasifikasiUsaha" value="8" <?php if($data->klasifikasiUsaha == 8) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha8">Penginapan Remaja (Youth hastel)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha9" name="klasifikasiUsaha" value="9" <?php if($data->klasifikasiUsaha == 9) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha9">Villa</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha10" name="klasifikasiUsaha" value="10" <?php if($data->klasifikasiUsaha == 10) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha10">Lainnya</label>
                </div>
            </div>
        </div>

        <label><b>2. Jenis izin operasional yang dimiliki usaha ini</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisIzin1" name="jenisIzin" value="1" <?php if($data->jenisIzin == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin1">Tanda Daftar Usaha Pariwisata</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="jenisIzin2" name="jenisIzin" value="2" <?php if($data->jenisIzin == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin2">Izin Tetap Usaha Pariwisata</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisIzin3" name="jenisIzin" value="3" <?php if($data->jenisIzin == 3) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin3">Izin Lainnya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisIzin4" name="jenisIzin" value="4" <?php if($data->jenisIzin == 4) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin4">Tidak Mempunyai Izin</label>
                </div>
            </div>
        </div>

        <label><b>3. Apakah usaha ini sudah memperoleh sertifikasi usaha pariwisata dari Lembaga Sertifikasi Usaha (LSU)</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="sertifikasi1" name="sertifikasi" value="1" <?php if($data->sertifikasi == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasi1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="sertifikasi2" name="sertifikasi" value="2" <?php if($data->sertifikasi == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasi2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>4. a. Apakah usaha akomodasi ini menjadi anggota asosiasi? </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="anggotaAsosiasi1" name="anggotaAsosiasi" value="1" <?php if($data->anggotaAsosiasi == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="anggotaAsosiasi1">Ya</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="anggotaAsosiasi2" name="anggotaAsosiasi" value="2" <?php if($data->anggotaAsosiasi == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="anggotaAsosiasi2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>Jika "YA" (R.4.a = 1), apa nama asosiasi yang diikuti? </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="asosiasi1" name="asosiasi" value="1" <?php if($data->asosiasi == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="asosiasi1">PHRI</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="asosiasi2" name="asosiasi" value="2" <?php if($data->asosiasi == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="asosiasi2">Lainnya</label>
                </div>
            </div>
        </div>

        <label><b>Sarana promosi yang digunakan (isian boleh lebih dari satu) </b></label>
        <?php 
            $saranaPromosi=explode(",",$data->saranaPromosi);
        ?>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="1" class="custom-control-input" id="saranaPromosi1" <?php echo (in_array("1",$saranaPromosi)) ? 'checked ="checked "' : ''?>;>
                    <label class="custom-control-label" for="saranaPromosi1">TV/Radio</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="2" class="custom-control-input" id="saranaPromosi2" <?php echo (in_array("2",$saranaPromosi)) ? 'checked ="checked "' : ''?>>
                    <label class="custom-control-label" for="saranaPromosi2">Online/Internet</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="3" class="custom-control-input" id="saranaPromosi3" <?php echo (in_array("3",$saranaPromosi)) ? 'checked ="checked "' : ''?>>
                    <label class="custom-control-label" for="saranaPromosi3">Surat kabar/majalah</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="4" class="custom-control-input" id="saranaPromosi4" <?php echo (in_array("4",$saranaPromosi)) ? 'checked ="checked "' : ''?>>
                    <label class="custom-control-label" for="saranaPromosi4">Spanduk/Billboard</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="5" class="custom-control-input" id="saranaPromosi5" <?php echo (in_array("5",$saranaPromosi)) ? 'checked ="checked "' : ''?>>
                    <label class="custom-control-label" for="saranaPromosi5">Leaflet/Brosur</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="6" class="custom-control-input" id="saranaPromosi6" <?php echo (in_array("6",$saranaPromosi)) ? 'checked ="checked "' : ''?>>
                    <label class="custom-control-label" for="saranaPromosi6">Lainnya</label>
                </div>
            </div>
        </div>
        <section id="blok3a">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        <?php echo $this->session->flashdata('blok3a')?>
        </form>
    </div> 
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: KETERANGAN KHUSUS PEUSAHAAN/USAHA</strong>
        </div>
        
    </div>
    <div class="card-body">
        <label><b>1. a. Apakah usaha akomodasi ini mempunyai sertifikasi syariah?</b></label>
        
        <form action="<?php echo site_url('Survei/updateBlok3b')?>" method="post">
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>" required>
                    <input type="radio" id="sertifikasiSyariah1" name="sertifikasiSyariah" value="1" <?php if($data->sertifikasiSyariah == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasiSyariah1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="sertifikasiSyariah2" name="sertifikasiSyariah" value="2" <?php if($data->sertifikasiSyariah == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasiSyariah2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>1. b. Jika "Ya" (R.1.a = 1), sertifikasi syariah yang dimiliki: </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisSertifikasiSyariah1" name="jenisSertifikasiSyariah" value="1" <?php if($data->jenisSertifikasiSyariah == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="jenisSertifikasiSyariah1">Hilal 1</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisSertifikasiSyariah2" name="jenisSertifikasiSyariah" value="2" <?php if($data->jenisSertifikasiSyariah == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="jenisSertifikasiSyariah2">Hilal 2</label>
                </div>
            </div>
        </div>

        <label><b>2. a. Status pengelolaan usaha penyediaan akomodasi ini: </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha1" name="statusPengelolaanUsaha" value="1" <?php if($data->statusPengelolaanUsaha == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha1">Chain Internasional</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha2" name="statusPengelolaanUsaha" value="2" <?php if($data->statusPengelolaanUsaha == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha2">chain Lokal</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha3" name="statusPengelolaanUsaha" value="3" <?php if($data->statusPengelolaanUsaha == 3) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha3">Waralaba</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha4" name="statusPengelolaanUsaha" value="4" <?php if($data->statusPengelolaanUsaha == 4) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha4">Sendiri</label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-12">
                <div class="form-group">     
                    <label>2. b. Jika isian pertanyaan no 2.a adalah kode 1, 2, atau 3, tuliskan nama kelompok (group) pengelolaan usaha akomodasi tersebut</label>
                    <input type="text" name="namaGroupPengelolaanUsaha" value="<?php echo $data->namaGroupPengelolaanUsaha?>" class="form-control">           
                </div>
            </div>
        </div>

        <label><b>3. a. Apakah usaha ini menerima pemesanan kamar atau melakukan penjualan secara online/melalui internet?</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ifOnline1" name="ifOnline" value="1" <?php if($data->ifOnline == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="ifOnline1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ifOnline2" name="ifOnline" value="2" <?php if($data->ifOnline == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="ifOnline2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>3. b. Jika "Ya" (R.3.a = 1), maka: </b></label><br>
        <label><b>3. b. I. Sarana apa saja yang digunakan untuk melakukan penjualan secara online </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="saranaPenjualan1" name="saranaPenjualan" value="1" <?php if($data->saranaPenjualan == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="saranaPenjualan1">Website</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="saranaPenjualan2" name="saranaPenjualan" value="2" <?php if($data->saranaPenjualan == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="saranaPenjualan2">Media Sosial</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="saranaPenjualan3" name="saranaPenjualan" value="4" <?php if($data->saranaPenjualan == 4) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="saranaPenjualan3">Layanan penjualan pihak ketiga</label>
                </div>
            </div>
        </div>
        
        <label><b>3. b. II. Cara pembayaran: </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran1" name="caraPembayaran" value="1" <?php if($data->caraPembayaran == 1) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran1">Tunai</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran2" name="caraPembayaran" value="2" <?php if($data->caraPembayaran == 2) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran2">Kartu kredit tau kredit online</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran3" name="caraPembayaran" value="3" <?php if($data->caraPembayaran == 3) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran3">Kartu debit atau transfer bank online</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran4" name="caraPembayaran" value="4" <?php if($data->caraPembayaran == 4) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran4">Uang elektronik</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran5" name="caraPembayaran" value="5" <?php if($data->caraPembayaran == 5) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran5">Voucher</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran6" name="caraPembayaran" value="6" <?php if($data->caraPembayaran == 6) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran6">Poin dari program berhadiah</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran7" name="caraPembayaran" value="7" <?php if($data->caraPembayaran == 7) echo 'checked '?> class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran7">Lainnya</label>
                </div>
            </div>
        </div>
        
        <label><b>3. c. Berapa persen kamar yang terjual melalui internet/online selama tahun 2019? ..% </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">     
                    <label>i. Agoda</label>
                    <input type="number" min=0 name="agoda" value="<?php echo $data->agoda?>" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>ii. Booking.com</label>
                    <input type="number" min=0  name="bookingcom" value="<?php echo $data->bookingcom?>" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>iii. Traveloka</label>
                    <input type="number" min=0 name="traveloka" value="<?php echo $data->traveloka?>" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>iv. OYO</label>
                    <input type="number" min=0 name="oyo" value="<?php echo $data->oyo?>" class="form-control">           
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">     
                    <label>v. AirBnB</label>
                    <input type="number" min=0 name="airbnb" value="<?php echo $data->airbnb?>" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>vi. Airy</label>
                    <input type="number" min=0 name="airy" value="<?php echo $data->airy?>" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>vi. RedDoorz</label>
                    <input type="number" min=0 name="reddoorz" value="<?php echo $data->reddoorz?>" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>vi. Laiinyya</label>
                    <input type="number" min=0 name="kamarLainnya" value="<?php echo $data->kamarLainnya?>" class="form-control">           
                </div>
            </div>
        </div>
        <section id="blok3b">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </section>

        <?php echo $this->session->flashdata('blok3b')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: KETERANGAN KHUSUS PEUSAHAAN/USAHA (LANJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok3BLanjutan1')?>" method="post">
        <label><b>4. Banyaknya kamar, tempat tidur yang tersedia, kapasitas tamu hotel, dan harga kamar setelah pajak per malam pada saat pencacahan </b></label>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>1. Standar</strong></label><br>
                        <label>Banyaknya</label>
                        <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>" required>
                        <input type="number" min=0 class="form-control" name="banyakKamarStandar" value="<?php echo $data->banyakKamarStandar?>">
                    </div>
                    <div class="form-group">
                        <label>Banyaknya tempat tidur</label>
                        <input type="number" min=0 class="form-control" name="banyakTempatTidurStandar" value="<?php echo $data->banyakTempatTidurStandar?>">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas tamu hotel per kamar</label>
                        <input type="number" min=0 class="form-control" name="kapasitasStandar" value="<?php echo $data->kapasitasStandar?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSingleUmumStandar" value="<?php echo $data->hargaSingleUmumStandar?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoubleUmumStandar" value="<?php echo $data->hargaDoubleUmumStandar?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Pemerintah(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSinglePemerintahStandar" value="<?php echo $data->hargaSinglePemerintahStandar?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga Pemerintah(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoublePemerintahStandar" value="<?php echo $data->hargaDoublePemerintahStandar?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>2. Superior</strong></label><br>
                        <label>Banyaknya</label>
                        <input type="number" min=0 class="form-control" name="banyakKamarSuperior" value="<?php echo $data->banyakKamarSuperior?>">
                    </div>
                    <div class="form-group">
                        <label>Banyaknya tempat tidur</label>
                        <input type="number" min=0 class="form-control" name="banyakTempatTidurSuperior" value="<?php echo $data->banyakTempatTidurSuperior?>">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas tamu hotel per kamar</label>
                        <input type="number" min=0 class="form-control" name="kapasitasSuperior" value="<?php echo $data->kapasitasSuperior?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSingleUmumSuperior" value="<?php echo $data->hargaSingleUmumSuperior?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoubleUmumSuperior" value="<?php echo $data->hargaDoubleUmumSuperior?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Pemerintah(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSinglePemerintahSuperior" value="<?php echo $data->hargaSinglePemerintahSuperior?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga Pemerintah(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoublePemerintahSuperior" value="<?php echo $data->hargaDoublePemerintahSuperior?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>3. Deluxe</strong></label><br>
                        <label>Banyaknya</label>
                        <input type="number" min=0 class="form-control" name="banyakKamarDeluxe" value="<?php echo $data->banyakKamarDeluxe?>">
                    </div>
                    <div class="form-group">
                        <label>Banyaknya tempat tidur</label>
                        <input type="number" min=0 class="form-control" name="banyakTempatTidurDouble" value="<?php echo $data->banyakTempatTidurDouble?>">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas tamu hotel per kamar</label>
                        <input type="number" min=0 class="form-control" name="kapasitasDeluxe" value="<?php echo $data->kapasitasDeluxe?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSingleUmumDeluxe" value="<?php echo $data->hargaSingleUmumDeluxe?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoubleUmumDeluxe" value="<?php echo $data->hargaDoubleUmumDeluxe?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Pemerintah(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSinglePemerintahDeluxe" value="<?php echo $data->hargaSinglePemerintahDeluxe?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga Pemerintah(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoublePemerintahDeluxe" value="<?php echo $data->hargaDoublePemerintahDeluxe?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>4. Junior Suite</strong></label><br>
                        <label>Banyaknya</label>
                        <input type="number" min=0 class="form-control" name="banyakKamarJunior" value="<?php echo $data->banyakKamarJunior?>">
                    </div>
                    <div class="form-group">
                        <label>Banyaknya tempat tidur</label>
                        <input type="number" min=0 class="form-control" name="banyakTempatTidurJunior" value="<?php echo $data->banyakTempatTidurJunior?>">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas tamu hotel per kamar</label>
                        <input type="number" min=0 class="form-control" name="kapasitasJunior" value="<?php echo $data->kapasitasJunior?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSingleUmumJunior" value="<?php echo $data->hargaSingleUmumJunior?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoubleUmumJunior" value="<?php echo $data->hargaDoubleUmumJunior?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Pemerintah(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSinglePemerintahJunior" value="<?php echo $data->hargaSinglePemerintahJunior?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga Pemerintah(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoublePemerintahJunior" value="<?php echo $data->hargaDoublePemerintahJunior?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>5. Suite</strong></label><br>
                        <label>Banyaknya</label>
                        <input type="number" min=0 class="form-control" name="banyakKamarSuite" value="<?php echo $data->banyakKamarSuite?>">
                    </div>
                    <div class="form-group">
                        <label>Banyaknya tempat tidur</label>
                        <input type="number" min=0 class="form-control" name="banyakTempatTidurSuite" value="<?php echo $data->banyakTempatTidurSuite?>">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas tamu hotel per kamar</label>
                        <input type="number" min=0 class="form-control" name="kapasitasSuite" value="<?php echo $data->kapasitasSuite?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSingleUmumSuite" value="<?php echo $data->hargaSingleUmumSuite?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoubleUmumSuite" value="<?php echo $data->hargaDoubleUmumSuite?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Pemerintah(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSinglePemerintahSuite" value="<?php echo $data->hargaSinglePemerintahSuite?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga Pemerintah(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoublePemerintahSuite" value="<?php echo $data->hargaDoublePemerintahSuite?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>6. President Suite</strong></label><br>
                        <label>Banyaknya</label>
                        <input type="number" min=0 class="form-control" name="banyakKamarPresident" value="<?php echo $data->banyakKamarPresident?>">
                    </div>
                    <div class="form-group">
                        <label>Banyaknya tempat tidur</label>
                        <input type="number" min=0 class="form-control" name="banyakTempatTidurPresident" value="<?php echo $data->banyakTempatTidurPresident?>">
                    </div>
                    <div class="form-group">
                        <label>Kapasitas tamu hotel per kamar</label>
                        <input type="number" min=0 class="form-control" name="kapasitasPresident" value="<?php echo $data->kapasitasPresident?>">
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSingleUmumPresident" value="<?php echo $data->hargaSingleUmumPresident?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Umum(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoubleUmumPresident" value="<?php echo $data->hargaDoubleUmumPresident?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Harga Pemerintah(Single Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaSinglePemerintahPresident" value="<?php echo $data->hargaSinglePemerintahPresident?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Harga Pemerintah(Double Occupanies)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaDoublePemerintahPresident" value="<?php echo $data->hargaDoublePemerintahPresident?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label><b>5. a. Apakah tersedia ruang pertemuan?</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ruangPertemuan1" name="ruangPertemuan" value="1" class="custom-control-input" <?php if($data->ruangPertemuan == 1) echo 'selected'; ?>>
                    <label class="custom-control-label" for="ruangPertemuan1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ruangPertemuan2" name="ruangPertemuan" value="2" class="custom-control-input" <?php if($data->ruangPertemuan == 2) echo 'selected'; ?>>
                    <label class="custom-control-label" for="ruangPertemuan2">Tidak</label>
                </div>
            </div>
        </div>
        <label><b>5. b. Nama, tarif, luas, dan kapasitas masing-masing ruang rapat</b></label>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>1. Nama ruang rapat</strong></label><br>
                        <label>Public rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumRapat1" value="<?php echo $data->hargaUmumRapat1?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Government rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahRapat1" value="<?php echo $data->hargaPemerintahRapat1?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Luas</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">m2</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahRapat1" value="<?php echo $data->hargaPemerintahRapat1?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>U-Shape</label>
                        <input type="number" min=0 class="form-control" name="kapasitasUshape1" value="<?php echo $data->kapasitasUshape1?>">
                    </div>
                    <div class="form-group">
                        <label>Class room</label>
                        <input type="number" min=0 class="form-control" name="kapasitasClassRoom1" value="<?php echo $data->kapasitasClassRoom1?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Round table</label>
                        <input type="number" min=0 class="form-control" name="kapasitasRoundTable1" value="<?php echo $data->kapasitasRoundTable1?>">
                    </div>
                    <div class="form-group">
                        <label>Theatre</label>
                        <input type="number" min=0 class="form-control" name="kapasitasTheatre1" value="<?php echo $data->kapasitasTheatre1?>">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>2. Nama ruang rapat</strong></label><br>
                        <label>Public rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumRapat2" value="<?php echo $data->hargaUmumRapat2?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Government rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahRapat2" value="<?php echo $data->hargaPemerintahRapat2?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Luas</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">m2</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="luasRuangRapat2" value="<?php echo $data->luasRuangRapat2?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>U-Shape</label>
                        <input type="number" min=0 class="form-control" name="kapasitasUshape2" value="<?php echo $data->kapasitasUshape2?>">
                    </div>
                    <div class="form-group">
                        <label>Class room</label>
                        <input type="number" min=0 class="form-control" name="kapasitasClassRoom2" value="<?php echo $data->kapasitasClassRoom2?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Round table</label>
                        <input type="number" min=0 class="form-control" name="kapasitasRoundTable2" value="<?php echo $data->kapasitasRoundTable2?>">
                    </div>
                    <div class="form-group">
                        <label>Theatre</label>
                        <input type="number" min=0 class="form-control" name="kapasitasTheatre2" value="<?php echo $data->kapasitasTheatre2?>">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>3. Nama ruang rapat</strong></label><br>
                        <label>Public rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumRapat3" value="<?php echo $data->hargaUmumRapat3?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Government rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahRapat3" value="<?php echo $data->hargaPemerintahRapat3?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Luas</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">m2</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahRapat3" value="<?php echo $data->hargaPemerintahRapat3?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>U-Shape</label>
                        <input type="number" min=0 class="form-control" name="kapasitasUshape3" value="<?php echo $data->kapasitasUshape3?>">
                    </div>
                    <div class="form-group">
                        <label>Class room</label>
                        <input type="number" min=0 class="form-control" name="kapasitasClassRoom3" value="<?php echo $data->kapasitasClassRoom3?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Round table</label>
                        <input type="number" min=0 class="form-control" name="kapasitasRoundTable3" value="<?php echo $data->kapasitasRoundTable3?>">
                    </div>
                    <div class="form-group">
                        <label>Theatre</label>
                        <input type="number" min=0 class="form-control" name="kapasitasTheatre3" value="<?php echo $data->kapasitasTheatre3?>">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>4. Nama ruang rapat</strong></label><br>
                        <label>Public rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumRapat4" value="<?php echo $data->hargaUmumRapat4?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Government rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahRapat4" value="<?php echo $data->hargaPemerintahRapat4?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Luas</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">m2</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="luasRuangRapat4" value="<?php echo $data->luasRuangRapat4?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>U-Shape</label>
                        <input type="number" min=0 class="form-control" name="kapasitasUshape4" value="<?php echo $data->kapasitasUshape4?>">
                    </div>
                    <div class="form-group">
                        <label>Class room</label>
                        <input type="number" min=0 class="form-control" name="kapasitasClassRoom4" value="<?php echo $data->kapasitasClassRoom4?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Round table</label>
                        <input type="number" min=0 class="form-control" name="kapasitasRoundTable4" value="<?php echo $data->kapasitasRoundTable4?>">
                    </div>
                    <div class="form-group">
                        <label>Theatre</label>
                        <input type="number" min=0 class="form-control" name="kapasitasTheatre4" value="<?php echo $data->kapasitasTheatre4?>">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>5. Nama ruang rapat</strong></label><br>
                        <label>Public rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumRapat5" value="<?php echo $data->hargaUmumRapat5?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Government rate</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahRapat5" value="<?php echo $data->hargaPemerintahRapat5?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Luas</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">m2</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="luasRuangRapat5" value="<?php echo $data->luasRuangRapat5?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>U-Shape</label>
                        <input type="number" min=0 class="form-control" name="kapasitasUshape5" value="<?php echo $data->kapasitasUshape5?>">
                    </div>
                    <div class="form-group">
                        <label>Class room</label>
                        <input type="number" min=0 class="form-control" name="kapasitasClassRoom5" value="<?php echo $data->kapasitasClassRoom5?>">
                    </div>
                    
                    <div class="form-group">
                        <label>Round table</label>
                        <input type="number" min=0 class="form-control" name="kapasitasRoundTable5" value="<?php echo $data->kapasitasRoundTable5?>">
                    </div>
                    <div class="form-group">
                        <label>Theatre</label>
                        <input type="number" min=0 class="form-control" name="kapasitasTheatre5" value="<?php echo $data->kapasitasTheatre5?>">
                    </div>
                </div>
            </div>
        </div>
        <label><b>5. c. Harga Paket per orang per pax(pada tahun 2020)</b></label>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>1. Pertemuan/Meeting</strong></label><br>
                        <label><strong>a. Fullboard Single Occupancy (1 kamar isi 1 orang per pax)</strong></label><br>
                        <label>Umum (Public rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumFullboardSingle" value="<?php echo $data->hargaUmumFullboardSingle?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pemerintah (Government rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahFullboardSingle" value="<?php echo $data->hargaPemerintahFullboardSingle?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>b. Fullboard Double Occupancy (1 kamar isi 1 orang per pax)</strong></label><br>
                        <label>Umum (Public rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumFullboardDouble" value="<?php echo $data->hargaUmumFullboardDouble?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pemerintah (Government rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahFullboardDouble" value="<?php echo $data->hargaPemerintahFullboardDouble?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>c. Fullday</strong></label><br>
                        <label>Umum (Public rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumFullday" value="<?php echo $data->hargaUmumFullday?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pemerintah (Government rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahFullday" value="<?php echo $data->hargaPemerintahFullday?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>d. Halfday</strong></label><br>
                        <label>Umum (Public rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumHalfday" value="<?php echo $data->hargaUmumHalfday?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pemerintah (Government rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahHalfday" value="<?php echo $data->hargaPemerintahHalfday?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>2. Makan per orang per pax</strong></label><br>
                        <label>Umum (Public rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumMakanperOrang" value="<?php echo $data->hargaUmumMakanperOrang?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pemerintah (Government rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahMakanperOrang" value="<?php echo $data->hargaPemerintahMakanperOrang?>">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>3. Coffee Break per orang per pax</strong></label><br>
                        <label>Umum (Public rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaUmumCoffeeperOrang" value="<?php echo $data->hargaUmumCoffeeperOrang?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pemerintah (Government rate)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input type="number" min=0 class="form-control" name="hargaPemerintahCoffeeperOrang" value="<?php echo $data->hargaPemerintahCoffeeperOrang?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section id="blok3blanjutan1">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </section>

        <?php echo $this->session->flashdata('blok3blanjutan1')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class=" card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: KETERANGAN KHUSUS PERUSAHAAN/USAHA (LANJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok3BLanjutan2')?>" method="post">
        <label><b>6. Fasilitas hotel</b></label>
        <div class="row mb-3">
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>a. Portable Screen</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>" required>
                            <input type="radio" id="portableScreen1" name="portableScreen" value="1" class="custom-control-input" <?php if($data->portableScreen == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="portableScreen1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="portableScreen2" name="portableScreen" value="2" class="custom-control-input" <?php if($data->portableScreen == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="portableScreen2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaPortableScreen" value="<?php echo $data->hargaPortableScreen?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>b. Projector</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="projector1" name="projector" value="1" class="custom-control-input" <?php if($data->projector == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="projector1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="projector2" name="projector" value="2" class="custom-control-input" <?php if($data->projector == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="projector2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaProjector" value="<?php echo $data->hargaProjector?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>c. Wifi Internet Access</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="wifi1" name="wifi" value="1" class="custom-control-input" <?php if($data->wifi == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="wifi1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="wifi2" name="wifi" value="2" class="custom-control-input" <?php if($data->wifi == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="wifi2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaWifi" value="<?php echo $data->hargaWifi?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>d. Parkir</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="parkir1" name="parkir" value="1" class="custom-control-input" <?php if($data->parkir == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="parkir1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="parkir2" name="parkir" value="2" class="custom-control-input" <?php if($data->parkir == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="parkir2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaParkir" value="<?php echo $data->hargaParkir?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>e. Flipchart</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="flipchart1" name="flipchart" value="1" class="custom-control-input" <?php if($data->flipchart == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="flipchart1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="flipchart2" name="flipchart" value="2" class="custom-control-input" <?php if($data->flipchart == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="flipchart2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaFlipChart" value="<?php echo $data->hargaFlipChart?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>f. Sound System</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="soundSystem1" name="soundSystem" value="1" class="custom-control-input" <?php if($data->soundSystem == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="soundSystem1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="soundSystem2" name="soundSystem" value="2" class="custom-control-input" <?php if($data->soundSystem == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="soundSystem2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaSoundSystem" value="<?php echo $data->hargaSoundSystem?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>g. Buku Catatan dan Pensil</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="bukuCatatan1" name="bukuCatatan" value="1" class="custom-control-input" <?php if($data->bukuCatatan == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="bukuCatatan1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="bukuCatatan2" name="bukuCatatan" value="2" class="custom-control-input" <?php if($data->bukuCatatan == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="bukuCatatan2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaBukuCatatan" value="<?php echo $data->hargaBukuCatatan?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>h. Executiver/VIP Room</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="executiver1" name="executiver" value="1" class="custom-control-input" <?php if($data->executiver == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="executiver1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="executiver2" name="executiver" value="2" class="custom-control-input" <?php if($data->executiver == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="executiver2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaExecutiver" value="<?php echo $data->hargaExecutiver?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>i. Pick Up Service</strong></label>
                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="pickUp1" name="pickUp" value="1" class="custom-control-input" <?php if($data->pickUp == 1) echo 'checked '?>>
                            <label class="custom-control-label" for="pickUp1">Ada</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input type="radio" id="pickUp2" name="pickUp" value="2" class="custom-control-input" <?php if($data->pickUp == 2) echo 'checked '?>>
                            <label class="custom-control-label" for="pickUp2">Tidak Ada</label>
                        </div>
                        </br>
                        <div class="form-group">
                            <label>Harga per satuan</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" min=0 class="form-control" name="hargaPickUp" value="<?php echo $data->hargaPickUp?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section id="blok3blanjutan2">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok3blanjutan2')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK IV: TENAGA KERJA DAN BALAS JASA SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok4')?>" method="post">
        <label><b>1. Banyaknya pekerja/karyawan menurut status pekerja, jenjang pendidikan yang ditamatkan dan jenis kelamin</b></label>
        <div class="row mb-3">
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>a. < SLTP</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiSLTP">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanSLTP">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiSLTP">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanSLTP">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiSLTP">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanSLTP">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiSLTP">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanSLTP?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanSLTP">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>b. SMK Kejuruan Pariwisata</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiSMK">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanSMK">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiSMK">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanSMK">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiSMK">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanSMK">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiSMK">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanSMK?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanSMK">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>c. SMA Lainnya</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiSMA">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanSMA">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiSMA">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanSMA">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiSMA">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanSMA">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiSMA">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanSMA?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanSMA">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>d. DI/DII/DIII kejuruan pariwisata</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiDIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanDIPariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiDIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanDIPariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiDIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanDIPariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiDIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanDIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanDIPariwisata">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>e. DI/DII/DII lainnya</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiDILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanDILainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiDILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanDILainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiDILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanDILainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiDILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanDILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanDILainnya">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>f. DIV/SI kejuruan pariwisata</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiSIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanSIPariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiSIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanSIPariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiSIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanSIPariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiSIPariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanSIPariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanSIPariwisata">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>g. DIV/SI Lainnya</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiSILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanSILainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiSILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanSILainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiSILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanSILainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiSILainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanSILainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanSILainnya">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>h. S2/S3 kejuruan pariwisata</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiS2Pariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanS2Pariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiS2Pariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanS2Pariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiS2Pariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanS2Pariwisata">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiS2Pariwisata">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanS2Pariwisata?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanS2Pariwisata">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>i. S2/S3 lainnya</strong></label><br>
                    
                    <label><strong>Pekerja Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapLakiLakiS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapLakiLakiS2Lainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTetapPerempuanS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTetapPerempuanS2Lainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Tetap</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapLakiLakiS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapLakiLakiS2Lainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakTetapPerempuanS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakTetapPerempuanS2Lainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Tidak Dibayar</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarLakiLakiS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarLakiLakiS2Lainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaTidakDibayarPerempuanS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaTidakDibayarPerempuanS2Lainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Magang</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangLakiLakiS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangLakiLakiS2Lainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahPekerjaMagangPerempuanS2Lainnya?>" type="number" min=0 class="form-control" name="jumlahPekerjaMagangPerempuanS2Lainnya">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <label><b>2. Banyaknya pekerja/karyawan menurut jenis pekerjaan dan jenis kelamin</b></label>
        <div class="row mb-3">
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>a. Direktur/General Manager</strong></label><br>
                    
                    <label><strong>WNI</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNILakiLakiGManager?>" type="number" min=0 class="form-control" name="jumlahWNILakiLakiGManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNIPerempuanGManager?>" type="number" min=0 class="form-control" name="jumlahWNIPerempuanGManager">
                        </div>
                    </div>

                    <label><strong>WNA</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNALakiLakiGManager?>" type="number" min=0 class="form-control" name="jumlahWNALakiLakiGManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNAPerempuanGManager?>" type="number" min=0 class="form-control" name="jumlahWNAPerempuanGManager">
                        </div>
                    </div>

                    <label><strong>Pekerja Bersertifikasi Kompetensi</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiLakiLakiGManager?>" type="number" min=0 class="form-control" name="jumlahSertifikasiLakiLakiGManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiPerempuanGManager?>" type="number" min=0 class="form-control" name="jumlahSertifikasiPerempuanGManager">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>b. Manager</strong></label><br>
                    
                    <label><strong>WNI</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNILakiLakiSLTPManager?>" type="number" min=0 class="form-control" name="jumlahWNILakiLakiSLTPManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNIPerempuanManager?>" type="number" min=0 class="form-control" name="jumlahWNIPerempuanManager">
                        </div>
                    </div>

                    <label><strong>WNA</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNALakiLakiManager?>" type="number" min=0 class="form-control" name="jumlahWNALakiLakiManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNAPerempuanManager?>" type="number" min=0 class="form-control" name="jumlahWNAPerempuanManager">
                        </div>
                    </div>

                    <label><strong>Pekerja Bersertifikasi Kompetensi</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiLakiLakiManager?>" type="number" min=0 class="form-control" name="jumlahSertifikasiLakiLakiManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiPerempuanManager?>" type="number" min=0 class="form-control" name="jumlahSertifikasiPerempuanManager">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>c. Asisten Manager</strong></label><br>
                    
                    <label><strong>WNI</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNILakiLakiAManager?>" type="number" min=0 class="form-control" name="jumlahWNILakiLakiAManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNIPerempuanAManager?>" type="number" min=0 class="form-control" name="jumlahWNIPerempuanAManager">
                        </div>
                    </div>

                    <label><strong>WNA</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNALakiLakiAManager?>" type="number" min=0 class="form-control" name="jumlahWNALakiLakiAManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNAPerempuanAManager?>" type="number" min=0 class="form-control" name="jumlahWNAPerempuanAManager">
                        </div>
                    </div>

                    <label><strong>Pekerja Bersertifikasi Kompetensi</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiLakiLakiAManager?>" type="number" min=0 class="form-control" name="jumlahSertifikasiLakiLakiAManager">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiPerempuanAManager?>" type="number" min=0 class="form-control" name="jumlahSertifikasiPerempuanAManager">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>d. Penyelia (Supervisor)</strong></label><br>
                    
                    <label><strong>WNI</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNILakiLakiSupervisor?>" type="number" min=0 class="form-control" name="jumlahWNILakiLakiSupervisor">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNIPerempuanSupervisor?>" type="number" min=0 class="form-control" name="jumlahWNIPerempuanSupervisor">
                        </div>
                    </div>

                    <label><strong>WNA</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNALakiLakiSupervisor?>" type="number" min=0 class="form-control" name="jumlahWNALakiLakiSupervisor">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNAPerempuanSupervisor?>" type="number" min=0 class="form-control" name="jumlahWNAPerempuanSupervisor">
                        </div>
                    </div>

                    <label><strong>Pekerja Bersertifikasi Kompetensi</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiLakiLakiSupervisor?>" type="number" min=0 class="form-control" name="jumlahSertifikasiLakiLakiSupervisor">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiPerempuanSupervisor?>" type="number" min=0 class="form-control" name="jumlahSertifikasiPerempuanSupervisor">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>e. Teknis (front office, koki, cook helper, baverages, dish washer, pemasaran)</strong></label><br>
                    
                    <label><strong>WNI</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNILakiLakiTeknis?>" type="number" min=0 class="form-control" name="jumlahWNILakiLakiTeknis">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNIPerempuanTeknis?>" type="number" min=0 class="form-control" name="jumlahWNIPerempuanTeknis">
                        </div>
                    </div>

                    <label><strong>WNA</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNALakiLakiTeknis?>" type="number" min=0 class="form-control" name="jumlahWNALakiLakiTeknis">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNAPerempuanTeknis?>" type="number" min=0 class="form-control" name="jumlahWNAPerempuanTeknis">
                        </div>
                    </div>

                    <label><strong>Pekerja Bersertifikasi Kompetensi</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiLakiLakiTeknis?>" type="number" min=0 class="form-control" name="jumlahSertifikasiLakiLakiTeknis">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiPerempuanTeknis?>" type="number" min=0 class="form-control" name="jumlahSertifikasiPerempuanTeknis">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>f. Administrasi</strong></label><br>
                    
                    <label><strong>WNI</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNILakiLakiAdministrasi?>" type="number" min=0 class="form-control" name="jumlahWNILakiLakiAdministrasi">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNIPerempuanAdministrasi?>" type="number" min=0 class="form-control" name="jumlahWNIPerempuanAdministrasi">
                        </div>
                    </div>

                    <label><strong>WNA</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNALakiLakiAdministrasi?>" type="number" min=0 class="form-control" name="jumlahWNALakiLakiAdministrasi">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNAPerempuanAdministrasi?>" type="number" min=0 class="form-control" name="jumlahWNAPerempuanAdministrasi">
                        </div>
                    </div>

                    <label><strong>Pekerja Bersertifikasi Kompetensi</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiLakiLakiAdministrasi?>" type="number" min=0 class="form-control" name="jumlahSertifikasiLakiLakiAdministrasi">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiPerempuanAdministrasi?>" type="number" min=0 class="form-control" name="jumlahSertifikasiPerempuanAdministrasi">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label><strong>g. Lainnya</strong></label><br>
                    
                    <label><strong>WNI</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNILakiLakiLainnya?>" type="number" min=0 class="form-control" name="jumlahWNILakiLakiLainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNIPerempuanLainnya?>" type="number" min=0 class="form-control" name="jumlahWNIPerempuanLainnya">
                        </div>
                    </div>

                    <label><strong>WNA</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNALakiLakiLainnya?>" type="number" min=0 class="form-control" name="jumlahWNALakiLakiLainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahWNAPerempuanLainnya?>" type="number" min=0 class="form-control" name="jumlahWNAPerempuanLainnya">
                        </div>
                    </div>

                    <label><strong>Pekerja Bersertifikasi Kompetensi</strong></label><br>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Laki-Laki</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiLakiLakiLainnya?>" type="number" min=0 class="form-control" name="jumlahSertifikasiLakiLakiLainnya">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Perempuan</label>
                        <div class="col-sm-8">
                            <input value="<?php echo $data->jumlahSertifikasiPerempuanLainnya?>" type="number" min=0 class="form-control" name="jumlahSertifikasiPerempuanLainnya">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <label><b>3. Balas jasa pekerja selama tahun 2019</b></label>
        <div class="row mb-3"> 
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>a. Upah dan Gaji</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->upah?>" type="number" min=0 class="form-control" name="upah">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Tunjangan</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->tunjangan?>" type="number" min=0 class="form-control" name="tunjangan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>c. Bonus</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->bonus?>" type="number" min=0 class="form-control" name="bonus">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>d. Asuransi kecelakaan di tempat kerja</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->asuransi?>" type="number" min=0 class="form-control" name="asuransi">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>e. Jaminan sosial dan pembayaran pensiun</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->jamsos?>" type="number" min=0 class="form-control" name="jamsos">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>f. Lainnya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->jaminanLainnya?>" type="number" min=0 class="form-control" name="jaminanLainnya">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="blok4">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok4')?>
        </form>
    </div>    
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK V: PENDAPATAN SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok5')?>" method="post">
        <label><b>1. Pendapatan Utama</b></label><br>
        <small>Isikan nilai pendapatan dari penyewaan kamar, penjualan makanan dan minuman, penyewaan ruang pertemuan dan fasilitas lainnya</small>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>a. Penyewaan Kamar</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->penyewaanKamar?>" type="number" min=0 class="form-control" name="penyewaanKamar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Penjualan makanan dan minuman (restoran/rumah makan/cafe)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->penjualanMakanMinum?>" type="number" min=0 class="form-control" name="penjualanMakanMinum">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>c. Penyewaan ruang pertemuan</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->penyewaanRuangPertemuan?>" type="number" min=0 class="form-control" name="penyewaanRuangPertemuan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>d. Penyewaan fasilitas lainnya (kolam renang, fitness center, dan lain-lain)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->penyewaanFasilitasLainnya?>" type="number" min=0 class="form-control" name="penyewaanFasilitasLainnya">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <label><b>2. Pendapatan Lainnya</b></label><br>
        <small>Isikan pendapatan lain dari perusahaan. Pendapatan tersebut adalah pendapatan reto, yaitu pendapatan setelah dikurangi biaya-biaya</small>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>a. Menyewakan gedung/ruangan (untuk ruang kantor maupun resepsi)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->menyewakanGedung?>" type="number" min=0 class="form-control" name="menyewakanGedung">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Menyewakan gudang</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->menyewakanGudang?>" type="number" min=0 class="form-control" name="menyewakanGudang">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>c. Menyewakan mesin, kendaraan, peralatan (tanpa operator)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->penyewaanMesin?>" type="number" min=0 class="form-control" name="penyewaanMesin">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>d. Royalti/dividen yang diterima</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->royalti?>" type="number" min=0 class="form-control" name="royalti">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>e. Waralaba yang diterima</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->waralaba?>" type="number" min=0 class="form-control" name="waralaba">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>f. Lainnya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->pendapatanLainnya?>" type="number" min=0 class="form-control" name="pendapatanLainnya">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <section id="blok5">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        <?php echo $this->session->flashdata('blok5')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK VI: BIAYA/PENGELUARAN SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
    <form action="<?php echo site_url('Survei/updateBlok6')?>" method="post">
        <label><b>1. Biaya Utama</b></label><br>
        <small>Blok ini digunakan untuk mendapatakan informasi mengenai biaya khusus yang dikeluarkan perusahaan/usaha</small>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>a. Bahan baku makanan dan minuman</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->bahanBakuMakanMinum?>" type="number" min=0 class="form-control" name="bahanBakuMakanMinum">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Pembelian makanan dan minuman siap saji</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->pembelianMakanMinumSiapSaji?>" type="number" min=0 class="form-control" name="pembelianMakanMinumSiapSaji">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>c. Pembelian bahan kimia</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->pembelianBahanKimia?>" type="number" min=0 class="form-control" name="pembelianBahanKimia">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>d. Biaya jasa cuci</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->biayaJasaCuci?>" type="number" min=0 class="form-control" name="biayaJasaCuci">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>e. Biaya amenity (biaya perlengkapan pribadi seperti: odol, sikat gigi)</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->biayaAmenity?>" type="number" min=0 class="form-control" name="biayaAmenity">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <label><b>2. Biaya Pendukung</b></label><br>
        <small>Blok ini digunakan untuk mendapatkan informasi mengenai biaya umum dikeluarkan perusahaan/usaha</small>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>a. Bahan bakar</strong></label><br>
                        <label>1. Bahan bakar minyak</label><br>
                        <label>Banyaknya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">liter</div>
                            </div>
                            <input value="<?php echo $data->banyakBBM?>" type="number" min=0 class="form-control" name="banyakBBM">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaBBM?>" type="number" min=0 class="form-control" name="hargaBBM">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Elpiji</label><br>
                        <label>Banyaknya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->banyakLPG?>" type="number" min=0 class="form-control" name="banyakLPG">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaLPG?>" type="number" min=0 class="form-control" name="hargaLPG">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Gas kota</label><br>
                        <label>Banyaknya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">m3</div>
                            </div>
                            <input value="<?php echo $data->banyakGas?>" type="number" min=0 class="form-control" name="banyakGas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaGas?>" type="number" min=0 class="form-control" name="hargaGas">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Bahan bakar lainnya</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaBahanBakarLain?>" type="number" min=0 class="form-control" name="hargaBahanBakarLain">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>b. Pelumas</strong></label><br>
                        <label>Banyaknya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">liter</div>
                            </div>
                            <input value="<?php echo $data->banyakPelumas?>" type="number" min=0 class="form-control" name="banyakPelumas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPelumas?>" type="number" min=0 class="form-control" name="hargaPelumas">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>c. Listrik</strong></label><br>
                        <label>Banyaknya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kWh</div>
                            </div>
                            <input value="<?php echo $data->banyakListrik?>" type="number" min=0 class="form-control" name="banyakListrik">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaListrik?>" type="number" min=0 class="form-control" name="hargaListrik">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="blok6">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok6')?>
        </form>  
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK VI: BIAYA/PENGELUARAN SELAMA TAHUN 2019 (LANJJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
    <form action="<?php echo site_url('Survei/updateBlok6lanjutan')?>" method="post">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>d. Penggunaan air</strong></label><br>
                        <label>1. Membeli</label><br>
                        <label>Banyaknya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">M3</div>
                            </div>
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->banyakMembeliAir?>" type="number" min=0 class="form-control" name="banyakMembeliAir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaAir?>" type="number" min=0 class="form-control" name="hargaAir">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Tidak Membeli</label><br>
                        <label>Banyaknya</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">M3</div>
                            </div>
                            <input value="<?php echo $data->banyakTidakMembeli?>" type="number" min=0 class="form-control" name="banyakTidakMembeli">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>e. Angkutan</strong></label><br>
                        <label>1. Rel</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaRel?>" type="number" min=0 class="form-control" name="hargaRel">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Jalan Raya</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaJalanRaya?>" type="number" min=0 class="form-control" name="hargaJalanRaya">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Udara</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaUdata?>" type="number" min=0 class="form-control" name="hargaUdata">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Laut</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaLaut?>" type="number" min=0 class="form-control" name="hargaLaut">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>5. Sungai, danau, dan penyeberangan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaSungai?>" type="number" min=0 class="form-control" name="hargaSungai">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>f. Pos dan jasa kurir</strong></label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPos?>" type="number" min=0 class="form-control" name="hargaPos">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>g. Telepon, internet, dan komunikasi lainnya</strong></label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaTelepon?>" type="number" min=0 class="form-control" name="hargaTelepon">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>h. Keperluan kantor dan kemasan</strong></label><br>
                        <label>1. Alat tulis</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaATK?>" type="number" min=0 class="form-control" name="hargaATK">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Barang-barang dari kertas (kertas, map, amplop, karton, dll)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaKertas?>" type="number" min=0 class="form-control" name="hargaKertas">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Barang-barang kimia (tinta, karbon, dll)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaKimia?>" type="number" min=0 class="form-control" name="hargaKimia">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Alat perekam data (CD, Flashdisk)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaCD?>" type="number" min=0 class="form-control" name="hargaCD">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>5. Barang-barang pengepakan/kemasan selain kertas</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPengepakan?>" type="number" min=0 class="form-control" name="hargaPengepakan">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>i. Sewa</strong></label><br>
                        <label>1. Bangunan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaSewaBangunan?>" type="number" min=0 class="form-control" name="hargaSewaBangunan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Gudang</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaSewaGudang?>" type="number" min=0 class="form-control" name="hargaSewaGudang">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Inventaris kantor</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaSewaInventarisKantor?>" type="number" min=0 class="form-control" name="hargaSewaInventarisKantor">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Kendaraan (tanpa perantara)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaSewaKendaraan?>" type="number" min=0 class="form-control" name="hargaSewaKendaraan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>5. Mesin dan Peralatan (tanpa perantara)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaSewaMesin?>" type="number" min=0 class="form-control" name="hargaSewaMesin">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>j. Pemeliharaan dan perbaikan kecil</strong></label><br>
                        <label>1. Bangunan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPerbaikanBangunan?>" type="number" min=0 class="form-control" name="hargaPerbaikanBangunan">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Kendaraan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPerbaikanKendaraan?>" type="number" min=0 class="form-control" name="hargaPerbaikanKendaraan">
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Mesin dan peralatan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPerbaikanMesin?>" type="number" min=0 class="form-control" name="hargaPerbaikanMesin">
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Inventaris kantor dan lainnya</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPerbaikanInventaris?>" type="number" min=0 class="form-control" name="hargaPerbaikanInventaris">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>k. Perjalanan dinas</strong></label><br>
                        <label>1. Uang saku dan harian</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaUangSaku?>" type="number" min=0 class="form-control" name="hargaUangSaku">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Akomodasi/penginapan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenginapan?>" type="number" min=0 class="form-control" name="hargaPenginapan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Transportasi</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaTransportasi?>" type="number" min=0 class="form-control" name="hargaTransportasi">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>l. Pendidikan dan Pelatihan</strong></label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPendidikan?>" type="number" min=0 class="form-control" name="hargaPendidikan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>m. Penelitian dan pengembangan</strong></label><br>
                        <label>1. Dilakukan sendiri</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenelitianSendiri?>" type="number" min=0 class="form-control" name="hargaPenelitianSendiri">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Dilakukan pihak lain (dalam negeri)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenelitianPihakDalam?>" type="number" min=0 class="form-control" name="hargaPenelitianPihakDalam">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Dilakukan pihak lain (asing)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenelitianPihakAsing?>" type="number" min=0 class="form-control" name="hargaPenelitianPihakAsing">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>n. Jasa-jasa</strong></label><br>
                        <label>1. Tenaga ahli/ profesi(konsultan, notaris) dalam negeri</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaTenagaAhliDalam?>" type="number" min=0 class="form-control" name="hargaTenagaAhliDalam">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Tenaga ahli/ profesi(konsultan, notaris) asing</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaTenagaAhliAsing?>" type="number" min=0 class="form-control" name="hargaTenagaAhliAsing">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Asuransi Krugian</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaAsuransiKerugian?>" type="number" min=0 class="form-control" name="hargaAsuransiKerugian">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Promosi/iklan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPromosiIklan?>" type="number" min=0 class="form-control" name="hargaPromosiIklan">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>5. Jasa perusahaan lainnya</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaJasaPerusahaanLainnya?>" type="number" min=0 class="form-control" name="hargaJasaPerusahaanLainnya">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>o. Biaya penyusutan dan amortisasi</strong></label><br>
                        <label>1. Bangunan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenyusutanBangunan?>" type="number" min=0 class="form-control" name="hargaPenyusutanBangunan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Kendaraan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenyusutanKendaraan?>" type="number" min=0 class="form-control" name="hargaPenyusutanKendaraan">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Mesin dan peralatan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenyusutanMesin?>" type="number" min=0 class="form-control" name="hargaPenyusutanMesin">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Inventaris dan kantor lainnya</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenyusutanInventaris?>" type="number" min=0 class="form-control" name="hargaPenyusutanInventaris">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>5. Amortisasi</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPenyusutanAmortisasi?>" type="number" min=0 class="form-control" name="hargaPenyusutanAmortisasi">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>p. Pajak dan cukai</strong></label><br>
                        <label>1. Pajak bumi dan bangunan(PBB)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPBB?>" type="number" min=0 class="form-control" name="hargaPBB">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Pajak kendaraan bermotor (PKB)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPKB?>" type="number" min=0 class="form-control" name="hargaPKB">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Bea balik nama</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaBBN?>" type="number" min=0 class="form-control" name="hargaBBN">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. BEA balik nama</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaBEABalik?>" type="number" min=0 class="form-control" name="hargaBEABalik">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>5. BEA Impor</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaBEAImpor?>" type="number" min=0 class="form-control" name="hargaBEAImpor">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>q. Biaya umum lainnya</strong></label><br>
                        <label>1. Bunga pinjaman</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaBungaPinjaman?>" type="number" min=0 class="form-control" name="hargaBungaPinjaman">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>2. Jasa kebersihan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaJasaKebersihan?>" type="number" min=0 class="form-control" name="hargaJasaKebersihan">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>3. Jasa keamananan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaJasaKeamanan?>" type="number" min=0 class="form-control" name="hargaJasaKeamanan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>4. Sumbangan</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaJasaSumbangan?>" type="number" min=0 class="form-control" name="hargaJasaSumbangan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>5. Pengolahan limbah/sampah</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaPengolahanLimbah?>" type="number" min=0 class="form-control" name="hargaPengolahanLimbah">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>6. Waralaba yang dibayarkan (dalam negeri)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaWaralabaDalam?>" type="number" min=0 class="form-control" name="hargaWaralabaDalam">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>6. Waralaba yang dibayarkan (asing)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaWaralabaAsing?>" type="number" min=0 class="form-control" name="hargaWaralabaAsing">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>7. Royalti yang dibayarkan (dalam negeri)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaRoyaltiDalam?>" type="number" min=0 class="form-control" name="hargaRoyaltiDalam">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>7. Royalti yang dibayarkan (asing)</label><br>
                        <label>Nilai</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->hargaRoyaltiAsing?>" type="number" min=0 class="form-control" name="hargaRoyaltiAsing">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <section id="blok6lanjutan">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok6lanjutan')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK VII: PENAMBAHAN DAN PENGURANGAN BARANG MODAL SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok7')?>" method="post">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>1. Bangunan</strong></label><br>
                        <label>Posisi awal tahun</label>
                        <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                        <input value="<?php echo $data->posisiAwalTahunBangunan?>" type="number" min=0 class="form-control" name="posisiAwalTahunBangunan">
                    </div>
                    <div class="form-group">
                        <label>Penambahan</label>
                        <input value="<?php echo $data->penambahanBangunan?>" type="number" min=0 class="form-control" name="penambahanBangunan">
                    </div>
                    <div class="form-group">
                        <label>Pengurangan</label>
                        <input value="<?php echo $data->penguranganBangunan?>" type="number" min=0 class="form-control" name="penguranganBangunan">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>2. Mesin</strong></label><br>
                        <label>Posisi awal tahun</label>
                        <input value="<?php echo $data->posisiAwalTahunMesin?>" type="number" min=0 class="form-control" name="posisiAwalTahunMesin">
                    </div>
                    <div class="form-group">
                        <label>Penambahan</label>
                        <input value="<?php echo $data->penambahanMesin?>" type="number" min=0 class="form-control" name="penambahanMesin">
                    </div>
                    <div class="form-group">
                        <label>Pengurangan</label>
                        <input value="<?php echo $data->penguranganMesin?>" type="number" min=0 class="form-control" name="penguranganMesin">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>3. Kendaraan</strong></label><br>
                        <label>Posisi awal tahun</label>
                        <input value="<?php echo $data->posisiAwalTahunKendaraan?>" type="number" min=0 class="form-control" name="posisiAwalTahunKendaraan">
                    </div>
                    <div class="form-group">
                        <label>Penambahan</label>
                        <input value="<?php echo $data->penambahanKendaraan?>" type="number" min=0 class="form-control" name="penambahanKendaraan">
                    </div>
                    <div class="form-group">
                        <label>Pengurangan</label>
                        <input value="<?php echo $data->penguranganKendaraan?>" type="number" min=0 class="form-control" name="penguranganKendaraan">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>4. Hewan dan Tanaman</strong></label><br>
                        <label>Posisi awal tahun</label>
                        <input value="<?php echo $data->posisiAwalTahunHdT?>" type="number" min=0 class="form-control" name="posisiAwalTahunHdT">
                    </div>
                    <div class="form-group">
                        <label>Penambahan</label>
                        <input value="<?php echo $data->penambahanHdT?>" type="number" min=0 class="form-control" name="penambahanHdT">
                    </div>
                    <div class="form-group">
                        <label>Pengurangan</label>
                        <input value="<?php echo $data->penguranganHdT?>" type="number" min=0 class="form-control" name="penguranganHdT">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>5. Produk kekayaan intelektual</strong></label><br>
                        <label>Posisi awal tahun</label>
                        <input value="<?php echo $data->posisiAwalTahunPKI?>" type="number" min=0 class="form-control" name="posisiAwalTahunPKI">
                    </div>
                    <div class="form-group">
                        <label>Penambahan</label>
                        <input value="<?php echo $data->penambahanPKI?>" type="number" min=0 class="form-control" name="penambahanPKI">
                    </div>
                    <div class="form-group">
                        <label>Pengurangan</label>
                        <input value="<?php echo $data->penguranganPKI?>" type="number" min=0 class="form-control" name="penguranganPKI">
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>6. Lainnya</strong></label><br>
                        <label>Posisi awal tahun</label>
                        <input value="<?php echo $data->posisiAwalTahunLainnya?>" type="number" min=0 class="form-control" name="posisiAwalTahunLainnya">
                    </div>
                    <div class="form-group">
                        <label>Penambahan</label>
                        <input value="<?php echo $data->penambahanLainnya?>" type="number" min=0 class="form-control" name="penambahanLainnya">
                    </div>
                    <div class="form-group">
                        <label>Pengurangan</label>
                        <input value="<?php echo $data->penguranganLainnya?>" type="number" min=0 class="form-control" name="penguranganLainnya">
                    </div>
                </div>
            </div>
        </div>
        
        <section id="blok7">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok7')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK VIII: PENGGUNAAN BAHAN POKOK SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok8')?>" method="post">
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>1. Beras</strong></label><br>
                        <label>a. Beras</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->volumeBeras?>" type="number" min=0 class="form-control" name="volumeBeras">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiBeras?>" type="number" min=0 class="form-control" name="nilaiBeras">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Beras Ketan</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeBerasKetan?>" type="number" min=0 class="form-control" name="volumeBerasKetan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiBerasKetan?>" type="number" min=0 class="form-control" name="nilaiBerasKetan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>c. Tepung Beras</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeTepungBeras?>" type="number" min=0 class="form-control" name="volumeTepungBeras">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiTepungBeras?>" type="number" min=0 class="form-control" name="nilaiTepungBeras">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>2. Daging sapi/kerbau</strong></label><br>
                        <label>a. Daging segar</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeDagingSegar?>" type="number" min=0 class="form-control" name="volumeDagingSegar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiDagingSegar?>" type="number" min=0 class="form-control" name="nilaiDagingSegar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Daging beku impor</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeDagingBeku?>" type="number" min=0 class="form-control" name="volumeDagingBeku">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiDagingBeku?>" type="number" min=0 class="form-control" name="nilaiDagingBeku">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>c. Tetelan</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeTetelan?>" type="number" min=0 class="form-control" name="volumeTetelan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiTetelan?>" type="number" min=0 class="form-control" name="nilaiTetelan">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>d. Tulang iga</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeTulangIga?>" type="number" min=0 class="form-control" name="volumeTulangIga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiTulangIga?>" type="number" min=0 class="form-control" name="nilaiTulangIga">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>3. Daging Ayam</strong></label><br>
                        <label>a. Daging ayam ras</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeAyamRas?>" type="number" min=0 class="form-control" name="volumeAyamRas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiAyamRas?>" type="number" min=0 class="form-control" name="nilaiAyamRas">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Daging ayam buras/kampung</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeAyamKampung?>" type="number" min=0 class="form-control" name="volumeAyamKampung">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiAyamKampung?>" type="number" min=0 class="form-control" name="nilaiAyamKampung">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>4. Telur</strong></label><br>
                        <label>a. Telur ayam ras</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeTelurRas?>" type="number" min=0 class="form-control" name="volumeTelurRas">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiTelurRas?>" type="number" min=0 class="form-control" name="nilaiTelurRas">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>a. Telur bebek</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeTelurBebek?>" type="number" min=0 class="form-control" name="volumeTelurBebek">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiTelurBebek?>" type="number" min=0 class="form-control" name="nilaiTelurBebek">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>5. Ikan segar</strong></label><br>
                        <label>a. Ikan tuna/tongkol/cakalang</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeTuna?>" type="number" min=0 class="form-control" name="volumeTuna">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiTuna?>" type="number" min=0 class="form-control" name="nilaiTuna">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>b. Ikan Lele</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeLele?>" type="number" min=0 class="form-control" name="volumeLele">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiLele?>" type="number" min=0 class="form-control" name="nilaiLele">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>c. Ikan mas/nila</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeNila?>" type="number" min=0 class="form-control" name="volumeNila">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiNila?>" type="number" min=0 class="form-control" name="nilaiNila">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>d. Ikan Kembung/ banyar</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeKembung?>" type="number" min=0 class="form-control" name="volumeKembung">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiKembung?>" type="number" min=0 class="form-control" name="nilaiKembung">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>e. Ikan Bandeng</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeBandeng?>" type="number" min=0 class="form-control" name="volumeBandeng">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiBandeng?>" type="number" min=0 class="form-control" name="nilaiBandeng">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>f. Ikan Mujair</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeMujair?>" type="number" min=0 class="form-control" name="volumeMujair">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiMujair?>" type="number" min=0 class="form-control" name="nilaiMujair">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>g. Ikan Lainnya</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeIkanLain?>" type="number" min=0 class="form-control" name="volumeIkanLain">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiIkanLain?>" type="number" min=0 class="form-control" name="nilaiIkanLain">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>h. Hewan air selain ikan (bukan rumput laut)</label><br>
                        <label>Volume</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">kg</div>
                            </div>
                            <input value="<?php echo $data->volumeHewanAir?>" type="number" min=0 class="form-control" name="volumeHewanAir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nilai</label><br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Rp</div>
                            </div>
                            <input value="<?php echo $data->nilaiHewanAir?>" type="number" min=0 class="form-control" name="nilaiHewanAir">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section id="blok8">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok8')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK IX: MODAL DAN LINGKUNGAN</strong>
        </div>
        
    </div>
    <div class="card-body">
    <form action="<?php echo site_url('Survei/updateBlok9')?>" method="post">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>1. a. Kepemilikan modal</strong></label><br>
                        <label>1. WNI</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">%</div>
                            </div>
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->kepemilikanWNI?>" type="number" min=0 class="form-control" name="kepemilikanWNI">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>b. WNA</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">%</div>
                            </div>
                            <input value="<?php echo $data->kepemilikanWNA?>" type="number" min=0 class="form-control" name="kepemilikanWNA">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>1. b. Bila kepemilikan modal WNA lebih dari 10 persen, tuliskan negara nempar tinggal dan kebangsaan pemilik</strong></label><br>
                        <label>1. Negara tempat tinggal</label>
                        <input value="<?php echo $data->negaraTempatTinggal?>" type="text" class="form-control" name="negaraTempatTinggal">
                    </div>
                    <div class="form-group">
                        <label>2. Kebangsaan</label>
                        <input value="<?php echo $data->kebangsaan?>" type="text" class="form-control" name="kebangsaan">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <label><b>2. Apakah dalam beroperasi, sudah menjalankan sistem ramah lingkungan? </b></label>
                <div class="row mb-3">
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->ramahLingkungan == 1) echo 'selected' ?> type="radio" id="ramahLingkungan1" name="ramahLingkungan" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="ramahLingkungan1">Ya</label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->ramahLingkungan == 2) echo 'selected' ?> type="radio" id="ramahLingkungan2" name="ramahLingkungan" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="ramahLingkungan2">Tidak</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
            <label><b>3. Apakah memberlakukan konsep 3R (reduce, reuse, recycle) </b></label>
                <div class="row mb-3">
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->konsep3R == 1) echo 'selected' ?> type="radio" id="konsep3R1" name="konsep3R" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="konsep3R1">Ya</label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->konsep3R == 2) echo 'selected' ?> type="radio" id="konsep3R2" name="konsep3R" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="konsep3R2">Tidak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <label><b>4. Sistem Pengolahan Limbah </b></label>
                <div class="row mb-3">
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->pengolahanLimbah == 1) echo 'selected' ?> type="radio" id="pengolahanLimbah1" name="pengolahanLimbah" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="pengolahanLimbah1">Instalasi pengolah limbah internal</label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->pengolahanLimbah == 1) echo 'selected' ?> type="radio" id="pengolahanLimbah2" name="pengolahanLimbah" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="pengolahanLimbah2">Langsung dibuang kealam</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <label><b>5. Sistem Penyediaan air bersih </b></label>
                <div class="row mb-3">
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->sistemAirBersih == 1) echo 'selected' ?> type="radio" id="sistemAirBersih1" name="sistemAirBersih" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="sistemAirBersih1">Air tanah</label>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->sistemAirBersih == 2) echo 'selected' ?> type="radio" id="sistemAirBersih2" name="sistemAirBersih" value="2" class="custom-control-input">
                            <label class="custom-control-label" for="sistemAirBersih2">PDAM</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-6">
                        <div class="custom-control custom-radio">
                            <input <?php if($data->sistemAirBersih == 3) echo 'selected' ?> type="radio" id="sistemAirBersih3" name="sistemAirBersih" value="3" class="custom-control-input">
                            <label class="custom-control-label" for="sistemAirBersih3">Air tanah dan PDAM</label>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <section id="blok9">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok9')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK X: CATATAN</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok10')?>" method="post">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label><strong>Catanan</strong></label>
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->catatan?>" type="text" class="form-control" name="catatan">
                    </div>
                </div>
            </div>
        </div>
        
        <section id="blok10">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok10')?>
        </form>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK XI: PENGESAHAN</strong>
        </div>
        
    </div>
    <div class="card-body">
        <form action="<?php echo site_url('Survei/updateBlok11')?>" method="post" enctype="multipart/form-data">
        <div class="row mb-3">
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>Nama pemberi jawaban</label>
                            <input value="<?php echo $data->id_survei?>" type="hidden" class="form-control" name="id_survei" required>
                            <input value="<?php echo $data->namaPemberiJawaban?>" type="text" class="form-control" name="namaPemberiJawaban">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>Jabatan</label>
                            <input value="<?php echo $data->jabatan?>" type="text" class="form-control" name="jabatan">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>Nomor Telepon</label>
                            <input value="<?php echo $data->nomorTelepon?>" type="text" class="form-control" name="nomorTelepon">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>Tanggal Pengesahan</label>
                            <input value="<?php echo $data->tanggalPengesahan?>" type="date" class="form-control" name="tanggalPengesahan">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="position-relative form-group">
                    <div class="form-group">
                        <label>Tanda Tangan/cap</label>
                            <input type="file" class="form-control" name="ttdPemberiJawaban">
                            <?php if(!empty($data->ttdPemberiJawaban)){?>
                        <img src="<?php echo $data->ttdPemberiJawaban ?>">
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        
        <section id="blok11">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </section>
        
        <?php echo $this->session->flashdata('blok11')?>
        </form><br>
        <form action="<?php echo site_url('Survei/selesaiSurvei')?>" method="post">            
            <input type="hidden" class="form-control" name="id_survei" value="<?php echo $data->id_survei?>">
            <input type="hidden" class="form-control" name="id_job_desc" value="<?php echo $data->id_job_desc?>">
            <button type="submit" class="btn btn-success">Selesai Mengisi Survei</button>
        </form>
    </div>
</div>   

<?php }?>