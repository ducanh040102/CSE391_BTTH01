
<main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
                <form action="process_add_category.php" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                        <input type="text" class="form-control" name="tieude" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control" name="tomtat" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Bài hát</span>
                        <input type="text" class="form-control" name="baihat" >
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Ngày viết</span>
                        <input type="text" class="form-control" name="ngayviet" >
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <!-- <a href="category.php" class="btn btn-warning ">Quay lại</a> -->
                    </div>
                </form>
            </div>
        </div>
    </main>
    