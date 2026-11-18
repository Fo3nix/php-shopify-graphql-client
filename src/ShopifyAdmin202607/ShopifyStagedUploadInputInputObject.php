<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for generating staged upload targets.
 */
class ShopifyStagedUploadInputInputObject extends InputObject
{
    const REQUIRED = ["resource", "filename", "mimeType"];

    protected $resource;
    protected $filename;
    protected $mimeType;
    protected $httpMethod;
    protected $fileSize;

    /**
     * The file's intended Shopify resource type.
     */
    public function setResource($shopifyStagedUploadTargetGenerateUploadResource): static
    {
        $this->resource = new RawObject($shopifyStagedUploadTargetGenerateUploadResource);

        return $this;
    }

    /**
     * The file's name and extension.
     */
    public function setFilename($filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * The file's MIME type.
     */
    public function setMimeType($mimeType): static
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * The HTTP method to be used when sending a request to upload the file using the returned staged
     * upload target.
     */
    public function setHttpMethod($shopifyStagedUploadHttpMethodType): static
    {
        $this->httpMethod = new RawObject($shopifyStagedUploadHttpMethodType);

        return $this;
    }

    /**
     * The size of the file to upload, in bytes. This is required when the request's resource property is set to
     * [VIDEO](https://shopify.dev/api/admin-graphql/latest/enums/StagedUploadTargetGenerateUploadResource#value-video)
     * or [MODEL_3D](https://shopify.dev/api/admin-graphql/latest/enums/StagedUploadTargetGenerateUploadResource#value-model3d).
     */
    public function setFileSize($fileSize): static
    {
        $this->fileSize = $fileSize;

        return $this;
    }
}
