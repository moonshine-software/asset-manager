<?php

declare(strict_types=1);

namespace MoonShine\AssetManager\Contracts;

interface HasVersionContact
{
    public function version(string|int|null $version): self;

    public function getVersion(): int|string|null;
}
