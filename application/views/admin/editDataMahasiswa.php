
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
<a class="btn btn-sm btn-info mb-3" href="<?php echo base_url('admin/dataMahasiswa')?>"><i class="fas fa-backward"></i></a>
<div class="card" style="width: 40%">

    <?php foreach($mahasiswa as $h) : ?>
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataMahasiswa/update')?>">
        

        <div class="form-group">
                                <label>NIM Mahasiswa</label>
                                    <input type="text" class="form-control form-control-user" name="nim" required
                                        placeholder="Nim" value="<?php echo $h->nim ?>">
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Nama Mahasiswa</label>
                                        <input type="text" class="form-control form-control-user" name="nama" required
                                            placeholder="NIM" value="<?php echo $h->nama ?>">
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control form-control-user" name="lahir" required
                                            placeholder="Tanggal Lahir" value="<?php echo $h->lahir ?>">
                                    </div>
                            </div>
                                
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jenis Kelamin</label>
                                            <select name="kelamin"  class="form-control" value="<?php echo $h->kelamin ?>" required >
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Prempuan">Perempuan</option>
                                            </select>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Kelas</label>
                                        <input type="text" name= "kelas" class="form-control" placeholder="Kelas" value="<?php echo $h->kelas ?>" required>
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jurusan</label>
                                        <input type="text" name= "jurusan" class="form-control" placeholder="Jurusan" value="<?php echo $h->jurusan ?>" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Asal Daerah</label>
                                        <input type="text" name= "asal" class="form-control" placeholder="Asal Daerah" value="<?php echo $h->asal ?>" required>
                                    </div>
                            </div>
    
    <button type="submit" class="btn btn-info">Edit Data</button>
    </div>
    <?php endforeach; ?>    
</div>
</div>
<!-- /.container-fluid -->




