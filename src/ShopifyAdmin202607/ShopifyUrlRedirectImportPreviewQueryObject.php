<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyUrlRedirectImportPreviewQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectImportPreview";

    public function selectPath()
    {
        $this->selectField("path");

        return $this;
    }

    public function selectTarget()
    {
        $this->selectField("target");

        return $this;
    }
}
