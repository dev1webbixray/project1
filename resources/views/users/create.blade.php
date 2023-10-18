@extends('layouts.app')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Add User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
             <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="inputName">User Name</label>
                    <input type="text" id="userName" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="form-control" name="email">
                  </div>
                  {{-- <div class="form-group">
                    <label for="inputStatus">Status</label>
                    <select id="inputStatus" class="form-control custom-select" name="role">
                      <option selected disabled hidden>Role</option>
                      <option value="admin">Admin</option>
                      <option value="user">Users</option>
                    </select>
                  </div> --}}
                  <div class="form-group">
                    <label for="inputClientCompany">Password</label>
                    <input type="password" id="inputClientCompany" class="form-control" name="password">
                  </div>
                  <div class="col-12">
                    <a href="#" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create new user" class="btn btn-success float-right">
                  </div>
             </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">

      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
