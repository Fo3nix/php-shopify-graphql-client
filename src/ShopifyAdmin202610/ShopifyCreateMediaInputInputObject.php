<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to create a media object.
 */
class ShopifyCreateMediaInputInputObject extends InputObject
{
    const REQUIRED = ["originalSource", "mediaContentType"];

    protected $originalSource;
    protected $alt;
    protected $mediaContentType;

    /**
     * The original source of the media object. This might be an external URL or a staged upload URL.
     */
    public function setOriginalSource($originalSource): static
    {
        $this->originalSource = $originalSource;

        return $this;
    }

    /**
     * The alt text associated with the media.
     */
    public function setAlt($alt): static
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * The media content type.
     */
    public function setMediaContentType($shopifyMediaContentType): static
    {
        $this->mediaContentType = new RawObject($shopifyMediaContentType);

        return $this;
    }
}
