 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Recommended Books</h1> 

            <?php 
                $books = [
                    [
                        'name' => 'Do Androids Dream',
                        'author' => 'Langoliers',
                        'purchaseURL' => 'http://androids.com',
                        'releaseYear' => '2000'
                    ],
         
                    [
                        'name' => 'Hail Mary',
                        'author' => 'SomeCunt',
                        'purchaseURL' => 'http://mary.com',
                        'releaseYear' => '2011'
                    ],
                ];
            
                //General filter function that looks in any array ($items) and returns the TRUTHY items as the value
             function filter($items, $function) {
                    //Declared filteredItems as the array that stores each $item (iterated from $items) that matches the filter conditions 
                    $filteredItems = [];
                    //Iterate over items in the array to find the matching $ITEM(s) that match the criteria
                    foreach ($items as $item) {
                        //IF the named function '$book' (if the $item) returns a book of key 'releaseYear' with a value < 1999, (if the 'if' condition is TRUTHY) then assign THAT book (those books) to $item var and store it in the array $filteredItems 
                        if ($function($item))
                        {
                            $filteredItems[] = $item;
                        }
                }
                //RETURN the value of the DISPLAYABLE ITEM(S) to store in the function 'filter()'
                return $filteredItems;
            }

                //Create $filteredBooks as a variable that stores the results of the FILTER function on the $BOOKS array, using the parameters in the named function FILTER. 
                // PASS the $FILTER function the array $BOOKS, and give it $BOOK as the $ITEM, releaseYEAR & integer as the KEY VALUE pair. 
                // If 'function' (taking the BOOK as the item) MATCHES CONDITIONS of operand (> YEAR), return relevant book array member to $filteredBooks.
                $filteredBooks = filter($books, function($book) {
                    return $book['author'] === 'Langoliers';
                });
            ?>

        <ul>
            <?php foreach ($filteredBooks as $book) : 
                //For each BOOK that is returned as valid to the FilteredBooks array, LIST URL, name and Author of the array ?>
                <li><a href="<?= $book['purchaseURL']?>">
                <?php echo $book['name'] ?></a> - By <?= $book['author']?></li>
            <?php endforeach; ?>
        </ul>
</body>
</html>