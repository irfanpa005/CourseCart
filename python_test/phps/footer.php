
        </div>

      
        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="">KFWC</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="assets/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="assets/js/sticky.js"></script>



    <!-- SIDEBAR JS -->
    <script src="assets/plugins/sidebar/sidebar.js"></script>

   
   

    <!-- INTERNAL SELECT2 JS -->
    <script src="assets/plugins/select2/select2.full.min.js"></script>



  

     <!-- INTERNAL Bootstrap-Datepicker js-->
     <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
     
       <!-- INTERNAL Bootstrap-Datepicker js-->
    <script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    <!-- DATEPICKER JS -->
    <script src="assets/plugins/date-picker/date-picker.js"></script>
    <script src="assets/plugins/date-picker/jquery-ui.js"></script>
    <script src="assets/plugins/input-mask/jquery.maskedinput.js"></script>




    <!-- INTERNAL Vector js -->
    <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<!-- <script src="assets/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="assets/js/typehead.js"></script> -->

    <!-- INTERNAL INDEX JS -->
    <!-- <script src="assets/js/index1.js"></script> -->

     <!-- FILE UPLOADES JS -->
    <script src="assets/plugins/fileuploads/js/fileupload.js"></script>
    <script src="assets/plugins/fileuploads/js/file-upload.js"></script>

     <!-- SELECT2 JS -->
     <script src="assets/plugins/select2/select2.full.min.js"></script>
    <script src="assets/js/select2.js"></script>

       <!-- COLOR PICKER JS -->
       <script src="assets/plugins/pickr-master/pickr.es5.min.js"></script>
    <script src="assets/js/picker.js"></script>

    <script src="assets/js/formelementadvnced.js"></script>
    <script src="assets/js/form-elements.js"></script>
    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

 
    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>
   <script src="assets/plugins/summernote/summernote1.js"></script>
    <script src="assets/js/summernote.js"></script>
<script>
    $('#colorpicker').spectrum({
        color: '#000'
    });
    
    </script>
    <script type="text/javascript">
 $('.inline-datepicker-example').datepicker({
    format: "dd/mm/yyyy",
  todayBtn: "linked",
  language: "endinject",

  todayHighlight: true,
 }).on('changeDate', showTestDate);
 
 function showTestDate(){
  var value = $('#inline-datepicker-example').datepicker('getFormattedDate');
  $("#showDate").html(value);
  //$("#showDate").val(value);  for passing  input value

}
</script>

</body>

</html>