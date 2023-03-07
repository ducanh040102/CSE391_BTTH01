<main class="container mt-5 mb-5">
    <h1 style="margin-bottom:50px;">Chi tiết người dùng</h1>
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <form action="index.php?controller=user&action=updateUserById" method="post">

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Tên người dùng</span>
                <input type="hidden" name="manguoidung" value="<?= $user[0]['ma_user'] ?>">
                <input class="form-control" type="text" name="tennguoidung" value="<?= $user[0]['name'] ?>">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Mật khẩu</span>
                <input class="form-control" type="text" name="matkhau" value="<?= $user[0]['pass'] ?>">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Quyền hạn</span>
                <input class="form-control" type="text" name="quyenhan" value="<?= $user[0]['QuyenHan'] ?>">
            </div>

            <!-- <button type="submit" class="btn btn-primary">Sửa</button> -->

            <div class="form-group  float-end ">
                <input type="submit" value="Lưu lại" class="btn btn-success">
                <a href="index.php?controller=user" class="btn btn-warning ">Quay lại</a>
            </div>
        </form>
    </div>
</main>