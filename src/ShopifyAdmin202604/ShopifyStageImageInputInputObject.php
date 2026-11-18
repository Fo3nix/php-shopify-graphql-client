<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * An image to be uploaded.
 *
 * Deprecated in favor of
 * [StagedUploadInput](https://shopify.dev/api/admin-graphql/latest/objects/StagedUploadInput),
 * which is used by the
 * [stagedUploadsCreate mutation](https://shopify.dev/api/admin-graphql/latest/mutations/stagedUploadsCreate).
 */
class ShopifyStageImageInputInputObject extends InputObject
{
    const REQUIRED = ["resource", "filename", "mimeType"];

    protected $resource;
    protected $filename;
    protected $mimeType;
    protected $httpMethod;

    /**
     * The image resource.
     */
    public function setResource($shopifyStagedUploadTargetGenerateUploadResource): static
    {
        $this->resource = new RawObject($shopifyStagedUploadTargetGenerateUploadResource);

        return $this;
    }

    /**
     * The image filename.
     */
    public function setFilename($filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * The image MIME type.
     */
    public function setMimeType($mimeType): static
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * HTTP method to be used by the staged upload.
     */
    public function setHttpMethod($shopifyStagedUploadHttpMethodType): static
    {
        $this->httpMethod = new RawObject($shopifyStagedUploadHttpMethodType);

        return $this;
    }
}
