<!DOCTYPE html>
<html lang="en">

<head>
    <!-- settings -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Es3_PHP</title>
</head>

<body>
    <?php
        $ran = array();

        // random numbers array
        for ($i = 0; $i < 10; $i++) {
            $ran[] = rand(0, 100);
        }

        // min & max
        $min = min($ran);
        $max = max($ran);

        // avarage
        $avg = array_sum($ran) / count($ran);

        // associative even numbers array
        $even_assoc = array();
        $index = 1;
        foreach ($ran as $value) {
            if ($value % 2 != 0) continue;

            $even_assoc['p' . $index] = $value;
            $index++;
        }
    ?>

    <div>
        <h1>Random numbers</h1>
        <ul>
            <?php foreach ($ran as $value): ?>
                <li>
                    <?php echo $value ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>

    <div>
        <h1>Min & Max</h1>
        <p>
            <?php echo "Min: " . $min ?>
        </p>
        <p>
            <?php echo "Max: " . $max ?>
        </p>
    </div>

    <div>
        <h1>Avarage</h1>
        <p>
            <?php echo "Avarage: " . $avg ?>
        </p>
    </div>

    <div>
        <h1>Even numbers</h1>
        <ul>
            <?php foreach ($even_assoc as $key => $value): ?>
                <li>
                    <?php echo $key . ": " . $value ?>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>