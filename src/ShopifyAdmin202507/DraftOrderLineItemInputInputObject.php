<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\InputObject;

class DraftOrderLineItemInputInputObject extends InputObject
{
    protected $appliedDiscount;
    protected $customAttributes;
    protected $originalUnitPriceWithCurrency;
    protected $quantity;
    protected $requiresShipping;
    protected $sku;
    protected $taxable;
    protected $title;
    protected $variantId;
    protected $weight;
    protected $uuid;
    protected $components;
    protected $generatePriceOverride;
    protected $priceOverride;

    public function setAppliedDiscount(DraftOrderAppliedDiscountInputInputObject $draftOrderAppliedDiscountInputInputObject)
    {
        $this->appliedDiscount = $draftOrderAppliedDiscountInputInputObject;

        return $this;
    }

    public function setCustomAttributes(array $customAttributes)
    {
        $this->customAttributes = $customAttributes;

        return $this;
    }

    public function setOriginalUnitPriceWithCurrency(MoneyInputInputObject $moneyInputInputObject)
    {
        $this->originalUnitPriceWithCurrency = $moneyInputInputObject;

        return $this;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function setRequiresShipping($requiresShipping)
    {
        $this->requiresShipping = $requiresShipping;

        return $this;
    }

    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    public function setTaxable($taxable)
    {
        $this->taxable = $taxable;

        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    public function setVariantId($variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    public function setWeight(WeightInputInputObject $weightInputInputObject)
    {
        $this->weight = $weightInputInputObject;

        return $this;
    }

    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function setComponents(array $components)
    {
        $this->components = $components;

        return $this;
    }

    public function setGeneratePriceOverride($generatePriceOverride)
    {
        $this->generatePriceOverride = $generatePriceOverride;

        return $this;
    }

    public function setPriceOverride(MoneyInputInputObject $moneyInputInputObject)
    {
        $this->priceOverride = $moneyInputInputObject;

        return $this;
    }
}
