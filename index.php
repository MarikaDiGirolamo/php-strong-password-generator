<?php

include './functions.php';

$result = '';
if (isset($_GET["pwd"])) {
    $pwdLength = $_GET["pwd"];
    $result = generatePassword($pwd);

    session_start();
    $_SESSION["password"] = $result;

    header("Location: ./success.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/style.css">
    <title>php-strong-password-generator</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>STRONG GENERATION PASSWORD</h1>
                <h3>Generate a secure password</h3>
            </div>
            <div class="col-12">
                <?php if (isset($result)) { ?>
                    <div class="alert alert-primary">
                        <?php echo $result ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-12 form">
                <form action="index.php" method="GET">
                    <label for="pwd">Lunghezza password:</label>
                    <input type="text" name="pwd" id="pwd" value="" placeholder="Generate your password">
                    <div class="button mt-4">
                        <button class="btn btn-outline-primary" type="submit">Submit</button>
                        <button class="btn btn-outline-secondary" type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>

</body>

</html>