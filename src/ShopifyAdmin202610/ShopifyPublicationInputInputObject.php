<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to publish a resource.
 */
class ShopifyPublicationInputInputObject extends InputObject
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
     * The date and time that the resource was published. Setting this to a date in the future will schedule the resource to be published. Only online store channels support future publishing. This field has no effect if you include it in the `publishableUnpublish` mutation.
     */
    public function setPublishDate($publishDate): static
    {
        $this->publishDate = $publishDate;

        return $this;
    }
}
