<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootMetafieldDefinitionsArgumentsObject extends ArgumentsObject
{
    protected $key;
    protected $namespace;
    protected $ownerType;
    protected $pinnedStatus;
    protected $constraintSubtype;
    protected $constraintStatus;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;
    protected $sortKey;
    protected $query;

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function setOwnerType($shopifyMetafieldOwnerType)
    {
        $this->ownerType = new RawObject($shopifyMetafieldOwnerType);

        return $this;
    }

    public function setPinnedStatus($shopifyMetafieldDefinitionPinnedStatus)
    {
        $this->pinnedStatus = new RawObject($shopifyMetafieldDefinitionPinnedStatus);

        return $this;
    }

    public function setConstraintSubtype(ShopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject $shopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject)
    {
        $this->constraintSubtype = $shopifyMetafieldDefinitionConstraintSubtypeIdentifierInputObject;

        return $this;
    }

    public function setConstraintStatus($shopifyMetafieldDefinitionConstraintStatus)
    {
        $this->constraintStatus = new RawObject($shopifyMetafieldDefinitionConstraintStatus);

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

    public function setSortKey($shopifyMetafieldDefinitionSortKeys)
    {
        $this->sortKey = new RawObject($shopifyMetafieldDefinitionSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
