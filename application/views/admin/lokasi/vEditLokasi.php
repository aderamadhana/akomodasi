
<p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('Lokasi')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p><br>
<?php foreach($lokasi as $data){?>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Edit Data Lokasi Akomodasi</h5>
        <form action="<?php echo site_url('Lokasi/aksiEditLokasi')?>" method="post">
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Provinsi</label>
                    <input type="hidden" class="form-control" name="id_lokasi" value="<?php echo $data->id_lokasi?>" >
                    <input type="text" class="form-control" name="provinsi" value="<?php echo $data->provinsi?>" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kabupaten/Kota</label>
                    <input type="text" class="form-control" name="kabupatenKota" value="<?php echo $data->kabupatenKota?>" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" value="<?php echo $data->kecamatan?>" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kelurahan/Desa</label>
                    <input type="text" class="form-control" name="kelurahan" value="<?php echo $data->kelurahan?>" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Nama Komersial Usaha</label>
                    <input type="text" class="form-control" name="namaKomersial" value="<?php echo $data->namaKomersial?>" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Kelas Akomodasi</label>
                <input type="text" class="form-control" name="kelasAkomodasi" value="<?php echo $data->kelasAkomodasi?>" >
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Jenis Akomodasi</label>
                <div class="custom-control custom-radio">
                    <input <?php if($data->jenisAkomodasi == 1 ) echo 'checked' ?> type="radio" id="jenisAkomodasi1" name="jenisAkomodasi" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi1">Bintang</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input <?php if($data->jenisAkomodasi == 2 ) echo 'checked' ?> type="radio" id="jenisAkomodasi2" name="jenisAkomodasi" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi2">Non Bintang</label>
                </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="position-relative form-group">
                <label class="mt-4">Alamat</label>
                <textarea class="form-control" name="alamat" ><?php echo $data->alamat?></textarea>
                </div>
            </div>
            <div class="col-md-12">
                <div class="position-relative form-group">
                <label class="mt-4">Link Gmaps</label>
                <textarea class="form-control" name="linkMaps" ><?php echo $data->linkMaps?></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?php }?>