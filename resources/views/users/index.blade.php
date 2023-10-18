@extends('layouts.app')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                         ID
                      </th>
                      <th style="width: 20%">
                            Name
                      </th>
                      <th style="width: 30%">
                          Email
                      </th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                 @foreach ( $user as $item)
                 <tr>
                    <td class="userId">
                        {{$item->id}}
                    </td>
                    <td>
                        {{$item->name}}
                    </td>
                    <td>
                      {{$item->email}}
                    </td>
                    {{-- <td class="project_progress">
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                            </div>
                        </div>
                        <small>
                            77% Complete
                        </small>
                    </td>
                    <td class="project-state">
                        <span class="badge badge-success">Success</span>
                    </td>--}}
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="#">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm btn-delete" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a>
                    </td>
                </tr>
                 @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('scriptSource')
<script>

    $(document).ready(function(){
        $('.btn-delete').click(function() {
             $userId = $(this).parents('tr').find('.userId').html()*1
             $user = $(this).parents('tr')
                $.ajax({
                    headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                      },
                    type: 'DELETE',
                    url: '{{route('users.destroy','$userId')}}',
                    data: {
                        id: $userId,
                    },


                })
                $user.remove();
            })

    })

</script>
@endsection
