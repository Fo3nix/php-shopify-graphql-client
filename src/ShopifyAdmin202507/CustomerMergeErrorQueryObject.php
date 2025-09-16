<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CustomerMergeErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerMergeError";

    public function selectErrorFields()
    {
        $this->selectField("errorFields");

        return $this;
    }

    public function selectMessage()
    {
        $this->selectField("message");

        return $this;
    }
}
