
<main class="container mt-5 mb-5">
        <h1 style="margin-bottom:50px;">Chi tiết tác giả</h1>
        <div class="row">
                   
                    <form action="index.php?act=updateAuthor" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên tác giả</label>
                            <input type="hidden" name="matacgia"  value="<?= $author[0]['ma_tgia'] ?>" >
                            <input type="text" name="tentacgia" value="<?= $author[0]['ten_tgia'] ?>" >
                        </div>
                
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
        </div>
    </main>
