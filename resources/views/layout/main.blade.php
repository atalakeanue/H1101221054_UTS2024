<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.partial.link')
</head>

<body class="g-sidenav-show   bg-gray-100">
    @include('layout.partial.sidebar')
    @include('layout.partial.header')
    <!-- End Navbar -->
    @yield('content')
    @include('layout.partial.footer')
    @include('layout.partial.setting')
  <!--   Core JS Files   -->
    @include('layout.partial.script')
</body>

</html>