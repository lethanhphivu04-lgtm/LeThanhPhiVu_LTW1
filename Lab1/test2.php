<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 - Câu 2 | Lê Thanh Phi Vũ</title>
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
        <h1>Lab 1 - Câu 2</h1>
        <p class="subtitle">Thao tác với toán tử, kiểu dữ liệu và chuỗi trong PHP</p>
    </header>

    <!-- 1. Khai báo hai số nguyên và tính toán -->
    <div class="card">
        <h2>1. Các phép toán số học</h2>
        <div class="output-box"><?php
            $a = 15;
            $b = 4;
            echo "Số a = $a\n";
            echo "Số b = $b\n\n";
            echo "Phép cộng ($a + $b)  = " . ($a + $b) . "\n";
            echo "Phép trừ ($a - $b)   = " . ($a - $b) . "\n";
            echo "Phép nhân ($a * $b)  = " . ($a * $b) . "\n";
            echo "Phép chia ($a / $b)  = " . ($a / $b) . "\n";
            echo "Chia lấy dư ($a % $b) = " . ($a % $b) . "\n";
        ?></div>
    </div>

    <!-- 2. So sánh int và string -->
    <div class="card">
        <h2>2. So sánh khác nhau giữa các toán tử so sánh</h2>
        <div class="output-box"><?php
            $num = 100;
            $str = "100";
            echo "Biến \$num = $num (kiểu " . gettype($num) . ")\n";
            echo "Biến \$str = '$str' (kiểu " . gettype($str) . ")\n\n";
            
            echo "So sánh bằng (\$num == \$str)   : " . var_export($num == $str, true) . "\n";
            echo "So sánh đồng nhất (\$num === \$str): " . var_export($num === $str, true) . "\n";
            echo "So sánh khác (\$num != \$str)      : " . var_export($num != $str, true) . "\n";
            echo "So sánh khác (\$num <> \$str)      : " . var_export($num <> $str, true) . "\n";
            echo "So sánh không đồng nhất (\$num !== \$str): " . var_export($num !== $str, true) . "\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <ul>
                <li><code>==</code> và <code>!=</code> (hoặc <code>&lt;&gt;</code>): Chỉ so sánh <strong>giá trị</strong> của hai biến sau khi đã tự động ép kiểu về cùng định dạng.</li>
                <li><code>===</code> và <code>!==</code>: So sánh cả <strong>giá trị và kiểu dữ liệu</strong>. Vì vậy <code>100 === "100"</code> trả về <code>false</code> vì một bên là số nguyên, một bên là chuỗi.</li>
            </ul>
        </div>
    </div>

    <!-- 3. Toán tử tăng/giảm -->
    <div class="card">
        <h2>3. Phép tăng trước (++$x) và tăng sau ($x++)</h2>
        <div class="output-box"><?php
            $x = 5;
            echo "Giá trị ban đầu của \$x = $x\n\n";
            
            echo "Thực hiện phép tăng trước (++\$x):\n";
            echo "- Kết quả biểu thức: " . (++$x) . "\n";
            echo "- Giá trị \$x sau khi thực hiện: $x\n\n";
            
            $x = 5; // Reset lại biến x
            echo "Thực hiện phép tăng sau (\$x++):\n";
            echo "- Kết quả biểu thức: " . ($x++) . "\n";
            echo "- Giá trị \$x sau khi thực hiện: $x\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <ul>
                <li><strong>Tăng trước (<code>++$x</code>)</strong>: Tăng giá trị của biến <code>$x</code> lên 1 đơn vị trước, sau đó mới trả về giá trị mới cho biểu thức.</li>
                <li><strong>Tăng sau (<code>$x++</code>)</strong>: Trả về giá trị hiện tại của biến <code>$x</code> cho biểu thức trước, sau đó mới cộng thêm 1 đơn vị vào biến <code>$x</code>.</li>
            </ul>
        </div>
    </div>

    <!-- 4. Nối chuỗi -->
    <div class="card">
        <h2>4. Toán tử nối chuỗi (. và .=)</h2>
        <div class="output-box"><?php
            $chuoi1 = "Lê Thanh";
            $chuoi2 = " Phi Vũ";
            
            // Dùng toán tử .
            $ketQua1 = $chuoi1 . $chuoi2;
            echo "Sử dụng toán tử (.) để ghép chuỗi:\n";
            echo "Kết quả: '$ketQua1'\n\n";
            
            // Dùng toán tử .=
            $chuoiGoc = "Lê Thanh";
            $chuoiGoc .= $chuoi2;
            echo "Sử dụng toán tử (.=) để nối chuỗi vào biến hiện tại:\n";
            echo "Kết quả biến \$chuoiGoc sau khi nối: '$chuoiGoc'\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <ul>
                <li>Toán tử <code>.</code> dùng để kết hợp 2 chuỗi tạo ra một chuỗi mới mà không làm thay đổi các biến ban đầu.</li>
                <li>Toán tử gán nối chuỗi <code>.=</code> lấy chuỗi bên phải nối tiếp vào đuôi chuỗi hiện có của biến bên trái và lưu lại kết quả vào chính biến đó.</li>
            </ul>
        </div>
    </div>

    <!-- 5. strlen vs mb_strlen -->
    <div class="card">
        <h2>5. Đếm số ký tự chuỗi (strlen và mb_strlen)</h2>
        <div class="output-box"><?php
            $strKhongDau = "Le Thanh Phi Vu";
            $strCoDau = "Lê Thanh Phi Vũ";
            
            echo "Chuỗi không dấu: '$strKhongDau'\n";
            echo "- strlen(): " . strlen($strKhongDau) . " ký tự\n";
            echo "- mb_strlen(): " . mb_strlen($strKhongDau, 'UTF-8') . " ký tự\n\n";
            
            echo "Chuỗi có dấu: '$strCoDau'\n";
            echo "- strlen(): " . strlen($strCoDau) . " bytes (ký tự)\n";
            echo "- mb_strlen(): " . mb_strlen($strCoDau, 'UTF-8') . " ký tự\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <ul>
                <li><code>strlen()</code>: Đếm số <strong>bytes</strong> của chuỗi. Đối với các ký tự có dấu UTF-8 (như ê, Vũ), chúng cần 2 đến 3 bytes để biểu diễn, do đó <code>strlen()</code> sẽ cho kết quả lớn hơn số ký tự thực tế.</li>
                <li><code>mb_strlen()</code>: Đếm số <strong>ký tự thực tế (multi-byte)</strong> dựa trên bộ mã hóa (UTF-8), hiển thị chính xác độ dài ký tự của chuỗi tiếng Việt.</li>
            </ul>
        </div>
    </div>

    <!-- 6. strtoupper vs mb_strtoupper -->
    <div class="card">
        <h2>6. Chuyển chuỗi thành chữ hoa/thường</h2>
        <div class="output-box"><?php
            $chuoiTiengViet = "lê thanh phi vũ";
            
            echo "Chuỗi ban đầu: '$chuoiTiengViet'\n\n";
            
            echo "Sử dụng strtoupper / strtolower:\n";
            echo "- strtoupper: " . strtoupper($chuoiTiengViet) . "\n";
            echo "- strtolower: " . strtolower("LÊ THANH PHI VŨ") . "\n\n";
            
            echo "Sử dụng mb_strtoupper / mb_strtolower:\n";
            echo "- mb_strtoupper: " . mb_strtoupper($chuoiTiengViet, 'UTF-8') . "\n";
            echo "- mb_strtolower: " . mb_strtolower("LÊ THANH PHI VŨ", 'UTF-8') . "\n";
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <ul>
                <li><code>strtoupper()</code> và <code>strtolower()</code> không hỗ trợ unicode đầy đủ. Do đó, các ký tự có dấu tiếng Việt (ê, ú, v.v.) sẽ không được chuyển đổi viết hoa/viết thường chính xác.</li>
                <li><code>mb_strtoupper()</code> và <code>mb_strtolower()</code> xử lý hoàn hảo tiếng Việt có dấu khi truyền mã hóa 'UTF-8'.</li>
            </ul>
        </div>
    </div>

    <!-- 7. Ép kiểu chuỗi về int -->
    <div class="card">
        <h2>7. Ép kiểu chuỗi về kiểu số nguyên (int)</h2>
        <div class="output-box"><?php
            $s1 = "123 abc";
            $s2 = "abc 123";
            
            $epKieu1 = (int)$s1;
            $epKieu2 = (int)$s2;
            
            echo "Chuỗi \$s1 = '$s1'\n";
            echo "Kết quả ép kiểu: ";
            var_dump($epKieu1);
            
            echo "\nChuỗi \$s2 = '$s2'\n";
            echo "Kết quả ép kiểu: ";
            var_dump($epKieu2);
        ?></div>
        <div class="explain-box">
            <div class="explain-title">Giải thích:</div>
            <ul>
                <li>Khi ép kiểu chuỗi thành <code>int</code>:</li>
                <li>Nếu chuỗi bắt đầu bằng các số (như <code>"123 abc"</code>), PHP sẽ lấy phần số ở đầu làm giá trị và bỏ qua phần chữ phía sau (kết quả là <code>123</code>).</li>
                <li>Nếu chuỗi bắt đầu bằng chữ (như <code>"abc 123"</code>), PHP không tìm thấy số nào ở đầu nên giá trị ép kiểu trả về sẽ là <code>0</code>.</li>
            </ul>
        </div>
    </div>

    <!-- 8. var_dump các kiểu dữ liệu -->
    <div class="card">
        <h2>8. Sử dụng var_dump() hiển thị các kiểu dữ liệu</h2>
        <div class="output-box"><?php
            $k_int = 42;
            $k_float = 3.14159;
            $k_string = "PHP & MySQL";
            $k_bool = true;
            
            echo "\$k_int = "; var_dump($k_int);
            echo "\$k_float = "; var_dump($k_float);
            echo "\$k_string = "; var_dump($k_string);
            echo "\$k_bool = "; var_dump($k_bool);
        ?></div>
    </div>
    
    <div class="footer">
        Sinh viên thực hiện: Lê Thanh Phi Vũ | Lớp: LTW1
    </div>
</div>

</body>
</html>
