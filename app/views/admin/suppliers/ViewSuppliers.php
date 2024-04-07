<?php
include_once "app/views/admin/pagination/pagination.php";
$suppliers_list = $suppliers_model->getListWithLimit($display, $position);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-pzjw8s+ekmvplp5f/ZxXnDQbcz0S7bJr6W2kcoFVGLsRakET4Qc5I2tG4LDA2tB" crossorigin="anonymous">
<form class="d-flex" action="" method="post">
    <div style="margin: 0 auto">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm nhà cung cấp"
            aria-label="Tìm kiếm sản phẩm..." style="width:400px; margin: 0 auto" name="searchStr" id="searchStr">
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
        foreach ($suppliers_list as $suppliers) {
            echo '<tr>';
            echo "<td>" . $suppliers['MaNCC'] . "</td>";
            echo "<td>" . $suppliers['TenNCC'] . "</td>";
            echo "<td>" . $suppliers['SDT'] . "</td>";
            echo "<td>" . $suppliers['DiaChi'] . "</td>";
            echo "<td>" . $suppliers['TrangThai'] . "</td>";
            echo "<td>
                <a href=\"" . _WEB_ROOT . "/admin/suppliers/Editsuppliers?MaNCC=" . $suppliers["MaNCC"] . "\" style=\"color:greenyellow\">Edit</a>
                <a class=\"btn-delete\" style=\"color:greenyellow\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\" data-suppliersid=\"" . $suppliers['MaNCC'] . "\" data-suppliersname=\"" . $suppliers['TenNCC'] . "\">Delete</a>
                </td>";
            echo '</tr>';
        }
        ?>
</table>
<nav aria-label="Page navigation example">
    <ul class="pagination" style="justify-content: center; padding: 20px;">
        <?php if ($curr_page > 1):
            $prev_page = $curr_page - 1;
            ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . "?page=$prev_page" ?>"
                    aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        <?php endif; ?>
        <?php
        for ($page_item = $start; $page_item <= $end; $page_item++):
            $isActive = ($curr_page == $page_item) ? 'active' : '';
            ?>
            <li class="page-item <?php echo $isActive; ?>">
                <a class="page-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . "?page=$page_item" ?>">
                    <?php echo $page_item ?>
                </a>
            </li>
        <?php endfor; ?>
        <?php
        if ($curr_page < $total_pages):
            $next_page = $curr_page + 1;
            ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . "?page=$next_page" ?>"
                    aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<!-- Xử lý nút delete -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:black">Huỷ hợp tác với nhà cung cấp</h5>
                </div>
                <div class="modal-body">
                    <p style="color: red">Bạn có muốn xoá tên nhà cung cấp ra khỏi danh sách?</p>
                    <table class="table table-suppliers">
                        <tr>
                            <td>MaNCC</td>
                            <td><span id="DeletesuppliersIDSpan"></span></td>
                        </tr>
                        <tr>
                            <td>TenNCC</td>
                            <td><span id="DeletesuppliersNameSpan"></span></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <a href="" id="btn-xoa" class="btn btn-success">Xóa</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.btn-delete').click((event) => {
            const suppliersid = $(event.target).attr('data-suppliersid');
            const suppliersname = $(event.target).attr('data-suppliersname');
            $('#DeletesuppliersIDSpan').html(suppliersid);
            $('#DeletesuppliersNameSpan').html(suppliersname);
            $("#btn-xoa").attr("href", "<?php echo _WEB_ROOT ?>/admin/suppliers/deletesuppliers?MaNCC=" + suppliersid);
        })
    </script>