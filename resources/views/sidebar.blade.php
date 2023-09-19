<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sidebar</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- bootstrap 5 css -->
        <link
          rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
          integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"
          crossorigin="anonymous"
        />
        <!-- custom css -->
        <!-- <link rel="stylesheet" href="style.css" /> -->
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
        <style>
            body{
            background-color: rgb(255, 255, 255);
            }
          li {
            list-style: none;
            margin: 20px 0 20px 0;
          }
    
          a {
            text-decoration: none;
          }
    
          .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            margin-left: -300px;
            transition: 0.4s;
          }
    
          .active-main-content {
            margin-left: 250px;
          }
    
          .active-sidebar {
            margin-left: 0;
          }
    
          #main-content {
            transition: 0.4s;
          }
        </style>
      </head>
    
      <body>
        <div>
            <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white"> K E U A N G A N </h4>
            <li>
              <a class="text-white" href="home">
                <i class="bi bi-house-door"></i>
                  Home
              </a>
            </li>
            <li>
              <a class="text-white" href="siswa">
                <i class="bi bi-people"></i>
                  Data Siswa
              </a>
            </li>
            <li>
              <a class="text-white" href="kas">
                <i class="bi bi-wallet2"></i>
                  Kas
              </a>
            </li>
            <li>
              <a class="text-white" href="pengeluaran">
                <i class="bi bi-pencil-square"></i>
                  Pengeluaran
              </a>
            </li>
            <li>
              <a class="text-white" href="logout">
                <i class="bi bi-box-arrow-right"></i>
                  Logout
              </a>
            </li>
          </div>
        </div>
        <div class="p-4" id="main-content">
          <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
    
        <script>
    
          // event will be executed when the toggle-button is clicked
          document.getElementById("button-toggle").addEventListener("click", () => {
    
            // when the button-toggle is clicked, it will add/remove the active-sidebar class
            document.getElementById("sidebar").classList.toggle("active-sidebar");
    
            // when the button-toggle is clicked, it will add/remove the active-main-content class
            document.getElementById("main-content").classList.toggle("active-main-content");
          });
        </script>
        @yield('content')
      </body>
    </html>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
