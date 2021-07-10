<?php echo $this->session->flashdata('message')?>
<div class="main-card card mb-3">
    <div class="card-body border border-warning">
        <h5 class="card-title">Tambah Data Job Petugas</h5>
        <form id="signupForm" action="<?php echo site_url('jobdesc/tambahJobDesc');?>" method="post">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Nama Petugas</label>
                        <select name="id_user" class="form-control" required>
                            <option value="">-- Pilih Petugas</option>
                            <?php foreach($petugas as $data){?>
                            <option value="<?php echo $data->id_user?>"><?php echo $data->nama_petugas?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Lokasi Survei</label>
                        <select name="id_lokasi" class="form-control" required>
                            <option value="">-- Pilih Lokasi --</option>
                            <?php foreach($lokasi as $data){?>
                            <option value="<?php echo $data->id_lokasi?>"><?php echo $data->namaKomersial?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Tanggal Survei</label>
                        <input name="tanggal_survei" type="date" class="form-control" required>
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
                    <?php $no=1; foreach($job as $data){
                        if($data->status_job == 0){
                            $status_job ='<span class="badge badge-danger">Belum Selesai</span>';
                        }else if($data->status_job == 1){
                            $status_job ='<span class="badge badge-success">Sudah Selesai</span>';
                        }
                    ?>
                    <tr id="<?php echo $data->id_job_desc?>">
                        <td><?php echo $no++?></td>
                        <td><?php echo $data->nama_petugas?></td>
                        <td><?php echo $data->namaKomersial?></td>
                        <td><?php echo $data->tanggal_survei?></td>
                        <td><?php echo $status_job?></td>
                        <td>
                            <a class="btn btn-success" title="Edit Job" type="button" href="<?php echo site_url('JobDesc/editJob/'.$data->id_job_desc)?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <button type="submit" title="Hapus Job" class="btn btn-danger remove"> <i class="fa fa-trash"></i> </button>
                        
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>   
    <script type="text/javascript">
		$(document).ready(function () {
			// $('#datatable').dataTable();
			$('.remove').click(function () {
			var id = $(this).parents("tr").attr("id");
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                if (result.isConfirmed) {
                    $.ajax({
                        url: '<?php echo site_url('JobDesc/delete/') ?>'+id,
                        type: 'DELETE',
                        error: function() {
                            alert('Something is wrong');
                        },
                        success: function(data) {
                            $("#"+id).remove();
                            swal("Terhapus!", "Data berhasil dihapus.", "success");
                        }
                    });
                }
                })
            });		
		});
    </script>