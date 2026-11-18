<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a rate group for a value-based shipping option.
 */
class ShopifyDeliveryValueBasedRateGroupUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $ratesToCreate;
    protected $ratesToUpdate;
    protected $ratesToDelete;
    protected $conditions;

    /**
     * The ID of the rate group to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Rates to create within this rate group.
     */
    public function setRatesToCreate(array $ratesToCreate): static
    {
        $this->ratesToCreate = $ratesToCreate;

        return $this;
    }

    /**
     * Rates to update within this rate group.
     */
    public function setRatesToUpdate(array $ratesToUpdate): static
    {
        $this->ratesToUpdate = $ratesToUpdate;

        return $this;
    }

    /**
     * IDs of rates to delete from this rate group.
     */
    public function setRatesToDelete(array $ratesToDelete): static
    {
        $this->ratesToDelete = $ratesToDelete;

        return $this;
    }

    /**
     * Collection and origin location conditions for this rate group.
     */
    public function setConditions(ShopifyDeliveryRateConditionsUpdateInputInputObject $shopifyDeliveryRateConditionsUpdateInputInputObject): static
    {
        $this->conditions = $shopifyDeliveryRateConditionsUpdateInputInputObject;

        return $this;
    }
}
