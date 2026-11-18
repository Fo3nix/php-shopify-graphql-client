<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to create a carrier service.
 */
class ShopifyDeliveryCarrierServiceCreateInputInputObject extends InputObject
{
    const REQUIRED = ["name", "callbackUrl", "supportsServiceDiscovery", "active"];

    protected $name;
    protected $callbackUrl;
    protected $supportsServiceDiscovery;
    protected $active;

    /**
     * The name of the shipping service as seen by merchants and their customers.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The URL endpoint that Shopify needs to retrieve shipping rates. This must be a public URL.
     */
    public function setCallbackUrl($callbackUrl): static
    {
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    /**
     * Whether merchants are able to send dummy data to your service through the Shopify admin to see shipping rate examples.
     */
    public function setSupportsServiceDiscovery($supportsServiceDiscovery): static
    {
        $this->supportsServiceDiscovery = $supportsServiceDiscovery;

        return $this;
    }

    /**
     * Whether this carrier service is active. If `true`, then the service will be available to serve rates in checkout.
     */
    public function setActive($active): static
    {
        $this->active = $active;

        return $this;
    }
}
