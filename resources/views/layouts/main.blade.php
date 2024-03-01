<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>CIP Monitoring 2022</title>
    <link
      rel="stylesheet"
      href="/assets/extensions/choices.js/public/assets/styles/choices.css"
    />
    <link rel="stylesheet" href="/assets/css/main/app.css" />
    <link rel="stylesheet" href="/assets/css/main/app-dark.css" />
    <link
    rel="stylesheet"
    href="/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css"
  />
  <link rel="stylesheet" href="/assets/extensions/filepond/filepond.css" />
    <link
      rel="stylesheet"
      href="/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css"
    />
    <link rel="stylesheet" href="/assets/css/pages/filepond.css" />
  <link rel="stylesheet" href="/assets/css/pages/datatables.css" />
    <link
      rel="shortcut icon"
      href="/assets/images/logo/favicon.ico"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="/assets/images/logo/favicon.ico"
      type="image/x-icon"
    />
  </head>
  <body>
    <script src="/assets/js/initTheme.js"></script>

    <div id="app">
     @yield('main')
     <footer>
      <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
          <p> &copy; <script>document.write(new Date().getFullYear())</script> Monitoring CIP</p>
        </div>
        <div class="float-end">
          <p>Powered by <a href="https://citracom.ac.id">PT Citracom Inti Persada</a></p>
        </div>
      </div>
    </footer>
  
  </div>
    </div>
    <script>
      $(document).on('click', '[#tambah]', function (e) {
        e.preventDefault();
        console.log(e.preventDefault());
        var data = $(this).serialize();
        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to Send this email",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, send it!",
            cancelButtonText: "No, cancel pls!",
        }).then(function () {
          Swal.fire({
            icon: "success",
            title: "Success",
          })
        });
        return false;
      });
    </script>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/extensions/jquery/jquery.min.js"></script>
    <script src="/assets/extensions/parsleyjs/parsley.min.js"></script>
    <script src="/assets/js/pages/parsley.js"></script>
    <script src="/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="/assets/js/pages/form-element-select.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="/assets/js/pages/datatables.js"></script>
    <script src="/assets/extensions/sweetalert2/sweetalert2.min.js"></script>
    <script src="/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <!-- App scripts -->
    @stack('js')
    @stack('sales')
    @stack('brand')
    @stack('upload')
  </body>
</html>
