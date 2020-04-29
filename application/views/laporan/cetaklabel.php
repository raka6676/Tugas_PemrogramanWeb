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
                      <label class="col-sm-2 control-label">Jenis Pencarian</label>
                      <div class="col-sm-2 col-12">
                          <select class="form-control" id="jenis">
                              <option value="0">==PILIH==</option>
                              <option value="1">Tanggal</option>
                              <option value="2">Nomor COD</option>
                          </select>
                      </div>
                      <div id="cod_number" class="col-sm-2 col-12">
                          <input type="text" class="form-control" id="no_cod"  name="no_cod">
                      </div>
                      <div id="tanggal">
                            <div class="col-sm-3 col-12">
                                <input type="date" class="form-control" id="tanggalAwal" value="2020-04-29" name="tanggal_awal" required>
                            </div>
                            <div class="col-sm-2 col-12">
                                  <input type="date" class="form-control" id="tanggalAkhir" value="2020-04-29" name="tanggal_akhir" required>
                            </div>
                      </div>
                       <div class="col-sm-2 col-12">
                            <button class="btn btn-info" onClick="cari_labels()"><i class="fa fa-search"></i> Cari Label</button>
                        </div>
                  </div>
              </div>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">   
                <p><button class="btn btn-info pull-right" onclick="printDiv('hasil_cari');"><i class="fa fa-print"></i> &nbsp;Cetak</button><br></p>
                <div id="hasil_cari">
                                    </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>