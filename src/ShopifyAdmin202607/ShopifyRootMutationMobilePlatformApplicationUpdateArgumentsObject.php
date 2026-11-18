<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMobilePlatformApplicationUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "input"];

    protected $id;
    protected $input;

    /**
     * The ID of the Mobile Platform Application to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The input to update a Mobile Platform Application.
     */
    public function setInput(ShopifyMobilePlatformApplicationUpdateInputInputObject $shopifyMobilePlatformApplicationUpdateInputInputObject): static
    {
        $this->input = $shopifyMobilePlatformApplicationUpdateInputInputObject;

        return $this;
    }
}
