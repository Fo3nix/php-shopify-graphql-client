<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for an image associated with an article.
 */
class ShopifyArticleImageInputInputObject extends InputObject
{
    protected $altText;
    protected $url;

    /**
     * A word or phrase to share the nature or contents of an image.
     */
    public function setAltText($altText): static
    {
        $this->altText = $altText;

        return $this;
    }

    /**
     * The URL of the image.
     */
    public function setUrl($url): static
    {
        $this->url = $url;

        return $this;
    }
}
