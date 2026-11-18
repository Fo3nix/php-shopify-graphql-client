<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for a shipping service provided by a participant.
 */
class ShopifyDeliveryParticipantServiceInputInputObject extends InputObject
{
    const REQUIRED = ["name", "active"];

    protected $name;
    protected $active;

    /**
     * The name of the service.
     */
    public function setName($name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Whether the service is active.
     */
    public function setActive($active): static
    {
        $this->active = $active;

        return $this;
    }
}
