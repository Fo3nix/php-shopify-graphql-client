<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDeletionEventQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeletionEvent";

    public function selectOccurredAt()
    {
        $this->selectField("occurredAt");

        return $this;
    }

    public function selectSubjectId()
    {
        $this->selectField("subjectId");

        return $this;
    }

    public function selectSubjectType()
    {
        $this->selectField("subjectType");

        return $this;
    }
}
