<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class UrlRedirectImportPreviewQueryObject extends QueryObject
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
