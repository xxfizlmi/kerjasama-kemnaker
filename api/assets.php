<?php

declare(strict_types=1);

$base = __DIR__ . '/../web';

$path = rawurldecode((string) ($_GET['path'] ?? ''));
$path = str_replace('\\', '/', $path);
$path = ltrim($path, '/');

// Cegah path traversal
if (
    $path === '' ||
    str_contains($path, "\0") ||
    preg_match('#(^|/)\.\.(/|$)#', $path)
) {
    http_response_code(400);
    header('Content-Type: text/plain; charset=UTF-8');
    echo 'Invalid asset path';
    exit;
}

$file = $base . '/' . $path;

clearstatcache(true, $file);

if (!is_file($file)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=UTF-8');

    echo 'Asset not found: ' . $path;
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
    'avif' => 'image/avif',
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
header('Content-Length: ' . filesize($file));

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Expires: 0');

readfile($file);
exit;
