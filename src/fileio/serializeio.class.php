<?php

namespace ElteFi\WebprogHelpers;


class SerializeIO extends FileIO
{
    public function load()
    {
        $file_content = file_get_contents($this->filepath);
        return unserialize($file_content) ?: [];
    }

    public function save($data)
    {
        $serialized_content = serialize($data);
        file_put_contents($this->filepath, $serialized_content);
    }
}
