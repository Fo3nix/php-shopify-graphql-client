<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for pickup option.
 */
class ShopifySubscriptionDeliveryMethodPickupOptionInputInputObject extends InputObject
{
    const REQUIRED = ["locationId"];

    protected $title;
    protected $presentmentTitle;
    protected $description;
    protected $code;
    protected $locationId;

    /**
     * The title of the pickup option.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The presentment title of the pickup option.
     */
    public function setPresentmentTitle($presentmentTitle): static
    {
        $this->presentmentTitle = $presentmentTitle;

        return $this;
    }

    /**
     * The details displayed to the customer to describe the pickup option.
     */
    public function setDescription($description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * A custom reference to the delivery method for use with automations.
     */
    public function setCode($code): static
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The ID of the pickup location.
     */
    public function setLocationId($locationId): static
    {
        $this->locationId = $locationId;

        return $this;
    }
}
