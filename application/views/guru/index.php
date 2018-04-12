<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Data Guru
        <small>Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Teachers List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url('guru/cari');?>" method="post" id="searchList">
                            <div class="input-group">
                              <input type="text" name="cari" value="<?php echo $cari ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search Name"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Address</th>
                      <th>Districts</th>
                      <th>Villages</th>

                      <th class="text-center">Actions</th>
                    </tr>
                    <?php 
                    $no = 1;
                      foreach ($data_guru as $guru) { 
                     ?>
                     <tr>
                     <td><?php echo $no++ ?></td>
                     <td><?php echo $guru['full_name'] ?></td>
                     <td><?php echo $guru['address'] ?></td>
                     <td><?php echo $guru['districts'] ?></td>
                     <td><?php echo $guru['villages'] ?></td>

                      <td class="text-center">
                          <a class="btn btn-sm btn-info" href="<?php echo base_url().('guru/edit/').$guru['id_teachers']; ?>"><i class="fa fa-pencil"></i></a>
                          <a class="btn btn-sm btn-danger hapus" href="<?php echo base_url().('guru/delete/').$guru['id_teachers'];?>"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php 
                    }
                     ?>
                  </table>
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                 <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
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
            jQuery("#searchList").attr("action", baseURL + "guru/" + value);
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
