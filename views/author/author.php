<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="../admin/indexAdmin.php?act=add_author" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên tác giả</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1;
                    foreach ($authors as $author) { ?>
                        <tr>
                            <th scope="row"><?= $stt ?></th>
                            <td><?= $author['ten_tgia'] ?></td>
                            <td>
                                <a href="indexAdmin.php?act=updateAuthor&id=<?= $author['ma_tgia'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="indexAdmin.php?act=deleteAuthor&id=<?= $author['ma_tgia'] ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php $stt++;
                    } ?>


            </table>
        </div>
    </div>
</main>