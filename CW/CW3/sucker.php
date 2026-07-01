<?php
// ---------------------------------------------------------
// Exercise 5: Basic Validation
// This runs FIRST, before anything is saved to the file,
// so an incomplete submission never touches suckers.html.
// ---------------------------------------------------------
$required = ['name', 'section', 'cardnumber', 'cardtype'];

foreach ($required as $field) {
    if (!isset($_POST[$field]) || trim($_POST[$field]) === '') {
        echo '<h1>Sorry</h1>';
        echo '<p>You did not fill out the form completely. <a href="buyagrade.html">Go back and try again</a>.</p>';
        exit;
    }
}

// ---------------------------------------------------------
// Exercise 4: Save Form Data
// Only reached if validation above passed.
// ---------------------------------------------------------
$name       = trim($_POST['name']);
$section    = trim($_POST['section']);
$cardnumber = trim($_POST['cardnumber']);
$cardtype   = trim($_POST['cardtype']);
$line = $name . ';' . $section . ';' . $cardnumber . ';' . $cardtype . PHP_EOL;
file_put_contents('suckers.html', $line, FILE_APPEND);

$all = file_get_contents('suckers.html');

$all = file_get_contents('suckers.html');

$all = file_get_contents('suckers.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Thank You, Sucker</title>
</head>
<body>

<!-- ---------------------------------------------------------
     Exercise 3: Display Input Data in PHP
     Raw $_POST dump first (handy for debugging), then the
     cleaned-up, escaped values.
     --------------------------------------------------------- -->
<h1>Raw Form Data</h1>
<pre><?php print_r($_POST); ?></pre>

<h1>Form Input Values</h1>
<p>Your Name: <?= htmlspecialchars($name) ?></p>
<p>Section: <?= htmlspecialchars($section) ?></p>
<p>Card Number: <?= htmlspecialchars($cardnumber) ?></p>
<p>Card Type: <?= htmlspecialchars($cardtype) ?></p>

<h2>The current database contains:</h2>
<pre><?= htmlspecialchars($all) ?></pre>

</body>
</html>