<?php

declare(strict_types=1);

namespace App\Infrastructure\ReadModel\Repository;

use App\Infrastructure\ReadModel\View\SupplierView;

interface SupplierViewRepositoryInterface
{
    public function save(SupplierView $supplierView): void;
}
