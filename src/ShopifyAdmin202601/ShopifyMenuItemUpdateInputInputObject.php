<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields required to update a valid menu item.
 */
class ShopifyMenuItemUpdateInputInputObject extends InputObject
{
    const REQUIRED = ["title", "type"];

    protected $title;
    protected $type;
    protected $resourceId;
    protected $url;
    protected $tags;
    protected $id;
    protected $items;

    /**
     * The menu item's title.
     */
    public function setTitle($title): static
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The menu item's type.
     */
    public function setType($shopifyMenuItemType): static
    {
        $this->type = new RawObject($shopifyMenuItemType);

        return $this;
    }

    /**
     * The menu item's association with an existing resource.
     */
    public function setResourceId($resourceId): static
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    /**
     * The menu item's url to be used when the item doesn't point to a resource.
     */
    public function setUrl($url): static
    {
        $this->url = $url;

        return $this;
    }

    /**
     * The menu item's tags to filter a collection.
     */
    public function setTags(array $tags): static
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * A globally-unique ID of the online store navigation menu item.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * List of the menu items nested under this item sorted by position.
     */
    public function setItems(array $items): static
    {
        $this->items = $items;

        return $this;
    }
}
