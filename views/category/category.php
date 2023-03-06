<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="index.php?controller=category&action=add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên thể loại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1;
                    foreach ($categories as $category) { ?>
                        <tr>
                            <th scope="row"><?= $stt ?></th>
                            <td><?= $category['ten_tloai'] ?></td>
                            <td>
                                <a href="index.php?controller=category&action=getCategoryById&id=<?= $category['ma_tloai'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="indexAdmin.php?act=deleteCategory&id=<?= $category['ma_tloai'] ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>

                    <?php $stt++;
                    } ?>


                </tbody>
            </table>
        </div>
    </div>
</main>