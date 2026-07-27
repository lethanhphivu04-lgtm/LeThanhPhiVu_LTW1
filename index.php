<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lê Thanh Phi Vũ - Lập trình Web 1</title>
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
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(139, 92, 246, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 90% 80%, rgba(6, 182, 212, 0.15) 0%, transparent 40%);
        }

        .welcome-card {
            background: var(--card-bg);
            backdrop-filter: blur(12px);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            padding: 3rem;
            max-width: 600px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p.student-info {
            color: var(--text-secondary);
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .links-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.5rem;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border-color);
            border-radius: 12px;
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background: rgba(139, 92, 246, 0.1);
            border-color: var(--accent-primary);
            transform: translateX(5px);
        }

        .btn-arrow {
            color: var(--accent-secondary);
            font-weight: 700;
            transition: transform 0.3s ease;
        }

        .btn:hover .btn-arrow {
            transform: translateX(3px);
        }

        .badge {
            font-size: 0.8rem;
            padding: 0.2rem 0.6rem;
            background: var(--gradient);
            border-radius: 20px;
            color: white;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="welcome-card">
        <h1>Xin chào A1</h1>
        <p class="student-info">
            Chào mừng bạn đến với Cổng thực hành Lập trình Web 1<br>
            <strong>Sinh viên:</strong> Lê Thanh Phi Vũ<br>
            <strong>Lớp:</strong> LTW1
        </p>

        <div class="links-container">
            <a href="Lab1/test1.php" class="btn">
                <span><span class="badge" style="margin-right: 8px;">Lab 1</span> Câu B - Câu 1 (test1.php)</span>
                <span class="btn-arrow">&rarr;</span>
            </a>
            <a href="Lab1/test2.php" class="btn">
                <span><span class="badge" style="margin-right: 8px;">Lab 1</span> Câu C - Câu 2 (test2.php)</span>
                <span class="btn-arrow">&rarr;</span>
            </a>
            <a href="Lab1/test3.php" class="btn">
                <span><span class="badge" style="margin-right: 8px;">Lab 1</span> Câu D - Câu 3 (test3.php)</span>
                <span class="btn-arrow">&rarr;</span>
            </a>
        </div>
    </div>

</body>
</html>
