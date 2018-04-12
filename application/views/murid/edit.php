<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Data Murid
      </h1>
    </section>
    <section class="content">
        <form action="<?php echo base_url().'murid/editUser' ?>" method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Enter User Details</h3>
                        </div>
                        <div class="box-body">                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fname">Username</label>
                                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $default['username']; ?>" maxlength="128">
                                         <input type="hidden" value="<?php echo $default['id_user']; ?>" name="id_user" id="id_user" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo $default['email']; ?>" maxlength="128">
                                    </div>
                                </div>
                            </div>    
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" maxlength="10">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" maxlength="10">
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Data Murid</h3>
                        </div>                    
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="full name">Nama Lengkap</label>
                                        <input type="text" class="form-control" Lengkap" name="full_name" placeholder="Nama" value="<?php echo $default['full_name'] ?>" maxlength="128">
                                        <input type="hidden" value="<?php echo $default['id_students']; ?>" name="id_students" id="id_students" />    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Kota</label>
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Kota" value="<?php echo $default['city'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday">Tempat, Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="birthday" placeholder="Tempat, Tanggal Lahir" value="<?php echo $default['birthday'] ?>" name="birthday">
                                    </div>                                  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="provinces">Provinsi</label>
                                        <input type="text" class="form-control" placeholder="Provinsi" id="provinces" value="<?php echo $default['provinces'] ?>" Provinsi" name="provinces">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value=""></option>
                                            <option value="L"<?php if($default['gender'] == 'L'){echo 'selected';} ?>>Laki-laki</option>
                                            <option value="P" <?php if($default['gender'] == 'P'){echo 'selected';} ?>>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="districts">Kecamatan</label>
                                        <input type="text" class="form-control" id="districts" placeholder="Kecamatan" value="<?php echo $default['districts'] ?>" name="districts">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="descriptions">Deskripsi</label>
                                        <textarea class="form-control" placeholder="Deskripsi" name="descriptions" id="descriptions" value="<?php echo $default['descriptions'] ?>"><?php echo $default['descriptions']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="villages">Desa</label>
                                        <input type="text" class="form-control" placeholder="Desa" id="villages" value="<?php echo $default['villages'] ?>" name="villages">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea name="address" placeholder="Alamat" class="form-control" id="address"><?php echo $default['address']; ?></textarea>
                                    </div>
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    
                                </div> 
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <?php
                        $this->load->helper('form');
                        $error = $this->session->flashdata('error');
                        if($error)
                        {
                    ?>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <?php echo $this->session->flashdata('error'); ?>                    
                    </div>
                    <?php } ?>
                </div>
            </div> 
        </form>
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>