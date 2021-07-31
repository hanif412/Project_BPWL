<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-7">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="col-lg-12">
                <div class="p-5">
                    <!-- Content Row -->
                    <form action="<?php echo  base_url('admin/ubahPassword/gantiPass') ?>" method="POST">
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" name="passBaru" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password</label>
                            <input type="password" name="ulangPass" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-info btn-user btn-block">Ganti Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>