<?php declare(strict_types=1);

namespace Shopware\Category\Searcher;

use Shopware\Category\Struct\CategoryBasicCollection;
use Shopware\Search\SearchResultInterface;

class CategorySearchResult extends CategoryBasicCollection implements SearchResultInterface
{
    /**
     * @var int
     */
    protected $total = 0;

    public function getTotal(): int
    {
        return $this->total;
    }

    public function setTotal(int $total): void
    {
        $this->total = $total;
    }
}