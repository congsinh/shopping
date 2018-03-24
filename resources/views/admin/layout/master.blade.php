<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body>

<div id="wrapper">

    <!-- Navigation -->
@include('admin.layout.header')

    <!-- Page Content -->
@yield('content')
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="admin/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="admin/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="admin/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- DatePicker Boostrap JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<!-- CKEditor JavaScript -->
<script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>

<!-- Acounting javascript format money -->
<script src="admin/js/accounting.js"></script>





<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script src="admin/js/app.js"></script>
@yield('script')
</body>

</html>
