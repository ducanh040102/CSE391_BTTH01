
    <main class="container mt-5 mb-5">
        <h1 style="margin-bottom:50px;">Chi tiết thể loại</h1>
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
                    <form action="index.php?act=updateCategory" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên thể loại</label>
                            <input type="hidden" name="matheloai"  value="<?= $category[0]['ma_tloai'] ?>" >
                            <input type="text" name="tentheloai" value="<?= $category[0]['ten_tloai'] ?>" >
                        </div>
                
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
        </div>
    </main>
