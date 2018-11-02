<?php
$this->load->view('parts/header');
$this->load->view('parts/menu');
$this->load->view('parts/top_bar');
 ?> 

<div class="row">
    <div class="box-widget widget-module">
        <div class="widget-head clearfix">
            <span class="h-icon"><i class="fa fa-bars"></i></span>
            <h4>Master Barang</h4>
        </div>
        <div class="widget-container">
            <div class="widget-block">
                <div class="full-tab-container">
                    <button class="btn btn-success" id="btnCariBarang"><span class="fa fa-search"></span> Cari Barang</button>
                    <button class="btn btn-primary"><span class="fa fa-refresh"></span> Refresh</button>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h4>Informasi Detail</h4>
                        <div class="col-md-4">
                            <label>Gambar</label>
                            <input type="file" class="form-control">
                            <label><span style="color:red">* </span>Supplier</label>
                            <select id="supplier" class="form-control col-md-5">
                                    <option>
                                    </option>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <label><span style="color:red">* </span>Nama Barang</label>
                            <input type="text" class="form-control">
                            <label><span style="color:red">* </span>Deskripsi Barang</label>
                            <textarea class="form-control" style="height: 100px"></textarea>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <label><span style="color:red">* </span>Kode Barang</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-md-10">
                                <label><span style="color:red">* </span>Satuan</label>
                                <select id="satuan" class="form-control col-md-5">
                                    <option>
                                    </option>
                                </select>
                            
                            </div>
                            <div class="col-md-2">
                                <label>&nbsp;</label><br>
                                <button class="btn btn-success" id="btnTambahSatuan"><span class="fa fa-plus"></span></button>   
                            </div>
                            
                            
                            <div class="col-md-10">
                                <label><span style="color:red">* </span>Kategori</label>
                                <select id="kategori" class="form-control col-md-5">
                                    <option>
                                    </option>
                                </select>
                            
                            </div>
                            <div class="col-md-2">
                                <label>&nbsp;</label><br>
                                <button class="btn btn-success" id="btnTambahKategori"><span class="fa fa-plus"></span></button>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="box-widget tab-widget">
            <div class="widget-head clearfix">
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#penjualan" data-toggle="tab">Penjualan</a></li>
                    <li><a href="#setting_harga" data-toggle="tab">Setting Harga</a></li>
                    <li><a href="#persediaan" data-toggle="tab">Persediaan</a></li>
                    <!-- <li><a href="#profile" data-toggle="tab">Planogram</a></li> -->
                </ul>
                <span class="h-icon"><i class="fa fa-briefcase"></i></span>
                <h4>Pengaturan Produk</h4>
            </div>
            <div class="widget-container">
                <div class=" widget-block">
                    <div class="tab-content">
                        <div class="tab-pane active" id="penjualan">
                            <div class="row">
                               <div class="col-md-6">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Penjualan Terakhir</th>
                                            <th>:</th>
                                            <td>2018-10-11</td>
                                        </tr>
                                        <tr>
                                            <th>Margin</th>
                                            <th>:</th>
                                            <td>25%</td>
                                        </tr>
                                        <tr>
                                            <th>Promo</th>
                                            <th>:</th>
                                            <td>Aktif</td>
                                        </tr>
                                    </table>
                                    <hr>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Tanggal</th>
                                                <th>Qty</th>
                                                <th>Harga Beli</th>
                                                <th>Harga Jual</th>
                                                <th>Margin</th>
                                                <th>Margin (%)</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    Grafik
                                </div> 
                            </div>
                        </div>
                        <div class="tab-pane" id="setting_harga">
                            <div class="block-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Harga Beli</label>
                                        <input type="text" class="form-control">
                                        <label>Harga Jual</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Harga Beli Terakhir</label>
                                        <input type="text" class="form-control" disabled>
                                        <label>Harga Jual Terakhir</label>
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="persediaan">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Stok Gudang</label>
                                    <input type="number" class="form-control">
                                    <label>Stok Display</label>
                                    <input type="number" class="form-control">
                                    <label>Stok Minimal</label>
                                    <input type="number" class="form-control">
                                    <label>Stok Maksimal</label>
                                    <input type="number" class="form-control">
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
<div class="modal fade" id="modalTambahKategori" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Kategori</h4>
        </div>
        <div class="modal-body">
            <label>Nama Kategori</label>
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
