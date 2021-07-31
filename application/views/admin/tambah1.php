
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
<a class="btn btn-sm btn-primary mb-3" href="<?php echo base_url('admin/dataMahasiswa')?>"><i class="fas fa-backward"></i></a>
<div class="card" style="width: 40%">


    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataMahasiswa/tambah')?>">
        
    <div class="form-group">
        <label>NIM Mahasiswa</label>
        <input type="text" name= "nim" class="form-control" placeholder="NIM" required>
    </div>

    <div class="form-group">
        <label>Nama Mahasiswa</label>
        <input type="text" name= "nama" class="form-control" placeholder="Nama Mahasiswa" required>
    </div>

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" name= "lahir" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="kelamin"  class="form-control" required>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Prempuan">Perempuan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Kelas</label>
        <input type="text" name= "kelas" class="form-control" placeholder="Kelas" required>
    </div>

    <div class="form-group">
        <label>Jurusan</label>
        <input type="text" name= "jurusan" class="form-control" placeholder="Jurusan" required>
    </div>

    <div class="form-group">
        <label>Asal Daerah</label>
        <input type="text" name= "asal" class="form-control" placeholder="Asal Daerah" required>
    </div>

    <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
</div>
</div>
<!-- /.container-fluid -->




