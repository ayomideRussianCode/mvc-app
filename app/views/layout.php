<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>MVC APP</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/styles.css">

</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MVC APP</a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div
                class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url('/'); ?>">Home</a>
                    </li>
                    <?php if (!isLoggedIn()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">Admin</a>
                    </li>
                    
                    <?php else : ?>
                          <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('user/login'); ?>">Login</a>
                    </li>

                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href=" <?php echo base_url('about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('user/register'); ?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="bg-dark text-white py-5">
        <div class="container">
            <h1 class="display-4">Welcome to the MVC APP</h1>
            <p class="lead">
                Sharing insights, ideas, and stories.
            </p>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container my-5">
        <!-- Blog Post 1 -->
        <?php echo $content; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <p class="text-muted mb-0">
                &copy; 2045 MVC APP. All rights reserved by Ayomide from Ayomide.com
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>