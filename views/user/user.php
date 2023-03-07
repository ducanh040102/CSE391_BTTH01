<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="index.php?controller=user&action=add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Quyền hạn</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1;
                    foreach ($users as $user) { ?>
                        <tr>
                            <th scope="row"><?= $stt ?></th>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['pass'] ?></td>
                            <td><?= $user['QuyenHan'] ?></td>
                            <td>
                                <a href="index.php?controller=user&action=getUserById&id=<?= $user['ma_user'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
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