<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFunctionsErrorHistoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "FunctionsErrorHistory";

    public function selectErrorsFirstOccurredAt()
    {
        $this->selectField("errorsFirstOccurredAt");

        return $this;
    }

    public function selectFirstOccurredAt()
    {
        $this->selectField("firstOccurredAt");

        return $this;
    }

    public function selectHasBeenSharedSinceLastError()
    {
        $this->selectField("hasBeenSharedSinceLastError");

        return $this;
    }

    public function selectHasSharedRecentErrors()
    {
        $this->selectField("hasSharedRecentErrors");

        return $this;
    }
}
