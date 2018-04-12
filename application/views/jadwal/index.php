<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Jadwal Mengajar
        <small>Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">List Schedules</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Schedule Days</th>
                      <th>Schedule Times</th>
                      <th class="text-center">Actions</th>
                    </tr>
                    <?php 
                    $no = 1;
                      foreach ($jadwal_guru as $guru) { 
                     ?>
                     <tr>
                     <td><?php echo $no++; ?></td>
                     <td><?php echo $guru['schedule_days'] ?></td>
                     <td><?php echo $guru['schedule_times'] ?></td>
                      <td class="text-center">
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().('jadwal/edit/').$guru['schedule_id']; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger hapus" href="<?php echo base_url().('jadwal/delete/').$guru['schedule_id']; ?>" data-userid=""><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php 
                    }
                     ?>
                  </table>
                  
                </div>
                <div class="box-footer clearfix">
                  <?php echo $this->pagination->create_links(); ?>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "jadwal/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>

<script>
  $(document).ready(function() {
  $('.hapus').click(function() {
  return confirm("Are you sure you want to delete?");
  });
  });

  $(function() {
  $('[data-toggle="tooltip"]').tooltip()
  })
</script>
