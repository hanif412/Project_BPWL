
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
<a class="btn btn-sm btn-info mb-3" href="<?php echo base_url('admin/dataNilai')?>"><i class="fas fa-backward"></i></a>
<div class="card" style="width: 40%">


    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataNilai/tambah')?>">

                            
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>NIM Mahasiswa</label>
                                    <input type="text" class="form-control form-control-user" name="nim" required
                                        placeholder="Nim Mahasiswa">
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Nama Mahasiswa</label>
                                        <input type="text" class="form-control form-control-user" name="nama" required
                                            placeholder="Nama Mahasiswa">
                                    </div>
                            </div>
                                
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Nilai BWPL</label>
                                        <input type="text" name= "bpwl" class="form-control" placeholder="Nilai BPWL" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Nilai PSOD</label>
                                    <input type="text" name= "psod" class="form-control" placeholder="Nilai PSOD" required>
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Nilai PPBO</label>
                                        <input type="text" name= "ppbo" class="form-control" placeholder="Nilai PPBO" required>
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Nilai PBDL</label>
                                        <input type="text" name= "pbdl" class="form-control" placeholder="Nilai PBDL" required>
                                    </div>
                            </div>
        

    
    <button type="submit" class="btn btn-info">Tambah Data</button>
    </div>
</div>
</div>
<!-- /.container-fluid -->




