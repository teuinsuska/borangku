<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-3">
  <h3 class="h4 mb-0 text-gray-800">Mohon Lengkapi Profil Anda</h3>
</div>

<div class="row">
  <div class="col-lg-3 mb-4">
    <!-- Project Card Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-user-graduate"></i> | <?= $status; ?></h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid p-2 mt-1 mb-2 border rounded" style="width: 15rem;" src="https://iraise.uin-suska.ac.id/site/image/id/<?= $nim; ?>" alt="<?= $name; ?>">
        </div>
        <!-- Divider -->
        <hr class="sidebar-divider my-2">
        <div class="row">
          <div class="col-lg-4 mb-2 mt-2">
            <label">Nama</label>
          </div>
          <div class="col-lg-8">
            <input type="text" value="<?= $name; ?>" class="form-control" disabled="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-2 mt-2">
            <label">NIM</label>
          </div>
          <div class="col-lg-8">
            <input type="text" value="<?= $nim; ?>" class="form-control" disabled="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-2 mt-2">
            <label">Jurusan</label>
          </div>
          <div class="col-lg-8">
            <input type="text" value="TEKNIK ELEKTRO" class="form-control" disabled="">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-2 mt-2">
            <label">PA</label>
          </div>
          <div class="col-lg-8">
            <h3 class="small font-weight-bold"><span> <?= ' ' . $pa; ?></span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-8 mb-4">
    <!-- Project Card Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark"><i class="fas fa-folder-open"></i> | Informasi Akademik
          <button class="btn btn-dark float-right"> <i class="fa fa-save"></i>Simpan </button>
        </h6>
      </div>
      <div class="card-body">
        <div class="border rounded p-3">
          <div class="row">
            <div class="col-md-6">
              Info TA
              <!-- Divider -->
              <hr class="sidebar-divider my-2">
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Judul TA</label>
                </div>
                <div class="col-md-8">
                  <div class="input-group">
                    <textarea class="form-control" rows="8" disabled><?= ucwords(strtolower($judul_ta)); ?></textarea>
                  </div>
                </div>
              </div>
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Pembimbing 1</label>
                </div>
                <div class="col-md-8">
                  <div class="input-group">: <?= $pembimbing_ta1; ?></div>
                </div>
              </div>
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Pembimbing 2</label>
                </div>
                <div class="col-md-8">
                  <div class="input-group">: <?= $pembimbing_ta2; ?></div>
                </div>
              </div>
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Penguji 1</label>
                </div>
                <div class="col-md-8">
                  <div class="input-group">: <?= $penguji1; ?></div>
                </div>
              </div>
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Penguji 2</label>
                </div>
                <div class="col-md-8">
                  <div class="input-group">: <?= $penguji2; ?></div>
                </div>
            </div>
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Ketua Sidang</label>
                </div>
                <div class="col-md-8">
                  <div class="input-group">: <?= $ketua_sidang; ?></div>
                </div>
            </div>
          </div>
            <div class="col-md-6">
              Info KP
              <!-- Divider -->
              <hr class="sidebar-divider my-2">
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Judul KP/ProMin</label>
                </div>
                <div class="col-md-8">
                  <textarea class="form-control" rows="8" disabled><?= ucwords(strtolower($judul_kp)); ?></textarea>
                </div>
              </div>
              <div class="form-group row small">
                <div class="col-md-4">
                  <label class="control-label">Pembimbing KP/ProMin</label>
                </div>
                <div class="col-md-8">
                  <div class="input-group">: <?= $pa; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>