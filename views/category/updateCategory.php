<main class="container mt-5 mb-5">
    <h1 style="margin-bottom:50px;">Chi tiết thể loại</h1>
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <form action="../admin/indexAdmin.php?act=updateCategory" method="post">
            <!-- <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên thể loại</label>
                <input type="hidden" name="matheloai" value="<?= $category[0]['ma_tloai'] ?>">
                <input type="text" name="tentheloai" value="<?= $category[0]['ten_tloai'] ?>">
            </div> -->

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                <input type="hidden" name="matheloai" value="<?= $category[0]['ma_tloai'] ?>">
                <input class="form-control" type="text" name="tentheloai" value="<?= $category[0]['ten_tloai'] ?>">
            </div>

            <!-- <button type="submit" class="btn btn-primary">Sửa</button> -->

            <div class="form-group  float-end ">
                <input type="submit" value="Lưu lại" class="btn btn-success">
                <a href="../admin/indexAdmin.php?act=theloai" class="btn btn-warning ">Quay lại</a>
            </div>
        </form>
    </div>
</main>