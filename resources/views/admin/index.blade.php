<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
   @include('admin.css')
</head>

<body>
    <div class="wrapper">
         @include('admin.sidebar')
         @include('admin.topbar')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admincss/js/script.js') }}"></script>
</body>

</html>