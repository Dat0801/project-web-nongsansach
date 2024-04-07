<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-pzjw8s+ekmvplp5f/ZxXnDQbcz0S7bJr6W2kcoFVGLsRakET4Qc5I2tG4LDA2tB" crossorigin="anonymous">
<form class="d-flex" action="" method="post">
    <div style="margin: 0 auto">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm nhà cung cấp" aria-label="Tìm kiếm sản phẩm..."
            style="width:400px; margin: 0 auto" name="searchStr" id="searchStr">
        <center>
            <button class="btn btn-outline-success m-2" type="submit">Search</button>
        </center>
    </div>
</form>
<table class="table table-dark table-bordered">
    <thead>
        <tr>
            <th scope="col">MaNCC</th>
            <th scope="col">TenNCC</th>
            <th scope="col">SDT</th>
            <th scope="col">DiaChi</th>
            <th scope="col">TrangThai</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($suppliers_list as $suppliers) {
                echo '<tr>';
                echo "<td>".$suppliers['MaNCC']."</td>";
                echo "<td>".$suppliers['TenNCC']."</td>";
                echo "<td>".$suppliers['SDT']."</td>";
                echo "<td>".$suppliers['DiaChi']."</td>";
                echo "<td>".$suppliers['TrangThai']."</td>";
                echo "<td>
                <a href=\""._WEB_ROOT."/admin/suppliers/editsuppliers?mancc=".$suppliers["MaNCC"]."\" style=\"color:greenyellow\">Edit</a>
                <a class=\"btn-delete\" style=\"color:greenyellow\">Delete</a>
                </td>";
                echo '</tr>';
            }
        ?>
</table>