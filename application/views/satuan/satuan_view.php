<?php
$this->load->view('parts/header');
$this->load->view('parts/menu');
$this->load->view('parts/top_bar');
 ?> 

<div class="row">
    <div class="col-md-6">
        <div class="box-widget widget-module">
            <div class="widget-head clearfix">
                <span class="h-icon"><i class="fa fa-bars"></i></span>
                <h4>Satuan</h4>
            </div>
            <div class="widget-container">
                <div class="widget-block">
                    <div class="full-tab-container">
                        <button class="btn btn-primary" id="btnTambahSatuan"><span class="fa fa-plus"></span> Tambah Satuan</button>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama Satuan</th>
                                        <th>Pengaturan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
</div>
</div>
</div>
<div class="modal fade" id="modalTambahSatuan" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Satuan</h4>
        </div>
        <div class="modal-body">
            <label>Nama Satuan</label>
            <input type="text" class="form-control">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
</div>
<?php
$this->load->view('parts/footer');
 ?> 
