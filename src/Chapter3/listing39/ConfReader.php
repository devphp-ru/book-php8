<?php
declare(strict_types=1);

namespace App\Chapter3\listing39;

class ConfReader
{
    public function getValues(array $default = null): array
    {
        $items = ['title' => 'product 1', 'content' => 'content'];

        return \array_merge($items, $default ?? []);
    }

}
