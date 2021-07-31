<div class="row">
    <div class="col-md-4">
        <div class="dbox dbox--color-1">
            <!-- <div class="dbox__icon">
                <i class="glyphicon glyphicon-cloud"></i>
            </div> -->
            <div class="dbox__body">
                <span class="dbox__count"><?php echo $countPetugas?></span>
                <span class="dbox__title">Total Petugas</span>
            </div>
            
            <div class="dbox__action">
            <a href="<?php echo site_url('Petugas')?>" style="text-decoration: none" class="dbox__action__btn">More Info</a>
            </div>				
        </div>
    </div>
    <div class="col-md-4">
        <div class="dbox dbox--color-2">
            <!-- <div class="dbox__icon">
                <i class="glyphicon glyphicon-cloud"></i>
            </div> -->
            <div class="dbox__body">
                <span class="dbox__count"><?php echo $countAkomodasi?></span>
                <span class="dbox__title">Total Jasa Akomodasi</span>
            </div>
            
            <div class="dbox__action">
                <a href="<?php echo site_url('Lokasi')?>" style="text-decoration: none" class="dbox__action__btn">More Info</a>
            </div>				
        </div>
    </div>
    <div class="col-md-4">
        <div class="dbox dbox--color-3">
            <!-- <div class="dbox__icon">
                <i class="glyphicon glyphicon-cloud"></i>
            </div> -->
            <div class="dbox__body">
                <span class="dbox__count"><?php echo $countSurvei?></span>
                <span class="dbox__title">Total Survei (butuh validasi)</span>
            </div>
            
            <div class="dbox__action">
                <a href="<?php echo site_url('HasilSurvei')?>" style="text-decoration: none" class="dbox__action__btn">More Info</a>
            </div>				
        </div>
    </div>
</div>