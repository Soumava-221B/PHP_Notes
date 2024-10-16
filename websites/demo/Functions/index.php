<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Arrays</title>
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
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl']; ?>">
                    <?= $book['name']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>