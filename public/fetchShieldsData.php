<?php
/*
 * @Author: 林郅言 lllzzzyyy@buaa.edu.cn
 * @Date: 2024-02-28 12:07:20
 * @LastEditTime: 2024-02-28 14:35:25
 * @FilePath: \butterfly\public\fetchShieldsData.php
 * @Description: 
 * 
 */
function getBadge($badgeUrl) {
    // 使用cURL进行请求
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $badgeUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // 获取响应内容
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

$badgeUrl = 'https://img.shields.io/badge/Comments-Giscus-FF0000?logo=data:image/svg+xml;base64,PHN2ZyB0PSIxNzA5MTAxNTgxNzc4IiBjbGFzcz0iaWNvbiIgdmlld0JveD0iMCAwIDEwMjQgMTAyNCIgdmVyc2lvbj0iMS4xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHAtaWQ9IjcwODgiIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48cGF0aCBkPSJNIDMzOC4zMyAzNjYuNTMyIEwgNTEwLjU0OSA5NjkuMDM3IEwgNjgyLjc3OCAzNjYuNTMyIEwgMzM4LjMzIDM2Ni41MzIgWiIgZmlsbD0iI2ZmZmZmZiIgcC1pZD0iNzA4OSI+PC9wYXRoPjxwYXRoIGQ9Ik0gMzc0LjY1NiA1MS4yODUzIEwgMTc2LjI2NSA1MS4yODUzIEwgMjEuMzMzMyAzMDMuNTA1IEwgMjczLjc0OSAzMDMuNTA1IEwgMzc0LjY1NiA1MS4yODUzIFoiIGZpbGw9IiNmZmZmZmYiIHAtaWQ9IjcwOTAiPjwvcGF0aD48cGF0aCBkPSJNIDY3OS40MTUgMzAzLjQ3MSBMIDU3OC40OTIgNTEuMjg1MyBMIDQ0Mi41OSA1MS4yODUzIEwgMzQxLjcgMzAzLjUwNSBMIDY3OS40MTUgMzAzLjQ3MSBaIiBmaWxsPSIjZmZmZmZmIiBwLWlkPSI3MDkxIj48L3BhdGg+PHBhdGggZD0iTSAzNS43NDYxIDM2Ni41NjYgbCAxNzAuODU0IDIxNi44MDYgYyAwLjQwOTYgLTAuMTg3NzMzIDIyMi40MyAyODIuMjQgMjIyLjQzIDI4Mi4yNCBMIDI3Mi4xMDIgMzY2LjU2NiBMIDM1Ljc0NjEgMzY2LjU2NiBMIDM1Ljc0NjEgMzY2LjU2NiBaIiBmaWxsPSIjZmZmZmZmIiBwLWlkPSI3MDkyIj48L3BhdGg+PHBhdGggZD0iTSA2NDYuNDA5IDUxLjI4NTMgTCA3NDcuMzMyIDMwMy40NzEgTCAxMDAyLjY3IDMwMy41MDUgTCA4NDQuODE3IDUxLjI4NTMgTCA2NDYuNDA5IDUxLjI4NTMgWiIgZmlsbD0iI2ZmZmZmZiIgcC1pZD0iNzA5MyI+PC9wYXRoPjxwYXRoIGQ9Ik0gNTk1Ljg0IDg2MS40NDkgbCAyOTYuODgzIC0zNzQuMzA2IGMgLTAuNTQ2MTMzIC0wLjI2NDUzMyA5NS4xODA4IC0xMjAuNTc2IDk1LjE4MDggLTEyMC41NzYgTCA3NDguOTU0IDM2Ni41NjYgTCA1OTUuODQgODYxLjQ0OSBMIDU5NS44NCA4NjEuNDQ5IFoiIGZpbGw9IiNmZmZmZmYiIHAtaWQ9IjcwOTQiPjwvcGF0aD48L3N2Zz4=';
echo getBadge($badgeUrl);
// 如果没有指定badge参数，可以返回错误信息或者默认页面
// echo "No badge specified";
?>