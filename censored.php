<!DOCTYPE html>
<html lang="ita">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>



<?php
$paragraph = $_POST['paragraph'];
$badword = $_POST['badwords'];
?>



<body>
    <main>
        <section>
            <h2>Paragrafo di partenza</h2>

            <p>
                <?php echo $paragraph; ?>
            </p>

            <p>
                Lunghezza paragrafo <?php echo strlen($paragraph) ?>
            </p>
        </section>

        <?php
        $censoredWord = '***';
        $changedParagraph = str_ireplace($badword, $censoredWord, $paragraph);
        ?>

        <section>
            <h2>Paragrafo modificato</h2>

            <p>
                <?php echo $changedParagraph; ?>
            </p>

            <p>
                Lunghezza paragrafo <?php echo strlen($changedParagraph) ?>
            </p>
        </section>
    </main>
</body>

</html>