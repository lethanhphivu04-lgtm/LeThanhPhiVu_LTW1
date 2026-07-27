<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu 3 | Lê Thanh Phi Vũ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #0b0f19;
            --card-bg: rgba(22, 30, 49, 0.7);
            --border-color: rgba(255, 255, 255, 0.08);
            --text-primary: #f3f4f6;
            --text-secondary: #9ca3af;
            --accent-primary: #8b5cf6;
            --accent-secondary: #06b6d4;
            --gradient: linear-gradient(135deg, var(--accent-primary), var(--accent-secondary));
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-primary);
            min-height: 100vh;
            padding: 2rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(139, 92, 246, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(6, 182, 212, 0.15) 0%, transparent 40%);
        }

        .container {
            max-width: 800px;
            width: 100%;
        }

        header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .back-btn {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            color: var(--accent-secondary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            color: var(--accent-primary);
            transform: translateY(-50%) translateX(-4px);
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            color: var(--text-secondary);
            font-size: 1.1rem;
        }

        .card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 35px rgba(139, 92, 246, 0.1);
            border-color: rgba(139, 92, 246, 0.3);
        }

        h2 {
            font-size: 1.3rem;
            font-weight: 600;
            color: var(--accent-secondary);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 0.5rem;
        }

        .output-box {
            background: rgba(0, 0, 0, 0.25);
            border-radius: 8px;
            padding: 1rem 1.5rem;
            font-family: 'Courier New', Courier, monospace;
            border-left: 4px solid var(--accent-primary);
            line-height: 1.6;
            margin-top: 0.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        .highlight-space {
            color: #ef4444;
            background: rgba(239, 68, 68, 0.1);
            border: 1px dashed rgba(239, 68, 68, 0.3);
            padding: 0 0.2rem;
            font-weight: bold;
        }

        .highlight-text {
            color: #10b981;
            font-weight: bold;
        }

        .explain-box {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            padding: 1rem;
            margin-top: 1rem;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .explain-title {
            font-weight: 600;
            color: var(--accent-primary);
            margin-bottom: 0.5rem;
        }

        code {
            font-family: 'Courier New', Courier, monospace;
            background: rgba(0, 0, 0, 0.3);
            padding: 0.2rem 0.4rem;
            border-radius: 4px;
            font-size: 0.9rem;
            color: #fca5a5;
        }
        
        .footer {
            text-align: center;
            margin-top: 2rem;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container">
    <header>
        <a href="../index.php" class="back-btn">&larr; Trang chủ</a>
        <h1>Lab 1 - Câu 3</h1>
        <p class="subtitle">Các hàm xử lý chuỗi nâng cao (trim, ltrim, rtrim, substr, str_replace)</p>
    </header>

    <!-- 1. trim() -->
    <div class="card">
        <h2>1. Hàm trim() - Loại bỏ khoảng trắng đầu và cuối chuỗi</h2>
        <div class="output-box"><?php
            $chuoiGoc = "   Lê Thanh Phi Vũ   ";
            
            echo "1. Chuỗi gốc (chưa xử lý):\n";
            echo "   Độ dài: " . strlen($chuoiGoc) . " bytes\n";
            echo "   Nội dung: [" . str_replace(" ", "<span class='highlight-space'>_</span>", htmlspecialchars($chuoiGoc)) . "]\n\n";
            
            $chuoiTrim = trim($chuoiGoc);
            echo "2. Chuỗi sau khi dùng trim():\n";
            echo "   Độ dài: " . strlen($chuoiTrim) . " bytes\n";
            echo "   Nội dung: [" . str_replace(" ", "<span class='highlight-space'>_</span>", htmlspecialchars($chuoiTrim)) . "]\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <p>Ký tự khoảng trắng (space) được hiển thị bằng màu đỏ dạng <span class="highlight-space">_</span> để dễ quan sát. Hàm <code>trim()</code> đã loại bỏ hoàn toàn các khoảng trắng ở cả hai đầu của chuỗi.</p>
        </div>
    </div>

    <!-- 2. ltrim() và rtrim() -->
    <div class="card">
        <h2>2. Loại bỏ khoảng trắng bên trái (ltrim) hoặc bên phải (rtrim)</h2>
        <div class="output-box"><?php
            $chuoiGoc = "   Lê Thanh Phi Vũ   ";
            
            echo "Chuỗi gốc: [" . str_replace(" ", "<span class='highlight-space'>_</span>", htmlspecialchars($chuoiGoc)) . "]\n\n";
            
            $chuoiLtrim = ltrim($chuoiGoc);
            echo "1. Sử dụng ltrim() (bỏ khoảng trắng bên trái):\n";
            echo "   Nội dung: [" . str_replace(" ", "<span class='highlight-space'>_</span>", htmlspecialchars($chuoiLtrim)) . "]\n\n";
            
            $chuoiRtrim = rtrim($chuoiGoc);
            echo "2. Sử dụng rtrim() (bỏ khoảng trắng bên phải):\n";
            echo "   Nội dung: [" . str_replace(" ", "<span class='highlight-space'>_</span>", htmlspecialchars($chuoiRtrim)) . "]\n";
        ?></div>
    </div>

    <!-- 3. substr() -->
    <div class="card">
        <h2>3. Cắt chuỗi bằng hàm substr()</h2>
        <div class="output-box"><?php
            // Chuỗi dài hơn 30 ký tự
            $chuoiDai = "Học lập trình Web 1 với ngôn ngữ PHP và cơ sở dữ liệu MySQL thật thú vị!";
            
            echo "Chuỗi ban đầu (> 30 ký tự):\n";
            echo "   \"<span class='highlight-text'>$chuoiDai</span>\"\n";
            echo "   Độ dài chuỗi: " . mb_strlen($chuoiDai, 'UTF-8') . " ký tự.\n\n";
            
            // Cắt lấy 10 ký tự đầu tiên
            $cat10KyTuDau = substr($chuoiDai, 0, 10);
            echo "1. Lấy 10 ký tự đầu tiên (substr(\$chuoi, 0, 10)):\n";
            echo "   Kết quả: \"<span class='highlight-text'>$cat10KyTuDau</span>\"\n\n";
            
            // Cắt từ ký tự thứ 5 đến hết chuỗi
            $catTuKyTuThu5 = substr($chuoiDai, 4);
            echo "2. Lấy từ ký tự thứ 5 đến hết (substr(\$chuoi, 4)):\n";
            echo "   Kết quả: \"<span class='highlight-text'>$catTuKyTuThu5</span>\"\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Lưu ý về substr():</div>
            <p>Hàm <code>substr()</code> hoạt động dựa trên số bytes. Đối với chuỗi chứa unicode/tiếng Việt có dấu, việc cắt byte có thể gây lỗi hiển thị (vỡ ký tự). Nếu làm việc với unicode nên dùng <code>mb_substr()</code>.</p>
        </div>
    </div>

    <!-- 4. str_replace() -->
    <div class="card">
        <h2>4. Thay thế chuỗi bằng str_replace()</h2>
        <div class="output-box"><?php
            $chuoiDai = "Học lập trình Web 1 với ngôn ngữ PHP và cơ sở dữ liệu MySQL thật thú vị!";
            
            echo "Chuỗi ban đầu:\n";
            echo "   \"$chuoiDai\"\n\n";
            
            // Thay thế "PHP" bằng "NodeJS" và "MySQL" bằng "MongoDB"
            $timKiem = ["PHP", "MySQL", "thú vị"];
            $thayThe = ["<span class='highlight-text'>NodeJS</span>", "<span class='highlight-text'>MongoDB</span>", "<span class='highlight-text'>tuyệt vời</span>"];
            
            $chuoiDaThayThe = str_replace($timKiem, $thayThe, $chuoiDai);
            
            echo "Chuỗi sau khi thay thế:\n";
            echo "   \"$chuoiDaThayThe\"\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <p>Hàm <code>str_replace()</code> có thể nhận vào một chuỗi đơn lẻ hoặc một mảng các chuỗi tìm kiếm và thay thế tương ứng để cập nhật nội dung đồng loạt.</p>
        </div>
    </div>
    
    <div class="footer">
        Sinh viên thực hiện: Lê Thanh Phi Vũ | Lớp: LTW1
    </div>
</div>

</body>
</html>
