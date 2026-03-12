<?php
$max = isset($_POST['number']) ? intval($_POST['number']) : 0;
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Practice 4</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <form method="post" action="practice4.php">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" min="1" value="<?php echo htmlspecialchars($max); ?>">
        <button type="submit">Generate</button>
    </form>

    <?php if ($max > 0): ?>
        <table>
            <tr>
                <th>x</th>
                <?php for ($col = 1; $col <= $max; $col++): ?>
                    <th><?php echo $col; ?></th>
                <?php endfor; ?>
            </tr>
            <?php for ($row = 1; $row <= $max; $row++): ?>
                <tr>
                    <th><?php echo $row; ?></th>
                    <?php for ($col = 1; $col <= $max; $col++): ?>
                        <td><?php echo $row * $col; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
    <?php endif; ?>
</body>
</html>
