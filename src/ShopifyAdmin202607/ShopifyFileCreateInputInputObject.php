<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields that are required to create a file object.
 */
class ShopifyFileCreateInputInputObject extends InputObject
{
    const REQUIRED = ["originalSource"];

    protected $filename;
    protected $contentType;
    protected $alt;
    protected $duplicateResolutionMode;
    protected $originalSource;

    /**
     * The name of the file. If provided, then the file is created with the specified filename.
     * If not provided, then the filename from the `originalSource` is used.
     */
    public function setFilename($filename): static
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * The file content type. If omitted, then Shopify will attempt to determine the content type during file processing.
     */
    public function setContentType($shopifyFileContentType): static
    {
        $this->contentType = new RawObject($shopifyFileContentType);

        return $this;
    }

    /**
     * The alt text description of the file for screen readers and accessibility.
     */
    public function setAlt($alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * How to handle if filename is already in use.
     */
    public function setDuplicateResolutionMode($shopifyFileCreateInputDuplicateResolutionMode): static
    {
        $this->duplicateResolutionMode = new RawObject($shopifyFileCreateInputDuplicateResolutionMode);

        return $this;
    }

    /**
     * The source URL of the file. An external URL can be used for images, generic files, or external videos.
     * Videos and 3D models require a
     * [staged upload URL](https://shopify.dev/api/admin-graphql/latest/mutations/stageduploadscreate).
     */
    public function setOriginalSource($originalSource): static
    {
        $this->originalSource = $originalSource;

        return $this;
    }
}
