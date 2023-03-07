<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
            <form action="index.php?controller=user&action=addUser" method="post">

                <!-- <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" name="btn" class="btn btn-success">
                    
                </div> -->

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên người dùng</span>
                    <input class="form-control" type="text" name="tennguoidung">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Mật khẩu</span>
                    <input class="form-control" type="text" name="matkhau">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Quyền hạn</span>
                    <input class="form-control" type="text" name="quyenhan">
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="index.php?controller=user" class="btn btn-warning ">Quay lại</a>
                </div>

            </form>
        </div>
    </div>
</main>