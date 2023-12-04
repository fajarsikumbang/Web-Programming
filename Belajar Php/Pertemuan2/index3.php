<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <table cellpadding="10" border="1" cellspacing="1">
        <?php for ($i = 1; $i <= 5; $i++) { ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) { ?>
                    <td><?php echo "$i, $j"; ?></td>
                 <?php } ?>   
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>