<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountUserErrorQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountUserError";

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    public function selectExtraInfo()
    {
        $this->selectField("extraInfo");

        return $this;
    }

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
