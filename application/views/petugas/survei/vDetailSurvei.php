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
        <form action="" method="post">
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
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
        <button type="submit" class="btn btn-success">Simpan</button>
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
        <label><b>1. a. Apakah usaha akomodasi ini mempunyai sertifikasi syariah?</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="sertifikasiSyariah1" name="sertifikasiSyariah" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasiSyariah1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="sertifikasiSyariah2" name="sertifikasiSyariah" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="sertifikasiSyariah2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>1. b. Jika "Ya" (R.1.a = 1), sertifikasi syariah yang dimiliki: </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisSertifikasiSyariah1" name="jenisSertifikasiSyariah" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="jenisSertifikasiSyariah1">Hilal 1</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="jenisSertifikasiSyariah2" name="jenisSertifikasiSyariah" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="jenisSertifikasiSyariah2">Hilal 2</label>
                </div>
            </div>
        </div>

        <label><b>2. a. Status pengelolaan usaha penyediaan akomodasi ini: </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha1" name="statusPengelolaanUsaha" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha1">Chain Internasional</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha2" name="jenisSertifikasiSyariah" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha2">chain Lokal</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha3" name="statusPengelolaanUsaha" value="3" class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha3">Waralaba</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input type="radio" id="statusPengelolaanUsaha4" name="statusPengelolaanUsaha" value="4" class="custom-control-input">
                    <label class="custom-control-label" for="statusPengelolaanUsaha4">Sendiri</label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-12">
                <div class="form-group">     
                    <label>2. b. Jika isian pertanyaan no 2.a adalah kode 1, 2, atau 3, tuliskan nama kelompok (group) pengelolaan usaha akomodasi tersebut</label>
                    <input type="text" name="namaGroupPengelolaanUsaha" class="form-control">           
                </div>
            </div>
        </div>

        <label><b>3. a. Apakah usaha ini menerima pemesanan kamar atau melakukan penjualan secara online/melalui internet?</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ifOnline1" name="ifOnline" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="ifOnline1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ifOnline2" name="ifOnline" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="ifOnline2">Tidak</label>
                </div>
            </div>
        </div>

        <label><b>3. b. Jika "Ya" (R.3.a = 1), maka: </b></label><br>
        <label><b>3. b. I. Sarana apa saja yang digunakan untuk melakukan penjualan secara online </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="saranaPenjualan1" name="saranaPenjualan" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="saranaPenjualan1">Website</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="saranaPenjualan2" name="saranaPenjualan" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="saranaPenjualan2">Media Sosial</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="saranaPenjualan3" name="saranaPenjualan" value="4" class="custom-control-input">
                    <label class="custom-control-label" for="saranaPenjualan3">Layanan penjualan pihak ketiga</label>
                </div>
            </div>
        </div>
        
        <label><b>3. b. II. Cara pembayaran: </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran1" name="caraPembayaran" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="saranaPenjualan1">Tunai</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran2" name="caraPembayaran" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran2">Kartu kredit tau kredit online</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran3" name="caraPembayaran" value="3" class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran3">Kartu debit atau transfer bank online</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran4" name="caraPembayaran" value="4" class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran4">Uang elektronik</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran5" name="caraPembayaran" value="5" class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran5">Voucher</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran6" name="caraPembayaran" value="6" class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran6">Poin dari program berhadiah</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="caraPembayaran7" name="caraPembayaran" value="7" class="custom-control-input">
                    <label class="custom-control-label" for="caraPembayaran7">Lainnya</label>
                </div>
            </div>
        </div>
        
        <label><b>3. c. Berapa persen kamar yang terjual melalui internet/online selama tahun 2019? ..% </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">     
                    <label>i. Agoda</label>
                    <input type="text" name="agoda" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>ii. Booking.com</label>
                    <input type="text" name="bookingcom" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>iii. Traveloka</label>
                    <input type="text" name="traveloka" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>iv. OYO</label>
                    <input type="text" name="oyo" class="form-control">           
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="form-group">     
                    <label>v. AirBnB</label>
                    <input type="text" name="airbnb" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>vi. Airy</label>
                    <input type="text" name="airy" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>vi. RedDoorz</label>
                    <input type="text" name="reddoorz" class="form-control">           
                </div>
                <div class="form-group">     
                    <label>vi. Laiinyya</label>
                    <input type="text" name="kamarLainnya" class="form-control">           
                </div>
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
        <label><b>4. Banyaknya kamar, tempat tidur yang tersedia, kapasitas tamu hotel, dan harga kamar setelah pajak per malam pada saat pencacahan </b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-12">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th rowspan="3" >Jenis kamar</th>
                        <th rowspan="3">Banyaknya kamar</th>
                        <th rowspan="3">Banyaknya tempat tidur</th>
                        <th rowspan="3">Kapasitas tamu hotel</th>
                        <th colspan="4">Harga kamar per malam</th>
                    </tr>
                    <tr class="text-center">
                        <td colspan="2">Umum</td>
                        <td colspan="2">Pemerintah</td>
                    </tr>
                    <tr class="text-center">
                        <td>Single Occupancies</td>
                        <td>Double Occupancies</td>
                        <td>Single Occupancies</td>
                        <td>Double Occupancies</td>
                    </tr>
                    
                    <tr>
                        <td>Standar</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kamarStandar">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tempatTidurStandar">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kapasitasStandar">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumSingle">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumDouble">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahSingle">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahDouble">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Superior</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kamarSuperior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tempatTidurSuperior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kapasitasSuperior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumSingleSuperior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumDoubleSuperior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahSingleSuperior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahDoubleSuperior">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Deluxe</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kamarDeluxe">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tempatTidurDeluxe">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kapasitasDeluxer">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumSingleDeluxe">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumDoubleDeluxe">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahSingleDeluxe">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahDoubleDeluxe">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Junior Suite</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kamarJunior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tempatTidurJunior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kapasitasJunior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumSingleJunior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumDoubleJunior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahSingleJunior">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahDoubleJunior">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Suite</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kamarSuite">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tempatTidurSuite">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kapasitasSuite">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumSingleSuite">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumDoubleSuite">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahSingleSuite">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahDoubleSuite">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>President Suite</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kamarPresident">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tempatTidurPresident">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kapasitasPresident">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumSinglePresident">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumDoublePresident">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahSinglePresident">
                            </div>
                        </td>
                        
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahDoublePresident">
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <label><b>5. a. Apakah tersedia ruang pertemuan?</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ruangPertemuan1" name="ruangPertemuan" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="ruangPertemuan1">Ya</label>
                </div>

            </div>

            <div class="col-sm-6 col-md-4 col-lg-6">
                <div class="custom-control custom-radio">
                    <input type="radio" id="ruangPertemuan2" name="ruangPertemuan" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="ruangPertemuan2">Tidak</label>
                </div>
            </div>
        </div>
        <label><b>5. b. Nama, tarif, luas, dan kapasitas masing-masing ruang rapat</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-12">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama ruang rapat</th>
                        <th colspan="2">Harga setelah pajak (termasuk pajak)</th>
                        <th rowspan="2">Luas (m2)</th>
                        <th colspan="4">Kapasitas (kursi)</th>
                    </tr>
                    <tr class="text-center">
                        <td>Umum</td>
                        <td>Pemerintah</td>
                        <td>U-Shape</td>
                        <td>Class Room</td>
                        <td>Round Table</td>
                        <td>Theatre</td>
                    </tr>
                    <?php for($i=1; $i<=5; $i++){?>
                    <tr>
                        <td><?php echo $i?></td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="namaRuangRapat<?php echo $i?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umum<?php echo $i?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintah<?php echo $i?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="luas<?php echo $i?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ushape<?php echo $i?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="classRoom<?php echo $i?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="roundTable<?php echo $i?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="theater<?php echo $i?>">
                            </div>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
        <label><b>5. c. Harga Paket per orang per pax(pada tahun 2020)</b></label>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4 col-lg-12">
                <table class="table table-bordered">
                    <tr class="text-center">
                        <th rowspan="2">Jenis Paket</th>
                        <th colspan="2">Harga setelah pajak (termasuk pajak)</th>
                    </tr>
                    <tr class="text-center">
                        <td>Umum</td>
                        <td>Pemerintah</td>
                    </tr>
                    <tr>
                        <td>i. Pertemuan</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>a) Fullboard Single Occupancy (1 kamar isi 1 orang per pax)</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumFullboard">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahFullboard">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>b) Fullboard Double Occupancy (1 kamar isi 1 orang per pax)</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumDoubleFullboard">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahDoubleFullboard">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>c) Fullday</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumFullday">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahFullday">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>d) Holiday</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumHoliday">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahHoliday">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ii. Makan per orang per pax</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumMakan">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahMakan">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>iii. Coffee break per orang per pax</td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="umumCoffee">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pemerintahCoffee">
                            </div>
                        </td>
                    </tr>
                </table>
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