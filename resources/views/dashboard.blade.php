<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard')</title> <!-- Title is yielded from child views -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.0/css/dataTables.dataTables.css" />
    <style>
        /* Sidebar Styling */
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
        }

        .sidebar .nav-link:hover,
        .sidebar .nav-item.active .nav-link {
            background-color: #007bff;
            color: white;
        }

        .content {
            margin-left: 250px;
            padding: 30px;
            transition: margin-left 0.3s;
        }

        /* Cards Layout */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        button {
            padding: 10px;
            margin: 10px;
            cursor: pointer;
        }

        .container-togle{
            float:right;
        }

        
        .togle-btn {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: green;
        color: white;
        border: none;
        border-radius: 5px;
     
        }

        .light-mode {
        background-color: white;
        color: black;
        }
        .dark-mode {
        background-color: #121212;
        color: white;
        }

        #google_translate_element{
            float: right !important;
            margin-top: 8px;
        }
           

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                box-shadow: none;
            }

            .content {
                margin-left: 0;
            }

            .sidebar .nav-link {
                text-align: center;
            }
        }
    </style>
</head>
<body class="light-mode">

    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-white text-center mb-4">Dashboard</h4>
        <div class="nav flex-column">
            <a href="{{ route('dashboard') }}" class="nav-link active">Dashboard</a>
            <a href="{{ route('add.product') }}" class="nav-link">Add Products</a>
            <a href="{{route('product.details')}}" class="nav-link">Product Details</a>
            <a href="#!" class="nav-link">Settings</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
             <div class="container-togle">
                <button id="toggle-theme" class="togle-btn">Toggle Dark Mode</button>
                <div id="google_translate_element"></div>
            </div> 
            <!-- Title from the child view -->
            <h1 class="my-4">@yield('title', 'Dashboard')</h1>
            
            <!-- Stats Cards in Header Section -->
            <div class="row mb-4">
                <!-- Stats Card 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-info text-white shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Total Users</h5>
                            <p class="card-text">500</p>
                        </div>
                    </div>
                </div>

                <!-- Stats Card 2 -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-success text-white shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text">1200</p>
                        </div>
                    </div>
                </div>

                <!-- Stats Card 3 -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-warning text-white shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Total Products</h5>
                            <p class="card-text">320</p>
                        </div>
                    </div>
                </div>

                <!-- Stats Card 4 -->
                <div class="col-md-3 mb-4">
                    <div class="card bg-danger text-white shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Total Revenue</h5>
                            <p class="card-text">$5000</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Area -->
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.0/js/dataTables.js"></script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>

            function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                pageLanguage: 'en', // Default language
                includedLanguages: 'en,fr,de,es,zh-CN,ru' 
                }, 'google_translate_element');
            }
           var toggle = document.getElementById("toggle-theme");

            toggle.addEventListener("click", function () {
                const body = document.body;
                if (body.classList.contains('light-mode')) {
                    body.classList.remove("light-mode");
                    body.classList.add("dark-mode");
                    toggle.textContent = "Switch To Light Mode";
                } else {
                    body.classList.remove("dark-mode");
                    body.classList.add("light-mode");
                    toggle.textContent = "Switch To Dark Mode";
                }
            });

    </script>
</body>
</html>
