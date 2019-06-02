<!-- jQuery 3 -->
<script src="<?php echo $this->config->item('admin') ?>/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo $this->config->item('admin') ?>/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo $this->config->item('admin') ?>/js/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $this->config->item('admin') ?>/js/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $this->config->item('admin') ?>/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $this->config->item('admin') ?>/js/demo.js"></script>

<script src="<?php echo $this->config->item('admin') ?>/css/datatables.net-bs/js/dataTables.bootstrap.js"></script>
<script src="<?php echo $this->config->item('admin') ?>/css/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()

  })
</script>
<script>
$(document).ready(function () {
  var reload= setInterval(function () {
    $.ajax({
        url: '<?php echo base_url("admin/Transaksi/cek_transaksi/") ?>',
        success: function(List_info_transaksi){
          // alert(1);
        $('#info_transaksi').html(List_info_transaksi);
      }
    })
  }, 1000);
})
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
