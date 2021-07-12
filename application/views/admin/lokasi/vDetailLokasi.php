
<p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('Lokasi')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p><br>
<?php foreach($lokasi as $data){?>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Detail Data Lokasi Akomodasi</h5>
        <a href="<?php echo $data->linkMaps?>" class="btn btn-success"><i class="fa fa-map-marker"> Link Maps </i></a>
        <a href="<?php echo site_url('Lokasi/detailMaps/'.$data->id_lokasi) ?>" class="btn btn-info"><i class="fa fa-map-marker"> Maps Marker</i></a>
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Provinsi</label>
                    <input disabled type="text" class="form-control" name="provinsi" value="<?php echo $data->provinsi?>" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kabupaten/Kota</label>
                    <input disabled type="text" class="form-control" name="kabupatenKota" value="<?php echo $data->kabupatenKota?>" disabled>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Kecamatan</label>
                    <input disabled type="text" class="form-control" name="kecamatan" value="<?php echo $data->kecamatan?>" disabled>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label class="mt-4">Keluarahan/Desa</label>
                    <input disabled type="text" class="form-control" name="kelurahan" value="<?php echo $data->kelurahan?>" disabled>
                </div>
            </div>

            <div class="col-md-8">
                <div class="position-relative form-group">
                    <label class="mt-4">Nama Komersial Usaha</label>
                    <input disabled type="text" class="form-control" name="namaKomersial" value="<?php echo $data->namaKomersial?>" disabled>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Jenis Akomodasi</label>
                <div class="custom-control custom-radio">
                    <input disabled <?php if($data->jenisAkomodasi == 1 ) echo 'checked' ?> type="radio" id="jenisAkomodasi1" name="jenisAkomodasi" value="1" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi1">Bintang</label>
                </div>
                
                <div class="custom-control custom-radio">
                    <input disabled <?php if($data->jenisAkomodasi == 2 ) echo 'checked' ?> type="radio" id="jenisAkomodasi2" name="jenisAkomodasi" value="2" class="custom-control-input">
                    <label class="custom-control-label" for="jenisAkomodasi2">Non Bintang</label>
                </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Kelas Akomodasi</label>
                <input disabled type="text" class="form-control" name="kelasAkomodasi" value="<?php echo $data->kelasAkomodasi?>" disabled>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                <label class="mt-4">Username</label>
                <input disabled type="text" class="form-control" name="username" value="<?php echo $data->username?>" disabled>
                </div>
            </div>
            <div class="col-md-12">
                <div class="position-relative form-group">
                <label class="mt-4">Alamat</label>
                <textarea disabled class="form-control" name="alamat" disabled><?php echo $data->alamat?></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>