<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating inclusion rules for a collection source.
 */
class ShopifyCollectionUpdateSourceInclusionInputInputObject extends InputObject
{
    protected $matchType;
    protected $conditionsToCreate;
    protected $conditionsToDelete;
    protected $conditionsToUpdate;
    protected $selectionsToAdd;
    protected $selectionsToRemove;

    /**
     * Whether products must match all or any of the conditions.
     */
    public function setMatchType($shopifyCollectionConditionMatchType): static
    {
        $this->matchType = new RawObject($shopifyCollectionConditionMatchType);

        return $this;
    }

    /**
     * The conditions to create for the source.
     */
    public function setConditionsToCreate(array $conditionsToCreate): static
    {
        $this->conditionsToCreate = $conditionsToCreate;

        return $this;
    }

    /**
     * The IDs of the conditions to delete from the source.
     */
    public function setConditionsToDelete(array $conditionsToDelete): static
    {
        $this->conditionsToDelete = $conditionsToDelete;

        return $this;
    }

    /**
     * The conditions to update for the source.
     */
    public function setConditionsToUpdate(array $conditionsToUpdate): static
    {
        $this->conditionsToUpdate = $conditionsToUpdate;

        return $this;
    }

    /**
     * The product selections to add to the source.
     */
    public function setSelectionsToAdd(array $selectionsToAdd): static
    {
        $this->selectionsToAdd = $selectionsToAdd;

        return $this;
    }

    /**
     * The product selections to remove from the source. For sources that target variants, omitting variant IDs will remove all for the product.
     */
    public function setSelectionsToRemove(array $selectionsToRemove): static
    {
        $this->selectionsToRemove = $selectionsToRemove;

        return $this;
    }
}
