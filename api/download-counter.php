<?php
header('Content-Type: application/json');

// 文件路径
$countFile = 'download-count.txt';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 读取当前计数
    $count = file_exists($countFile) ? (int)file_get_contents($countFile) : 10240;
    
    // 增加计数
    $count++;
    
    // 保存新的计数
    file_put_contents($countFile, $count);
    
    // 返回新的计数
    echo json_encode(['count' => $count]);
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // 读取当前计数
    $count = file_exists($countFile) ? (int)file_get_contents($countFile) : 10240;
    
    // 返回当前计数
    echo json_encode(['count' => $count]);
}
?> 