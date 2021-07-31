
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
</div>
<a class="btn btn-sm btn-info mb-3" href="<?php echo base_url('admin/dataNilai')?>"><i class="fas fa-backward"></i></a>
<div class="card" style="width: 40%">

<?php foreach($nilai as $h) : ?>
    <div class="card-body">
        <form method="POST" action="<?php echo base_url('admin/dataNilai/update')?>">
    
        <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>NIM Mahasiswa</label>
                                    <input type="text" class="form-control form-control-user" name="nim" required
                                        placeholder="Nim" value="<?php echo $h->nim ?>">
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Nama Mahasiswa</label>
                                        <input type="text" class="form-control form-control-user" name="nama" required
                                            placeholder="Nama" value="<?php echo $h->nama ?>">
                                    </div>
                            </div>
                                
                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Nilai BWPL</label>
                                        <input type="text" name= "bpwl" class="form-control" placeholder="Nilai BPWL" required value="<?php echo $h->BPWL ?>">
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Nilai PSOD</label>
                                    <input type="text" name= "psod" class="form-control" placeholder="Nilai PSOD" required value="<?php echo $h->PSOD ?>">
                                    </div>
                            </div>

                            <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Nilai PPBO</label>
                                        <input type="text" name= "ppbo" class="form-control" placeholder="Nilai PPBO" required value="<?php echo $h->PPBO ?>">
                                    </div>
                                    <div class="col-sm-6">
                                    <label>Nilai PBDL</label>
                                        <input type="text" name= "pbdl" class="form-control" placeholder="Nilai PBDL" required value="<?php echo $h->PBDL ?>">
                                    </div>
                            </div>
        
    <button type="submit" class="btn btn-info">Edit Data</button>
    </div>
<?php endforeach; ?>   
</div>
</div>
<!-- /.container-fluid -->




