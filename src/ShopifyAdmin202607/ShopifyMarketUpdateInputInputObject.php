<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields used to update a market.
 */
class ShopifyMarketUpdateInputInputObject extends InputObject
{
    protected $name;
    protected $handle;
    protected $conditions;
    protected $catalogsToAdd;
    protected $catalogsToDelete;
    protected $webPresencesToAdd;
    protected $webPresencesToDelete;
    protected $discountsToAdd;
    protected $discountsToDelete;
    protected $makeDuplicateUniqueMarketsDraft;
    protected $status;
    protected $currencySettings;
    protected $removeCurrencySettings;
    protected $removePriceInclusions;
    protected $priceInclusions;
    protected $delivery;

    /**
     * The name of the market. Not shown to customers.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * A unique identifier for the market. For example `"ca"`.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The conditions to update.
     */
    public function setConditions(ShopifyMarketConditionsUpdateInputInputObject $shopifyMarketConditionsUpdateInputInputObject): static
    {
        $this->conditions = $shopifyMarketConditionsUpdateInputInputObject;

        return $this;
    }

    /**
     * Catalog IDs to include in the market.
     */
    public function setCatalogsToAdd(array $catalogsToAdd): static
    {
        $this->catalogsToAdd = $catalogsToAdd;

        return $this;
    }

    /**
     * Catalog IDs to remove from the market.
     */
    public function setCatalogsToDelete(array $catalogsToDelete): static
    {
        $this->catalogsToDelete = $catalogsToDelete;

        return $this;
    }

    /**
     * The web presences to add to the market.
     */
    public function setWebPresencesToAdd(array $webPresencesToAdd): static
    {
        $this->webPresencesToAdd = $webPresencesToAdd;

        return $this;
    }

    /**
     * The web presences to remove from the market.
     */
    public function setWebPresencesToDelete(array $webPresencesToDelete): static
    {
        $this->webPresencesToDelete = $webPresencesToDelete;

        return $this;
    }

    /**
     * The discounts to add to the market.
     */
    public function setDiscountsToAdd(array $discountsToAdd): static
    {
        $this->discountsToAdd = $discountsToAdd;

        return $this;
    }

    /**
     * The discounts to remove from the market.
     */
    public function setDiscountsToDelete(array $discountsToDelete): static
    {
        $this->discountsToDelete = $discountsToDelete;

        return $this;
    }

    /**
     * Whether to update duplicate region or wildcard markets' status to draft.
     */
    public function setMakeDuplicateUniqueMarketsDraft($makeDuplicateUniqueMarketsDraft): static
    {
        $this->makeDuplicateUniqueMarketsDraft = $makeDuplicateUniqueMarketsDraft;

        return $this;
    }

    /**
     * The status of the market.
     */
    public function setStatus($shopifyMarketStatus): static
    {
        $this->status = new RawObject($shopifyMarketStatus);

        return $this;
    }

    /**
     * Currency settings for the market.
     */
    public function setCurrencySettings(ShopifyMarketCurrencySettingsUpdateInputInputObject $shopifyMarketCurrencySettingsUpdateInputInputObject): static
    {
        $this->currencySettings = $shopifyMarketCurrencySettingsUpdateInputInputObject;

        return $this;
    }

    /**
     * Remove any currency settings that are defined for the market.
     */
    public function setRemoveCurrencySettings($removeCurrencySettings): static
    {
        $this->removeCurrencySettings = $removeCurrencySettings;

        return $this;
    }

    /**
     * The price inclusions to remove from the market.
     */
    public function setRemovePriceInclusions($removePriceInclusions): static
    {
        $this->removePriceInclusions = $removePriceInclusions;

        return $this;
    }

    /**
     * The strategy used to determine how prices are displayed to the customer.
     */
    public function setPriceInclusions(ShopifyMarketPriceInclusionsInputInputObject $shopifyMarketPriceInclusionsInputInputObject): static
    {
        $this->priceInclusions = $shopifyMarketPriceInclusionsInputInputObject;

        return $this;
    }

    /**
     * Delivery setting updates. When omitted, delivery settings are not changed.
     */
    public function setDelivery(ShopifyMarketDeliveryConfigurationsUpdateInputInputObject $shopifyMarketDeliveryConfigurationsUpdateInputInputObject): static
    {
        $this->delivery = $shopifyMarketDeliveryConfigurationsUpdateInputInputObject;

        return $this;
    }
}
