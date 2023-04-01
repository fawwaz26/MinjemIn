<div class="mdk-header js-mdk-header" data-fixed >
    <div class="mdk-header__content" >
        <nav class="navbar navbar-expand-md navbar-dark d-flex-none" style="background-color: #F3FFE4;">
            <button class="btn btn-link text-white pl-0" type="button" data-toggle="sidebar">
                <i class="material-icons align-middle md-36" style="color: black">short_text</i>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item nav-link">
                    </li>
                    <li class="nav-item dropdown notifications d-flex align-self-center align-items-center" id="navbarNotifications">
                        {{-- <a href="#" class="nav-link dropdown-toggle notifications--active" data-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons align-middle" style="color: black">notifications</i>
                        </a> --}}
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notificationsDropdown" id="notificationsDropdown">
                        </div>
                    </li>
                    
                    <li class="nav-item nav-divider">
                      @auth
                        <li class="nav-item">
                            {{-- <a href="#" class="nav-link dropdown-toggle dropdown-clear-caret" data-toggle="sidebar" data-target="#user-drawer" style="color: black">
                              {{ auth()->user()->name }}
                            </a> --}}
                            <div class="dropdown">
                                <button onclick="myFunction()" class="dropbtn fw-bold">{{ auth()->user()->name }}</button>
                                <div id="myDropdown" class="dropdown-content">
                                  <a href="/">Logout</a>
                                </div>
                            </div>
                        </li>
                        @endauth
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<style>
    .dropbtn {
        background-color: #F3FFE4;
      color: black;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }
    
    .dropbtn:hover, .dropbtn:focus {
      color: #4ABD78;
    }
    
    .dropdown {
      float: right;
      position: relative;
      display: inline-block;
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      right: 0;
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown a:hover {background-color: #ddd;}
    
    .show {display: block;}
    </style>

<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
    </script>