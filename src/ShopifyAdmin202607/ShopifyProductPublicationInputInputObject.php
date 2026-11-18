<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for specifying a publication to which a product will be published.
 */
class ShopifyProductPublicationInputInputObject extends InputObject
{
    protected $publicationId;
    protected $publishDate;

    /**
     * ID of the publication.
     */
    public function setPublicationId($publicationId): static
    {
        $this->publicationId = $publicationId;

        return $this;
    }

    /**
     * The date and time that the product was (or will be) published.
     */
    public function setPublishDate($publishDate): static
    {
        $this->publishDate = $publishDate;

        return $this;
    }
}
