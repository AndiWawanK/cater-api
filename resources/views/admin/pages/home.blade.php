<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.header')
<body>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
            data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
            @include('admin.layouts.top-nav')
            @include('admin.layouts.sidebar')
            <div class="page-wrapper">
                @include('admin.layouts.footer')
            </div>
    </div>
    @include('admin.layouts.script')
</body>
</html>