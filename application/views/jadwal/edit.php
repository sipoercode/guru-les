<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Edit Data Guru
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter User Details</h3>
                    </div>                    
                    <form action="<?php echo base_url().'jadwal/editUser' ?>" method="post">
                        <div class="box-body">
                            <div class="row">              
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="schedule_days">Hari</label>
                                        <select class="form-control" id="schedule_days" name="schedule_days">
                                            <option value="Senin"<?php if($default['schedule_days'] == 'Senin'){echo 'selected';} ?>>Senin</option>
                                            <option value="Selasa" <?php if($default['schedule_days'] == 'Selasa'){echo 'selected';}?>>Selasa</option>
                                            <option value="Rabu" <?php if($default['schedule_days'] == 'Rabu'){echo 'selected';}?>>Rabu</option>
                                            <option value="Kamis" <?php if($default['schedule_days'] == 'Kamis'){echo 'selected';}?>>Kamis</option>
                                            <option value="Jumat" <?php if($default['schedule_days'] == 'Jumat'){echo 'selected';}?>>Jumat</option>
                                            <option value="Sabtu" <?php if($default['schedule_days'] == 'Sabtu'){echo 'selected';}?>>Sabtu</option>
                                        </select>
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="villages">Jam</label>
                                        <input type="text" class="form-control" id="schedule_times" value="<?php echo $default['schedule_times'] ?>" name="schedule_times">
                                        <input type="hidden" name="schedule_id" id="schedule_id" value="<?php echo $default['schedule_id']; ?>">
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
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
    </section>
</div>

<script src="<?php echo base_url(); ?>assets/js/editUser.js" type="text/javascript"></script>