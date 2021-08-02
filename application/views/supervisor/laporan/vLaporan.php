<?php echo $this->session->flashdata('message')?>

<div class="card mb-3 ">
    <div class="card-header-tab card-header">
        <div class="float-left">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            <i class="header-icon fa fa-bars mr-3 text-muted opacity-6"> </i>Laporan
        </div>
</div>
    </div>
    
    <div class="card-body">
        <label>Filter berdasarkan bulan</label>
        <input type="month" id="date" class="form-control">
        <br>
        <form id="buttonPrint" style="display:none" action="<?php echo site_url('LaporanSupervisor/printLaporanFilter')?>" method="post">
            <input type="hidden" id="datePrint" name="date">
            <button class="btn btn-info" type="submit" formtarget="_blank"><i class="fa fa-print"></i> Generate Report</button>
        </form>
        <br>
        <table style="width: 100%;" id="example"
                class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Petugas</th>
                <th>Lokasi Survei</th>
                <th>Tanggal Survei</th>
                <th>Periode</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody id="table">
                <?php $no=1; foreach($survei as $data){
                ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $data->nama_petugas?></td>
                    <td><?php echo $data->namaKomersial?></td>
                    <td><?php echo $data->tanggal_survei?></td>
                    <td><?php echo date("F Y", strtotime($data->periode));?></td>
                    <td>
                        <a class="btn btn-success" title="Detail Laporan" type="button" href="<?php echo site_url('LaporanSupervisor/detailLaporan/'.$data->id_survei)?>">
                            <i class="fa fa-eye"></i>
                        </a>
                    
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
</div>

<script>
    $('#date').on('change', function() {
        var date = this.value;
        $("tbody").empty();
        $.ajax({
            url: "<?php echo base_url()?>/LaporanSupervisor/getDataFilter",
            method: 'post',
            data: {date: date},
            success : function(data){
                if(data.html == "<td colspan='5' style='text-align: center;'>No matching records found<\/td>"){
                    $('#datePrint').val(date);
                    $('#buttonPrint').hide();
                    $('#table').html(data.html); 
                }else{
                    $('#buttonPrint').show();
                    $('#datePrint').val(date);
                    $('#table').html(data.html);    
                }
                
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
        })
    });
</script>