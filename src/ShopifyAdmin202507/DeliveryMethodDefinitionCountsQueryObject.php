<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DeliveryMethodDefinitionCountsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinitionCounts";

    public function selectParticipantDefinitionsCount()
    {
        $this->selectField("participantDefinitionsCount");

        return $this;
    }

    public function selectRateDefinitionsCount()
    {
        $this->selectField("rateDefinitionsCount");

        return $this;
    }
}
