<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for tracking information about a return delivery.
 */
class ShopifyReverseDeliveryTrackingInputInputObject extends InputObject
{
    protected $number;
    protected $url;

    /**
     * The tracking number for the label.
     */
    public function setNumber($number): static
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The tracking URL for the carrier. If the carrier isn't supported by Shopify, then provide the tracking URL of the delivery.
     */
    public function setUrl($url): static
    {
        $this->url = $url;

        return $this;
    }
}
