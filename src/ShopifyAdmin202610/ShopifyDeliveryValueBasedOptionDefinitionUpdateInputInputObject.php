<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a value-based shipping option.
 */
class ShopifyDeliveryValueBasedOptionDefinitionUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $name;
    protected $description;
    protected $isActive;
    protected $currency;
    protected $rateGroupsToCreate;
    protected $rateGroupsToUpdate;
    protected $rateGroupsToDelete;
    protected $freeDeliveryMinimumValue;

    /**
     * The ID of the value-based shipping option to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The name shown to buyers for this shipping option.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Description shown to buyers.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Whether this shipping option is active and shown to buyers.
     */
    public function setIsActive($isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * The currency used for all money values in this shipping option.
     */
    public function setCurrency($shopifyCurrencyCode): static
    {
        $this->currency = new RawObject($shopifyCurrencyCode);

        return $this;
    }

    /**
     * Rate groups to create for this shipping option.
     */
    public function setRateGroupsToCreate(array $rateGroupsToCreate): static
    {
        $this->rateGroupsToCreate = $rateGroupsToCreate;

        return $this;
    }

    /**
     * Rate groups to update for this shipping option.
     */
    public function setRateGroupsToUpdate(array $rateGroupsToUpdate): static
    {
        $this->rateGroupsToUpdate = $rateGroupsToUpdate;

        return $this;
    }

    /**
     * The IDs of rate groups to delete from this shipping option.
     */
    public function setRateGroupsToDelete(array $rateGroupsToDelete): static
    {
        $this->rateGroupsToDelete = $rateGroupsToDelete;

        return $this;
    }

    /**
     * The cart subtotal required for free shipping. Null clears the threshold. Currency must match the shipping option's currency.
     */
    public function setFreeDeliveryMinimumValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->freeDeliveryMinimumValue = $shopifyMoneyInputInputObject;

        return $this;
    }
}
