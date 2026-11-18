<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for creating inclusion rules for a collection source.
 */
class ShopifyCollectionCreateSourceInclusionInputInputObject extends InputObject
{
    protected $matchType;
    protected $conditions;
    protected $selections;

    /**
     * Whether products must match all or any of the conditions.
     */
    public function setMatchType($shopifyCollectionConditionMatchType): static
    {
        $this->matchType = new RawObject($shopifyCollectionConditionMatchType);

        return $this;
    }

    /**
     * The conditions that products must match to be included in the collection.
     */
    public function setConditions(array $conditions): static
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * The products to explicitly include in the collection.
     */
    public function setSelections(array $selections): static
    {
        $this->selections = $selections;

        return $this;
    }
}
