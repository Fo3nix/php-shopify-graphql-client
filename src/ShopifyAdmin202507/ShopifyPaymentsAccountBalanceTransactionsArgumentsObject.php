<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyPaymentsAccountBalanceTransactionsArgumentsObject extends ArgumentsObject
{
    protected $hideTransfers;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;
    protected $savedSearchId;

    public function setHideTransfers($hideTransfers)
    {
        $this->hideTransfers = $hideTransfers;

        return $this;
    }

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }

    public function setAfter($after)
    {
        $this->after = $after;

        return $this;
    }

    public function setLast($last)
    {
        $this->last = $last;

        return $this;
    }

    public function setBefore($before)
    {
        $this->before = $before;

        return $this;
    }

    public function setReverse($reverse)
    {
        $this->reverse = $reverse;

        return $this;
    }

    public function setSortKey($balanceTransactionSortKeys)
    {
        $this->sortKey = new RawObject($balanceTransactionSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setSavedSearchId($savedSearchId)
    {
        $this->savedSearchId = $savedSearchId;

        return $this;
    }
}
