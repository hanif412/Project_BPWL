
<div class="container-fluid">


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<table class="table table-bordered">
<thead class="thead-light">
    <tr>
        <th class="text-center">No</th>
        <th class="text-center">NIM</th>
        <th class="text-center">Nama Mahasiswa</th>
        <th class="text-center">Bulan</th>
        <th class="text-center">Hadir</th>
        <th class="text-center">Alpha</th>
        <th class="text-center">Edit</th>
        <th class="text-center">Hapus</th>
    <tr>
</thead>      
    <?php $no = 1; foreach($presensi as $h) : ?>
<tbody>        
    <tr>
        <td class="text-center"><?php echo $no++ ?></td>
        <td class="text-center"><?php echo $h->nim ?></td>
        <td class="text-center"><?php echo $h->nama ?></td>
        <td class="text-center"><?php echo $h->bulan ?></td>
        <td class="text-center"><?php echo $h->hadir ?></td>
        <td class="text-center"><?php echo $h->alpa ?></td>
        <td class="text-center">
            <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/dataMahasiswa/update/'.$h->nim)?>"><i class="fas fa-tools"></i></a>
        </td>
        <td class="text-center">
            <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataMahasiswa/hapus/'.$h->nim)?>"><i class="far fa-trash-alt"></i></a>
        </td>
    <tr>
<tbody>        
    <?php endforeach; ?>    
</table>

</div>




