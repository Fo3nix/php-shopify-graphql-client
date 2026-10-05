<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCustomerAccountsV2QueryObject extends QueryObject
{
    const OBJECT_NAME = "CustomerAccountsV2";

    public function selectCustomerAccountsVersion()
    {
        $this->selectField("customerAccountsVersion");

        return $this;
    }

    public function selectLoginLinksVisibleOnStorefrontAndCheckout()
    {
        $this->selectField("loginLinksVisibleOnStorefrontAndCheckout");

        return $this;
    }

    public function selectLoginRequiredAtCheckout()
    {
        $this->selectField("loginRequiredAtCheckout");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
