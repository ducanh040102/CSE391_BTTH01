<main class="container mt-5 mb-5">
    <h1 style="margin-bottom:50px;">Chi tiết tác giả</h1>
    <div class="row">

        <form action="../admin/indexAdmin.php?act=updateAuthor" method="post">


            <div class="input-group mt-3 mb-3">
                <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                <input type="hidden" name="matacgia" value="<?= $author[0]['ma_tgia'] ?>">
                <input class="form-control" type="text" name="tentacgia" value="<?= $author[0]['ten_tgia'] ?>">
            </div>

            <div class="form-group  float-end ">
                <input type="submit" value="Lưu lại" class="btn btn-success">
                <a href="../admin/indexAdmin.php?act=tacgia" class="btn btn-warning ">Quay lại</a>
            </div>

            <!-- <button type="submit" class="btn btn-primary">Sửa</button> -->
        </form>
    </div>
</main>