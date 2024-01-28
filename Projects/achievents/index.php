<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>ARDOR 2023</title>
    <?php require 'utils/styles.php'; ?>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }

    header {
        background: #fff;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    header h1 {
        color: #000080;
        font-size: 42px;
        font-weight: bold;
        margin: 20px 0;
    }

    section {
        margin-top: 30px;
    }

    .event-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .event {
        background: #fff;
        box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 10px 0;
        width: 48%;
        box-sizing: border-box;
    }

    .register-button {
        display: inline-block;
        padding: 8px 16px;
        margin-top: 10px;
        background-color: #000080;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }

    .register-button:hover {
        background-color: #001a4d;
    }

    .registration-form {
        display: none;
        background: rgba(255, 255, 255, 0.9); /* Adjust the last value for transparency (0 to 1) */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 999;
    }

    .registration-form h2 {
        color: #000080;
        margin-bottom: 20px;
    }

    .registration-form label {
        display: block;
        margin-bottom: 8px;
    }

    .registration-form input {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    .close-button {
        display: inline-block;
        padding: 8px 16px;
        background-color: #ccc;
        color: #000;
        text-decoration: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .close-button:hover {
        background-color: #999;
    }
</style>




</head>

<body>
    <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
    <div class="content"><!--body content holder-->
        <div class="container">
            <div class="col-md-12"><!--body content title holder with 12 grid columns-->
                <h1 style="color:#000080 ; font-size:42px ; font-style:bold ; margin-left: 40vh "><strong> Register your Favourite
                        events:</strong></h1><!--body content title-->

            </div>


            <div class="container">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>

            <section>
                <h2>Technical Events</h2>
                <div class="event-container">
                    <div class="event">
                        <h2>Coding Challenge</h2>
                        <p>Test your coding skills in this exciting coding challenge.</p>
                        <a href="#" class="register-button"
                            onclick="showRegistrationForm('codingChallenge')">Register</a>
                    </div>

                    <div class="event">
                        <h2>Tech Talk</h2>
                        <p>Join us for an insightful tech talk on the latest trends in technology.</p>
                        <a href="#" class="register-button" onclick="showRegistrationForm('techTalk')">Register</a>
                    </div>
                </div>
            </section>

            <section>
                <h2>Cultural Events</h2>
                <div class="event-container">
                    <div class="event">
                        <h2>Art Exhibition</h2>
                        <p>Explore the world of art in our cultural art exhibition.</p>
                        <a href="#" class="register-button" onclick="showRegistrationForm('artExhibition')">Register</a>
                    </div>

                    <div class="event">
                        <h2>Dance Night</h2>
                        <p>Celebrate the cultural diversity with a night of dance and music.</p>
                        <a href="#" class="register-button" onclick="showRegistrationForm('danceNight')">Register</a>
                    </div>
                </div>
            </section>

            <div class="registration-form" id="codingChallengeForm">
                <h2>Registration Form for Coding Challenge</h2>
                <form action="process_registration.php" method="post" onsubmit="return validateForm('codingChallengeForm')">
                    <input type="hidden" name="event" value="Coding Challenge">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <input type="submit" value="Submit">
                </form>
                <a href="#" class="close-button" onclick="closeRegistrationForm('codingChallengeForm')">Close</a>
            </div>

            <div class="registration-form" id="techTalkForm">
                <h2>Registration Form for Tech Talk</h2>
                <form action="process_registration.php" method="post" onsubmit="return validateForm('techTalkForm')">
                <input type="hidden" name="event" value="Tech Talk">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <input type="submit" value="Submit">
                </form>
                <a href="#" class="close-button" onclick="closeRegistrationForm('techTalkForm')">Close</a>
            </div>

            <div class="registration-form" id="artExhibitionForm">
                <h2>Registration Form for Art Exhibition</h2>
                <form action="process_registration.php" method="post" onsubmit="return validateForm('artExhibitionForm')">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <input type="submit" value="Submit">
                </form><br>
                <a href="#" class="close-button" onclick="closeRegistrationForm('artExhibitionForm')">Close</a>
            </div>

            <div class="registration-form" id="danceNightForm">
                <h2>Registration Form for Dance Night</h2>
                <form action="process_registration.php" method="post" onsubmit="return validateForm('danceNightForm')">
                    <input type="hidden" name="event" value="Dance Night">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <input type="submit" value="Submit">
                </form>
                <a href="#" class="close-button" onclick="closeRegistrationForm('danceNightForm')">Close</a>
            </div>

            <script>
        function showRegistrationForm(eventId) {
            var formId = eventId + 'Form';
            document.getElementById(formId).style.display = 'block';
        }

        function closeRegistrationForm(formId) {
            document.getElementById(formId).style.display = 'none';
        }

        function validateForm(formId) {
            var form = document.getElementById(formId);
            var name = form.querySelector('input[name="name"]').value.trim();
            var email = form.querySelector('input[name="email"]').value.trim();

            // Basic name validation (letters and spaces only)
            var nameRegex = /^[A-Za-z\s]+$/;
            // Basic email validation using a regular expression
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (name === '' || email === '' || !nameRegex.test(name) || !emailRegex.test(email)) {
                alert('Please enter a valid name and email.');
                return false;
            }

            return true;
        }
    </script>

            <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->

</body>

</html>