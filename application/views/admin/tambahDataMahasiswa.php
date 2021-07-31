
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
<a class="btn btn-sm btn-info mb-3" href="<?php echo base_url('admin/dataMahasiswa')?>"><i class="fas fa-backward"></i></a>
<div class="card" style="width: 40%">


    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataMahasiswa/tambah')?>">

                        <div class="form-group">
                                <label>NIM Mahasiswa</label>
                                    <input type="text" class="form-control form-control-user" name="nim" required
                                        placeholder="Nim">
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Nama Mahasiswa</label>
                                        <input type="text" class="form-control form-control-user" name="nama" required
                                            placeholder="Nama Mahasiswa">
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-user" name="lahir" required
                                            placeholder="Tanggal Lahir">
                                    </div>
                            </div>
                                
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jenis Kelamin</label>
                                            <select name="kelamin"  class="form-control" required>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Prempuan">Perempuan</option>
                                            </select>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Kelas</label>
                                        <input type="text" name= "kelas" class="form-control" placeholder="Kelas" required>
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jurusan</label>
                                        <input type="text" name= "jurusan" class="form-control" placeholder="Jurusan" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Asal Daerah</label>
                                        <input type="text" name= "asal" class="form-control" placeholder="Asal Daerah" required>
                                    </div>
                            </div>


    <button type="submit" class="btn btn-info">Tambah Data</button>
    </div>
</div>
</div>
<!-- /.container-fluid -->




