<main>
    <div class="row">
        <div class="col-sm">
            <a href="index.php?controller=article&action=add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Tên bài hát</th>
                        <th scope="col">Mã tác giả</th>
                        <th scope="col">Tóm Tắt</th>
                        <th scope="col">Mã thể loại</th>
                        <th scope="col">ngày viết</th>

                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 1;
                    foreach ($articles as $article) { ?>

                        <tr>
                            <th scope="row"><?= $stt ?></th>
                            <td><?= $article['tieude'] ?></td>
                            <td><?= $article['ten_bhat'] ?></td>
                            <td><?= $article['ma_tgia'] ?></td>
                            <td><?= $article['tomtat'] ?></td>
                            <td><?= $article['ma_tloai'] ?></td>
                            <td><?= $article['ngayviet'] ?></td>
                            <td>
                                <a href="index.php?controller=article&action=getArticleById&id=<?= $article['ma_bviet'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="index.php?act=deleteArticle&id=<?= $article['ma_bviet'] ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php $stt++;
                    } ?>


                </tbody>
            </table>
        </div>
    </div>
</main>