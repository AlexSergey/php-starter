<?php
require_once(__DIR__.'/vendor/autoload.php');

use eftec\bladeone;
use SlashTrace\SlashTrace;
use SlashTrace\EventHandler\DebugHandler;

$slashtrace = new SlashTrace();
$slashtrace->addHandler(new DebugHandler());
// Register the error and exception handlers
$slashtrace->register();

$blade = new bladeone\BladeOne(
    __DIR__.'/views',
    __DIR__.'/cache',
    bladeone\BladeOne::MODE_AUTO
);

// Enable .env module
// You can get props - getenv('S3_BUCKET');
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();