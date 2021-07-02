<?php echo $this->session->flashdata('message')?>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Data Job Petugas</h5>
        <form id="signupForm" action="<?php echo site_url('petugas/tambahPetugas');?>" method="post">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Nama Petugas</label>
                        <select name="id_user" class="form-control">
                            <option value="">-- Pilih Petugas</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Lokasi Survei</label>
                        <select name="id_blok1" class="form-control">
                            <option value="">-- Pilih Lokasi</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Tanggal Survei</label>
                        <input name="tanggal_survey" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" required></textarea>
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
                    <th>Nama Petugas</th>
                    <th>Lokasi Survei</th>
                    <th>Tanggal Survei</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1; foreach($job as $data){?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $data->id_user?></td>
                        <td><?php echo $data->id_blok1?></td>
                        <td><?php echo $data->tanggal_survey?></td>
                        <td><?php echo $data->status_job?></td>
                        <td>
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