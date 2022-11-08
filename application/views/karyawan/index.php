<style>
    body{
        background-image: url('https://th.bing.com/th/id/R.554789bd0abef2d279ead020240cf119?rik=HsMMuOEEMsuiCg&riu=http%3a%2f%2fpradaandpearls.com%2fwp-content%2fuploads%2f2020%2f10%2fcloud-feature.png&ehk=1VUuxy%2btDRfqAftTQU7V1pS9jwWlZZNL4OzqEfkUY4o%3d&risl=&pid=ImgRaw&r=0')
    }
</style>
<?php 
function rupiah($angka){
	$hasil_rupiah = number_format($angka,0,',','.');
	return $hasil_rupiah;
}

?>
<section class="py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="flash-data" data-flash="<?= $this->session->flashdata("karyawan");?>"></div>
                <div class="card card-body">
                    <h1 class="text-center fw-bold mb-4"><?= $title;?></h1>
                    <div class="mb-3">
                        <a href="<?= base_url();?>karyawan/input" class="btn btn-danger"><i class="fa-sharp fa-solid fa-plus me-2"></i>Tambah Data</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="text-center table-primary fw-bold">
                                <tr>
                                    <th width="15px">No</th>
                                    <th>Nama</th>
                                    <th width="100px">Status</th>
                                    <th width="60px">Jabatan</th>
                                    <th width="150px">Gaji Pokok</th>
                                    <th width="150px">Tunjangan</th>
                                    <th width="150px">Total Gaji</th>
                                    <th width="100px">Foto</th>
                                    <th width="230px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no = 1;
                                foreach($karyawan as $k):?>
                                    <tr>
                                        <td class="text-center"><?= $no++;?></td>
                                        <td><?= $k["nama"];?></td>
                                        <td><?= $k["status"];?></td>
                                        <td><?= $k["jabatan"];?></td>
                                        <td><?= rupiah($k["gajipokok"]);?></td>
                                        <td><?= rupiah($k["tunjangan"]);?></td>
                                        <td><?= rupiah($k["total"]);?></td>
                                        <td class="text-center"><img src="<?= base_url().$k['foto'];?>" width="80px" class="h-auto"></td>
                                        <td class="d-flex gap-2 justify-content-center">
                                            <a href="<?= base_url();?>karyawan/edit/<?= $k['id'];?>" class="btn btn-sm btn-warning d-flex align-items-center"><i class="fa-sharp fa-solid fa-pen-to-square me-2"></i>Edit</a>
                                            <a href="<?= base_url();?>karyawan/hapus/<?= $k['id'];?>" class="btn btn-sm btn-danger tombol-hapus d-flex align-items-center"><i class="fa-sharp fa-solid fa-trash me-2"></i>Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section