<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootPublishedProductsCountArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["publicationId"];

    protected $publicationId;
    protected $limit;

    /**
     * The ID of the publication that the products are published to.
     */
    public function setPublicationId($publicationId): static
    {
        $this->publicationId = $publicationId;

        return $this;
    }

    /**
     * The maximum number of products to count.
     */
    public function setLimit($limit): static
    {
        $this->limit = $limit;

        return $this;
    }
}
