<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootStandardMetafieldDefinitionTemplatesArgumentsObject extends ArgumentsObject
{
    protected $constraintSubtype;
    protected $constraintStatus;
    protected $excludeActivated;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

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

    public function setExcludeActivated($excludeActivated)
    {
        $this->excludeActivated = $excludeActivated;

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
}
