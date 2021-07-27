<html>
    <head>
        <title>Laporan</title>
        <style>
        body{
            font-size: 11px;
        }
        table{
            width:100%;
        }
        table,
        th,
        td {
            border: 0.01px solid #000;
            border-collapse: collapse;
        }
        
        th{
            text-align: center; 
            vertical-align: middle;
        }

        table th,
        table td {
            vertical-align: top;
            padding: 5px;
        /* Apply cell padding */
        }
        
        .contentleft,
        .contentright
        {
            position:inherit;
            font-size:14px;
            float:left;
            margin: 0px 0px 50px 0px;
            width:auto;
            max-width:450px;
            padding:0;
            font-family:Arial, Times, serif;
        }
        .contentright
        {
            position:inherit;
            float:right;
            margin: 0px 0px 50px 0px;
            width:auto;
            max-width:450px;
            padding:0;
            font-family:Arial, Times, serif;
        }
        .contentleft h3,
        .contentright h3
        {
            margin:0;
            padding:0;
            color:black;
            font-family:Arial;
            display:block;
            padding: 5px 0;
        }
    </style>
    </head>
    <body>
    <center>
    <div class="text-align: center">
        <img src="<?php echo base_url().'/assets/images/garuda.png';?>" width="50px"/>
        <h3>REPUBLIK INDONESIA<br>
        BADAN PUSAT STATISTIK<br>
        STATISTIK JASA AKOMODASI<br>
        DAFTAR ISIAN TINGKAT PENGHUNIAN KAMAR HOTEL<br>
        TAHUN 2021<br>
        LAPORAN BULAN: <?php echo date("F Y", strtotime($bulan)) ?><br>
        </h3>
    </div>
    <table class="tg">
        <thead>
        <tr>
            <th colspan="13">RINCIAN</th>
        </tr>
        <tr>
            <th style="vertical-align: middle; text-align:center" rowspan="3">No</th>
            <th style="vertical-align: middle; text-align:center" rowspan="3">Nama Akomodasi</th>
            <th style="vertical-align: middle; text-align:center" rowspan="3">Jumlah Kamar Tersedia</th>
            <th style="vertical-align: middle; text-align:center" rowspan="3">Kapasitas Tempat Tidur</th>
            <th colspan="3">Banyaknya Kamar</th>
            <th colspan="6">Banyaknya Tamu Menginap</th>
        </tr>
        <tr>
            <th style="vertical-align: middle; text-align:center" rowspan="2">Digunakan kemarin</th>
            <th style="vertical-align: middle; text-align:center" rowspan="2">Check in</th>
            <th style="vertical-align: middle; text-align:center" rowspan="2">Check out</th>
            <th colspan="2">Kemarin</th>
            <th colspan="2">Masuk Hari ini</th>
            <th colspan="2">Keluar Hari ini</th>
        </tr>
        <tr>
            <th>Asing</th>
            <th>Indonesia</th>
            <th>Asing</th>
            <th>Indonesia</th>
            <th>Asing</th>
            <th>Indonesia</th>
        </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($survei as $data){ ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $data->namaKomersial?></td>
                <td><?php echo $data->totalJumlahKamarTersedia?></td>
                <td><?php echo $data->totalKamarDigunakanKemarin?></td>
                <td><?php echo $data->totalDigunakanKemarin?></td>
                <td><?php echo $data->totalCheckIn?></td>
                <td><?php echo $data->totalCheckOut?></td>
                <td><?php echo $data->totalKemarinAsing?></td>
                <td><?php echo $data->totalKemarinIndonesia?></td>
                <td><?php echo $data->totalMasukAsing?></td>
                <td><?php echo $data->totalMasukIndonesia?></td>
                <td><?php echo $data->totalKeluarAsing?></td>
                <td><?php echo $data->totalKeluarIndonesia?></td>
            </tr>
            <?php }?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th colspan="19">PERHITUNGAN</th>
            </tr>
            <tr>
                <th style="vertical-align: middle;" rowspan="2">No</th>
                <th style="vertical-align: middle;" rowspan="2">Nama Akomodasi</th>
                <th style="vertical-align: middle;" rowspan="2">MKT</th>
                <th style="vertical-align: middle;" colspan="3">BANYAKNYA MALAM TAMU</th>
                <th style="vertical-align: middle;" colspan="3">BANYAKNYA JUMLAH TAMU</th>
                <th style="vertical-align: middle;" rowspan="2">TPK</th>
                <th style="vertical-align: middle;" rowspan="2">TPTT</th>
                <th style="vertical-align: middle;" rowspan="2">GPR</th>
                <th style="vertical-align: middle;" colspan="3">RATA-RATA TAMU MENGINAP</th>
                <th style="vertical-align: middle;" colspan="3">KOMPOSISI</th>
                <th style="vertical-align: middle;" rowspan="2">JML TT HITTG</th>
            </tr>
            <tr>
                <th>ASING</th>
                <th>DOMESTIK</th>
                <th>JUMLAH</th>
                <th>ASING</th>
                <th>DOMESTIK</th>
                <th>JUMLAH</th>
                <th>ASING</th>
                <th>DOMESTIK</th>
                <th>JUMLAH</th>
                <th>ASING</th>
                <th>DOMESTIK</th>
                <th>JUMLAH</th>
            </tr>
        </thead>  
        <tbody>
            <?php $no=1; foreach($survei as $data){
            $mkt            = $data->totalDigunakanKemarin + $data->totalCheckIn + $data->totalCheckOut;
            $malamAsing     = $data->totalKemarinAsing + $data->totalMasukAsing + $data->totalKeluarAsing;
            $malamDomestik  = $data->totalKemarinIndonesia + $data->totalMasukIndonesia + $data->totalKeluarIndonesia;
            $totalMalam     = $malamAsing + $malamDomestik;
            $tamuAsing      = $data->totalMasukAsing;
            $tamuDomestik   = $data->totalMasukIndonesia;
            $totalTamu      = $tamuAsing + $tamuDomestik;
            $tpk            = ($mkt/$data->totalJumlahKamarTersedia)*100;
            $tptt           = ($totalMalam/$data->totalKamarDigunakanKemarin)*100;
            $gpr            = $totalMalam/$mkt;
            $rLamaAsing     = $malamAsing / $data->totalMasukAsing;
            $rLamaDomestik  = $malamDomestik / $data->totalMasukIndonesia;
            $totalR         = (($data->totalKemarinAsing+$data->totalKemarinIndonesia+$data->totalMasukAsing+$data->totalMasukIndonesia)-$data->totalMasukAsing-$data->totalKeluarIndonesia)/($data->totalMasukAsing+$data->totalMasukIndonesia);
            $komposisiAsing = ($data->totalMasukAsing/($data->totalMasukAsing+$data->totalMasukIndonesia))*100;
            $komposisiDomestik = ($data->totalMasukIndonesia/($data->totalMasukAsing+$data->totalMasukIndonesia))*100;
            $totalKomposisi = $komposisiAsing+$komposisiDomestik;    
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $data->namaKomersial?></td>
                <td><?php echo $mkt?></td>
                <td><?php echo $malamAsing?></td>
                <td><?php echo $malamDomestik?></td>
                <td><?php echo $totalMalam?></td>
                <td><?php echo $tamuAsing?></td>
                <td><?php echo $tamuDomestik?></td>
                <td><?php echo $totalTamu?></td>
                <td><?php echo number_format((float)$tpk, 1, '.', '');?></td>
                <td><?php echo number_format((float)$tptt, 1, '.', '');?></td>
                <td><?php echo number_format((float)$gpr, 1, '.', '');?></td>
                <td><?php echo number_format((float)$rLamaAsing, 1, '.', '');?></td>
                <td><?php echo number_format((float)$rLamaDomestik, 1, '.', '');?></td>
                <td><?php echo number_format((float)$totalR, 1, '.', '');?></td>
                <td><?php echo number_format((float)$komposisiAsing, 1, '.', '');?></td>
                <td><?php echo number_format((float)$komposisiDomestik, 1, '.', '');?></td>
                <td><?php echo number_format((float)$totalKomposisi, 1, '.', '');?></td>    
                <td><?php if($data->totalKemarinAsing>$data->totalJumlahKamarTersedia){echo $data->totalKemarinAsing;}else{echo $data->totalJumlahKamarTersedia;}?></td>
                
            </tr>
            <?php }?>
        </tbody>
    </table>
    </center>
        <div class="contentleft">
            <p>Petugas,</p>
            <br>&nbsp;
            <br>&nbsp;
            <p><?php echo $nama_petugas?></p>
        </div>

        <div class="contentright">
            <p>Responden,</p>
            <br>&nbsp;
            <br>&nbsp;
            <p><?php echo $namaKomersial?></p>
        </div>
    </body>
</html>
