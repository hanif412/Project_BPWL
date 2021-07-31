
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
<a class="btn btn-sm btn-info mb-3" href="<?php echo base_url('admin/dataPresensi')?>"><i class="fas fa-backward"></i></a>
<div class="card" style="width: 40%">


    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataPresensi/tambah')?>">

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Kode</label>
                                        <input type="text" name= "kode" class="form-control" placeholder="Kode" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>NIM Mahasiswa</label>
                                        <input type="text" name= "nim" class="form-control" placeholder="NIM" required>
                                    </div>
                            </div>
                                
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Nama Mahasiswa</label>
                                        <input type="text" name= "nama" class="form-control" placeholder="Nama Mahasiswa" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Bulan</label>
                                        <select name="bulan"  class="form-control" value="<?php echo $h->bulan ?>">
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
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Hadir</label>
                                         <input type="text" name= "hadir" class="form-control" placeholder="Hadir" required>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                    
                            </div>

    

    <button type="submit" class="btn btn-info">Tambah Data</button>
    </div>
</div>
</div>
<!-- /.container-fluid -->




