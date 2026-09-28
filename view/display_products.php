<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <style>
        table {
            border-spacing: 5px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: lightskyblue;
        }

        tr:nth-child(even) {
            background-color: whitesmoke;
        }

        tr:nth-child(odd) {
            background-color: lightgray;
        }
    </style>
</head>

<body>

    <h1>Product List</h1>

    <table>
        <tr>
            <th>Product#</th>
            <th>Name</th>
            <th>Type</th>
        </tr>

        <?php while ($product = mysqli_fetch_assoc($products)) : ?>
            <tr>
                <td><?php echo htmlspecialchars($product['Product#']); ?></td>
                <td><?php echo htmlspecialchars($product['Name']); ?></td>
                <td><?php echo htmlspecialchars($product['Type']); ?></td>
            </tr>
        <?php endwhile; ?>

    </table>

</body>
</html>
