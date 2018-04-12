<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Data Guru
      </h1>
    </section>
    
    <section class="content">
        <form action="<?php echo base_url().'guru/editUser' ?>" method="post">
            <div class="row">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">Data Guru</h3>
                        </div>                    
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="full name">Nama Lengkap</label>
                                        <input type="text" class="form-control" Lengkap" name="full_name" value="<?php echo $default['full_name'] ?>" maxlength="128">
                                        <input type="hidden" value="<?php echo $default['id_teachers']; ?>" name="id_teachers" id="id_teachers" />    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Alamat</label>
                                        <textarea name="address" class="form-control" id="address"><?php echo $default['address']; ?></textarea>
                                    </div>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday">Tempat, Tanggal Lahir</label>
                                        <input type="text" class="form-control" id="birthday" value="<?php echo $default['birthday'] ?>" name="birthday">
                                    </div>                                  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Kota</label>
                                        <input type="text" class="form-control" id="city" name="city" value="<?php echo $default['city'] ?>">
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
                                        <label for="provinces">Provinsi</label>
                                        <input type="text" class="form-control" id="provinces" value="<?php echo $default['provinces'] ?>" Provinsi" name="provinces">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="current_job">Pekerjaan Saat Ini</label>
                                        <textarea class="form-control" name="current_job" id="current_job" value="<?php echo $default['current_job'] ?>"><?php echo $default['current_job']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="districts">Kecamatan</label>
                                        <input type="text" class="form-control" id="districts" value="<?php echo $default['districts'] ?>" name="districts">
                                    </div>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="descriptions">Deskripsi</label>
                                        <textarea name="descriptions" class="form-control" id="descriptions"><?php echo $default['descriptions']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="villages">Desa</label>
                                        <input type="text" class="form-control" id="villages" value="<?php echo $default['villages'] ?>" name="villages">
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
                            <h3 class="box-title">Riwayat Pendidikan</h3>
                        </div>                    
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="primary_school">Nama SD</label>
                                        <input type="text" class="form-control" Lengkap" name="primary_school" id="primary_school" value="<?php echo $default['primary_school'] ?>" maxlength="128"> 
                                        <input type="hidden" value="<?php echo $default['id']; ?>" name="id" id="id" />  
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="s1">Strata 1</label>
                                        <input type="text" class="form-control" id="s1" name="s1" value="<?php echo $default['s1'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="junior_high_school">Nama SMP</label>
                                        <input type="text" class="form-control" id="junior_high_school" value="<?php echo $default['junior_high_school'] ?>" Provinsi" name="junior_high_school">
                                    </div>                                  
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="s2">strata 2</label>
                                        <input type="text" class="form-control" id="s2" value="<?php echo $default['s2'] ?>" Provinsi" name="s2">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="senior_high_school">Nama SMA</label>
                                        <input type="text" class="form-control" id="senior_high_school" value="<?php echo $default['senior_high_school'] ?>" name="senior_high_school">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="s3">Strata 3</label>
                                        <input type="text" class="form-control" id="s3" value="<?php echo $default['s3'] ?>" name="s3">
                                    </div>
                                </div> 
                            </div>
                            <div class="box-header">
                                <h3 class="box-title">Jenjang Kuliah</h3>
                            </div>  
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label for="diploma">Diploma</label>
                                        <input type="text" class="form-control" id="diploma" value="<?php echo $default['diploma'] ?>" name="diploma">
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
                            <h3 class="box-title">Wilayah Kesanggupan Mengajar</h3>
                        </div>                    
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Kota/Kabupaten</label>
                                        <input type="text" class="form-control" Lengkap" name="city" id="city" value="<?php echo $default['city'] ?>" maxlength="128">  
                                        <input type="hidden" value="<?php echo $default['radius_id']; ?>" name="radius_id" id="radius_id" /> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="district">Kecamatan</label>
                                        <input type="text" class="form-control" id="district" name="district" value="<?php echo $default['district'] ?>">
                                    </div>
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