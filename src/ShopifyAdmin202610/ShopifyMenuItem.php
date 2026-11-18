<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMenuItem;

/**
 * Individual navigation links that make up store menus, giving customers clickable paths to explore the store. Menu items are the building blocks that connect shoppers to products, collections, pages, or external resources.
 *
 * For example, within a "Products" menu, individual menu items might link to specific collections like "Summer Collection" or "Best Sellers," each with its own title, URL, and resource connection.
 *
 * Use the `MenuItem` object to:
 * - Define individual navigation links and their destinations
 * - Create nested menu hierarchies through item relationships
 * - Use tags for collection filtering
 * - Connect menu links to specific store resources
 *
 * Menu items support various link types, enabling connections to internal store content or external websites. The nested items capability allows for dropdown or multi-level navigation structures that help organize complex store catalogs.
 */
class ShopifyMenuItem
{
    protected $id;
    protected $items;
    protected $resourceId;
    protected $tags;
    protected $title;
    protected $type;
    protected $url;

    
    /**
     * A globally-unique ID of the navigation menu item.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * List of the menu items nested under this item sorted by position.
     *
     * @return ShopifyMenuItem[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    
    /**
     * The ID of the resource to link to.
     *
     * @return string
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    
    /**
     * The menu item's tags to filter a collection.
     *
     * @return string[]
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    
    /**
     * The menu item's title.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The menu item's type.
     *
     * @return string A ShopifyMenuItemTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The menu item's url.
     *
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['items']) && $data['items'] !== null) {
                $instance->items = array_map(function($item) { return ShopifyMenuItem::fromArray($item); }, $data['items']);
            }
            if (isset($data['resourceId']) && $data['resourceId'] !== null) {
                $instance->resourceId = $data['resourceId'];
            }
            if (isset($data['tags']) && $data['tags'] !== null) {
                $instance->tags = $data['tags'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['url']) && $data['url'] !== null) {
                $instance->url = $data['url'];
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->items !== null) {
                $data['items'] = array_map(function($item) { return $item->asArray(); }, $this->items);
            }
            if ($this->resourceId !== null) {
                $data['resourceId'] = $this->resourceId;
            }
            if ($this->tags !== null) {
                $data['tags'] = $this->tags;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->url !== null) {
                $data['url'] = $this->url;
            }
            return $data;
        }
}
