<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationPublicationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the publication to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input fields to use when updating the publication.
     */
    public function setInput(ShopifyPublicationUpdateInputInputObject $shopifyPublicationUpdateInputInputObject): static
    {
        $this->input = $shopifyPublicationUpdateInputInputObject;

        return $this;
    }
}
