<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Pets - Adoptapal </title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="browse-pets-styles.css">
    
</head>
<body>
    <main style="background-color: white;">
        <section class="browse-pets">
            <section class="heroo">
                <div class="hero-container">
                    <h1>Browse Pets</h1>
                    <div class="hero-buttons">
                        <a href="#dogs"><button>Dogs</button></a>
                        <a href="#cats"><button>Cats</button></a>
                    </div>
                </div>
            </section>

            <div class="pet-listings">
                <h2 id="dogs">Dogs</h2>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/kap.jpg" alt="Dog 1">
                        <h3>Kap</h3>
                        <p>Age: 2 years</p>
                        <p>Color: Brown</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/nat.jpg" alt="Dog 2">
                        <h3>Nat</h3>
                        <p>Age: 2 years old</p>
                        <p>Color: White / Brown</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/wanda.jpg" alt="Dog 3">
                        <h3>Wanda</h3>
                        <p>Age: 1 year</p>
                        <p>Color: White</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/carol.jpg" alt="Dog 4">
                        <h3>Carol</h3>
                        <p>Age: 6 years</p>
                        <p>Color: White / Brown</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/tony.jpg" alt="Dog 5">
                        <h3>Tony</h3>
                        <p>Age: 2 years</p>
                        <p>Color:  White / Brown</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/nebula.jpg" alt="Dog 6">
                        <h3>Nebula</h3>
                        <p>Age: 3 year</p>
                        <p>Color: White Brown</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
 
                <h2 id="cats">Cats</h2>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/oreo.jpg" alt="Cat 1">
                        <h3>Loafy</h3>
                        <p>Age: 3 years</p>
                        <p>Color: Brown / White</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/lorna.jpg" alt="Cat 2">
                        <h3>Mittens</h3>
                        <p>Age: 2 years</p>
                        <p>Color: Black / White</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/tori.jpg" alt="Cat 3">
                        <h3>Simba</h3>
                        <p>Age: 5 years</p>
                        <p>Color: White / Orange</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
                <div class="pet-grid">
                    <div class="pet-card">
                        <img src="resources/ruki.jpg" alt="Cat 4">
                        <h3>Oliver</h3>
                        <p>Age: 4 years</p>
                        <p>Color: White / Orange</p>
                        <p>Gender: Male</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/lully.jpg" alt="Cat 5">
                        <h3>Milo</h3>
                        <p>Age: 1 years</p>
                        <p>Color: Gray / White</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                    <div class="pet-card">
                        <img src="resources/victoria.jpg" alt="Cat 6">
                        <h3>Gizmo</h3>
                        <p>Age: 3 years</p>
                        <p>Color: Black / White</p>
                        <p>Gender: Female</p>
                        <a href="adopt.php" class="adopt-btn">Adopt Me</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
                
    <script src="main.js"></script>
</body>
</html>

<?php include('footer.php'); ?>