<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for shipping option.
 */
class ShopifySubscriptionDeliveryMethodShippingOptionInputInputObject extends InputObject
{
    protected $title;
    protected $presentmentTitle;
    protected $description;
    protected $code;
    protected $carrierServiceId;

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
}
