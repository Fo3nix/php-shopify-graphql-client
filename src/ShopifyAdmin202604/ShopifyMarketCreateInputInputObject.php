<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a market.
 */
class ShopifyMarketCreateInputInputObject extends InputObject
{
    const REQUIRED = ["name"];

    protected $name;
    protected $handle;
    protected $conditions;
    protected $catalogs;
    protected $makeDuplicateUniqueMarketsDraft;
    protected $status;
    protected $webPresences;
    protected $currencySettings;
    protected $priceInclusions;

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
     * If the handle isn't provided, then the handle is auto-generated based on the country or name.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * The conditions that apply to the market.
     */
    public function setConditions(ShopifyMarketConditionsInputInputObject $shopifyMarketConditionsInputInputObject): static
    {
        $this->conditions = $shopifyMarketConditionsInputInputObject;

        return $this;
    }

    /**
     * Catalog IDs to include in the market.
     */
    public function setCatalogs(array $catalogs): static
    {
        $this->catalogs = $catalogs;

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
     * Web presence IDs to include in the market.
     */
    public function setWebPresences(array $webPresences): static
    {
        $this->webPresences = $webPresences;

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
     * The strategy used to determine how prices are displayed to the customer.
     */
    public function setPriceInclusions(ShopifyMarketPriceInclusionsInputInputObject $shopifyMarketPriceInclusionsInputInputObject): static
    {
        $this->priceInclusions = $shopifyMarketPriceInclusionsInputInputObject;

        return $this;
    }
}
