<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class Model3dSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "Model3dSource";

    public function selectFilesize()
    {
        $this->selectField("filesize");

        return $this;
    }

    public function selectFormat()
    {
        $this->selectField("format");

        return $this;
    }

    public function selectMimeType()
    {
        $this->selectField("mimeType");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
