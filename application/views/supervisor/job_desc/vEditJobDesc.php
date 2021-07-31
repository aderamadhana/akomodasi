<p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('JobDesc')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p><br>
<?php echo $this->session->flashdata('message')?>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Edit Data Job Petugas</h5>
        <form id="signupForm" action="<?php echo site_url('jobdesc/aksiEditJob');?>" method="post">
            <?php foreach($job as $data) {?>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Nama Petugas</label>
                        <select name="id_user" class="form-control" required>
                            <option value="">-- Pilih Petugas</option>
                            <?php foreach($petugas as $d){?>
                            <option value="<?php echo $d->id_user?>" <?php if($d->id_user == $data->id_user) echo 'selected' ?>><?php echo $d->nama_petugas?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Lokasi Survei</label>
                        <select name="id_lokasi" class="form-control" required>
                            <option value="">-- Pilih Lokasi --</option>
                            <?php foreach($lokasi as $d){?>
                            <option value="<?php echo $d->id_lokasi?>" <?php if($d->id_lokasi == $data->id_lokasi) echo 'selected' ?> ><?php echo $d->namaKomersial?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Tanggal Survei</label>
                        <input name="tanggal_survei" type="date" class="form-control" value="<?php echo $data->tanggal_survei?>" required>
                        <input name="id_job_desc" type="hidden" class="form-control" value="<?php echo $data->id_job_desc?>" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" required><?php echo $data->keterangan?></textarea>
                    </div>
                </div>
                
            </div>
            <button class="mt-2 btn btn-primary" type="submit">Submit</button>
            <?php }?>
        </form>
    </div>
</div>