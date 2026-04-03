<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>AdminLTE 4 | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Centered Login Form using AdminLTE and Bootstrap 5" />

    <!-- Fonts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />

    <!-- OverlayScrollbars -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css"
      integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg="
      crossorigin="anonymous"
    />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="<?=base_url();?>assets/admin/css/adminlte.css" />
    <style>
        .card.card-outline {
            border-top: 3px solid #0a5cab;
        }
        .btn, .btn:hover, .btn:focus{
            border: 1px solid #0a5cab;
            background-color: #0a5cab;
            color:#fff;
        }
        .btn-check:checked + .btn, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show{
            border: 1px solid #0a5cab;
            background-color: #0a5cab;
            color:#fff;
        }
        .card-title{
            font-size: 20px;
            color: #0a5cab;
        }
    </style>
  </head>

  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <!-- Fullscreen centered login form -->
    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-body-tertiary">
      <div class="col-md-4 col-lg-3">
        <div class="card card-warning card-outline shadow">
          <div class="card-header text-center">
            <h4 class="card-title mb-0">Login</h4>
          </div>

          <?php if(isset($error)) echo "<p style='color:red;text-align:center;margin-top:10px;'>$error</p>"; ?>

          <form name="loginfrm" id="loginfrm" method="post" enctype="application/x-www-form-urlencoded" action="<?=base_url();?>login/checkLogin">
            <div class="card-body">
              <div class="mb-3">
                <label for="loginemail" class="form-label">Email</label>
                <input type="email" class="form-control" id="loginemail" name="loginemail" required />
              </div>

              <div class="mb-3">
                <label for="loginpass" class="form-label">Password</label>
                <input type="password" class="form-control" id="loginpass" name="loginpass" required />
              </div>
            </div>

            <div class="card-footer text-end">
              <button type="submit" class="btn btn-warning">Sign In</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js"
      integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ="
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>

    <script src="<?=base_url();?>assets/admin/js/adminlte.js"></script>
  </body>
</html>
