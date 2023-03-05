<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
            <form action="../admin/indexAdmin.php?act=addAuthor" method="post">

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                    <input class="form-control" type="text" name="tentacgia">
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="../admin/indexAdmin.php?act=tacgia" class="btn btn-warning ">Quay lại</a>
                </div>

                <!-- <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    
                </div> -->
            </form>
        </div>
    </div>
</main>