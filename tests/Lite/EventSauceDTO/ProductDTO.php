<?php

declare(strict_types=1);

namespace Tests\Lite\EventSauceDTO;

class ProductDTO
{

    public function __construct(
        public int $id,
        public string $name,
        public float $price,
        public string $description,
        public int $count,
    )
    {
    }
}
