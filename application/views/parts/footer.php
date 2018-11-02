
<!--Footer Start Here -->
<footer class="footer-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="footer-left">
                    <span>&copy; 2015 <a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="footer-right">
                    <span class="footer-meta">Crafted with&nbsp;<i class="fa fa-heart"></i>&nbsp;by&nbsp;<a href="http://themeforest.net/user/westilian">westilian</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!--Rightbar Start Here -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jRespond.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/nav-accordion.js"></script>
<script src="<?php echo base_url() ?>assets/js/hoverintent.js"></script>
<script src="<?php echo base_url() ?>assets/js/waves.js"></script>
<script src="<?php echo base_url() ?>assets/js/switchery.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.loadmask.js"></script>
<script src="<?php echo base_url() ?>assets/js/icheck.js"></script>
<script src="<?php echo base_url() ?>assets/js/select2.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap-filestyle.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootbox.js"></script>
<script src="<?php echo base_url() ?>assets/js/animation.js"></script>
<script src="<?php echo base_url() ?>assets/js/colorpicker.js"></script>
<script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/js/sweetalert.js"></script>
<script src="<?php echo base_url() ?>assets/js/moment.js"></script>
<script src="<?php echo base_url() ?>assets/js/calendar/fullcalendar.js"></script>
<!--CHARTS-->

<script src="<?php echo base_url() ?>assets/js/chart/sparkline/jquery.sparkline.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/easypie/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/excanvas.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/curvedLines.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.stack.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.axislabels.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.spline.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/chart.init.js"></script>
<script src="<?php echo base_url() ?>assets/js/smart-resize.js"></script>
<script src="<?php echo base_url() ?>assets/js/layout.init.js"></script>
<script src="<?php echo base_url() ?>assets/js/matmix.init.js"></script>
<script src="<?php echo base_url() ?>assets/js/retina.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click','#btnCariBarang',function(){
            $("#modalCariBarang").modal();
        });
        $(document).on('click','#btnTambahKategori',function(){
            $("#modalTambahKategori").modal();
        });
        $(document).on('click','#btnTambahSubKategori',function(){
            $("#modalTambahSubKategori").modal();
        });
        $(document).on('click','#btnTambahSatuan',function(){
            $("#modalTambahSatuan").modal();
        });
        $('#kategori').select2();
        $('#sub_kategori').select2();
        $('#satuan').select2();
        $('#supplier').select2();


      });
    
</script>
</html>