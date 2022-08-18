<?php

namespace ElteFi\WebprogHelpers\FileIO;

class JsonIO extends FileIO
{
    public function load($assoc = true)
    {
        $file_content = file_get_contents($this->filepath);
        return json_decode($file_content, $assoc) ?: [];
    }

    public function save($data)
    {
        $json_content = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents($this->filepath, $json_content);
    }
}
