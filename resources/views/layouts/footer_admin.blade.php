 </div>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- Sweet Alert Message -->
 @if (session()->has('message'))
     <div class="flashdata" style="display: none;">
         <div class="data-icon">{{ session('message')['icon'] }}</div>
         <div class="data-title">{{ session('message')['title'] }}</div>
         <div class="data-text">{{ session('message')['text'] }}</div>
         @if (array_key_exists('to_id', session('message')))
             <div class="data-to_id">{{ session('message')['to_id'] }}</div>
         @endif
     </div>
 @endif

 <!-- REQUIRED SCRIPTS -->

 <!-- jQuery -->
 <script src="/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap -->
 <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 {{-- Sweet Alert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <!-- AdminLTE -->
 <script src="/dist/js/adminlte.js"></script>
 <script src="/js/script_admin.js"></script>
 </body>

 </html>
