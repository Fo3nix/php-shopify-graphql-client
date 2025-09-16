<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class RootStandardMetafieldDefinitionTemplatesArgumentsObject extends ArgumentsObject
{
    protected $constraintSubtype;
    protected $constraintStatus;
    protected $excludeActivated;
    protected $first;
    protected $after;
    protected $last;
    protected $before;
    protected $reverse;

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
