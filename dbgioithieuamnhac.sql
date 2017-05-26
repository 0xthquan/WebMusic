-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 06:59 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgioithieuamnhac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Username`, `Password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `nghenhac`
--

CREATE TABLE `nghenhac` (
  `ID` int(11) NOT NULL,
  `TenBaiHat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoiBaiHat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `CaSy` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TheLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DuongDan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LuotNghe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nghenhac`
--

INSERT INTO `nghenhac` (`ID`, `TenBaiHat`, `LoiBaiHat`, `CaSy`, `TacGia`, `TheLoai`, `DuongDan`, `LuotNghe`) VALUES
(1, 'Lạc trôi\r\n', '\"Người theo hương hoa mây mù giăng lối \r\nLàn sương khói phôi phai đưa bước ai xa rồi \r\nĐơn côi mình ta vấn vương hồi ức trong men say chiều mưa buồn<br>\r\nNgăn giọt lệ ngừng khiến khoé mi sầu bi. <br>\r\n<br>\r\nĐường xưa nơi cố nhân từ giã biệt li <br>\r\nCánh hoa rụng rời <br>\r\nPhận duyên mong manh rẽ lối trong mơ ngày tương phùng. <br>\r\n<br>\r\n[ĐK:] <br>\r\nTiếng khóc cuốn theo làn gió bay <br>\r\nThuyền ai qua sông lỡ quên vớt ánh trăng tàn nơi này <br>\r\nTrống vắng bóng ai dần hao gầy. <br>\r\n<br>\r\nLòng ta xin nguyện khắc ghi trong tim tình nồng mê say <br>\r\nMặc cho tóc mây vươn lên đôi môi cay <br>\r\nBâng khuâng mình ta lạc trôi giữa đời <br>\r\nTa lạc trôi giữa trời. <br>\r\n<br>\r\n[Rap:] <br>\r\nĐôi chân lang thang về nơi đâu <br>\r\nBao yêu thương giờ nơi đâu <br>\r\nCâu thơ tình xưa vội phai mờ <br>\r\nTheo làn sương tan biến trong cõi mơ <br>\r\nMưa bụi vươn trên làn mi mắt <br>\r\nNgày chia lìa hoa rơi buồn hiu hắt <br>\r\nTiếng đàn ai thêm sầu tương tư lặng mình trong chiều hoàng hôn <br>\r\nTan vào lời ca <br>\r\nLối mòn đường vắng một mình ta <br>\r\nNắng chiều vàng úa nhuộm ngày qua <br>\r\nXin đừng quay lưng xoá <br>\r\nĐừng mang câu hẹn ước kia rời xa <br>\r\nYên bình nơi nào đây <br>\r\nTrôn vùi theo làn mây. <br>\r\n<br>\r\nTa đang lạc nơi nào <br>\r\nTa đang lạc nơi nào <br>\r\nLối mòn đường vắng một mình ta <br>\r\nTa đang lạc nơi nào <br>\r\nNắng chiều vàng úa nhuộm ngày qua <br>\r\nTa đang lạc nơi nào.<br>\"\r\n', 'Sơn Tùng M-TP', 'Sơn Tùng M-TP', 'Việt Nam, Nhạc Trẻ\r\n', 'songs/Lac-Troi-Son-Tung-M-TP.mp3\r\n', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `nhacmoi`
--

CREATE TABLE `nhacmoi` (
  `ID` int(11) NOT NULL,
  `TenBaiHat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CaSy` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TheLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `LoiBaiHat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `DuongDan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AnhDaiDien` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhacmoi`
--

INSERT INTO `nhacmoi` (`ID`, `TenBaiHat`, `CaSy`, `TacGia`, `TheLoai`, `NoiDung`, `TomTat`, `LoiBaiHat`, `DuongDan`, `AnhDaiDien`) VALUES
(1, 'Yêu Là Tha Thu (Em Chưa 18 OST)\r\n', 'OnlyC\r\n', 'Nguyễn Phúc Thiện\r\n', 'Việt Nam, Nhạc Trẻ\r\n', '\"Gây tò mò về bộ phim về đề tài giới trẻ quy tụ nhiều “hot teen”, mới đây ekip Em chưa 18 vừa giới thiệu bản nhạc chính thức trong phim, có cái tên rất lạ: Yêu là “tha thu”.<br>\r\nMV Yêu là \'tha thu\' của Em chưa 18 gây tò mò <br>\r\nHai diễn viên tuổi teen Kiều Trinh (trái) và Kaity Nguyễn trong Em chưa 18 - Ảnh: ĐPCC<br>\r\nYêu là “tha thu” là ca khúc do nhạc sĩ Nguyễn Phúc Thiện sáng tác, được ca - nhạc sĩ, nhà sản xuất Only C thể hiện. Nội dung của bài hát bám rất sát với tinh thần chung của phim: Một khi đã yêu, trái tim bằng lòng thứ tha cho quá khứ hai ta từng đi qua.<br>\r\n<br>\r\nXem MV ca khúc Yêu là \"\"tha thu\"\":<br>\r\n<br>\r\n\r\n\r\nBan đầu, tên gốc của bài hát này là Yêu là tha thứ. Tuy nhiên, để gây tò mò và tạo được nhiều hiệu ứng tốt hơn sau hiện tượng “tha thu” (tattoo, nghĩa là hình xăm - xuất phát từ lời phát biểu của Sơn Tùng MTP trong một chương trình ca nhạc và sau đó được cộng đồng mạng chế lại trên các xã hội) ekip sản xuất của Only C đã quyết định đổi tên.<br>\r\n<br>\r\n“Với cái tên này, mình vừa chơi chữ để tạo sự hứng thú cho khán giả, vừa tạo được hiệu ứng tốt” nhạc sĩ Only C chia sẻ.<br>\r\n<br>\r\nMV Yêu là \'tha thu\' của Em chưa 18 gây tò mò <br>\r\nHai diễn viên chính Kaity Nguyễn và Kiều Minh Tuấn trong Em chưa 18 - Ảnh: ĐPCC<br>\r\nKhông chỉ vậy, đạo diễn Lê Thanh Sơn cũng chính là người đưa ra chủ đề “yêu là tha thứ” cũng như ý tưởng táo bạo thể hiện lời nhạc bằng thủ ngữ (ngôn ngữ ký hiệu tay) cho MV của ca khúc này.<br>\r\n<br>\r\nTheo đạo diễn Lê Thanh Sơn, tình cảm mà nói thành lời để người khác hiểu thì rất dễ, nhưng không nói gì mà chỉ thể hiện bằng hành động, ánh mắt để người ta cảm nhận được thì mới khó.<br>\r\n<br>\r\nTrong phim, Linh Đan (Kaity Nguyễn) - Hoàng (Kiều Minh Tuấn) , Yến (Châu Bùi) - Tony (Will) có những cảnh không thoại với nhau câu nào nhưng chỉ nhìn ánh mắt và thái độ, khán giả cũng có thể hiểu được tâm trạng hỉ - nộ - ái - ố của họ.<br>\r\n<br>\r\nEm chưa 18 được thực hiện bởi bộ đôi đạo diễn Lê Thanh Sơn - nhà sản xuất Charlie Nguyễn dự kiến ra rạp từ ngày 28-4.<br>\"\r\n', 'Gây tò mò về bộ phim về đề tài giới trẻ quy tụ nhiều “hot teen”, mới đây ekip Em chưa 18 vừa giới thiệu bản nhạc chính thức trong phim, có cái tên rất lạ: Yêu là “tha thu”.\r\n', '\"Trong kí ức anh khi ấy <br>\r\nLần đầu gặp gỡ làm tim nhớ nhung <br>\r\nRồi từng ngày trôi qua <br>\r\nTrong thâm tâm bỗng chốc nhận ra ấm áp tràn về mỗi lúc <br>\r\nKhi em đến ngày hôm ấy <br>\r\nMột người đang đứng gần ngay kế bên vội cầm bàn tay em <br>\r\nLôi đi nhanh trước mắt của anh lúc đấy...mờ dần rồi biến mất... <br>\r\nRồi nhiều lần khi anh thấy em cười <br>\r\nNhiều lần nước mắt rơi xuống ướt nhòa <br>\r\nDặn lòng mạnh mẽ đi kế bên và muốn nói \"\"Đừng buồn một người không nhớ đến ta\"\" <br>\r\n<br>\r\nTình yêu như món quà, khi có nhau đừng quên là <br>\r\nTừng vui khóc cùng nhau mà cớ sao ta vội muôn cách xa!? <br>\r\nTình yêu vỡ tan cứ quay đầu lại phía sau <br>\r\nxem ai đã đang kề cạnh ta bên lúc đau!? <br>\r\nTình yêu sao khác thường <br>\r\nĐôi lúc ta thật kiên cường <br>\r\nNhiều người trách mình điên cuồng <br>\r\nCứ lao theo dù không lối ra <br>\r\nMột khi đã yêu trái tim bằng lòng thứ tha cho quá khứ hai ta cùng đi qua<br>\"\r\n', 'songs/Yeu-La-Tha-Thu-Em-Chua-18-OST-OnlyC.mp3\r\n', '\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tinhot`
--

CREATE TABLE `tinhot` (
  `ID` int(11) NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ChuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AnhDaiDien` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhot`
--

INSERT INTO `tinhot` (`ID`, `TieuDe`, `NoiDung`, `TomTat`, `ChuDe`, `AnhDaiDien`) VALUES
(1, 'Tóc Tiên soán ngôi S.T (365) trên BXH Zing\r\n', '\"\r\n MV “Walk Away” của Tóc Tiên vừa ra mắt không bao lâu đã soán ngôi đầu bảng của S.T (365) trên bảng xếp hạng tuần 18 của Zing Mp3.<br>\r\n<br>\r\nTóc Tiên - Walk Away Trong Walk Away (Hãy bước đi), Tóc Tiên trở về hình tượng gợi cảm cùng dòng nhạc EDM sở trường.<br>\r\nSau các ca khúc pop ballad được yêu chuộng, Tóc Tiên trở lại với dòng nhạc EDM bằng MV Walk Away – Hãy bước đi. Ca khúc do nhạc sĩ Lưu Thiên Hương sáng tác, được học trò Hoàng Touliver phối lại theo giai điệu trap.<br>\r\n<br>\r\nHLV The Voice cho biết cô thực hiện MV dành tặng cho người hâm mộ yêu thích dòng nhạc Âu - Mỹ. Lời bài hát được đánh giá là truyền cảm hứng cho người nghe, giai điệu bắt tai và phong cách cá tính của Tóc Tiên đã tạo sức hút cho MV mới.<br>\r\n<br>\r\nChỉ sau vài tuần ra mắt, giọng ca xinh đẹp đã nhanh chóng soán ngôi đầu của S.T trên bảng xếp hạng MV của Zing Mp3. Thế nhưng, nữ ca sĩ sinh năm 1989 cũng cần giữ phong độ trước sức ép đến từ các đối thủ cạnh tranh.<br>\r\n<br>\r\nToc Tien soan ngoi S.T (365) tren BXH Zing hinh anh 1<br>\r\nTóc Tiên liên tục biến hóa trong âm nhạc.<br>\r\nMV Em là của anh đánh dấu bước đệm solo của S.T sau khi tách khỏi nhóm 365 không giữ được sức hút chỉ sau một tuần. Em út của nhóm nhạc điển trai phô được thế mạnh vũ đạo và màu sắc đa dạng trong sản phẩm này. Tuy nhiên, chỉ sau một tuần MV của anh đã lùi xuống hàng ba.<br>\r\n<br>\r\nMV Yêu là tha thu - nhạc phim Em chưa 18 do OnlyC sáng tác và thể hiện - nhảy lên ngôi vị á quân. Ca khúc đang được cộng đồng mạng yêu thích và truyền tay nhau nghe. Đông Nhi rớt xuống ngôi thứ tư với MV Xin anh đừng. Vì muốn tạo sự mới mẻ, HLV The Voice đưa vào một chút ma mị để tăng sự kịch tính cho người xem.<br>\r\n<br>\r\nNhóm nhạc Lime tạm lùi về hạng năm với MV Baby Boo. Nơi này có anh của Sơn Tùng M-TP tiếp tục rớt xuống vị trí thứ sáu. Bích Phương cũng lùi về bậc bảy với MV Bao giờ lấy chồng.<br>\r\n<br>\r\nSau thời gian im ắng, Nhật Kim Anh trở lại với MV Đời nó bạc. Nữ ca sĩ kiêm diễn viên nắm giữ ngôi thứ tám chỉ sau một thời gian phát hành. Nóng xệ mood của Big Daddy, Soobin Hoàng Sơn và Hạnh Sino có mặt ở hàng chín.\r\n<br>\r\nCác giọng ca trẻ khéo léo đưa vấn đề nhiều người quan tâm vào MV đã thu hút sự quan tâm của cộng đồng mạng. Khởi My và rapper Pudding Vũ khép lại top 10 tuần này với MV Trải qua.<br>\"\r\n', 'MV “Walk Away” của Tóc Tiên vừa ra mắt không bao lâu đã soán ngôi đầu bảng của S.T (365) trên bảng xếp hạng tuần 18 của Zing Mp3.<br>\r\n', 'Việt Nam, Nhạc Trẻ\r\n', '../images-content/tintuc/TIEN_AWA_COVER4.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `ID` int(11) NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ChuDe` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `AnhDaiDien` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`ID`, `TieuDe`, `NoiDung`, `TomTat`, `ChuDe`, `AnhDaiDien`) VALUES
(1, 'Lộ diện quán quân cuộc thi cover MV do Suni Hạ Linh làm giám khảo\r\n', '\"Đội thi Friends đến từ trường THCS Hoàng Liệt (quận Hoàng Mai, Hà Nội) đã chiến thắng cuộc thi “Lưu bút cùng Nabati” và nhận giải thưởng 40 triệu đồng tiền mặt.<br>\r\n“Lưu bút cùng Nabati” là cuộc thi sáng tạo nội dung video trên nền nhạc ca khúc Thời học sinh do Suni Hạ Linh thể hiện. Từ hàng trăm bài dự thi, ban giám khảo đã chọn ra top 70 bài có điểm bình chọn cao nhất.<br>\r\n<br>\r\nCâu chuyện đơn giản, gần gũi về năm tháng học trò “nhất quỷ, nhì ma” của nhóm Friends thắng giải nhất gồm 40 triệu đồng tiền mặt; trong đó 10 triệu đồng gửi đến quỹ khuyến học của trường THCS Hoàng Liệt. <br>\r\n<br>\r\nLo dien quan quan cuoc thi cover MV do Suni Ha Linh lam giam khao hinh anh 1<br>\r\nBài dự thi đạt giải nhất của nhóm Friends - trường THCS Hoàng Liệt, quận Hoàng Mai, Hà Nội.  <br>\r\n“Lúc cô hiệu trưởng thông báo trước toàn trường, chúng em vỡ òa hạnh phúc vì đó là sự thật. Nhận được những lời động viên, khích lệ của cha mẹ, thầy cô, chúng em cảm giác như đã mang lại niềm vui cho mọi người”, đại diện nhóm bày tỏ cảm xúc.<br>\r\n<br>\r\nNhắc lại khoảng thời gian thực hiện MV, nhóm cho biết vì không có nhiều kinh nghiệm trước ống kính nên 9 thành viên rất hồi hộp và thường nhìn thẳng vào máy quay. Thậm chí có bạn còn khóc òa lên khi quay cảnh hát solo, cả nhóm đành dừng lại. Ngày hôm sau, bạn ấy trở nên khác hẳn, diễn rất hay và tự nhiên.<br>\r\n<br>\r\nMột kỷ niệm thú vị khác đó là nhóm chỉ chuẩn bị 2 hộp bánh Nabati cho tất cả cảnh quay. Nhưng chưa kịp bấm máy thì 9 cô cậu học trò lớp 7, lớp 8 đã ăn sạch một hộp. Từ đó, nhóm liên tục dặn dò nhau ăn ít lại để còn quay những cảnh khác.<br>\r\n<br>\r\nLo dien quan quan cuoc thi cover MV do Suni Ha Linh lam giam khao hinh anh 2<br>\r\n“Thủ phạm” mũm mĩm, đáng yêu làm hao hụt đạo cụ quay phim của nhóm.  <br>\r\nĐại diện Friends cho biết nhóm dự định tặng phần quà động viên cho 3 bạn cùng trường: một bạn có hoàn cảnh khó khăn nhưng thành tích tốt, một bạn mắc bệnh ung thư và một bạn khuyết tật nhưng vẫn vươn lên trong học tập. “Phần còn lại chắc chắn là cùng nhau liên hoan thật đã ạ”, nhóm phấn khích.<br>\r\n<br>\r\n“Ý tưởng của cuộc thi rất hay, không chỉ phát huy tính sáng tạo mà còn cho chúng em cơ hội lưu lại những kỉ niệm đẹp thời học sinh. Hy vọng rằng những năm tới, Công ty Nabati Việt Nam tiếp tục tổ chức những cuộc thi ý nghĩa và thú vị như thế này”, đại diện nhóm hào hứng nói.<br>\r\n<br>\r\nLo dien quan quan cuoc thi cover MV do Suni Ha Linh lam giam khao hinh anh 3<br>\r\nCậu bạn tinh nghịch giấu giày bạn chối bỏ “tội lỗi” khi cô giáo hỏi trong bài dự thi của Friends.  <br>\r\nMỗi bài dự thi đều là những thước phim lưu giữ khoảnh khắc tinh nghịch, đáng quý của ngày tháng áo trắng đến trường. Sự vui tươi, trong sáng nơi lớp học; kỷ niệm với thầy cô, bạn bè được tái hiện rõ nét như đúng thông điệp của chương trình.<br>\r\n<br>\r\n“Xem bài dự thi của các bạn, Suni thực sự sống lại những năm tháng học sinh đáng quý, hồi tưởng lại những kỷ niệm tươi đẹp nhất thời gian ấy. Các bài thi đều chất lượng, vì thế ban giám khảo phải rất vất vả để chọn ra phần thi hay nhất và sáng tạo nhất, xứng đáng với giải thưởng chung cuộc”, đại sứ chương trình - ca sĩ Suni Hạ Linh chia sẻ.<br>\r\n<br>\r\nNgoài ra, cuộc thi “Lưu bút cùng Nabati” cũng tìm ra chủ nhân của loạt giải thưởng còn lại. Giải nhì 20 triệu đồng tiền mặt thuộc về nhóm 12B6 của trường THPT Buôn Ma Thuột (Đắk Lắk). Giải ba 10 triệu đồng tiền mặt thuộc về nhóm Nabateetwo của trường THPT Thăng Long (Hà Nội).<br>\r\n<br>\r\nBên cạnh đó, BTC còn trao 3 giải khuyến khích - mỗi giải 5 triệu đồng tiền mặt cho các nhóm: trường THPT Vũng Tàu (TP Vũng Tàu), trường THPT Trần Văn Bảy (Sóc Trăng) và trường THPT Nguyễn Hiền (TP.HCM). Các bài dự thi vào top 30 được nhận quà tặng một năm sử dụng bánh Nabati miễn phí.<br>\r\n<br>\r\nLo dien quan quan cuoc thi cover MV do Suni Ha Linh lam giam khao hinh anh 4<br>\r\nBài dự thi nhận giải nhì của nhóm 12B6 - trường THPT Buôn Ma Thuột (Đắk Lắk).  <br>\"\r\n', 'Đội thi Friends đến từ trường THCS Hoàng Liệt (quận Hoàng Mai, Hà Nội) đã chiến thắng cuộc thi “Lưu bút cùng Nabati” và nhận giải thưởng 40 triệu đồng tiền mặt.\r\n', 'Trong nước\r\n', '../images-content/tintuc/COVER_MV.jpg\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nghenhac`
--
ALTER TABLE `nghenhac`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nhacmoi`
--
ALTER TABLE `nhacmoi`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tinhot`
--
ALTER TABLE `tinhot`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nghenhac`
--
ALTER TABLE `nghenhac`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nhacmoi`
--
ALTER TABLE `nhacmoi`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tinhot`
--
ALTER TABLE `tinhot`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
