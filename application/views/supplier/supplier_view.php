<?php
$this->load->view('parts/header');
$this->load->view('parts/menu');
$this->load->view('parts/top_bar');
 ?> 

<div class="row">
        <div class="box-widget tab-widget">
            <div class="widget-head clearfix">
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#detail_data_supplier" data-toggle="tab">Detail Data</a></li>
                    <li><a href="#list_barang" data-toggle="tab">Daftar Produk</a></li>
                    <!-- <li><a href="#profile" data-toggle="tab">Planogram</a></li> -->
                </ul>
                <span class="h-icon"><i class="fa fa-briefcase"></i></span>
                <h4>Pengaturan Supplier</h4>
            </div>
            <div class="widget-container">
                <div class=" widget-block">
                    <div class="tab-content">
                        <div class="tab-pane active" id="penjualan">
                            <div class="full-tab-container">
                    <button class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
                    <button class="btn btn-warning"><span class="fa fa-refresh"></span> Refresh</button>
                    <button class="btn btn-primary" id="btnCariBarang"><span class="fa fa-search"></span> Cari Supplier</button>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Informasi Detail</h4>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>Nama Supplier</label>
                            <input type="text" class="form-control">
                            
                        </div>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>Provinsi</label>
                            <select id="satuan" class="form-control col-md-5">
                                <option>
                                </option>
                            </select>
                            <br>
                            <label><span style="color:red">* </span>Kecamatan</label>
                            <select id="satuan" class="form-control col-md-5">
                                <option>
                                </option>
                            </select>
                            <br>
                            <label><span style="color:red">* </span>Kabupaten</label>
                            <select id="kategori" class="form-control col-md-5">
                                <option>
                                </option>
                            </select>
                            <br>
                            <label><span style="color:red">* </span>Kode Pos</label>
                            <select id="kategori" class="form-control col-md-5">
                                <option>
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>Alamat Supplier</label>
                            <textarea class="form-control" style="height: 200px"></textarea>
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <h4>Informasi Kontak</h4>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>No Telp</label>
                            <input type="text" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>Email</label>
                            <input type="text" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>No Handphone</label>
                            <input type="text" class="form-control"> 
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4>Informasi Bank</h4>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>Nama Bank</label>
                            <select id="satuan" class="form-control col-md-5">
                                <option>
                                </option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>No Rekening</label>
                            <input type="text" class="form-control"> 
                        </div>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>Nama Pemilik</label>
                            <input type="text" class="form-control"> 
                        </div>
                    </div>
                </div>
                        </div>
                        <div class="tab-pane" id="list_barang">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Tipe :</label>
                                    <select class="form-control">
                                        <option>Purchase Order</option>
                                        <option>Barang Dikirim</option>
                                        <option>Barang Diterima</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                
                                <div class="col-md-12">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Barcode</th>
                                                <th>Nama Barang</th>
                                                <th>Stok (D)</th>
                                                <th>Stok (W)</th>
                                                <th>Harga Beli</th>
                                                <th>Harga Jual</th>
                                                <th>Margin %</th>
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
</div>
<div class="modal fade" id="modalCariBarang" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cari Barang</h4>
        </div>
        <div class="modal-body">
            <table id='table_master_barang' class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga Jual</th>
                        <th>Harga Modal</th>
                        <th>Stok Barang</th>
                        <th>Satuan</th>
                        <th>Pengaturan</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
      
    </div>
  </div>
<?php
$this->load->view('parts/footer');
 ?> 
