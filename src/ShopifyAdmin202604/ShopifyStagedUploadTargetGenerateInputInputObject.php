<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The required fields and parameters to generate the URL upload an"
 * asset to Shopify.
 *
 * Deprecated in favor of
 * [StagedUploadInput](https://shopify.dev/api/admin-graphql/latest/objects/StagedUploadInput),
 * which is used by the
 * [stagedUploadsCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/stagedUploadsCreate).
 */
class ShopifyStagedUploadTargetGenerateInputInputObject extends InputObject
{
    const REQUIRED = ["resource", "filename", "mimeType"];

    protected $resource;
    protected $filename;
    protected $mimeType;
    protected $httpMethod;
    protected $fileSize;

    /**
     * The resource type being uploaded.
     */
    public function setResource($shopifyStagedUploadTargetGenerateUploadResource): static
    {
        $this->resource = new RawObject($shopifyStagedUploadTargetGenerateUploadResource);

        return $this;
    }

    /**
     * The filename of the asset being uploaded.
     */
    public function setFilename($filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * The MIME type of the asset being uploaded.
     */
    public function setMimeType($mimeType): static
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * The HTTP method to be used by the staged upload.
     */
    public function setHttpMethod($shopifyStagedUploadHttpMethodType): static
    {
        $this->httpMethod = new RawObject($shopifyStagedUploadHttpMethodType);

        return $this;
    }

    /**
     * The size of the file to upload, in bytes.
     */
    public function setFileSize($fileSize): static
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}
