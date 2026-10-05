<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRolloutScheduleQueryObject extends QueryObject
{
    const OBJECT_NAME = "RolloutSchedule";

    public function selectActivateAt()
    {
        $this->selectField("activateAt");

        return $this;
    }

    public function selectConcludeAt()
    {
        $this->selectField("concludeAt");

        return $this;
    }
}
