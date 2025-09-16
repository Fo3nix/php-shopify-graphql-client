<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class UserErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "UserError";

    public function selectField()
    {
        $this->selectField("field");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
