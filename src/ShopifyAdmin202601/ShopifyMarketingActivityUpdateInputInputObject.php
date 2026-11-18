<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields required to update a marketing activity. Marketing activity app extensions are deprecated and will be removed in the near future.
 */
class ShopifyMarketingActivityUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["id"];

    protected $id;

    /**
     * The ID of the marketing activity.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }
}
