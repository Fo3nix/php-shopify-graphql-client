<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountUserErrorQueryObject extends QueryObject
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

    public function selectField_()
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
