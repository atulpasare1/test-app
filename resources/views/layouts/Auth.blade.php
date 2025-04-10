<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="{{Asset('')}}assets/" data-template="vertical-menu-template" data-style="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{Asset('')}}assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
    rel="stylesheet" />

  <!-- Icons -->
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/fonts/remixicon/remixicon.css" />
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/fonts/flag-icons.css" />

  <!-- Menu waves for no-customizer fix -->
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/libs/node-waves/node-waves.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/css/rtl/theme-default.css"
    class="template-customizer-theme-css" />
  <link rel="stylesheet" href="{{Asset('')}}assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/libs/typeahead-js/typeahead.css" />
  <!-- Vendor -->
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/libs/@form-validation/form-validation.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="{{Asset('')}}assets/vendor/css/pages/page-auth.css" />

  <!-- Helpers -->
  <script src="{{Asset('')}}assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{Asset('')}}assets/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{Asset('')}}assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  @yield('content')

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{Asset('')}}assets/vendor/libs/jquery/jquery.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/popper/popper.js"></script>
  <script src="{{Asset('')}}assets/vendor/js/bootstrap.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/hammer/hammer.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/i18n/i18n.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="{{Asset('')}}assets/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{Asset('')}}assets/vendor/libs/@form-validation/popular.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/@form-validation/bootstrap5.js"></script>
  <script src="{{Asset('')}}assets/vendor/libs/@form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="{{Asset('')}}assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="{{Asset('')}}assets/js/pages-auth.js"></script>
</body>

</html>