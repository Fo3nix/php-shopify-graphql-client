<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The number of method definitions for a zone, separated into merchant-owned and participant definitions.
 */
class ShopifyDeliveryMethodDefinitionCountsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinitionCounts";

    /**
     * The number of participant method definitions for the specified zone.
     */
    public function selectParticipantDefinitionsCount(): static
    {
        $this->selectField("participantDefinitionsCount");

        return $this;
    }

    /**
     * The number of merchant-defined method definitions for the specified zone.
     */
    public function selectRateDefinitionsCount(): static
    {
        $this->selectField("rateDefinitionsCount");

        return $this;
    }
}
