<?php
// Umami API 的基本信息
$loginUrl = 'https://umami-zeta-tan.vercel.app/api/auth/login'; // 登录端点
$activeUsersUrl = 'https://umami-zeta-tan.vercel.app/api/websites/7aa963db-7032-4a0e-a823-bbda16a88221/active'; // 获取在线用户数的端点
$username = 'admin'; // Umami 用户名
$password = 'lzy20010414'; // Umami 密码

// 使用 cURL 获取授权令牌
$ch = curl_init();
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // 连接超时时间
curl_setopt($ch, CURLOPT_TIMEOUT, 60); // 总请求超时时间
curl_setopt($ch, CURLOPT_URL, $loginUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('username' => $username, 'password' => $password)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

$response = curl_exec($ch);
$token = '';
if (!curl_errno($ch)) {
    $authResponse = json_decode($response, true);
    if (isset($authResponse['token'])) {
        $token = $authResponse['token'];
    }
} else {
    // 处理 cURL 错误
    echo json_encode(['error' => 'Error getting auth token']);
    echo $response;
    exit;
}
curl_close($ch);

if ($token) {
    // 使用授权令牌获取当前在线用户数
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $activeUsersUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $token));

    $response = curl_exec($ch);
    if (!curl_errno($ch)) {
        $activeUsers = json_decode($response, true);
        if (isset($activeUsers[0]['x'])) {
            echo json_encode(['activeUsers' => $activeUsers[0]['x']]);
        } else {
            echo json_encode(['error' => 'No active users data available']);
        }
    } else {
        // 处理请求错误
        echo json_encode(['error' => 'Error fetching active users']);
    }
    curl_close($ch);
} else {
    echo json_encode(['error' => 'No auth token available']);
}
?>