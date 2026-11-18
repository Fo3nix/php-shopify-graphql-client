<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for shipping delivery method used for contract calculation.
 */
class ShopifySubscriptionContractCalculationDeliveryMethodShippingInputInputObject extends InputObject
{
    const REQUIRED = ["address", "deliveryPrice"];

    protected $address;
    protected $title;
    protected $presentmentTitle;
    protected $description;
    protected $code;
    protected $carrierServiceId;
    protected $deliveryPrice;

    /**
     * The address to ship to.
     */
    public function setAddress(ShopifyMailingAddressInputInputObject $shopifyMailingAddressInputInputObject): static
    {
        $this->address = $shopifyMailingAddressInputInputObject;

        return $this;
    }

    /**
     * The title of the shipping option.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The presentment title of the shipping option.
     */
    public function setPresentmentTitle($presentmentTitle): static
    {
        $this->presentmentTitle = $presentmentTitle;

        return $this;
    }

    /**
     * The description of the shipping option.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * The code of the shipping option.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The carrier service ID of the shipping option.
     */
    public function setCarrierServiceId($carrierServiceId): static
    {
        $this->carrierServiceId = $carrierServiceId;

        return $this;
    }

    /**
     * The price for this delivery method. The amount must be greater than or equal to 0.
     */
    public function setDeliveryPrice(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->deliveryPrice = $shopifyMoneyInputInputObject;

        return $this;
    }
}
