<!-- page content -->
<div class="right_col" role="main">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Responsive example<small>Users</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Settings 1</a>
                </li>
                <li><a href="#">Settings 2</a>
                </li>
              </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <p class="text-muted font-13 m-b-30">
          <a href="" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah data</a>
          </p>

          <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>no</th>
                <th>foto</th>
                <th>nama</th>
                <th>alamat</th>
                <th>tempat/ tanggal lahir</th>
                <th>email</th>
                <th>no hp</th>
                <th>kategori</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users->person as $key => $value) : ?>
                <tr>
                  <td><?= ($key + 1) ?></td>
                  <td><?= $value->foto_profil ?></td>
                  <td><?= $value->nama_user ?></td>
                  <td><?= $value->alamat_user ?></td>
                  <td><?= $value->tempattl_user ?>,
                    <?= $value->tl_user ?></td>
                  <td><?= $value->email ?></td>
                  <td><?= $value->no_hp ?></td>
<td><?= $value->kategori_user?></td>
                  <td><a href="" class="btn btn-primary"><span class="fa fa-edit"></span> edit</a><a href="" class="btn btn-danger"><span class="fa fa-trash"></span> hapus</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>


        </div>
      </div>
    </div>

  </div>
</div>
<!-- /page content -->
