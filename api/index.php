<?php

// Vercel serverless function entry point
$_SERVER['SCRIPT_NAME'] = '/index.php';

// Set correct document root
$_SERVER['DOCUMENT_ROOT'] = __DIR__ . '/../public';

// Change to public directory
chdir(__DIR__ . '/../public');

// Load Laravel
require __DIR__ . '/../public/index.php';