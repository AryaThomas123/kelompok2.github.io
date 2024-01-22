<div class="callout callout-info">
    <h4>Peraturan Ujian!</h4>
    <p>Sebelum mahasiswa mengerjakan soal diharapkan mahaiswa membaca doa sesuai kepercayaan masing-masing, ujian bersifat individu dilarang melakukan kecurangan dalam bentuk apapun, silahkan submit ujian ketiak waktu ujian masih remaining!!</p>
</div>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Konfirmasi Data</h3>
    </div>
    <div class="box-body">
        <span id="id_ujian" data-key="<?=$encrypted_id?>"></span>
        <div class="row">
            <div class="col-sm-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <td><?=$mhs->nama?></td>
                    </tr>
                    <tr>
                        <th>Dosen</th>
                        <td><?=$ujian->nama_dosen?></td>
                    </tr>
                    <tr>
                        <th>Kelas/Jurusan</th>
                        <td><?=$mhs->nama_kelas?> / <?=$mhs->nama_jurusan?></td>
                    </tr>
                    <tr>
                        <th>Nama Ujian</th>
                        <td><?=$ujian->nama_ujian?></td>
                    </tr>
                    <tr>
                        <th>Jumlah Soal</th>
                        <td><?=$ujian->jumlah_soal?></td>
                    </tr>
                    <tr>
                        <th>Waktu Ujian</th>
                        <td><?=$ujian->waktu?> Minute</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <?=date('d M Y', strtotime($ujian->terlambat))?> 
                            <?=date('h:i A', strtotime($ujian->terlambat))?>
                        </td>
                    </tr>
                    <tr>
                        <th style="vertical-align:middle">Token</th>
                        <td>
                            <input autocomplete="off" id="token" placeholder="Token" type="text" class="input-sm form-control">
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6">
                <div class="box box-solid">
                    <div class="box-body pb-0">
                        <div class="callout callout-info">
                            <p>
                            Tekan Tombol "Mulai" Berwarna Hijau Untuk Memulai Ujian.
                            </p>
                        </div>
                        <?php
                        $mulai = strtotime($ujian->tgl_mulai);
                        $terlambat = strtotime($ujian->terlambat);
                        $now = time();
                        if($mulai > $now) : 
                        ?>
                        <div class="callout callout-success">
                            <strong><i class="fa fa-clock-o"></i> The exam will start on</strong>
                            <br>
                            <span class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->tgl_mulai))?>">00 Days, 00 Hours, 00 Minutes, 00 Seconds</strong><br/>
                        </div>
                        <?php elseif( $terlambat > $now ) : ?>
                        <button id="btncek" data-id="<?=$ujian->id_ujian?>" class="btn btn-success btn-lg mb-4">
                            <i class="fa fa-pencil"></i> Mulai
                        </button>
                        <div class="callout callout-danger">
                            <i class="fa fa-clock-o"></i> <strong class="countdown" data-time="<?=date('Y-m-d H:i:s', strtotime($ujian->terlambat))?>">00 Days, 00 Hours, 00 Minutes, 00 Seconds</strong><br/>
                            Batas Waktu Ujian.
                        </div>
                        <?php else : ?>
                        <div class="callout callout-danger">
                        Waktu Ujian Telah Berakhir Silahkan <strong>"Contact"</strong> dosen pengampu.<br/>
                        Untuk mengikuti ujian susulan
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/dist/js/app/ujian/token.js"></script>