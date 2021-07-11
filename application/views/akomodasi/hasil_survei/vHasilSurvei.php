<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
    
    <?php endif; ?> -->

<?php echo $this->session->flashdata('message')?>
<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon fa fa-bars mr-3 text-muted opacity-6"> </i> Daftar survei
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
                    <th>Tanggal Survei</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach($survei as $data){
                    if($data->status_job == 0){
                        $status_job ='<span class="badge badge-warning">Belum Selesai</span>';
                    }else if($data->status_job == 1){
                        $status_job ='<span class="badge badge-success">Sudah Selesai</span>';
                    }else if($data->status_job == 2){
                        $status_job ='<span class="badge badge-success">Sudah Tervalidasi</span>';
                    }else if($data->status_job == 3){
                        $status_job ='<span class="badge badge-danger">Validasi Tertolak</span>';
                    }
                ?>
                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $data->namaKomersial?></td>
                        <td><?php echo $data->alamat?>, <?php echo $data->kelurahan?>, <?php echo $data->kecamatan?>, <?php echo $data->kabupatenKota?>, <?php echo $data->provinsi?></td>
                        <td><?php echo $data->tanggal_survei?></td>
                        <td>
                            <a class="btn btn-info btn-lg active btn-sm" title="Detail Survei" type="button" href="<?php echo site_url('HasilSurveiAkomodasi/detailSurvei/'.$data->id_survei)?>">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                        
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>   