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
                            <a class="btn btn-success btn-lg active btn-sm" title="Detail Lokasi" type="button" href="<?php echo site_url('LokasiPetugas/detailLokasi/'. $data->id_lokasi)?>">
                                <i class="fa fa-eye"></i>
                            </a>

                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>   