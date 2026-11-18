<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationProductReorderMediaArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "moves"];

    protected $id;
    protected $moves;

    /**
     * The ID of the product on which to reorder medias.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of moves to perform which will be evaluated in order.
     */
    public function setMoves(array $moves): static
    {
        $this->moves = $moves;

        return $this;
    }
}
