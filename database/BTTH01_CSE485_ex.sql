
-- Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình
SELECT * FROM baiviet,theloai WHERE baiviet.ma_tloai = theloai.ma_tloai AND theloai.ten_tloai = 'Nhạc trữ tình'

-- Liệt kê các bài viết của tác giả “Nhacvietplus”
SELECT * FROM baiviet,tacgia WHERE baiviet.ma_tgia = tacgia.ma_tgia AND tacgia.ten_tgia = 'Nhacvietplus'

-- Liệt kê các bài viết với các thông tin sau: mã bài viết, tên bài viết, tên bài hát, tên tác giả, tên thể loại, ngày viết.
SELECT baiviet.ma_bviet,baiviet.tieude,baiviet.ten_bhat,tacgia.ten_tgia,theloai.ten_tloai,baiviet.ngayviet from baiviet INNER JOIN tacgia on  baiviet.ma_tgia = tacgia.ma_tgia INNER JOIN theloai on baiviet.ma_tloai = theloai.ma_tloai

-- Tìm thể loại có số bài viết nhiều nhất
SELECT theloai.ten_tloai, COUNT(baiviet.ma_tloai) as soluong from baiviet INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai GROUP BY theloai.ma_tloai ORDER BY soluong DESC LIMIT 1


-- Tìm 2 tác giả có số bài viết nhiều nhất
SELECT tacgia.ten_tgia, COUNT(baiviet.ma_tgia) as soluong from baiviet INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia GROUP BY	tacgia.ma_tgia ORDER BY soluong DESC LIMIT 2

-- Liệt kê các bài viết về các bài hát có tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”,“em”
SELECT baiviet.ten_bhat FROM baiviet WHERE baiviet.ten_bhat LIKE "%yêu%" or baiviet.ten_bhat LIKE "%thương%" or baiviet.ten_bhat LIKE "%anh%" or baiviet.ten_bhat LIKE "%em%"

-- Liệt kê các bài viết về các bài hát có tiêu đề bài viết hoặc tựa bài hát chứa 1 trong các từ “yêu”, “thương”, “anh”, “em”
SELECT baiviet.tieude FROM baiviet WHERE baiviet.tieude LIKE "%yêu%" or baiviet.tieude LIKE "%thương%" or baiviet.tieude LIKE "%anh%" or baiviet.tieude LIKE "%em%"

--Tìm thể loại có số bài viết nhiều nhất
SELECT ma_tloai, COUNT(*) AS m_baiviet FROM baiviet GROUP BY ma_tloai ORDER BY m_baiviet DESC LIMIT 1;

