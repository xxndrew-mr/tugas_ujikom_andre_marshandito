<h2>👥 Data Customer</h2>
<a href="index.php?page=add_customer" class="btn btn-primary mb-3">➕ Tambah Customer</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>alamat</th>
            <th>telp</th>
            <th>fax</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM customer";
        $result = mysqli_query($conn, $query);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>$id</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['alamat']}</td>
                    <td>{$row['telp']}</td>
                    <td>{$row['tax']}</td>
                    <td>
                        <a href='#' class='btn btn-warning btn-sm'>✏ Edit</a>
                        <a href='#' class='btn btn-danger btn-sm'>🗑 Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </tbody>
</table>
