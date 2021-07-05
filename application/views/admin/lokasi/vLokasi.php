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
                        <input type="text" class="form-control" name="kabupatenkota" required>
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
                
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label class="mt-4">Nomor Identitas Perusahaan/Usaha (nomor SBR)</label>
                        <input type="text" class="form-control" name="nomorSBR">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label class="mt-4">ID Infrastruktur Wilkerstat</label>
                        <input type="text" class="form-control" name="idInfrastruktur">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label class="mt-4">Nama Komersial Usaha</label>
                        <input type="text" class="form-control" name="namaKemersialUsaha">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Nama Perusahaan/Usaha</label>
                    <input type="text" class="form-control" name="namaPerusahaan">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Alamat</label>
                    <input type="text" class="form-control" name="jalan">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Kode POS</label>
                    <input type="text" class="form-control" name="kodePOS">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">No Telepon</label>
                    <input type="text" class="form-control" name="noTelp">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Email</label>
                    <input type="text" class="form-control" name="email">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Twitter</label>
                    <input type="text" class="form-control" name="twitter">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Facebook</label>
                    <input type="text" class="form-control" name="facebook">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Website</label>
                    <input type="text" class="form-control" name="website">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                    <label class="mt-4">Nama Pengusaha/penaggung jawab</label>
                    <input type="text" class="form-control" name="namaPengusaha">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                    <label class="mt-4">Longitude</label>
                    <input type="text" class="form-control" name="lat">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                    <label class="mt-4">Lattitude</label>
                    <input type="text" class="form-control" name="long">
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
                        <td><?php echo $data->nama_perusahaan?></td>
                        <td><?php echo $data->jalan?>, <?php echo $data->kelurahan?>, <?php echo $data->kecamatan?>, <?php echo $data->kabupatenkota?>, <?php echo $data->provinsi?></td>
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