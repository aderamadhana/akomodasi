<html>
    <head>
        <title>Laporan</title>
        <style>
        body{
            font-size: 13px;
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
    </center>
    <?php foreach($survei as $data){
        $totaljumlahKamarTersedia = 0;
        $totalkamarDigunakanKemarin = 0;
        $totaldigunakanKemarin = 0;
        $totalcheckIn = 0;
        $totalcheckOut = 0;
        $totalkemarinAsing = 0;
        $totalkemarinIndonesia = 0;
        $totalmasukAsing = 0;
        $totalmasukIndonesia = 0;
        $totalkeluarAsing = 0;
        $totalkeluarIndonesia = 0;
    ?>
    <table>
        <thead>
            <tr>
                <th colspan="4">PENGENALAN USAHA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1. Provinsi</td>
                <td><?php echo $data->provinsi?></td>
                <td>5. Nama Komersial</td>
                <td><?php echo $data->namaKomersial?></td>
            </tr>
            <tr>
                <td>2. Kabupaten/kota</td>
                <td><?php echo $data->kabupatenKota?></td>
                <td>6. Alamat</td>
                <td><?php echo $data->alamat?></td>
            </tr>
            <tr>
                <td>3. Kecamatan</td>
                <td><?php echo $data->kecamatan?></td>
                <td>7. Jenis Akomodasi</td>
                <td><?php if($data->jenisAkomodasi == 1){echo 'Bintang'; }else{ echo 'Non Bintang';}?></td>
            </tr>
            <tr>
                <td >4. Kelurahan/Desa</td>
                <td ><?php echo $data->kelurahan?></td>
                <td >8. Kelas Akomodasi</td>
                <td ><?php echo $data->kelasAkomodasi?></td>
            </tr>
            </tbody>
        </table>

        <table>
            <thead>
                <tr>
                    <th colspan="8">1. HARGA TARIF KAMAR PER HARI</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Type</th>
                    <th>Hari Kerja</th>
                    <th>Hari Libur</th>
                    <th colspan="2">Type</th>
                    <th>Hari Kerja</th>
                    <th>Hari Libur</th>
                </tr>
                <tr>
                    <td style="vertical-align: middle; text-align:center" rowspan="3">Non Suite</td>
                    <td>Standar</td>
                    <td><?php echo $data->standarHariKerjaNonSuite?></td>
                    <td><?php echo $data->standarHariLiburNonSuite?></td>
                    <td style="vertical-align: middle; text-align:center" rowspan="3">Suite</td>
                    <td>Standar</td>
                    <td><?php echo $data->standarHariKerjaSuite?></td>
                    <td><?php echo $data->standarHariLiburSuite?></td>
                </tr>
                <tr>
                    <td>Deluxe</td>
                    <td><?php echo $data->deluxeHariKerjaNonSuite?></td>
                    <td><?php echo $data->deluxeHariLiburNonSuite?></td>
                    <td>Deluxe</td>
                    <td><?php echo $data->deluxeHariKerjaSuite?></td>
                    <td><?php echo $data->deluxeHariLiburSuite?></td>
                </tr>
                <tr>
                    <td>Superior</td>
                    <td><?php echo $data->superiorHariKerjaNonSuite?></td>
                    <td><?php echo $data->superiorHariLiburNonSuite	?></td>
                    <td>Superior</td>
                    <td><?php echo $data->superiorHariKerjaSuite?></td>
                    <td><?php echo $data->superiorHariLiburSuite?></td>
                </tr>
            </tbody>
        </table>
        <table class="tg">
            <thead>
            <tr>
                <th colspan="13">2. HARGA TARIF KAMAR, TEMPAT TIDUR, DAN TAMU</th>
            </tr>
            <tr>
                <th style="vertical-align: middle; text-align:center" rowspan="3">No</th>
                <th style="vertical-align: middle; text-align:center" rowspan="3">Tanggal</th>
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
            <?php 
            $query = $this->db->get_where('detailtarifsurvei', array('id_survei' => $data->id_survei))->result();
            $no = 1;
            foreach($query as $db){
                
            $newDate = date("d/m/Y", strtotime($db->tanggal)); 
            
            $totaljumlahKamarTersedia += $db->jumlahKamarTersedia;
            $totalkamarDigunakanKemarin += $db->kamarDigunakanKemarin;
            $totaldigunakanKemarin += $db->digunakanKemarin;
            $totalcheckIn += $db->checkIn;
            $totalcheckOut += $db->checkOut;
            $totalkemarinAsing += $db->kemarinAsing;
            $totalkemarinIndonesia += $db->kemarinIndonesia;
            $totalmasukAsing += $db->masukAsing;
            $totalmasukIndonesia += $db->masukIndonesia;
            $totalkeluarAsing += $db->keluarAsing;
            $totalkeluarIndonesia += $db->keluarIndonesia;

            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $newDate?></td>
                <td><?php echo $db->jumlahKamarTersedia?></td>
                <td><?php echo $db->kamarDigunakanKemarin?></td>
                <td><?php echo $db->digunakanKemarin?></td>
                <td><?php echo $db->checkIn?></td>
                <td><?php echo $db->checkOut?></td>
                <td><?php echo $db->kemarinAsing?></td>
                <td><?php echo $db->kemarinIndonesia?></td>
                <td><?php echo $db->masukAsing?></td>
                <td><?php echo $db->masukIndonesia?></td>
                <td><?php echo $db->keluarAsing?></td>
                <td><?php echo $db->keluarIndonesia?></td>
            </tr>
            <?php }?>
            <tr>
                <th colspan=2>Jumlah</th>
                <td><?php echo $totaljumlahKamarTersedia?></td>
                <td><?php echo $totalkamarDigunakanKemarin?></td>
                <td><?php echo $totaldigunakanKemarin?></td>
                <td><?php echo $totalcheckIn?></td>
                <td><?php echo $totalcheckOut?></td>
                <td><?php echo $totalkemarinAsing?></td>
                <td><?php echo $totalkemarinIndonesia?></td>
                <td><?php echo $totalmasukAsing?></td>
                <td><?php echo $totalmasukIndonesia?></td>
                <td><?php echo $totalkeluarAsing?></td>
                <td><?php echo $totalkeluarIndonesia?></td>
            </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <tr>
                    <th colspan="17">3. PERHITUNGAN</th>
                </tr>
                <tr>
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
                <?php 
                    $mkt            = $totaldigunakanKemarin + $totalcheckIn + $totalcheckOut;
                    $malamAsing     = $totalkemarinAsing + $totalmasukAsing + $totalkeluarAsing;
                    $malamDomestik  = $totalkemarinIndonesia + $totalmasukIndonesia + $totalkeluarIndonesia;
                    $totalMalam     = $malamAsing + $malamDomestik;
                    $tamuAsing      = $totalmasukAsing;
                    $tamuDomestik   = $totalmasukIndonesia;
                    $totalTamu      = $tamuAsing + $tamuDomestik;
                    $tpk            = ($mkt/$totaljumlahKamarTersedia)*100;
                    $tptt           = ($totalMalam/$totalkamarDigunakanKemarin)*100;
                    $gpr            = $totalMalam/$mkt;
                    $rLamaAsing     = $malamAsing / $totalmasukAsing;
                    $rLamaDomestik  = $malamDomestik / $totalmasukIndonesia;
                    $totalR         = (($totalkemarinAsing+$totalkemarinIndonesia+$totalmasukAsing+$totalmasukIndonesia)-$totalmasukAsing-$totalkeluarIndonesia)/($totalmasukAsing+$totalmasukIndonesia);
                    $komposisiAsing = ($totalmasukAsing/($totalmasukAsing+$totalmasukIndonesia))*100;
                    $komposisiDomestik = ($totalmasukIndonesia/($totalmasukAsing+$totalmasukIndonesia))*100;
                    $totalKomposisi = $komposisiAsing+$komposisiDomestik;
                ?>
                <tr>
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
                    <td><?php if($totalkemarinAsing>$totaljumlahKamarTersedia){echo $totalkemarinAsing;}else{echo $totaljumlahKamarTersedia;}?></td>
                </tr>
            </tbody>
        </table>
        
        <?php }?>
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
