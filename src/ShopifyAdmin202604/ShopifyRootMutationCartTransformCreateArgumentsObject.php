<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationCartTransformCreateArgumentsObject extends ArgumentsObject
{
    protected $functionHandle;
    protected $blockOnFailure;
    protected $metafields;

    /**
     * The handle of the Function providing the cart transform.
     */
    public function setFunctionHandle($functionHandle): static
    {
        $this->functionHandle = $functionHandle;

        return $this;
    }

    /**
     * Whether a run failure should block cart and checkout operations.
     */
    public function setBlockOnFailure($blockOnFailure): static
    {
        $this->blockOnFailure = $blockOnFailure;

        return $this;
    }

    /**
     * Additional metafields to associate to the cart transform.
     */
    public function setMetafields(array $metafields): static
    {
        $this->metafields = $metafields;

        return $this;
    }
}
