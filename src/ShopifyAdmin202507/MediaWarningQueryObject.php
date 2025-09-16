<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MediaWarningQueryObject extends QueryObject
{
    const OBJECT_NAME = "MediaWarning";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
