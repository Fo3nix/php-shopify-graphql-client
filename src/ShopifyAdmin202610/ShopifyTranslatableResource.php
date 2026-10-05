<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTranslatableResourceConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTranslatableContent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyTranslation;

class ShopifyTranslatableResource
{
    protected $nestedTranslatableResources;
    protected $resourceId;
    protected $translatableContent;
    protected $translations;

    
    /**
     * @return ShopifyTranslatableResourceConnection
     */
    public function getNestedTranslatableResources()
    {
        return $this->nestedTranslatableResources;
    }

    
    /**
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    
    /**
     * @return ShopifyTranslatableContent[]
     */
    public function getTranslatableContent()
    {
        return $this->translatableContent;
    }

    
    /**
     * @return ShopifyTranslation[]
     */
    public function getTranslations()
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
            if (isset($data['nestedTranslatableResources']) && $data['nestedTranslatableResources'] !== null) {
                $instance->nestedTranslatableResources = ShopifyTranslatableResourceConnection::fromArray($data['nestedTranslatableResources']);
            }
            if (isset($data['resourceId']) && $data['resourceId'] !== null) {
                $instance->resourceId = $data['resourceId'];
            }
            if (isset($data['translatableContent']) && $data['translatableContent'] !== null) {
                $instance->translatableContent = array_map(function($item) { return ShopifyTranslatableContent::fromArray($item); }, $data['translatableContent']);
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
            if ($this->nestedTranslatableResources !== null) {
                $data['nestedTranslatableResources'] = $this->nestedTranslatableResources->asArray();
            }
            if ($this->resourceId !== null) {
                $data['resourceId'] = $this->resourceId;
            }
            if ($this->translatableContent !== null) {
                $data['translatableContent'] = array_map(function($item) { return $item->asArray(); }, $this->translatableContent);
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            return $data;
        }
}
