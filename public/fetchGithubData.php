<?php

function fetchGithubCommits() {
    $jsonString = file_get_contents('config.json');
$config = json_decode($jsonString, true);
$username = $config['githubUserName'];
$token = $config['githubToken'];

$url = "https://api.github.com/users/$username/events?page=1&per_page=100";

$commitsCount = [];
$continue = true;

while ($continue) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'PHP script');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: token ' . $token,
    ]);

    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    $events = json_decode($response, true);

    foreach ($events as $event) {
        if ($event['type'] == 'PushEvent') {
            $date = substr($event['created_at'], 0, 10);
            if (!isset($commitsCount[$date])) {
                $commitsCount[$date] = 0;
            }
            $commitsCount[$date] += count($event['payload']['commits']);
        }
    }

    // 检查分页信息以决定是否继续
    if (isset($info['download_content_length']) && $info['download_content_length'] > 0) {
        // 简化处理：递增URL中的页面数
        if (preg_match("/&page=(\d+)/", $url, $matches)) {
            $nextPage = (int)$matches[1] + 1;
            $url = preg_replace("/&page=\d+/", "&page=$nextPage", $url);
        } else {
            $continue = false; // 没有更多页面
        }
    } else {
        $continue = false; // 没有更多数据
    }
}

    return $commitsCount;
}

// 获取数据
$data = fetchGithubCommits();

// 定义数据文件名
$dataFile = 'githubData.json';

// 将数据保存到文件
file_put_contents($dataFile, json_encode($data));


// 如果直接运行这个脚本，则获取数据并输出
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    $data = fetchGithubCommits();
    echo json_encode($data);
}