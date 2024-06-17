<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHPDemo</title>
</head>

<body>
    <h1>Recommended Books</h1>

    <ul>
        <?php foreach ($filteredBooks as $book) :
            //For each BOOK that is returned as valid to the FilteredBooks array, LIST URL, name and Author of the array 
        ?>
            <li><a href="<?= $book['purchaseURL'] ?>">
                    <?php echo $book['name'] ?></a> - By <?= $book['author'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>