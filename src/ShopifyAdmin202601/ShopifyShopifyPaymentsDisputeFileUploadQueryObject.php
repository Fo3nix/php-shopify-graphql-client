<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The file upload associated with the dispute evidence.
 */
class ShopifyShopifyPaymentsDisputeFileUploadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsDisputeFileUpload";

    /**
     * The type of the file for the dispute evidence.
     */
    public function selectDisputeEvidenceType(): static
    {
        $this->selectField("disputeEvidenceType");

        return $this;
    }

    /**
     * The file size.
     */
    public function selectFileSize(): static
    {
        $this->selectField("fileSize");

        return $this;
    }

    /**
     * The file type.
     */
    public function selectFileType(): static
    {
        $this->selectField("fileType");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The original file name.
     */
    public function selectOriginalFileName(): static
    {
        $this->selectField("originalFileName");

        return $this;
    }

    /**
     * The URL for accessing the file.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
