<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu 1 | Lê Thanh Phi Vũ</title>
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
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 0.5rem;
        }

        .output-box {
            background: rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            padding: 1rem 1.5rem;
            font-family: 'Courier New', Courier, monospace;
            border-left: 4px solid var(--accent-primary);
            line-height: 1.6;
            margin-top: 0.5rem;
            word-break: break-all;
        }

        .comparison {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        @media (max-width: 768px) {
            .comparison {
                grid-template-columns: 1fr;
            }
        }

        .comp-box {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 1rem;
        }

        .comp-title {
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
        <h1>Lab 1 - Câu 1</h1>
        <p class="subtitle">Môn học: Lập trình Web 1 (PHP & MySQL)</p>
    </header>

    <!-- Yêu cầu 1: Sử dụng echo để in trực tiếp -->
    <div class="card">
        <h2>1. In thông tin trực tiếp (dùng echo)</h2>
        <div class="output-box">
            <?php
            // Lệnh echo in trực tiếp chuỗi ra màn hình
            echo "Họ tên: Lê Thanh Phi Vũ<br>";
            echo "Ngày sinh: 01/01/2005<br>";
            echo "Mã số sinh viên: 2001234567<br>";
            ?>
        </div>
    </div>

    <!-- Yêu cầu 2: Khai báo biến và in giá trị -->
    <div class="card">
        <h2>2. Khai báo biến và in giá trị</h2>
        <?php
        // Khai báo các biến lưu trữ thông tin sinh viên
        $hoTen = "Lê Thanh Phi Vũ";
        $mssv = "2001234567";
        $soDienThoai = "0987654321";
        $ngaySinh = "01/01/2005";
        ?>
        <div class="output-box">
            <?php
            echo "Họ tên: " . $hoTen . "<br>";
            echo "Mã số sinh viên: " . $mssv . "<br>";
            echo "Số điện thoại: " . $soDienThoai . "<br>";
            echo "Ngày sinh: " . $ngaySinh . "<br>";
            ?>
        </div>
    </div>

    <!-- Yêu cầu 3: Khai báo hằng số CSDL -->
    <div class="card">
        <h2>3. Khai báo hằng số kết nối CSDL</h2>
        <?php
        // Khai báo hằng số bằng hàm define()
        define("HOST", "localhost");
        define("DATABASE", "LeThanhPhiVu_DB");
        define("USERNAME", "root");
        define("PASSWORD", "123456");
        ?>
        <div class="output-box">
            <?php
            echo "HOST: " . HOST . "<br>";
            echo "DATABASE: " . DATABASE . "<br>";
            echo "USERNAME: " . USERNAME . "<br>";
            echo "PASSWORD: " . PASSWORD . "<br>";
            ?>
        </div>
    </div>

    <!-- Yêu cầu 4: So sánh nháy kép ("") và nháy đơn ('') -->
    <div class="card">
        <h2>4. Phân biệt dấu nháy kép (" ") và nháy đơn (' ')</h2>
        <div class="comparison">
            <div class="comp-box">
                <div class="comp-title">Dấu nháy kép (" ")</div>
                <p style="margin-bottom: 0.5rem; font-size: 0.9rem; color: var(--text-secondary);">
                    Hỗ trợ nội suy biến (thay thế tên biến bằng giá trị) và các ký tự đặc biệt (như <code>\n</code>, <code>\t</code>).
                </p>
                <div class="output-box" style="font-size: 0.9rem;">
                    <?php
                    $ten = "Vũ";
                    // Nháy kép sẽ nhận diện biến $ten
                    echo "Xin chào $ten!";
                    ?>
                </div>
            </div>
            <div class="comp-box">
                <div class="comp-title">Dấu nháy đơn (' ')</div>
                <p style="margin-bottom: 0.5rem; font-size: 0.9rem; color: var(--text-secondary);">
                    Không nội suy biến, hiển thị chính xác toàn bộ chuỗi ký tự kể cả tên biến. Chạy nhanh hơn một chút.
                </p>
                <div class="output-box" style="font-size: 0.9rem;">
                    <?php
                    $ten = "Vũ";
                    // Nháy đơn sẽ in ra chữ $ten nguyên bản
                    echo 'Xin chào $ten!';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Yêu cầu 5: Sử dụng chú thích (Comment) -->
    <div class="card">
        <h2>5. Sử dụng chú thích (Comment)</h2>
        <p style="color: var(--text-secondary); margin-bottom: 1rem;">
            Trong file PHP này, mình đã sử dụng đầy đủ cả hai loại chú thích:
        </p>
        <div style="display: flex; flex-direction: column; gap: 0.5rem;">
            <div>
                <code>// Chú thích một dòng (Single-line comment)</code> - Dùng để giải thích ngắn trên một dòng.
            </div>
            <div>
                <code>/* Chú thích nhiều dòng (Multi-line comment) */</code> - Dùng để viết khối chú thích dài hoặc ghi chú thông tin.
            </div>
        </div>
    </div>
    
    <div class="footer">
        Sinh viên thực hiện: Lê Thanh Phi Vũ | Lớp: LTW1
    </div>
</div>

</body>
</html>
