<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form Task</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["form_page"] == 1) {
            // Page 1 form handling and validation
            $errors = array();

            // Validate Name, Phone Number, and Email
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];

            if (empty($name)) {
                $errors[] = "Name is required";
            }

            if (!preg_match("/^[0-9]{11}$/", $phone)) {
                $errors[] = "Please enter a valid 11-digit phone number";
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format";
            }

            if (empty($errors)) {
                echo "<form method='post' action='index.php'>
                <input type='hidden' name='form_page' value='2'>
                <input type='hidden' name='name' value='$name'>
                <input type='hidden' name='phone' value='$phone'>
                <input type='hidden' name='email' value='$email'>
                <div class='form-group'>
                  <label for='location'>Location:</label>
                  <input type='text' class='form-control' id='location' name='location' required>
                </div>
                <div class='form-group'>
                  <label for='age'>Age:</label>
                  <input type='number' class='form-control' id='age' name='age' required>
                </div>
                <div class='form-group'>
                  <label for='university'>University:</label>
                  <input type='text' class='form-control' id='university' name='university' required>
                </div>
                <button type='submit' class='btn btn-primary'>Submit</button>
              </form>";
            } else {
                echo "<div class='alert alert-danger'>";
                foreach ($errors as $error) {
                    echo "<p>$error</p>";
                }
                echo "</div>";
            }
        } elseif ($_POST["form_page"] == 2) {
            // Page 2 form handling
            $name = $_POST["name"];
            $location = $_POST["location"];
            $age = $_POST["age"];
            $university = $_POST["university"];

            echo "<div class='alert alert-success' role='alert'>
              <h1>Thank You!</h1>
              <p>Thank you for filling the form, $name!</p>
            </div>";
            // Here, you can process/store the data in a database, send emails, etc.
        }
    } else {
        ?>
        <!-- Page 1: Name, Phone Number & Email -->
        <div class="card">
            <div class="card-header">
                Page 1: Personal Information
            </div>
            <div class="card-body">
                <form method="post" action="index.php">
                    <input type="hidden" name="form_page" value="1">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{11}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
