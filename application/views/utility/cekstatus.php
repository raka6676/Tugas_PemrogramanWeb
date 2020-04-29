<section class="content-header">
      <h1>
        Dashboard
        <small>Data Order</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="http://antaran.posindonesia.co.id/cod/index.php/dashboard/member"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Cek Status Kiriman</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Cek Status Kiriman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">                
                <div class="form-horizontal">
                  <div class="form-group">
                      <label class="col-sm-2 control-label">Jenis Pelacakan</label>
                      <div class="col-sm-3 col-12">
                          <select id="search" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected" value="extid">EXT ID</option>
                                <option value="barcode">BARCODE</option>
                            </select>
                      </div>
                      <div class="col-sm-3 col-12" id="barcode">
                          <input type="text" class="form-control" id="inputBarcode" name="cari_barcode" placeholder="Nomor Barcode Kiriman">
                      </div>
                      <div class="col-sm-3 col-12" id="extid">
                          <input type="text" class="form-control" id="inputExtid" name="cari_extid" placeholder="Nomor External ID">
                      </div>
                      <div class="col-sm-2 col-12">
                          <button class="btn btn-info" onClick="cari()"><i class="fa fa-search"></i> Lacak Kiriman</button>
                      </div>
                  </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
        
        <div class="row">
        <div class="col-md-12">
          <!-- The time line -->
          <div id="status"></div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>