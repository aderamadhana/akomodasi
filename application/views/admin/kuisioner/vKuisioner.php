<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Kuisioner</h5>
        <form id="signupForm" action="<?php echo site_url('petugas/tambahPetugas');?>" method="post">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>NIP</label>
                        <input name="nip" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Nama Petugas</label>
                        <input name="nama_petugas" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Tempat, tanggal lahir</label>
                        <input name="ttl" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" required></textarea>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jk" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="1">Laki - laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Username</label>
                        <input name="usename" type="text" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" required>
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
                <i class="header-icon fa fa-bars mr-3 text-muted opacity-6"> </i>Petugas
            </div>
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama Petugas</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-success btn-lg active btn-sm" type="button" href="#">
                            <i class="fa fa-pencil"></i>
                        </a>

                        <a class="btn btn-primary btn-lg active btn-sm" type="button" href="#">
                            <i class="fa fa-trash"></i>
                        </a>

                    </td>
                
                </tbody>
            </table>
        </div>
        
    </div>   