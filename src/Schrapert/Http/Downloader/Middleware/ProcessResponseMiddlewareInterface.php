<?php
namespace Schrapert\Http\Downloader\Middleware;

use Schrapert\Http\Downloader\DownloadResponse;
use Schrapert\SpiderInterface;

interface ProcessResponseMiddlewareInterface
{
    public function processResponse(DownloadResponse $response, SpiderInterface $spider);
}