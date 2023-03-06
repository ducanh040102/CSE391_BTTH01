<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
            <form action="index.php?controller=category&action=addCategory" method="post">

                <!-- <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" name="btn" class="btn btn-success">
                    
                </div> -->

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                    <input class="form-control" type="text" name="tentheloai">
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="../admin/indexAdmin.php?act=theloai" class="btn btn-warning ">Quay lại</a>
                </div>

            </form>
        </div>
    </div>
</main>