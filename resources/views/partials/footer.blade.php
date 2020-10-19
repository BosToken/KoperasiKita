<title>@yield('title')</title>
<style>
    html,
body {
  height: 100%;
}

#page-content {
  flex: 1 0 auto;
}

#sticky-footer {
  flex-shrink: none;
}

/* Other Classes for Page Styling */

</style>

<body class="d-flex flex-column">
    <div id="page-content">
      <div class="container text-center">
      </div>
    </div>
    <footer id="footer" class="py-4 bg-primary text-white-50">
      <div class="container text-center">
        <small>Copyright &copy; Your Website</small>
      </div>
    </footer>
  </body>
@yield('content')
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap"></script>