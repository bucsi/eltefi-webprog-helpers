<?php

namespace ElteFi\WebprogHelpers;

interface IFileIO
{
    function save($data);
    function load();
}

abstract class FileIO implements IFileIO
{
    protected $filepath;

    public function __construct($filename)
    {
        if (!is_readable($filename) || !is_writable($filename)) {
            throw new Exception("Data source ${filename} is invalid.");
        }
        $this->filepath = realpath($filename);
    }
}
