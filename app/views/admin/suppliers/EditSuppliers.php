<center><h2>Sửa Thông Tin Nhà Cung Cấp</h2></center>
<form action="<?php echo _WEB_ROOT ?>/admin/suppliers/updatesuppliers?MaNCC=<?php echo $suppliers["MaNCC"] ?>" method="post">
    <div class="row">
        <div style="margin: 0px 50px;" class="col">
            <div>
                MaNCC
                <input type="text" name="MaNCC" class="form-control" value="<?php echo $suppliers['MaNCC']?>"/>
            </div>
            <br />
            <div>
                TenNCC
                <input type="text" name="TenNCC" class="form-control" value="<?php echo $suppliers['TenNCC']?>"/>
            </div>
            <br />
        </div>
        <div style="margin: 0px 50px;" class="col">
            <div>
                SDT
                <input type="text" name="SDT" class="form-control" value="<?php echo $suppliers['SDT']?>"/>
            </div>
            <br />
            <div>
                DiaChi
                <input type="text" name="DiaChi" class="form-control" value="<?php echo $suppliers['DiaChi']?>"/>
            </div>
        </div>
    </div>
    <div>
        <center><button type="submit" class="btn  btn-lg btn-success material-symbols-outlined">edit</button>
        </center>
        <a href="<?php echo _WEB_ROOT ?>/admin/Suppliers" style="margin: 0px 50px;"
            class="btn btn-lg btn-primary material-symbols-outlined">
            keyboard_return
        </a>
    </div>
</form>