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

    function filter($items, $key, $value)
    {
        $fileteredItems = [];

        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $fileteredItems[] = $item;
            }
        }

        return $fileteredItems;
    };

    $fileteredBooks = filter($books, 'author', 'Philip K. Dick');
    $fileteredYear = filter(
        $books,
        'releaseYear',
        2021
    );
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
            <?php foreach ($fileteredYear as $book): ?>
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