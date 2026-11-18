<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * A mail service provided by the participant.
 */
class ShopifyDeliveryParticipantServiceQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryParticipantService";

    /**
     * Whether the service is active.
     */
    public function selectActive(): static
    {
        $this->selectField("active");

        return $this;
    }

    /**
     * The name of the service.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }
}
