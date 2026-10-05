<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketLocalizableContent;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketLocalization;

class ShopifyMarketLocalizableResource
{
    protected $marketLocalizableContent;
    protected $marketLocalizations;
    protected $resourceId;

    
    /**
     * @return ShopifyMarketLocalizableContent[]
     */
    public function getMarketLocalizableContent()
    {
        return $this->marketLocalizableContent;
    }

    
    /**
     * @return ShopifyMarketLocalization[]
     */
    public function getMarketLocalizations()
    {
        return $this->marketLocalizations;
    }

    
    /**
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['marketLocalizableContent']) && $data['marketLocalizableContent'] !== null) {
                $instance->marketLocalizableContent = array_map(function($item) { return ShopifyMarketLocalizableContent::fromArray($item); }, $data['marketLocalizableContent']);
            }
            if (isset($data['marketLocalizations']) && $data['marketLocalizations'] !== null) {
                $instance->marketLocalizations = array_map(function($item) { return ShopifyMarketLocalization::fromArray($item); }, $data['marketLocalizations']);
            }
            if (isset($data['resourceId']) && $data['resourceId'] !== null) {
                $instance->resourceId = $data['resourceId'];
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
            if ($this->marketLocalizableContent !== null) {
                $data['marketLocalizableContent'] = array_map(function($item) { return $item->asArray(); }, $this->marketLocalizableContent);
            }
            if ($this->marketLocalizations !== null) {
                $data['marketLocalizations'] = array_map(function($item) { return $item->asArray(); }, $this->marketLocalizations);
            }
            if ($this->resourceId !== null) {
                $data['resourceId'] = $this->resourceId;
            }
            return $data;
        }
}
