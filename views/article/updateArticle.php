<main class="container mt-5 mb-5">
    <h1 style="margin-bottom:50px;">Chi tiết bài viết</h1>
    <div class="row">

        <form action="../admin/indexAdmin.php?act=updateArticle" method="post">
            <div class="input-group mt-3 mb-3">
                <input type="hidden" name="mabaiviet" value="<?= $article[0]['ma_bviet'] ?>">
                <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                <input class="form-control" type="text" name="tieude" value="<?= $article[0]['tieude'] ?>">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                <input class="form-control" type="text" name="tenbaihat" value="<?= $article[0]['ten_bhat'] ?>">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">tóm tắt</span>
                <input class="form-control" type="text" name="tomtat" value="<?= $article[0]['tomtat'] ?>">
            </div>

            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Ngày viết</span>
                <input class="form-control" type="text" name="ngayviet" value="<?= $article[0]['ngayviet'] ?>">
            </div>


            <div class="form-group  float-end ">
                <input type="submit" value="Lưu lại" class="btn btn-success">
                <a href="../admin/indexAdmin.php?act=baiviet" class="btn btn-warning ">Quay lại</a>
            </div>
        </form>
    </div>
</main>