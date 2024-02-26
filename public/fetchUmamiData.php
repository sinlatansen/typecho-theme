<?php
/*
 * @Author: 林郅言 lllzzzyyy@buaa.edu.cn
 * @Date: 2024-02-26 11:45:09
 * @LastEditTime: 2024-02-26 17:56:00
 * @FilePath: \butterfly\public\fetchUmamiData.php
 * @Description: 
 * 
 */

$config = require 'config.php';
$username = $config['username'];
$password = $config['password'];
$loginUrl = $config['loginUrl'];
$activeUsersUrl = $config['activeUsersUrl'];
$statsUrlBase = $config['statsUrlBase'];


// Function to perform a cURL request
function curlRequest($url, $postFields = null, $headers = []) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if (!is_null($postFields)) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields));
    }
    if (!empty($headers)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        curl_close($ch);
        return null;
    }
    curl_close($ch);
    return json_decode($response, true);
}

// Get authentication token
$authResponse = curlRequest($loginUrl, ['username' => $username, 'password' => $password], ['Content-Type: application/json']);
$token = $authResponse['token'] ?? '';

if ($token) {
    // Fetch active users
    $activeUsersData = curlRequest($activeUsersUrl, null, ['Authorization: Bearer ' . $token]);
    $activeUsers = $activeUsersData[0]['x'] ?? 'Unavailable';

    // Construct stats URL with time range
    $startAt = strtotime('2024-02-20') * 1000; // Time range start
    $endAt = time() * 1000; // Current time
    $statsUrl = "{$statsUrlBase}?startAt={$startAt}&endAt={$endAt}";

    // Fetch total pageviews
    $statsData = curlRequest($statsUrl, null, ['Authorization: Bearer ' . $token]);
    $totalPageviews = $statsData['pageviews']['value'] ?? 'Unavailable';

    // Return data as JSON
    header('Content-Type: application/json');
    echo json_encode([
        'activeUsers' => $activeUsers,
        'totalPageviews' => $totalPageviews
    ]);
} else {
    // Handle error in getting auth token
    echo json_encode(['error' => 'Unable to authenticate']);
}