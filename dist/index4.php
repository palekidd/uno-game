<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Scrolling Nav - UNO</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

</head>

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">
        <a class="navbar-brand" href="#page-top">
            <img src="../src/assets/casino.png" alt="Casino" style="width: 40px; height: auto;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#signup">SignUp</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Brackets</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Results/Pics</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- header -->
<header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder">Welcome to the Uno Teachers Cup</h1>
        <p class="lead">Sign up below and see your opponent</p>
        <div class="d-flex flex-column align-items-center">
            <img src="../src/assets/uno.png" class="img-fluid rounded d-block mx-auto mb-3" alt="UNO Logo">
            <a class="btn btn-light btn-lg mt-2" href="#about">I'm in!</a>
        </div>
    </div>
</header>

<!-- Sign-Up Section -->
<section id="signup">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Sign Up for the Uno Teachers Cup</h2>
                <p class="lead">Enter your details below to join the competition.</p>
                
                <form action="submit.php" method="post">
                    <div class="mb-3">
                        <label for="teacherName" class="form-label">Teacher Name</label>
                        <input type="text" class="form-control" id="teacherName" name="teacherName" required>
                    </div>
                    <div class="mb-3">
                        <label for="teacherEmail" class="form-label">Teacher Email</label>
                        <input type="email" class="form-control" id="teacherEmail" name="teacherEmail" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact section-->
<section class="bg-light" id="contact">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>If people sign up</h2>
                <p class="lead">Print players here</p>

<?php
// Try to open the database
$db = new SQLite3('/var/www/html/uno-site/database/tournament.db');

if (!$db) {
    echo "Failed to open the database.";
} else {
    echo "Database opened successfully.";
}

// Run the query
$query = "SELECT name, email FROM signups";
$result = $db->query($query);

if ($result) {
    echo '<ul>';
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        echo '<li>' . $row['name'] . ' - ' . $row['email'] . '</li>';
    }
    echo '</ul>';
} else {
    echo 'Error with the query: ' . $db->lastErrorMsg();
}

$db->close();
?>
            </div>
        </div>
    </div>
</section>
<!-- Tournament Progress Section -->
<section id="tournament-progress">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Tournament Progress</h2>
                <p class="lead">View the progress of each group and the winners of each round.</p>

                <!-- Group Stage -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Group Stage</h4>
                    </div>
                    <div class="card-body">
                        <!-- Group A -->
                        <div class="group">
                            <h5>Group A</h5>
                            <ul>
                                <li>Player 1</li>
                                <li>Player 2</li>
                                <li>Player 3</li>
                                <li>Player 4</li>
                            </ul>
                            <p><strong>Winners:</strong> Player 1, Player 2</p>
                        </div>

                        <!-- Group B -->
                        <div class="group">
                            <h5>Group B</h5>
                            <ul>
                                <li>Player 5</li>
                                <li>Player 6</li>
                                <li>Player 7</li>
                                <li>Player 8</li>
                            </ul>
                            <p><strong>Winners:</strong> Player 5, Player 6</p>
                        </div>

                        <!-- Group C -->
                        <div class="group">
                            <h5>Group C</h5>
                            <ul>
                                <li>Player 9</li>
                                <li>Player 10</li>
                                <li>Player 11</li>
                                <li>Player 12</li>
                            </ul>
                            <p><strong>Winners:</strong> Player 9, Player 10</p>
                        </div>

                        <!-- Group D -->
                        <div class="group">
                            <h5>Group D</h5>
                            <ul>
                                <li>Player 13</li>
                                <li>Player 14</li>
                                <li>Player 15</li>
                                <li>Player 16</li>
                            </ul>
                            <p><strong>Winners:</strong> Player 13, Player 14</p>
                        </div>
                    </div>
                </div>

                <!-- Round 2 -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Round 2</h4>
                    </div>
                    <div class="card-body">
                        <!-- Group A (Winners of A & B) -->
                        <div class="group">
                            <h5>Group A (Winners of A & B)</h5>
                            <ul>
                                <li>Player 1</li>
                                <li>Player 2</li>
                                <li>Player 5</li>
                                <li>Player 6</li>
                            </ul>
                            <p><strong>Winners:</strong> Player 1, Player 2</p>
                        </div>

                        <!-- Group B (Winners of C & D) -->
                        <div class="group">
                            <h5>Group B (Winners of C & D)</h5>
                            <ul>
                                <li>Player 9</li>
                                <li>Player 10</li>
                                <li>Player 13</li>
                                <li>Player 14</li>
                            </ul>
                            <p><strong>Winners:</strong> Player 9, Player 10</p>
                        </div>
                    </div>
                </div>

                <!-- Round 3 (and beyond) can be added similarly -->
            </div>
        </div>
    </div>
</section>

<!-- Contact section-->
<section class="bg-light" id="contact">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Contact us</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
</footer>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>