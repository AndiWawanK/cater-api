<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.header')

<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        @include('admin.layouts.top-nav')
        @include('admin.layouts.sidebar')
        <div class="page-wrapper" style="display: block;">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Merchant</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Registered</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Merchant Terdaftar</h4>
                                <div class="table-responsive">
                                    <table id="tableRegistrant" class="data-table mdl-data-table dataTable"
                                        cellspacing="0" width="100%" role="grid" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Lengkap</th>
                                                <th>No.Telp</th>
                                                <th>Nama Usaha</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $item)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td>{{ $item->user_detail->full_name }}</td>
                                                    <td>{{ $item->user_detail->phone }}</td>
                                                    <td>{{ $item->merchant_name }}</td>
                                                    @if ($item->status == 0)
                                                        <td style="color: tomato">Belum Diverifikasi</td>
                                                    @else
                                                        <td style="color: green">Terverfikasi</td>
                                                    @endif
                                                    <td>
                                                        <a href="{{url('dashboard/disable/'.$item->id)}}" class="btn btn-danger btn-sm btn-block">Nonaktifkan</a>
                                                        {{-- @if ($item->status == 0)
                                                            
                                                        @else
                                                            <a href="{{url('dashboard/disable/'.$item->id)}}" class="btn btn-danger btn-sm btn-block">Nonaktifkan</a>
                                                        @endif --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>
    @include('admin.layouts.script')
    <script>
        $(document).ready(function() {
            $('#tableRegistrant').DataTable()
        })
    </script>
</body>

</html>
