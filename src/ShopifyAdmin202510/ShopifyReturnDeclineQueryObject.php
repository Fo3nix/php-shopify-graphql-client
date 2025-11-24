<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyReturnDeclineQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnDecline";

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectReason()
    {
        $this->selectField("reason");

        return $this;
    }
}
