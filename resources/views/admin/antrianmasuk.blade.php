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
            <h4 class="page-title">Edit Table</h4>
          </div>
        </div>
      </div>
      <!-- end page title end breadcrumb -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h5 class="mt-0">Edit Table With Button</h5>
              <p class="text-muted font-13 mb-4">
                Add toolbar column with edit and delete buttons.
              </p>
              <div class="table-responsive">
                <table class="table mb-0" id="my-table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>mary@example.com</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>july@example.com</td>
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
