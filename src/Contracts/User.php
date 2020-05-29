<?php

declare(strict_types = 1);

namespace Candocker\Auth\Contracts;

interface User
{
    /**
     * Find a user by its name
     */
    public static function findByName(string $name): self;

    /**
     * Find a role by its id.
     */
    public static function findById(int $id): self;
}
