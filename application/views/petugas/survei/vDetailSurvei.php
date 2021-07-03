<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
        <p class="h5 mb-0 text-gray-800"><a onclick="goBack()" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p>
    </div>
<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK I: PENGENALAN TEMPAT</strong>
        </div>
        
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <form action="" method="post">
                <div class="form-group">
                    <label class="mt-4">1. Provinsi</label>
                    <input type="text" class="form-control" name="provinsi">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">2. Kabupaten/Kota *</label>
                    <input type="text" class="form-control" name="kabupatenkota" required>
                </div>
                
                <div class="form-group">
                    <label class="mt-4">3. Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan">
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">
                    <label class="mt-4">4. Keluarahan/Desa</label>
                    <input type="text" class="form-control" name="kelurahan">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">5. Nomor Identitas Perusahaan/Usaha (nomor SBR)</label>
                    <input type="text" class="form-control" name="nomorSBR">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">6. ID Infrastruktur Wilkerstat</label>
                    <input type="text" class="form-control" name="idInfrastruktur">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">
                    <label class="mt-4">7. a. Nama Komersial Usaha</label>
                    <input type="text" class="form-control" name="namaKemersialUsaha">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">7. b. Nama Perusahaan/Usaha</label>
                    <input type="text" class="form-control" name="namaPerusahaan">
                </div>

                <div class="form-group">
                    <label class="mt-4">8. Alamat Lokasi Perusahaan</label><br>
                    <label class="mt-4">Jalan</label>
                    <input type="text" class="form-control" name="jalan">
                </div>

                <div class="form-group">
                    <label class="mt-4">Kode POS</label>
                    <input type="text" class="form-control" name="kodePOS">
                </div>
            </div>
            
            <div class="col-sm-6 col-md-4 col-lg-6"> 
                <div class="form-group">
                    <label class="mt-4">No Telepon</label>
                    <input type="text" class="form-control" name="noTelp">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">Twitter</label>
                    <input type="text" class="form-control" name="twitter">
                </div>
                
                <div class="form-group">
                    <label class="mt-4">Facebook</label>
                    <input type="text" class="form-control" name="facebook">
                </div>

                <div class="form-group">
                    <label class="mt-4">Website</label>
                    <input type="text" class="form-control" name="provinsi">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="mt-4">Nama Pengusaha/penaggung jawab</label>
            <input type="text" class="form-control" name="namaPengusaha">
        </div>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK II: KETERANGAN PETUGAS</strong>
        </div>
        
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Uraian</th>
                <th>Pencacah</th>
                <th>Pengawas</th>
            </tr>
            <tr>
                <th>Nama</th>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="namaPencacah">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="namaPengawas">
                    </div>
                </td>
            </tr>
            <tr>
                <th>Tanggal Pelaksanaan</th>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tglPelaksanaan">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tglPelaksanaan">
                    </div>
                </td>
            </tr>
            <tr>
                <th>Tanda Tangan</th>
                <td>
                    <div class="form-group">
                        <input type="file" class="form-control" name="ttdPencacah">
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <input type="file" class="form-control" name="ttdPengawas">
                    </div>
                </td>
            </tr>
        </table>    
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
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha1" name="klasifikasiUsaha" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha1">Bintang 5</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha2" name="klasifikasiUsaha" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha2">Bintang 4</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha3" name="klasifikasiUsaha" value="3" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha3">Bintang 3</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha4" name="klasifikasiUsaha" value="4" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha4">Bintang 2</label>
                </div>
                <div class="custom-control custom-radio ">
                    <input type="radio" id="klasifikasiUsaha5" name="klasifikasiUsaha" value="5" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha5">Bintang 1</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha6" name="klasifikasiUsaha" value="6" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha6">Melati</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha7" name="klasifikasiUsaha" value="7" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha7">Pondok Wisata (Home stay)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha8" name="klasifikasiUsaha" value="8" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha8">Penginapan Remaja (Youth hastel)</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha9" name="klasifikasiUsaha" value="9" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha9">Villa</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="klasifikasiUsaha10" name="klasifikasiUsaha" value="10" class="custom-control-input">
                    <label class="custom-control-label" for="klasifikasiUsaha10">Lainnya</label>
                </div>
            </div>
        </div>

        <label><b>2. Jenis izin operasional yang dimiliki usaha ini</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisIzin1" name="jenisIzin" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin1">Tanda Daftar Usaha Pariwisata</label>
                </div>

                <div class="custom-control custom-radio ">
                    <input type="radio" id="jenisIzin22" name="jenisIzin" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin2">Izin Tetap Usaha Pariwisata</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisIzin3" name="jenisIzin" value="3" class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin3">Izin Lainnya</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisIzin4" name="jenisIzin" value="4" class="custom-control-input">
                    <label class="custom-control-label" for="jenisIzin4">Tidak Mempunyai Izin</label>
                </div>
            </div>
        </div>

        <label><b>3. Apakah usaha ini sudah memperoleh sertifikasi usaha pariwisata dari Lembaga Sertifikasi Usaha (LSU)</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="sertifikasi1" name="sertifikasi" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasi1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="sertifikasi2" name="sertifikasi" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasi2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>4. a. Apakah usaha akomodasi ini menjadi anggota asosiasi? </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="anggotaAsosiasi1" name="anggotaAsosiasi" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="anggotaAsosiasi1">Ya</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="anggotaAsosiasi2" name="anggotaAsosiasi" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="anggotaAsosiasi2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>Jika "YA" (R.4.a = 1), apa nama asosiasi yang diikuti? </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="asosiasi1" name="asosiasi" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="asosiasi1">PHRI</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="asosiasi2" name="asosiasi" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="asosiasi2">Lainnya</label>
                </div>
            </div>
        </div>

        <label><b>Sarana promosi yang digunakan (isian boleh lebih dari satu) </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="1" class="custom-control-input" id="saranaPromosi1">
                    <label class="custom-control-label" for="saranaPromosi1">TV/Radio</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="2" class="custom-control-input" id="saranaPromosi2">
                    <label class="custom-control-label" for="saranaPromosi2">Online/Internet</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="3" class="custom-control-input" id="saranaPromosi3">
                    <label class="custom-control-label" for="saranaPromosi3">Surat kabar/majalah</label>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="4" class="custom-control-input" id="saranaPromosi4">
                    <label class="custom-control-label" for="saranaPromosi4">Spanduk/Billboard</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="5" class="custom-control-input" id="saranaPromosi5">
                    <label class="custom-control-label" for="saranaPromosi5">Leaflet/Brosur</label>
                </div>
                
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="saranaPromosi[]" value="6" class="custom-control-input" id="saranaPromosi6">
                    <label class="custom-control-label" for="saranaPromos6">Lainnya</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: KETERANGAN KHUSUS PEUSAHAAN/USAHA</strong>
        </div>
        
    </div>
    <div class="card-body">
    
    
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: KETERANGAN KHUSUS PEUSAHAAN/USAHA (LANJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
    <div class="form-group">
            <label class="mt-4">Saran / Masukan</label>
            <div>
                <textarea id="exampleText" class="form-control" name="saran" placeholder="" ></textarea>
            </div>
        </div>
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: KETERANGAN KHUSUS PEUSAHAAN/USAHA (LANJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: KETERANGAN KHUSUS PEUSAHAAN/USAHA (LANJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK III.B: TENAGA KERJA DAN BALAS JASA SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>    
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK V: PENDAPATAN SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK VI: BIAYA/PENGELUARAN SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <strong>BLOK VI: BIAYA/PENGELUARAN SELAMA TAHUN 2019 (LANJJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK VI: BIAYA/PENGELUARAN SELAMA TAHUN 2019 (LANJJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK VII: PENAMBAHAN DAN PENGURANGAN BARANG MODAL SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK VIII: PENGGUNAAN BAHAN POKOK SELAMA TAHUN 2019</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK VIII: PENGGUNAAN BAHAN POKOK SELAMA TAHUN 2019 (LANJJUTAN)</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK IX: MODAL DAN LINGKUNGAN</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK X: CATATAN</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
        <strong>BLOK XI: PENGESAHAN</strong>
        </div>
        
    </div>
    <div class="card-body">
            
    </div>
</div>   