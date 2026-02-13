<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php80: true)
    ->withPhpVersion(PhpVersion::PHP_80)
    ->withAttributesSets()
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        codingStyle: true,
        naming: true,
        privatization: true,
        rectorPreset: true,
        typeDeclarations: true,
        earlyReturn: true,
        strictBooleans: true
    );
