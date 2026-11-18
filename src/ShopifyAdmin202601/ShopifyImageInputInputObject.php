<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an image.
 */
class ShopifyImageInputInputObject extends InputObject
{
    protected $id;
    protected $altText;
    protected $src;

    /**
     * A globally-unique ID.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A word or phrase to share the nature or contents of an image.
     */
    public function setAltText($altText): static
    {
        $this->altText = $altText;

        return $this;
    }

    /**
     * The URL of the image. May be a staged upload URL.
     */
    public function setSrc($src): static
    {
        $this->src = $src;

        return $this;
    }
}
