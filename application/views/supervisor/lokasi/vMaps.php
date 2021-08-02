<p class="h5 mb-0 text-gray-800"><a style="text-decoration: none;" href="<?php echo site_url('LokasiSupervisor')?>" ><i class="fa fa-chevron-left"></i> Kembali</a>  </p><br>

    <div id="mapid"></div>

<script>
    var map = L.map('mapid').setView([-7.883065, 112.533447], 13);
    var icon = L.icon({
      iconUrl: '<?php echo base_url() ?>assets/images/hotel.png',
      iconSize: [35, 35],
    });

    L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}').addTo(map);

    <?php foreach($lokasi as $data){ ?>
    L.marker([<?php echo $data->lattitude?>, <?php echo $data->longitude?>],{
          icon: icon
        })
        .bindPopup("<b>Jasa Akomodasi!</b><br><?php echo $data->namaKomersial?>")
        .openPopup()
        .addTo(map);
    <?php }?>
</script>