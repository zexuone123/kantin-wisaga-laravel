<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
<button type="submit" class="btn btn-danger"><a href="{{ route('logout') }}">logout</a></button>
    <div class="container">
        <div class="header">
            <h1>Admin Dashboard</h1>
        </div>
        
        <div class="sidebar">
            <header class="header-area header-sticky">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-12">
                            <nav class="main-nav">
                                <a href="#" class="logo">
                                    <!-- logo here -->
                                </a>
                                <!-- <ul class="nav"> -->
                                    <a href="/create" class="btn btn-success">Create</a>
                                <!-- </ul> -->
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
            
        <div class="content">
        
            @yield('content')
        </div>
    </div>
</body>
</html>