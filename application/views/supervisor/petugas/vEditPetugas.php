
<p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('PetugasSupervisor')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p><br>
<?php foreach($petugas as $data){?>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Edit Data Petugas</h5>
        <form action="<?php echo site_url('PetugasSupervisor/aksiEditPetugas')?>" method="post">
        <div class="form-row">
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label>NIP</label>
                    <input name="id_user" type="hidden" class="form-control" value="<?php echo $data->id_user?>" required>
                    <input name="nip" type="text" class="form-control" value="<?php echo $data->nip?>" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label>Nama Petugas</label>
                    <input name="nama_petugas" type="text" class="form-control" value="<?php echo $data->nama_petugas?>" required>
                </div>
            </div>

            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label>Tempat, tanggal lahir</label>
                    <input name="ttl" type="text" class="form-control" value="<?php echo $data->ttl?>" required>
                </div>
            </div>

            <div class="col-md-12">
                <div class="position-relative form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" required><?php echo $data->alamat?></textarea>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="1" <?php if($data->jk == 1) echo 'selected'?>>Laki - laki</option>
                        <option value="2" <?php if($data->jk == 2) echo 'selected'?> >Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        <option value="">-- Pilih --</option>
                        <option value="1" <?php if($data->role == 1) echo 'selected'?>>Admin</option>
                        <option value="2" <?php if($data->role == 2) echo 'selected'?> >Petugas</option>
                    </select>
                </div>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
<?php }?>