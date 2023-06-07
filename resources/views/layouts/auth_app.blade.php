<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>@yield('title') | {{ config('app.name') }}</title>

    <meta content name="description" />
    <meta content name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- General CSS Files -->
    <link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet" />
  

    <!-- Template CSS -->
    <link href="{{ asset('css/default/app.min.css') }}" rel="stylesheet" />
</head>

<body class="pace-top">
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
      </div>


      <div id="app" class="app">
          
          @yield('content')

        


        <div class="theme-panel d-none">
          <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
          <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
            <h5>App Settings</h5>

            <div class="theme-list">
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red" data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink" data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange" data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow" data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime" data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green" data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
              <div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal" data-theme-class data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan" data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue" data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple" data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo" data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
              <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black" data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
            </div>

            <div class="theme-panel-divider"></div>
            <div class="row mt-10px">
              <div class="col-8 control-label text-dark fw-bold">
                <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative" style="top: -1px;">NEW</span></div>
                <div class="lh-14">
                  <small class="text-dark opacity-50">
                    Adjust the appearance to reduce glare and give your eyes a break.
                  </small>
                </div>
              </div>
              <div class="col-4 d-flex">
                <div class="form-check form-switch ms-auto mb-0">
                  <input type="checkbox" class="form-check-input" name="app-theme-dark-mode" id="appThemeDarkMode" value="1" />
                  <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                </div>
              </div>
            </div>
            <div class="theme-panel-divider"></div>

            <div class="row mt-10px align-items-center">
              <div class="col-8 control-label text-dark fw-bold">Header Fixed</div>
              <div class="col-4 d-flex">
                <div class="form-check form-switch ms-auto mb-0">
                  <input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
                  <label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
                </div>
              </div>
            </div>
            <div class="row mt-10px align-items-center">
              <div class="col-8 control-label text-dark fw-bold">Header Inverse</div>
              <div class="col-4 d-flex">
                <div class="form-check form-switch ms-auto mb-0">
                  <input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
                  <label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
                </div>
              </div>
            </div>
            <div class="row mt-10px align-items-center">
              <div class="col-8 control-label text-dark fw-bold">Sidebar Fixed</div>
              <div class="col-4 d-flex">
                <div class="form-check form-switch ms-auto mb-0">
                  <input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
                  <label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
                </div>
              </div>
            </div>
            <div class="row mt-10px align-items-center">
              <div class="col-8 control-label text-dark fw-bold">Sidebar Grid</div>
              <div class="col-4 d-flex">
                <div class="form-check form-switch ms-auto mb-0">
                  <input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
                  <label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
                </div>
              </div>
            </div>
            <div class="row mt-10px align-items-center">
              <div class="col-md-8 control-label text-dark fw-bold">Gradient Enabled</div>
              <div class="col-md-4 d-flex">
                <div class="form-check form-switch ms-auto mb-0">
                  <input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
                  <label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
                </div>
              </div>
            </div>

            <div class="theme-panel-divider"></div>
            <h5>Admin Design (5)</h5>

            <div class="theme-version">
              <div class="theme-version-item">
                <a href="/color-admin/admin/html/index_v2.html" class="theme-version-link active">
                  <span style="background-image: url({{ asset('img/theme/default.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/transparent/index_v2.html" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/transparent.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/apple/index_v2.html" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/apple.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/material/index_v2.html" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/material.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/facebook/index_v2.html" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/facebook.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/google/index_v2.html" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/google.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
            </div>

            <div class="theme-panel-divider"></div>
            <h5>Language Version (7)</h5>

            <div class="theme-version">
              <div class="theme-version-item">
                <a href="/color-admin/admin/html/" class="theme-version-link active">
                  <span style="background-image: url({{ asset('img/version/html.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/ajax/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/version/ajax.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/angularjs/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/version/angular1x.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/angularjs14/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/version/angular10x.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/version/laravel.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/vuejs/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/version/vuejs.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/admin/reactjs/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/version/reactjs.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="javascript:alert('.NET Core 6.0 MVC Version only available in downloaded version.');" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/version/dotnet.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
            </div>

            <div class="theme-panel-divider"></div>
            <h5>Frontend Design (5)</h5>

            <div class="theme-version">
              <div class="theme-version-item">
                <a href="/color-admin/frontend/one-page-parallax/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/one-page-parallax.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/frontend/e-commerce/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/e-commerce.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/frontend/blog/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/blog.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/frontend/forum/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/forum.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
              <div class="theme-version-item">
                <a href="/color-admin/frontend/corporate/" class="theme-version-link">
                  <span style="background-image: url({{ asset('img/theme/corporate.jpg') }});" class="theme-version-cover"></span>
                </a>
              </div>
            </div>

            <div class="theme-panel-divider"></div>
            <a href="/color-admin/documentation/" class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
            <a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
          </div>
        </div>


        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

      </div>

<!-- General JS Scripts -->
<script src="{{ asset('js/vendor.min.js') }}" type="56ad84bff8190cb56f422cb0-text/javascript"></script>
<script src="{{ asset('js/app.min.js') }}" type="56ad84bff8190cb56f422cb0-text/javascript"></script>

<!-- JS Libraies -->

<!-- Template JS File -->
<script src="{{ asset('js/demo/login-v2.demo.js') }}" type="56ad84bff8190cb56f422cb0-text/javascript"></script>

<!-- Page Specific JS File -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y3Q0VGQKY3" type="56ad84bff8190cb56f422cb0-text/javascript"></script>
  <script type="56ad84bff8190cb56f422cb0-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Y3Q0VGQKY3');
  </script>
  <script src="{{ asset('cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="56ad84bff8190cb56f422cb0-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c8a9713980c9518","version":"2023.4.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>

</body>
</html>
