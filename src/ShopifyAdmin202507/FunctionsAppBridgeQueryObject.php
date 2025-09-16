<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FunctionsAppBridgeQueryObject extends QueryObject
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
