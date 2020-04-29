<section class="content-header">
      <h1>
        Dashboard
        <small>Data Order</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="https://antaran.posindonesia.co.id/cod/index.php/dashboard/member"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Data Order</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Order COD</h3>
              <hr>
              <div id="pesan"></div>
              <!--<p>
                  <a href="https://antaran.posindonesia.co.id/cod/index.php/dashboard/add_order" class="btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i>Tambah Pesanan Baru</a>
              </p>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">                
                <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No. COD/VA</th>
                  <th>Tgl Transaksi</th>
                  <th>Nama Pemesan</th>
                  <th>Jml Item Pesanan</th>
                  <th>Harga Barang</th>
                  <th>Ongkos Kirim</th>
                  <th>Total Biaya</th>
                  <th>Status</th>
                  <th><center>Action</center></th>
                </tr>
                </thead>
                <tbody>
                                </tbody>
                <tfoot>
                <tr>
                  <th colspan="7" style="text-align: left">Jika akan menghapus data order : <br>
                  Pastikan Kiriman COD sudah diproses/dikirim di Kantor Pos dan sudah dibayar (COD Selesai)</th>
                  
                  <!--<th>No. COD/VA</th>
                  <th>No. Resi</th>
                  <th>Nama Pemesan</th>
                  <th>Jml Item Pesanan</th>
                  <th>Harga Barang</th>
                  <th>Ongkos Kirim</th>
                  <th>Total Biaya</th>
                  <th>Status</th>
                  <th>Action</th>-->
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-detail">
          <div class="modal-dialog">
              <div class="modal-content" style="width:800px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Detail Pemesanan</h4>
              </div>
              <div class="modal-body">
                  <div id="detail"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->