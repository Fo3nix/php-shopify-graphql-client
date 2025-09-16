<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class BulkOperationQueryObject extends QueryObject
{
    const OBJECT_NAME = "BulkOperation";

    public function selectCompletedAt()
    {
        $this->selectField("completedAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectErrorCode()
    {
        $this->selectField("errorCode");

        return $this;
    }

    public function selectFileSize()
    {
        $this->selectField("fileSize");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectObjectCount()
    {
        $this->selectField("objectCount");

        return $this;
    }

    public function selectPartialDataUrl()
    {
        $this->selectField("partialDataUrl");

        return $this;
    }

    public function selectRootObjectCount()
    {
        $this->selectField("rootObjectCount");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
