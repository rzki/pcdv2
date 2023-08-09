@extends('layouts.app', ['activePage' => 'usermanage', 'title' => 'Manajemen User - PCD', 'header' => __('Manajemen User')])

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">

            {{-- Manajemen User --}}
            <div class="col-md-12">
                {{-- Header --}}
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title font-weight-bold text-center text-uppercase">{{ __('Manajemen User') }}</h4>
                    </div>
                    <div class="card-body">

                        <div class="row d-flex justify-content-center px-3 pb-3">
                            <div class="text-end">
                                <a href="{{ route('create_user') }}" class="btn btn-success btn-lg">
                                    <i class="fa-solid fa-plus"></i>
                                    User
                                </a>
                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#importUser">
                                    <i class="fa-solid fa-upload"></i>
                                    Import
                                </button>
                            </div>
                        </div>
                        <div class="row px-3">
                              <div class="table-responsive">
                                  <table class="table table-sm table-bordered" id="tableUser">
                                      <thead class="table-dark">
                                          <tr class="text-center">
                                              <th>No.</th>
                                              <th>NPK</th>
                                              <th>Nama</th>
                                              <th>Divisi</th>
                                              <th>Dept</th>
                                              <th>Posisi</th>
                                              <th>Seksi</th>
                                              <th>Shift</th>
                                              <th>Role</th>
                                              <th>Aksi</th>
                                          </tr>
                                      </thead>
                                      <tbody class="text-center">
                                          @foreach ($usermanage as $user)
                                          <tr>
                                              <td>{{ $loop->iteration }}</td>
                                              <td>{{ $user->npk }}</td>
                                              <td>{{ $user->name }}</td>
                                            {{-- Division --}}
                                            {{-- @if ($user->division == null)
                                                <td> </td>
                                            @elseif($user->division == 'pcl')
                                                <td>Planning Control & Logistics</td>
                                            @endif --}}
                                            <td>{{ $user->division }}</td>
                                            {{-- Dept --}}
                                            {{-- @if ($user->dept == null)
                                                <td> </td>
                                            @elseif($user->dept == 'planning_control')
                                                <td>Planning & Control</td>
                                            @endif --}}
                                            <td>{{ $user->dept }}</td>
                                            {{-- Position --}}
                                            {{-- @if ($user->position == null)
                                                <td> </td>
                                            @elseif ($user->position == 'team_member')
                                                <td>Team Member</td>
                                            @elseif ($user->position == 'team_leader')
                                                <td>Team Leader</td>
                                            @elseif ($user->position == 'staff')
                                                <td>Staff</td>
                                            @elseif ($user->position == 'foreman')
                                                <td>Foreman</td>
                                            @elseif ($user->position == 'spv')
                                                <td>Supervisor</td>
                                            @elseif ($user->position == 'dept_head')
                                                <td>Dept Head</td>
                                            @elseif ($user->position == 'division_head')
                                                <td>Division Head</td>
                                            @endif --}}
                                                <td>{{ $user->position }}</td>
                                            {{-- Section --}}
                                            {{-- @if ($user->section == null)
                                                <td> </td>
                                            @elseif ($user->section == 'ccr')
                                                <td>Central Control Room</td>
                                            @elseif ($user->section == 'daily_plan')
                                                <td>Daily Planning</td>
                                            @elseif ($user->section == 'vehicle_plan')
                                                <td>Vehicle Planning</td>
                                            @elseif ($user->section == 'vai')
                                                <td>Vehicle Administration & Improvement</td>
                                            @elseif ($user->section == 'digital_improve')
                                                <td>Digitalization & Improvement</td>
                                            @endif --}}
                                                <td>{{ $user->section }}</td>
                                            {{-- Shift --}}
                                            {{-- @if ($user->shift == null)
                                                <td> </td>
                                            @elseif ($user->shift == 'shift')
                                                <td>Shift</td>
                                            @elseif($user->shift == 'non_shift')
                                                <td>Non-Shift</td>
                                            @endif --}}
                                            <td>{{ $user->shift }}</td>
                                            {{-- Position --}}
                                            {{-- @if ($user->role == 'admin')
                                                <td>Admin</td>
                                            @elseif ($user->role == 'member')
                                                <td>Member</td>
                                            @elseif ($user->role == 'PIC CCR')
                                                <td>PIC CCR</td>
                                            @elseif ($user->role == 'PIC VAI')
                                                <td>PIC Vehicle Administration & Improvement</td>
                                            @elseif ($user->role == 'PIC Daily Planning')
                                                <td>PIC Daily Plan</td>
                                            @elseif ($user->role == 'PIC Vehicle Planning')
                                                <td>PIC Vehicle Plan</td>
                                            @elseif ($user->role == 'pic_improve')
                                                <td>PIC Digitalization & Improvement</td>
                                            @elseif ($user->role == 'PIC Daily Planning')
                                                <td>PIC Daily Plan</td>
                                            @elseif ($user->role == 'line')
                                                <td>Line</td>
                                            @endif --}}
                                            <td>{{ $user->role }}</td>
                                              <td>
                                                  <form action="{{ route('delete_user', $user->id) }}" method="POST">
                                                    <a class="btn btn-primary" href="{{ route('edit_user', $user->id) }}"><i class="fa-solid fa-pen-to-square"></i> Ubah</a>
                                                        @method('DELETE')
                                                        @csrf

                                                        <button type="submit" class="btn btn-danger confirm-delete"><i class="fa-solid fa-trash-can"></i> Delete</button>
                                                    </form>
                                                    <form action="{{ route('reset_userpwd', $user->id) }}" method="POST" id="resetPWD">
                                                        @method('PUT')
                                                        @csrf
                                                        <button type="submit" class="btn btn-info confirm-reset"><i class="fa-solid fa-rotate-left"></i> Reset Password</button>
                                                    </form>
                                              </td>
                                          </tr>
                                      @endforeach
                                      </tbody>
                                  </table>
                              </div>
                        </div>

                        <!-- modal -->
                        <div class="modal fade" id="importUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Import User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('import_user') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="customFile" name="file">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                <small class="text-muted ml-3">(Format file yang didukung : .xlsx, .xls, .pdf)</small>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success"><i class="fa-solid fa-upload"></i> Import</button>
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Tutup</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('userTable')
    <script>
        $(document).ready( function () {
            $('#tableUser').DataTable({
                dom: 'BflprtipS',
                buttons: [
                    'copy', 'excel', 'pdf'
                ]
            });
        } );
    </script>
@endsection

@section('userManageDeleteConfirm')
    <script type="text/javascript">
        $('.confirm-delete').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Yakin ingin menghapus user?',
                text: "Data user akan hilang secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ff0000',
                cancelButtonColor: '#0d6efd',
                cancelButtonText: 'Batalkan',
                confirmButtonText: 'Hapus',
                reverseButtons: true,
            }).then((willDelete) => {
                if (willDelete.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection

@section('userManageResetConfirm')
    <script type="text/javascript">
        $('.confirm-reset').click(function(event){
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                title: 'Yakin ingin reset password user?',
                text: "Password user akan direset!",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#0d6efd',
                confirmButtonColor: '#ff0000',
                cancelButtonText: 'Batalkan',
                confirmButtonText: 'Reset',
                reverseButtons: true
            }).then((willDelete) => {
                if (willDelete.value) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
