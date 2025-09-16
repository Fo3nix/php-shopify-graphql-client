<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MenuItem;

class MenuItem
{
    protected $id;
    protected $items;
    protected $resourceId;
    protected $tags;
    protected $title;
    protected $type;
    protected $url;

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MenuItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    
    /**
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    
    /**
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    
    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    
    /**
     * @return MenuItemTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return string
     */
    public function getUrl()
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
                $instance->items = array_map(function($item) { return MenuItem::fromArray($item); }, $data['items']);
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
