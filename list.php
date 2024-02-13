<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .list p {
            margin-bottom: 5px;
        }

        .list .column {
            margin: 15px 0px;
        }
    </style>
</head>

<body style="background-color: black;">

    <?php
    include "db.php";
    ?>


    <a href="form.php"> <button id="logInButton">Add New</button> </a>
    <a href="index.php"> <button id="signUpButton">Home</button></a>

    <header>
        <div class="overlay">
            <section class="hero">
                <img src="AAM.svg" alt="" class="icons">
                <img src="AM.svg" alt="" class="icons1">
                <img src="S.svg" alt="" class="icons2">
                <img src="YM.svg" alt="" class="icons3">
            </section>


            <img src="" alt="">
            <h1>Subscriptions</h1>
            <h3>Music, the greatest discovery of mankind</h3>
            <br>

        </div>
    </header>

    <main>
        <fieldset>
            <div class="row list">


                <?php
                $sql = "select * from users ORDER BY id desc ";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {

                        $subscription = 'Not Subscibed';
                        if ($row["subscription"]) {
                            $subscription = 'Subscibed';
                        }
                        echo '<div class="column">';
                        echo '<p>Id: <b>' . $row["id"] . '</b></p>';
                        echo '<p>Name: <b>' . $row["name"] . '</b></p>';
                        echo '<p>Email: <b>' . $row["email"] . '</b></p>';
                        echo '<p>Phone: <b>' . $row["phone"] . '</b></p>';
                        echo '<p>Interests: <b>' . $row["interests"] . '</b></p>';
                        echo '<p>Address: <b>' . $row["address"] . '</b></p>';
                        echo '<p>Subscription: <b>' . $subscription . '</b></p>';
                        echo '</div>';
                    }
                } else {
                ?>
                    <div class="column">
                        <p>
                            No Results!
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>

        </fieldset>
    </main>



    <footer style="
    position: relative;
    bottom: -25%;
    left: 10%;
    height: 7%;
    width: 80%;
    border-radius: 30px;
    border-bottom: 1px solid;
">
        <p>&copy; Immerse yourself in music. All rights reserved.</p>
    </footer>
    <script src="front-page.js"></script>

</body>

</html>