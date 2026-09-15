<?php

declare(strict_types=1);

$base = realpath(__DIR__ . '/../web');

$path = $_GET['path'] ?? '';
$path = ltrim($path, '/');

$file = realpath($base . '/' . $path);

// Cegah akses file di luar folder web
if (
    $base === false ||
    $file === false ||
    !is_file($file) ||
    !str_starts_with($file, $base . DIRECTORY_SEPARATOR)
) {
    http_response_code(404);
    echo 'Asset not found';
    exit;
}

$extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));

$mimeTypes = [
    'css'   => 'text/css; charset=UTF-8',
    'js'    => 'application/javascript; charset=UTF-8',

    'png'   => 'image/png',
    'jpg'   => 'image/jpeg',
    'jpeg'  => 'image/jpeg',
    'gif'   => 'image/gif',
    'svg'   => 'image/svg+xml',
    'webp'  => 'image/webp',
    'ico'   => 'image/x-icon',

    'woff'  => 'font/woff',
    'woff2' => 'font/woff2',
    'ttf'   => 'font/ttf',
    'eot'   => 'application/vnd.ms-fontobject',
    'otf'   => 'font/otf',

    'map'   => 'application/json',
];

$contentType = $mimeTypes[$extension] ?? 'application/octet-stream';

header('Content-Type: ' . $contentType);

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

readfile($file);
exit;
