<?

return new System\Lib\Database\SchemaTable('Users', function ($schemaData) {
    
    $schemaData->id('uID', 11, true);
    $schemaData->string('uLogin', 40);
    $schemaData->string('uPass', 32);
    $schemaData->string('uPass2', 32);
    $schemaData->string('uMail', 60);
    $schemaData->int('uState', 1);
    $schemaData->int('uLevel', 2);
    $schemaData->string('uLang', 10);
    $schemaData->bigint('uLTS');
    $schemaData->primaryKey('uID');
    $schemaData->uniqueKey('uLogin');
    $schemaData->key('uLTS');

    return $schemaData;
    
});
