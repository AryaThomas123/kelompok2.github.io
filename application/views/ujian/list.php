<div class="row">
	<div class="col-sm-3">
        <div class="alert bg-green" style="background-image: url('https://media.istockphoto.com/id/1132593892/id/foto/latar-belakang-atau-tekstur-grungy-bernoda-biru-tua.jpg?s=612x612&w=0&k=20&c=ydR_CCHr0zlzFde1V4qKz9s9ydwzDnSP89i5YhqOQg0='); background-size: cover; background-position: center;">
            <h4>Kelas<i class="pull-right fa fa-building-o"></i></h4>
            <span class="d-block"> <?=$mhs->nama_kelas?></span>                
        </div>
    </div>
    <div class="col-sm-3">
        <div class="alert bg-blue" style="background-image: url('https://media.istockphoto.com/id/1132593892/id/foto/latar-belakang-atau-tekstur-grungy-bernoda-biru-tua.jpg?s=612x612&w=0&k=20&c=ydR_CCHr0zlzFde1V4qKz9s9ydwzDnSP89i5YhqOQg0='); background-size: cover; background-position: center;">
            <h4>Jurusan<i class="pull-right fa fa-graduation-cap"></i></h4>
            <span class="d-block"> <?=$mhs->nama_jurusan?></span>                
        </div>
    </div>
    <div class="col-sm-3">
        <div class="alert bg-yellow" style="background-image: url('https://media.istockphoto.com/id/1132593892/id/foto/latar-belakang-atau-tekstur-grungy-bernoda-biru-tua.jpg?s=612x612&w=0&k=20&c=ydR_CCHr0zlzFde1V4qKz9s9ydwzDnSP89i5YhqOQg0='); background-size: cover; background-position: center;">
            <h4>Tanggal<i class="pull-right fa fa-calendar"></i></h4>
            <span class="d-block"> <?=date('l, d M Y')?></span>                
        </div>
    </div>
    <div class="col-sm-3">
        <div class="alert bg-red" style="background-image: url('https://media.istockphoto.com/id/1132593892/id/foto/latar-belakang-atau-tekstur-grungy-bernoda-biru-tua.jpg?s=612x612&w=0&k=20&c=ydR_CCHr0zlzFde1V4qKz9s9ydwzDnSP89i5YhqOQg0='); background-size: cover; background-position: center;">
            <h4>Jam<i class="pull-right fa fa-clock-o"></i></h4>
            <span class="d-block"> <span class="live-clock"><?=date('H:i:s')?></span></span>                
        </div>
    </div>
    <div class="col-sm-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$subjudul?></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        <button type="button" onclick="reload_ajax()" class="btn btn-sm btn-flat bg-purple"><i class="fa fa-refresh"></i> Reload</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive px-4 pb-3" style="border: 0">
                <table id="ujian" class="w-100 table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Ujian</th>
                        <th>Matkul</th>
						<th>Dosen</th>
                        <th>Jumlah Soal</th>
                        <th>Time</th>
                        <th class="text-center">Action</th>
                    </tr>        
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Exam Name</th>
                        <th>Course</th>
						<th>Lecturer</th>
                        <th>Number of Questions</th>
                        <th>Time</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot> -->
                </table>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url()?>assets/dist/js/app/ujian/list.js"></script>