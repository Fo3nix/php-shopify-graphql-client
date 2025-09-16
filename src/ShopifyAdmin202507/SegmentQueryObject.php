<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Segment";

    public function selectCreationDate()
    {
        $this->selectField("creationDate");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLastEditDate()
    {
        $this->selectField("lastEditDate");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }
}
