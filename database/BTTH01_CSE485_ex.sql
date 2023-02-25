
-- Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT * FROM baiviet,theloai WHERE baiviet.ma_tloai = theloai.ma_tloai AND theloai.ten_tloai = 'Nhạc trữ tình'

-- Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT * FROM baiviet,tacgia WHERE baiviet.ma_tgia = tacgia.ma_tgia AND tacgia.ten_tgia = 'Nhacvietplus'

-- Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết.
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,tacgia.ten_tgia,theloai.ten_tloai,baiviet.ngayviet from baiviet INNER JOIN tacgia on  baiviet.ma_tgia = tacgia.ma_tgia INNER JOIN theloai on baiviet.ma_tloai = theloai.ma_tloai

-- Tìm thể loại có số bài viết nhiều nhất
SELECT tacgia.ten_tgia, COUNT(baiviet.ma_tgia)  from baiviet,tacgia WHERE baiviet.ma_tgia = tacgia.ma_tgia GROUP BY tacgia.ma_tgia


-- Tìm tác giả có số bài viết nhiều nhất
SELECT tacgia.ten_tgia, COUNT(baiviet.ma_tgia)  from baiviet,tacgia WHERE baiviet.ma_tgia = tacgia.ma_tgia GROUP BY tacgia.ma_tgia

-- Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”,“em”
SELECT baiviet.ten_bhat FROM baiviet WHERE baiviet.ten_bhat LIKE "%yêu%" or baiviet.ten_bhat LIKE "%thương%" or baiviet.ten_bhat LIKE "%anh%" or baiviet.ten_bhat LIKE "%em%"

-- Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT baiviet.tieude FROM baiviet WHERE baiviet.tieude LIKE "%yêu%" or baiviet.tieude LIKE "%thương%" or baiviet.tieude LIKE "%anh%" or baiviet.tieude LIKE "%em%"


?>