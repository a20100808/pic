<?php
// 定义图片目录
$imageDir = 'img/';

// 检查目录是否存在且可读
if (!is_dir($imageDir) || !is_readable($imageDir)) {
    header("HTTP/1.1 500 Internal Server Error");
    exit('图片目录不存在或不可访问');
}

// 支持的图片格式
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

// 扫描目录并过滤图片文件
$images = [];
foreach (scandir($imageDir) as $file) {
    if ($file === '.' || $file === '..') continue;
    
    $filePath = $imageDir . $file;
    $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
    
    if (in_array($extension, $allowedExtensions)) {
        $images[] = $file;
    }
}

// 如果没有图片则报错
if (empty($images)) {
    header("HTTP/1.1 404 Not Found");
    exit('未找到图片文件');
}

// 随机选择一张图片
$randomFile = $images[array_rand($images)];
$imagePath = $imageDir . $randomFile;

// 根据文件类型设置响应头
switch (strtolower(pathinfo($imagePath, PATHINFO_EXTENSION))) {
    case 'jpg':
    case 'jpeg':
        header('Content-Type: image/jpeg');
        break;
    case 'png':
        header('Content-Type: image/png');
        break;
    case 'gif':
        header('Content-Type: image/gif');
        break;
    case 'webp':
        header('Content-Type: image/webp');
        break;
    default:
        header("HTTP/1.1 500 Internal Server Error");
        exit('不支持的图片格式');
}

// 禁用缓存（可选）
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// 输出图片内容
readfile($imagePath);
exit;
?>