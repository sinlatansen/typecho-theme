<?php

// Umami API endpoints and credentials
$loginUrl = 'https://umami-zeta-tan.vercel.app/api/auth/login';
$activeUsersUrl = 'https://umami-zeta-tan.vercel.app/api/websites/7aa963db-7032-4a0e-a823-bbda16a88221/active';
$statsUrlBase = 'https://umami-zeta-tan.vercel.app/api/websites/7aa963db-7032-4a0e-a823-bbda16a88221/stats';
$username = 'admin'; // Replace with your actual username
$password = 'lzy20010414'; // Replace with your actual password

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