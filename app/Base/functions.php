<?php


function views(string $path, array $data = []): void
{
    extract($data);
    require_once VIEWS . '/' . $path;
}
