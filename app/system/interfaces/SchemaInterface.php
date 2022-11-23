<?php

namespace System\Interfaces;

interface SchemaInterface {

    public function setScheme($schemaTable);

    public function create($schemaTable);

    public function drop($schemaTable);
}
