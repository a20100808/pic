<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>随机图片API</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Noto Sans SC', sans-serif;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            opacity: 0;
            animation: fadeIn 1s ease-in-out forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 1.5rem;
            flex: 1;
        }
        
        header {
            text-align: center;
            margin-bottom: 3.5rem;
            padding: 1.5rem 0;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            font-size: 2.2rem;
            margin-bottom: 0.5rem;
            animation: slideInDown 1s ease-in-out;
        }
        
        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .api-section {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 1.5rem;
            animation: slideInUp 1s ease-in-out;
            position: relative;
        }
        
        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
        
        .api-item {
            margin-bottom: 1rem;
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        .api-item:hover {
            background-color: #f0f0f0;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .api-item h2 {
            font-size: 1.3rem;
            margin-bottom: 0.3rem;
            color: #444;
        }
        
        .api-item p {
            margin-bottom: 0.3rem;
            color: #666;
            font-size: 0.95rem;
        }
        
        .api-link {
            display: inline-block;
            margin-top: 0.3rem;
            color: #6e8efb;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
            font-size: 0.95rem;
        }
        
        .api-link:hover {
            color: #a777e3;
            text-decoration: underline;
        }
        
        .author {
            position: absolute;
            right: 1.5rem;
            bottom: 1rem;
            font-size: 0.95rem;
            text-align: right;
        }
        
        .author a {
            font-weight: bold;
            color: #6e8efb;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .author a:hover {
            color: #a777e3;
            text-decoration: underline;
        }
        
        footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: #fff;
            font-size: 0.85rem;
        }
        
        .disclaimer {
            max-width: 800px;
            margin: 0 auto;
            color: #aaa;
            font-size: 0.75rem;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>随机图片API</h1>
        </header>
        
        <div class="api-section">
            <div class="api-item">
                <h2>电脑端随机图片</h2>
                <p>适用于桌面设备的随机图片API</p>
                <a href="https://pic.333375.xyz/pc" class="api-link" target="_blank">https://pic.333375.xyz/pc</a>
            </div>
            
            <div class="api-item">
                <h2>移动端随机图片</h2>
                <p>适用于移动设备的随机图片API</p>
                <a href="https://pic.333375.xyz/pe" class="api-link" target="_blank">https://pic.333375.xyz/pe</a>
            </div>
            
            <div class="author">
                <p>作者: <a href="https://blog.333375.xyz/" target="_blank"><strong>Liuts</strong></a></p>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="disclaimer">
            <p>© 2025 随机图片API - 原创项目</p>
            <p>免责声明: 图片内容为网络搜集, 如有侵权联系TG @liuts6</p>
        </div>
    </footer>
</body>
</html>
