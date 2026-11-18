<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for publications to which a collection will be published.
 */
class ShopifyCollectionPublicationInputInputObject extends InputObject
{
    protected $publicationId;

    /**
     * The ID of the publication.
     */
    public function setPublicationId($publicationId): static
    {
        $this->publicationId = $publicationId;

        return $this;
    }
}
