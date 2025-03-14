<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        .card-header {
            background-color: #007bff;
            color: white;
        }
        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .sidebar {
            min-height: 100vh;
            position: fixed;
            top: 0;
            bottom: 0;
            width: 250px;
        }
        .content-wrapper {
            margin-left: 260px;
            padding: 30px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">Profile Dashboard</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cogs"></i>
                                <p>Settings</p>
                            </a>
                        </li>
                        <!-- Logout Button -->
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="logoutButton">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <!-- Profile Header -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Profile</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://pixabay.com/vectors/anonymous-hide-private-hacker-8291223/" alt="Profile Image" class="profile-image">
                            <h4>John Doe</h4>
                            <p>john.doe@example.com</p>
                            <button class="btn btn-primary">Edit Profile</button>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="small-box bg-info">
                                        <div class="inner">
                                            <h3>150</h3>
                                            <p>Followers</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h3>75</h3>
                                            <p>Posts</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-pen"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h3>8</h3>
                                            <p>Messages</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Example Input Field -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5>Example Input Field</h5>
                                </div>
                                <div class="card-body">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <label for="exampleInput">Enter Text:</label>
                                            <input type="text" class="form-control" id="exampleInput" placeholder="Type something...">
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Activity Feed -->
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5>Recent Activity</h5>
                                </div>
                                <div class="card-body">
                                    <ul>
                                        <li><strong>John Doe</strong> liked your post.</li>
                                        <li><strong>Jane Smith</strong> commented on your photo.</li>
                                        <li><strong>Bob Johnson</strong> sent you a message.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1.0/dist/js/adminlte.min.js"></script>

    <script>
        // Logout button functionality (for demo purposes)
        document.getElementById("logoutButton").addEventListener("click", function() {
            alert("You have been logged out.");
            // Redirect to the login page (adjust URL as necessary)
            window.location.href = "login.html";
        });
    </script>
</body>
</html>
