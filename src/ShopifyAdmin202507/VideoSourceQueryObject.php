<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class VideoSourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "VideoSource";

    public function selectFileSize()
    {
        $this->selectField("fileSize");

        return $this;
    }

    public function selectFormat()
    {
        $this->selectField("format");

        return $this;
    }

    public function selectHeight()
    {
        $this->selectField("height");

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

    public function selectWidth()
    {
        $this->selectField("width");

        return $this;
    }
}
