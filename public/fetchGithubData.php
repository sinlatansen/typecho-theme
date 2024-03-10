<?php

// 读取 config.json 文件内容
$jsonString = file_get_contents('config.json');

// 解析 JSON 数据为 PHP 数组
$config = json_decode($jsonString, true);
$username = $config['githubUserName'];
$token = $config['githubToken'];

// GitHub API URL 获取用户过去一年的提交统计
$url = "https://api.github.com/users/$username/events";

// 初始化 CURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'PHP script');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: token ' . $token,
]);

// 执行 CURL 请求并关闭连接
$response = curl_exec($ch);
curl_close($ch);

// 解码 JSON 响应
$events = json_decode($response, true);
$commitsCount = [];

// 遍历响应，计算每天的提交数量
foreach ($events as $event) {
    if ($event['type'] == 'PushEvent') {
        $date = substr($event['created_at'], 0, 10); // 获取事件日期
        if (!isset($commitsCount[$date])) {
            $commitsCount[$date] = 0;
        }
        $commitsCount[$date] += count($event['payload']['commits']);
    }
}

// 输出结果
echo json_encode($commitsCount);