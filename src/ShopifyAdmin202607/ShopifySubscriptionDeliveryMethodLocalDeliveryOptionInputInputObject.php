<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for local delivery option.
 */
class ShopifySubscriptionDeliveryMethodLocalDeliveryOptionInputInputObject extends InputObject
{
    const REQUIRED = ["phone"];

    protected $title;
    protected $presentmentTitle;
    protected $description;
    protected $code;
    protected $phone;
    protected $instructions;

    /**
     * The title of the local delivery option.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The presentment title of the local delivery option.
     */
    public function setPresentmentTitle($presentmentTitle): static
    {
        $this->presentmentTitle = $presentmentTitle;

        return $this;
    }

    /**
     * The details displayed to the customer to describe the local delivery option.
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
     * The phone number that the customer must provide to the merchant.
     * Formatted using E.164 standard. For example, `+16135551111`.
     */
    public function setPhone($phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The delivery instructions that the customer can provide to the merchant.
     */
    public function setInstructions($instructions): static
    {
        $this->instructions = $instructions;

        return $this;
    }
}
