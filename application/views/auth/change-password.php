<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Change your password?</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('message'); ?>

                                    <form class="user" method="post" action="<?= base_url('auth/changepassword') ?>">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="Password1" name="password1" aria-describedby="emailHelp" placeholder="Enter New Password...">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                         <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password2" name="password2" aria-describedby="emailHelp" placeholder="Enter New Password...">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <button href="<?= base_url('auth') ?>" class="btn btn-dark btn-user btn-block">
                                            Change password
                                        </button>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>