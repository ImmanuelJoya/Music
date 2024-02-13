<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="background-color: black;">


    <a href="list.php"> <button id="logInButton">Subscriptions</button> </a>
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
            <h1>Add Subscription</h1>
            <h3>Music, the greatest discovery of mankind</h3>

            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p> -->
            <br>

        </div>
    </header>
    <style>
        .form-row form {
            text-align: center;
            margin-top: 20px;
            color: white;
        }

        input {
            padding: 5px;
            margin: 5px 0px;
        }

        form button {
            float: none;
            background-color: #f44336;
        }

        input[type='checkbox'] {
            cursor: pointer;
        }
    </style>

    <main>
        <div class="row form-row">
            <form action="formvalidations.php" method="POST">
                <label for="full_name">Full Name:</label>
                <br>
                <input type="text" id="full_name" name="full_name" value="">
                <br>

                <label for="email">Email:</label>
                <br>
                <input type="email" id="email" name="email" value="">
                <br>

                <label for="phone">Phone:</label>
                <br>
                <input type="text" id="phone" name="phone" value="">
                <br>

                <label for="interests">Interests:</label>
                <br>
                <textarea name="interests" rows="5" cols="30"></textarea>
                <br>

                <label for="address">Address:</label>
                <br>
                <textarea name="address" rows="5" cols="30"></textarea>
                <br>

                <label for="subscription" style="cursor: pointer;">Subscription:</label>
                <br>
                <input type="checkbox" id="subscription" name="subscription">
                <br>

                <button type="submit">Submit</button>
            </form>
        </div>
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