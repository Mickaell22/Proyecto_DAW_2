<?php
$uri = $_SERVER['REQUEST_URI'];
$path = parse_url($uri, PHP_URL_PATH);

// Servir archivos estáticos desde public/
if (preg_match('/\.(css|js|jpg|jpeg|png|gif|ico)$/', $path)) {
    $file = __DIR__ . '/public' . $path;
    if (file_exists($file)) {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $mimeTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'ico' => 'image/x-icon'
        ];
        header('Content-Type: ' . ($mimeTypes[$ext] ?? 'application/octet-stream'));
        readfile($file);
        exit;
    }
}

// Para todo lo demás, usar public/index.php
chdir(__DIR__ . '/public');
require __DIR__ . '/public/index.php';
