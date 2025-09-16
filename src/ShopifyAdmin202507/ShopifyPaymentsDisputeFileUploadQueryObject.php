<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsDisputeFileUploadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeFileUpload";

    public function selectDisputeEvidenceType()
    {
        $this->selectField("disputeEvidenceType");

        return $this;
    }

    public function selectFileSize()
    {
        $this->selectField("fileSize");

        return $this;
    }

    public function selectFileType()
    {
        $this->selectField("fileType");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOriginalFileName()
    {
        $this->selectField("originalFileName");

        return $this;
    }

    public function selectUrl()
    {
        $this->selectField("url");

        return $this;
    }
}
