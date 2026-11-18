<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to update a media object.
 */
class ShopifyUpdateMediaInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;
    protected $previewImageSource;
    protected $alt;

    /**
     * Specifies the media to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The source from which to update the media preview image. May be an external URL or staged upload URL.
     */
    public function setPreviewImageSource($previewImageSource): static
    {
        $this->previewImageSource = $previewImageSource;

        return $this;
    }

    /**
     * The alt text associated to the media.
     */
    public function setAlt($alt): static
    {
        $this->alt = $alt;

        return $this;
    }
}
