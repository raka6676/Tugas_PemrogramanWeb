<section class="content-header">
      <h1>
        Dashboard
        <small>Data Order</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="https://antaran.posindonesia.co.id/cod/index.php/dashboard/member"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><i class="fa fa-list-ol"></i> Laporan</a></li>
        <li>Rekap Invoice</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Rekapitulasi Invoice</h3>
              <hr>
              <div class="form-horizontal">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Tanggal Awal</label>
                      <div class="col-sm-3 col-12">
                            <input type="date" class="form-control" id="tanggalAwal" value="2020-04-29" name="tanggal_awal" required>
                      </div>
                      <label class="col-sm-2 control-label">Tanggal Akhir</label>
                      <div class="col-sm-3 col-12">
                            <input type="date" class="form-control" id="tanggalAkhir" value="2020-04-29" name="tanggal_akhir" required>
                      </div>
                      <div class="col-sm-2 col-12">
                          <button class="btn btn-info" onClick="cari_laporan()"><i class="fa fa-search"></i> Cari Data Invoice</button>
                      </div>
                  </div>
              </div>
              <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">     
                <div id="hasil_cari">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>No. Reff</th>
                          <th>Jenis Layanan</th>
                          <th>Nama Pemesan</th>
                          <th>Alamat Pemesan</th>
                          <th>Jml Item Pesanan</th>
                          <th>Harga Barang</th>
                          <th>Ongkos Kirim</th>
                          <th>Total Biaya</th>
                        </tr>
                        </thead>
                        <tbody>
                                                </tbody>
                        <tfoot>
                        <tr>
                          <th colspan="5" style="text-align: center;">Total</th>
                          <th style="text-align: center;">0</th>
                          <th style="text-align: right;">0,00</th>
                          <th style="text-align: right;">0,00</th>
                          <th style="text-align: right;">0,00</th>
                        </tr>
                        </tfoot>
                      </table>
                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>