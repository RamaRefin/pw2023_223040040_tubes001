<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel=" stylesheet" href="dashboard.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#" class="logo">
                        <img src="img/usercp.png" alt="admin.png">
                        <span class="nav-item"> Refin </span>
                    </a></li>
                <li><a href="#">
                        <i class="fas fa-solid fa-house"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-user"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                <li><a href="index.php">
                        <i class="fas fa-solid fa-boxes-stacked"></i>
                        <span class="nav-item">Item Detail</span>
                    </a></li>
                <li><a href="tambah.php">
                        <i class="fas fa-solid fa-tasks"></i>
                        <span class="nav-item">Add Item</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-cog"></i>
                        <span class="nav-item">Setting</span>
                    </a></li>
                <li><a href="">
                        <i class="fas fa-solid fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                <li><a href="logout.php" class="logout">
                        <i class="fas fa-solid fa-sign-out-alt"></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
            </ul>
        </nav>

        <section class="main">
            <div class="main-top">
                <h1> Data </h1>
                <i class="fa-solid fa-chart-mixed"></i>
            </div>
            <div class="main-skills">
                <div class="card">
                    <i class="fas fa-users"></i>
                    <h3> Visitors </h3>
                    <p> 9623 </p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <h3> Buyer </h3>
                    <p> 378 </p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-comment"></i>
                    <h3> Comment </h3>
                    <p> 1092 </p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-heart"></i>
                    <h3> Likes </h3>
                    <p> 4587 </p>
                </div>
            </div>
        </section>

    </div>
</body>

</html>