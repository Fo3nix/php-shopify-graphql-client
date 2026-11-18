<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootMutationMenuUpdateArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["id", "title", "items"];

    protected $id;
    protected $title;
    protected $handle;
    protected $items;

    /**
     * ID of the menu to be updated.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

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
