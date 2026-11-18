<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for an inventory item.
 */
class ShopifyInventoryItemInputInputObject extends InputObject
{
    protected $sku;
    protected $cost;
    protected $tracked;
    protected $countryCodeOfOrigin;
    protected $harmonizedSystemCode;
    protected $countryHarmonizedSystemCodes;
    protected $provinceCodeOfOrigin;
    protected $measurement;
    protected $requiresShipping;

    /**
     * The SKU (stock keeping unit) of the inventory item.
     */
    public function setSku($sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Unit cost associated with the inventory item, the currency is the shop's default currency.
     */
    public function setCost($cost): static
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Whether the inventory item is tracked.
     */
    public function setTracked($tracked): static
    {
        $this->tracked = $tracked;

        return $this;
    }

    /**
     * The country where the item was manufactured or produced, specified using the standard two-letter [ISO 3166-1 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2) country code.
     */
    public function setCountryCodeOfOrigin($shopifyCountryCode): static
    {
        $this->countryCodeOfOrigin = new RawObject($shopifyCountryCode);

        return $this;
    }

    /**
     * The harmonized system code of the inventory item. This must be a number between 6 and 13 digits.
     */
    public function setHarmonizedSystemCode($harmonizedSystemCode): static
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;

        return $this;
    }

    /**
     * List of country-specific harmonized system codes.
     */
    public function setCountryHarmonizedSystemCodes(array $countryHarmonizedSystemCodes): static
    {
        $this->countryHarmonizedSystemCodes = $countryHarmonizedSystemCodes;

        return $this;
    }

    /**
     * The province where the item was manufactured or produced, specified using the standard two-letter [ISO 3166-2 alpha-2](https://en.wikipedia.org/wiki/ISO_3166-2) province code.
     */
    public function setProvinceCodeOfOrigin($provinceCodeOfOrigin): static
    {
        $this->provinceCodeOfOrigin = $provinceCodeOfOrigin;

        return $this;
    }

    /**
     * The measurements of an inventory item.
     */
    public function setMeasurement(ShopifyInventoryItemMeasurementInputInputObject $shopifyInventoryItemMeasurementInputInputObject): static
    {
        $this->measurement = $shopifyInventoryItemMeasurementInputInputObject;

        return $this;
    }

    /**
     * Whether the inventory item needs to be physically shipped to the customer. Items that require shipping are physical products, while digital goods and services typically don't require shipping and can be fulfilled electronically.
     */
    public function setRequiresShipping($requiresShipping): static
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }
}
