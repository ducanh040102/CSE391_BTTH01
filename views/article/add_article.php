<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
            <form action="index.php?controller=article&action=addArticle" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tiêu đề</span>
                    <input type="text" class="form-control" name="tieude">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Bài hát</span>
                    <input type="text" class="form-control" name="baihat">
                </div>

                <div class="input-group mt-3 mb-3">
                    <select class="form-select" aria-label="Default select example" name="matheloai">
                        <option selected>Mã thể loại</option>
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category['ma_tloai'] ?>"> <?= $category['ma_tloai'] ?> </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                    <input type="text" class="form-control" name="tomtat">
                </div>


                <div class="input-group mt-3 mb-3">
                    <select class="form-select" aria-label="Default select example" name="matacgia">
                        <option selected>Mã tác giả</option>
                        <?php foreach ($authors as $author) { ?>
                            <option value="<?= $author['ma_tgia'] ?>"> <?= $author['ma_tgia'] ?> </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Ngày viết</span>
                    <input type="text" class="form-control" name="ngayviet">
                </div>




                <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="index.php?controller=article" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>