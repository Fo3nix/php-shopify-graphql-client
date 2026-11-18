<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a publication.
 */
class ShopifyPublicationUpdateInputInputObject extends InputObject
{
    protected $publishablesToAdd;
    protected $publishablesToRemove;
    protected $autoPublish;

    /**
     * A list of publishable IDs to add. The maximum number of publishables to update simultaneously is 50.
     */
    public function setPublishablesToAdd(array $publishablesToAdd): static
    {
        $this->publishablesToAdd = $publishablesToAdd;

        return $this;
    }

    /**
     * A list of publishable IDs to remove. The maximum number of publishables to update simultaneously is 50.
     */
    public function setPublishablesToRemove(array $publishablesToRemove): static
    {
        $this->publishablesToRemove = $publishablesToRemove;

        return $this;
    }

    /**
     * Whether new products should be automatically published to the publication.
     */
    public function setAutoPublish($autoPublish): static
    {
        $this->autoPublish = $autoPublish;

        return $this;
    }
}
