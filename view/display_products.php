<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>

    <h1>Product List</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Product#</th>
            <th>Name</th>
            <th>Type</th>
        </tr>

        <?php while ($product = mysqli_fetch_assoc($products)) : ?>

            <tr>
                <td>
                    <?php echo htmlspecialchars($product['Product#']); ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($product['Name']); ?>
                </td>

                <td>
                    <?php echo htmlspecialchars($product['Type']); ?>
                </td>
            </tr>

        <?php endwhile; ?>

    </table>

</body>
</html>
