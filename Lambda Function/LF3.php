<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lambda Function</title>
</head>

<body>

    <?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => 1968,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'releaseYear' => 2021,
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'http://example.com'
        ]
    ];

    function filter($items, $fn)   // Signature: terms used to describe the parameters of the func
    {
        $fileteredItems = [];

        foreach ($items as $item) {
            if ($fn($item)) {
                $fileteredItems[] = $item;
            }
        }

        return $fileteredItems;
    };

    $fileteredBooks = filter($books, function($book) {
        return $book['releaseYear'] >= 2000;
    });
    ?>

    <div>
        <ul>
            <?php foreach ($fileteredBooks as $book): ?>
                <li>
                    <a href="<?= $book['purchaseUrl'] ?>">
                        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>