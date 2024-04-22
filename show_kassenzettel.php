<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kassenzettel</title>
    <style>

    </style>
</head>
<body>
<h1>Kassenzettel <?php echo date('d.m.y H:i:s') ?></h1>
<form action="kassenzettelBrechnung.php" method="post">
    <table>
        <thead>
        <th>Artikel</th>
        <th>Einzelpreis</th>
        <th>Anzahl</th>
        <th>MwSt.</th>

        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < 3; $i++) {
            ?>
            <tr>
                <td><input type="text" name="artikel[]" value=""></td>
                <td><input type="text" name="einzelpreis[]" value=""></td>
                <td><input type="text" name="anzahl[]" value=""></td>
                <td><label><input type="radio" name="mwst[<?php echo $i ?>]" value="7" checked>7% </label>
                    <label><input type="radio" name="mwst[<?php echo $i ?>]" value="19" >19% </label>
                </td>
                <td style="text-align: center"></td>
            </tr>
            <?php
        }
        ?>

        <tr>
            <td colspan="2" rowspan="3"><input type="submit"></td>
        </tr>


        </tbody>

    </table>
</form>
</body>
</html>

