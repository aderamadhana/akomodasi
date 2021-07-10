        
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Tanggal</label>
                        <input type="hidden" class="form-control" name="id_survei" value="<?php echo $id_survei?>">
                        <input type="date" class="form-control" name="tanggal[]" require>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Jumlah kamar tersedia</label>
                        <input type="number" min=0 class="form-control" name="jumlahKamarTersedia[]">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Kamar digunakan kemarin</label>
                        <input type="number" min=0 class="form-control" name="kamarDigunakanKemarin[]">
                    </div>
                </div>
            </div>
            <label><strong>Banyaknya Kamar</strong></label>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Digunakan kemarin</label>
                        <input type="number" min=0 class="form-control" name="digunakanKemarin[]">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Check in</label>
                        <input type="number" min=0 class="form-control" name="checkIn[]">
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label>Check out</label>
                        <input type="number" min=0 class="form-control" name="checkOut[]">
                    </div>
                </div>
            </div>

            <label><strong>Banyaknya Tamu Menginap</strong></label><br>
            
            <div class="form-row">
                <div class="col-md-4">
                    <label><strong>Kemarin</strong></label><br>
                    <div class="position-relative form-group">
                        <label>Asing</label>
                        <input type="number" min=0 class="form-control" name="kemarinAsing[]">
                    </div>
                    <div class="position-relative form-group">
                        <label>Indonesia</label>
                        <input type="number" min=0 class="form-control" name="kemarinIndonesia[]">
                    </div>
                </div>
                <div class="col-md-4">
                    <label><strong>Masuk hari ini</strong></label><br>
                    <div class="position-relative form-group">
                        <label>Asing</label>
                        <input type="number" min=0 class="form-control" name="masukAsing[]">
                    </div>
                    <div class="position-relative form-group">
                        <label>Indonesia</label>
                        <input type="number" min=0 class="form-control" name="masukIndonesia[]">
                    </div>
                </div>
                <div class="col-md-4">
                    <label><strong>Keluar hari ini</strong></label><br>
                    <div class="position-relative form-group">
                        <label>Asing</label>
                        <input type="number" min=0 class="form-control" name="keluarAsing[]">
                    </div>
                    <div class="position-relative form-group">
                        <label>Indonesia</label>
                        <input type="number" min=0 class="form-control" name="keluarIndonesia[]">
                    </div>
                </div>
            </div>
            <hr>