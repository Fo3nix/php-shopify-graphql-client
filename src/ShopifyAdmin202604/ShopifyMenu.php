<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMenuItem;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyTranslation;

/**
 * Navigation menus that organize links into logical structures to guide customers through a store. Menus serve as the backbone of store navigation, making it easy for customers to find products, pages, and other content through organized hierarchical links.
 *
 * For example, a merchant might create a main navigation menu with top-level categories like "Products," "About Us," and "Contact," where each category can contain nested menu items linking to specific collections, pages, or external resources.
 *
 * Use the `Menu` object to:
 * - Build and customize store navigation structures
 * - Organize hierarchical menu systems with nested items
 * - Work with default menus that can't be deleted
 * - Access menu items for building navigation
 *
 * Menus can be designated as default navigation elements (like main menu or footer), which can't be deleted and have restricted handle updates. The handle provides a unique identifier that themes can reference, while the items collection enables nested navigation structures.
 *
 * Each menu contains menu items that can link to various resource types. This flexibility lets merchants create navigation experiences that guide customers through their store.
 */
class ShopifyMenu implements ShopifyHasPublishedTranslations, ShopifyNode
{
    protected $createdAt;
    protected $handle;
    protected $id;
    protected $isDefault;
    protected $items;
    protected $title;
    protected $translations;

    
    /**
     * The date and time when the menu was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The menu's handle.
     *
     * @return string
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * Whether the menu is a default. The handle for default menus can't be updated and default menus can't be deleted.
     *
     * @return bool
     */
    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    
    /**
     * A list of items on the menu sorted by position.
     *
     * @return ShopifyMenuItem[]
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    
    /**
     * The menu's title.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['isDefault']) && $data['isDefault'] !== null) {
                $instance->isDefault = $data['isDefault'];
            }
            if (isset($data['items']) && $data['items'] !== null) {
                $instance->items = array_map(function($item) { return ShopifyMenuItem::fromArray($item); }, $data['items']);
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->isDefault !== null) {
                $data['isDefault'] = $this->isDefault;
            }
            if ($this->items !== null) {
                $data['items'] = array_map(function($item) { return $item->asArray(); }, $this->items);
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
