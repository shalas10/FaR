@extends('layouts.main')
@section('content')                    
    <body>
        <!-- Page Content-->
          <div class="row">
            <div class="col-sm-12">
              <div class="page-title-box">
                <div class="float-right">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Amezia</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="javascript:void(0);">Tables</a>
                    </li>
                    <li class="breadcrumb-item active">Edit</li>
                  </ol>
                </div>
                <h4 class="page-title">Data Karyawan</h4>
              </div>
            </div>
          </div>
          <!-- end page title end breadcrumb -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="mt-0">Tabel Karyawan</h5>
                  <p class="text-muted font-13 mb-4">
                    Kelola data karyawan anda.
                  </p>
                  <div class="table-responsive">
                    <table class="table mb-0" id="my-table">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Alamat</th>
                          <th>Nomer Hp</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>John</td>
                          <td>Paoman</td>
                          <td>089777987635</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Mary</td>
                          <td>Sindang</td>
                          <td>087897975647</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>July</td>
                          <td>Balongan</td>
                          <td>087654345645</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
          </div>
          <!-- end row -->
      <!-- end page content -->            
    </body>
    @endsection
