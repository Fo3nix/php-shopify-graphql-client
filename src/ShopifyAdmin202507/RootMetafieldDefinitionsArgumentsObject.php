<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootMetafieldDefinitionsArgumentsObject extends ArgumentsObject
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

    public function setOwnerType($metafieldOwnerType)
    {
        $this->ownerType = new RawObject($metafieldOwnerType);

        return $this;
    }

    public function setPinnedStatus($metafieldDefinitionPinnedStatus)
    {
        $this->pinnedStatus = new RawObject($metafieldDefinitionPinnedStatus);

        return $this;
    }

    public function setConstraintSubtype(MetafieldDefinitionConstraintSubtypeIdentifierInputObject $metafieldDefinitionConstraintSubtypeIdentifierInputObject)
    {
        $this->constraintSubtype = $metafieldDefinitionConstraintSubtypeIdentifierInputObject;

        return $this;
    }

    public function setConstraintStatus($metafieldDefinitionConstraintStatus)
    {
        $this->constraintStatus = new RawObject($metafieldDefinitionConstraintStatus);

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

    public function setSortKey($metafieldDefinitionSortKeys)
    {
        $this->sortKey = new RawObject($metafieldDefinitionSortKeys);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
