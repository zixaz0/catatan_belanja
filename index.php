<?php
include 'koneksi.php';
$result = $conn->query("SELECT * FROM belanja");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Catatan Belanja</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Catatan Belanja</h2>
        <form method="POST" action="proses.php">
            <input type="text" name="item" placeholder="Tambah item..." required>
            <button type="submit">Tambah</button>
        </form>
        <table>
            <tr><th>Item</th><th>Status</th><th>Aksi</th></tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td class="<?= $row['status'] == 'dibeli' ? 'dibeli' : '' ?>">
                        <?= htmlspecialchars($row['item']) ?>
                    </td>
                    <td><?= $row['status'] ?></td>
                    <td>
                        <a href="proses.php?update=<?= $row['id'] ?>" class="btn-update">✔</a>
                        <a href="proses.php?hapus=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Hapus item ini?')">❌</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>