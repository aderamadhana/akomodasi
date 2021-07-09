<?php echo $this->session->flashdata('message')?>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Data Lokasi Akomodasi</h5>
        <form id="signupForm" action="<?php echo site_url('lokasi/tambahLokasi');?>" method="post">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label class="mt-4">Provinsi</label>
                        <input type="text" class="form-control" name="provinsi" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label class="mt-4">Kabupaten/Kota</label>
                        <input type="text" class="form-control" name="kabupatenKota" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label class="mt-4">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label class="mt-4">Keluarahan/Desa</label>
                        <input type="text" class="form-control" name="kelurahan" required>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="position-relative form-group">
                        <label class="mt-4">Nama Komersial Usaha</label>
                        <input type="text" class="form-control" name="namaKomersial" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Jenis Akomodasi</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jenisAkomodasi1" name="jenisAkomodasi" value="1" class="custom-control-input">
                        <label class="custom-control-label" for="jenisAkomodasi1">Bintang</label>
                    </div>
                    
                    <div class="custom-control custom-radio">
                        <input type="radio" id="jenisAkomodasi2" name="jenisAkomodasi" value="2" class="custom-control-input">
                        <label class="custom-control-label" for="jenisAkomodasi2">Non Bintang</label>
                    </div>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="position-relative form-group">
                    <label class="mt-4">Kelas Akomodasi</label>
                    <input type="text" class="form-control" name="kelasAkomodasi" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                    <label class="mt-4">Alamat</label>
                    <textarea class="form-control" name="alamat" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                    <label class="mt-4">Link Maps</label>
                    <textarea class="form-control" name="linkMaps" required></textarea>
                    </div>
                </div>
                
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon fa fa-bars mr-3 text-muted opacity-6"> </i>Data Lokasi
            </div>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Perusahaan / Usaha</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($lokasi as $data){?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $data->namaKomersial?></td>
                        <td><?php echo $data->alamat?>, <?php echo $data->kelurahan?>, <?php echo $data->kecamatan?>, <?php echo $data->kabupatenKota?>, <?php echo $data->provinsi?></td>
                        <td>
                            <a class="btn btn-success btn-lg active btn-sm" title="Detail Petugas" type="button" href="#">
                                <i class="fa fa-eye"></i>
                            </a>
                            
                            <a class="btn btn-success btn-lg active btn-sm" type="button" href="#">
                                <i class="fa fa-pencil"></i>
                            </a>

                            <a class="btn btn-primary btn-lg active btn-sm" type="button" href="#">
                                <i class="fa fa-trash"></i>
                            </a>

                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>   