<?php

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\CodeQuality\Rector\Class_\InlineConstructorDefaultToPropertyRector;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromStrictConstructorRector;

return static function (RectorConfig $rectorConfig): void {

    $rectorConfig->paths([
        __DIR__ . '/src'
    ]);

    $rectorConfig->rules([
        TypedPropertyFromStrictConstructorRector::class,
        InlineConstructorDefaultToPropertyRector::class
    ]);

    $rectorConfig->sets([
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
        SetList::EARLY_RETURN,
        SetList::TYPE_DECLARATION,
        SetList::PRIVATIZATION
    ]);
};
