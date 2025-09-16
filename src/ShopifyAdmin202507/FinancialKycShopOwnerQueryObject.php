<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FinancialKycShopOwnerQueryObject extends QueryObject
{
    const OBJECT_NAME = "FinancialKycShopOwner";

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }
}
