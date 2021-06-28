<!-- <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<?php if ($this->session->flashdata('flash')) : ?>
    
    <?php endif; ?> -->


<div class="card mb-3 ">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Pekerjaan Hari Ini
            </div>
            
        </div>
        <div class="card-body">
            <table style="width: 100%;" id="example"
                    class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>No</th>
                    <th>No Dokumen</th>
                    <th>Nama Guru</th>
                    <th>Tanggal Mulai</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="btn btn-primary btn-lg active btn-sm" type="button" href="<?php echo site_url('Survey/detailSurvey')?>">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                </tbody>
            </table>
        </div>
        
    </div>   