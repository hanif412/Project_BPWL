
<div class="container-fluid">


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>

<div class="card mb-3">
  <div class="card-header bg-info text-white">
    Filter Per Bulan
  </div>
  <div class="card-body">
<form class="form-inline">
  <div class="form-group mb-2">
    <label for="staticEmail12">Bulan</label>
                                    <select name="bulan"  class="form-control ml-2">
     
    <?php $bulan = 'bulan'?>    
                                            <option value="">--- Pilih Bulan ---</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        
                                    </select>
  </div>
  <button type="submit" class="btn btn-info mb-2 ml-2">Filter</button>
</form>
  </div>
</div>

    <?php
        if((isset($_GET['bulan']) && $_GET['bulan']!='')){
            $bulan = $_GET['bulan'];
        }else{
            $bulan = 'bulan';
        }
    ?>

<a class="btn btn-sm btn-info mb-3" href="<?php echo base_url('admin/dataPresensi/register')?>"><i class="fas fa-plus"></i> Tambah Data Presensi</a>
<table class="table table-bordered">
<thead class="thead-light">
    <tr>
        
        <th class="text-center">Kode</th>
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
        
        <td class="text-center"><?php echo $h->kode ?></td>
        <td class="text-center"><?php echo $h->nim ?></td>
        <td class="text-center"><?php echo $h->nama ?></td>
        <td class="text-center"><?php echo $h->bulan ?></td>
        <td class="text-center"><?php echo $h->hadir ?></td>
        <td class="text-center"><?php echo $h->alpa ?></td>
        <td class="text-center">
            <a class="btn btn-sm btn-success" href="<?php echo base_url('admin/dataPresensi/edit/'.$h->kode)?>"><i class="fas fa-tools"></i></a>
        </td>
        <td class="text-center">
            <a class="btn btn-sm btn-danger" href="<?php echo base_url('admin/dataPresensi/hapus/'.$h->kode)?>"><i class="far fa-trash-alt"></i></a>
        </td>
    <tr>
<tbody>        
    <?php endforeach; ?>    
</table>

</div>




