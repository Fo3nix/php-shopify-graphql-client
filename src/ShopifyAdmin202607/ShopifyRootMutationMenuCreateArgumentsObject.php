<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMenuCreateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["title", "handle", "items"];

    protected $title;
    protected $handle;
    protected $items;

    /**
     * The menu's title.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The menu's handle.
     */
    public function setHandle($handle): static
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * List of the menu's items.
     */
    public function setItems(array $items): static
    {
        $this->items = $items;

        return $this;
    }
}
