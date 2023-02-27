
<main class="container mt-5 mb-5">
        <h1 style="margin-bottom:50px;">Chi tiết bài viết</h1>
        <div class="row">
                   
                    <form action="index.php?act=updateArticle" method="post">
                        <div class="mb-3">
                            <input type="hidden" name="mabaiviet"  value="<?= $article[0]['ma_bviet'] ?>" >
                            <label for="exampleInputEmail1" class="form-label">Tiêu đề</label>
                            <input type="text" name="tieude" value="<?= $article[0]['tieude'] ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên bài hát</label>
                            <input type="text" name="tenbaihat" value="<?= $article[0]['ten_bhat'] ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">tóm tắt</label>
                            <input type="text" name="tomtat" value="<?= $article[0]['tomtat'] ?>" >
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ngày viết</label>
                            <input type="text" name="ngayviet" value="<?= $article[0]['ngayviet'] ?>" >
                        </div>
                
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
        </div>
    </main>
