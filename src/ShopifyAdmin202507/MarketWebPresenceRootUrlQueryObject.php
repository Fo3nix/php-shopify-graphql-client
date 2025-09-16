<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketWebPresenceRootUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresenceRootUrl";

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
