<?php echo $this->session->flashdata('message')?>
<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon fa fa-bars mr-3 text-muted opacity-6"> </i>Laporan
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
                    <?php $no=1; foreach($survei as $data){
                        if($data->status_survei == 1){
                            $status_job ='<span class="badge badge-warning">Belum Tervalidasi</span>';
                        }else if($data->status_survei == 2){
                            $status_job ='<span class="badge badge-success">Sudah Tervalidasi</span>';
                        }else if($data->status_survei == 3){
                            $status_job ='<span class="badge badge-danger">Validasi Tertolak</span>';
                        }
                    ?>
                    <tr id="<?php echo $data->id_job_desc?>">
                        <td><?php echo $no++?></td>
                        <td><?php echo $data->nama_petugas?></td>
                        <td><?php echo $data->namaKomersial?></td>
                        <td><?php echo $data->tanggal_survei?></td>
                        <td><?php echo $status_job?></td>
                        <td>
                            <a class="btn btn-success" title="Detail Laporan" type="button" href="<?php echo site_url('Laporan/detailLaporan/'.$data->id_survei)?>">
                                <i class="fa fa-eye"></i>
                            </a>
                        
                        </td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>