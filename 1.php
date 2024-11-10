<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>determine the largest number </title>
</head>

<body>
    <form action="" method="POST">
        <label for="bil1">Bilangan Pertama:</label>
        <input type="number" name="bil1" id="bil1" required>
        <br>
        <label for="bil2">Bilangan Kedua:</label>
        <input type="number" name="bil2" id="bil2" required>
        <br>
        <button type="submit" name="submit">Tentukan Bilangan Terbesar </button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bil1 = intval($_POST['bil1']);
        $bil2 = intval($_POST['bil2']);

        if ($bil1 > $bil2) {
            echo "<p>the largest number is: $bil1</p>";
        } elseif ($bil2 > $bil1) {
            echo "<p>the largest number is: $bil2</p>";
        } else {
            echo "<p>both number are the same: $bil1</p>";
        }
    }
    ?>
</body>

</html>
