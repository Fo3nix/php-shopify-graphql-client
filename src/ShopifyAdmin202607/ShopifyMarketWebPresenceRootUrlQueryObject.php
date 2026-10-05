<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketWebPresenceRootUrlQueryObject extends QueryObject
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
