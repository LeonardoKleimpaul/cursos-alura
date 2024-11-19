<?php

namespace CViniciusSDias\GoogleCrawler\Proxy\UrlParser;

use CViniciusSDias\GoogleCrawler\Exception\InvalidResultException;

interface GoogleUrlParser
{
    public function parseUrl(string $googleUrl): string;
}