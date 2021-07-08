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
                            <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Merchant Registrant</h4>
                            <div class="d-flex align-items-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb m-0 p-0">
                                        <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                                        <li class="breadcrumb-item text-muted active" aria-current="page">Registrant</li>
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
                                    <h4 class="card-title">Default Ordering</h4>
                                    <h6 class="card-subtitle">With DataTables you can alter the ordering characteristics of
                                        the table at initialisation time. Using the<code> order | option</code> order
                                        initialisation parameter, you can set the table to display the data in exactly the
                                        order that you want.</h6>
                                    <div class="table-responsive">
                                        <table class="data-table mdl-data-table dataTable" cellspacing="0" width="100%" role="grid" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Gender</th>
                                                </tr>
                                            </thead>
                                            <tbody>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('.data-table').DataTable({
               processing: true,
               serverSide: true,
               ajax: "{{ url('dashboard/registrant') }}",
            //    ajax: {
            //         "url": "{{ url('dashboard/registrant') }}",
            //         "type": "GET",
            //         data: function (json){
            //             console.log("Ok")
            //             return JSON.stringify(json)
            //         }
            // //    },
            //    rowId: "id",

               columns: [
                    { "data": "full_name" },
                    { "data": "phone" },
                    { "data": "role" },
                    { "data": "email" }
               ],
            });
         });
     </script>
</body>
</html>