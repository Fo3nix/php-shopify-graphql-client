<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductFeedQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeed";

    public function selectCountry()
    {
        $this->selectField("country");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLanguage()
    {
        $this->selectField("language");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }
}
