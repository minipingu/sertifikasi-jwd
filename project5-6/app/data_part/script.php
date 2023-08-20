<!-- jQuery -->
<script src="../adminLTE/plugins/jquery/jquery.min.js" src=""></script>
<!-- Bootstrap 4 -->
<script src="../adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../adminLTE/plugins/jszip/jszip.min.js"></script>
<script src="../adminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../adminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../adminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
$(function() {
  $("#example1").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": [{
        extend: 'copy',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        extend: 'excel',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        extend: 'pdf',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        extend: 'print',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        extend: 'csv',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      },
      {
        extend: 'colvis',
        exportOptions: {
          columns: ':not(:last-child)'
        }
      }
    ]
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
  });
});
</script>
