<?php

namespace eltefi\WebprogHelpers;

interface IStorage
{
    function add($record): string;
    function findById(string $id);
    function findAll(array $params = []);
    function findOne(array $params = []);
    function update(string $id, $record);
    function delete(string $id);

    function findMany(callable $condition);
    function updateMany(callable $condition, callable $updater);
    function deleteMany(callable $condition);
}
