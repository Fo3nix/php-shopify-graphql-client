<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFunctionsAppBridgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FunctionsAppBridge";

    public function selectCreatePath()
    {
        $this->selectField("createPath");

        return $this;
    }

    public function selectDetailsPath()
    {
        $this->selectField("detailsPath");

        return $this;
    }
}
