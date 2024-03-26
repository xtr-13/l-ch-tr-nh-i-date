<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chúc mừng sinh nhật!</title>
    <style>
        

        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #ff6f61;
        }
        p {
            color: #333;
            font-size: 18px;
        }
        .gift-box {
            width: 150px;
            height: 150px;
            background-color: #ffcc00;
            border: 10px solid #e6ac00;
            border-radius: 10px;
            margin: 20px auto;
            position: relative;
            cursor: pointer;
        }
        .gift-box:before {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border-left: 10px solid #e6ac00;
            border-bottom: 10px solid #e6ac00;
            top: -10px;
            left: 50%;
            transform: translateX(-50%) rotate(-45deg);
        }
        .gift-box:after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border-right: 10px solid #e6ac00;
            border-bottom: 10px solid #e6ac00;
            top: -10px;
            left: 50%;
            transform: translateX(-50%) rotate(45deg);
        }
        #gift-image {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chúc mừng sinh nhật!</h1>
        <div class="gift-box" onclick="showGift()"></div>
        <img src="" alt="Quà sinh nhật" id="gift-image" style="display: none;">
        <?php
        // Hàm để chúc mừng sinh nhật
        function chuc_mung_sinh_nhat($ten) {
            echo "<p>19 bớt dâm, " . $ten . "!</p>";
            echo "<p>Chúc bạn lấy ven thành công.</p>";
        }

        // Sử dụng hàm chúc mừng sinh nhật
        $ten_nguoi_nhan = "Nguyên dâm"; // Thay đổi tên người nhận sinh nhật tại đây
        chuc_mung_sinh_nhat($ten_nguoi_nhan);
        ?>
    </div>

    <script>
        function showGift() {
            var giftBox = document.querySelector('.gift-box');
            var giftImage = document.getElementById('gift-image');
            giftImage.src = 'ảnh.jpg'; // Thay 'link_den_anh_qua' bằng đường dẫn đến ảnh quà bạn muốn hiển thị
            giftImage.style.display = 'block';
            giftBox.style.display = 'none';
          
        }
    </script>
</body>
</html>
