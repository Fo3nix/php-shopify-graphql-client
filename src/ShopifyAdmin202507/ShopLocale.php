<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketWebPresence;

class ShopLocale
{
    protected $locale;
    protected $marketWebPresences;
    protected $name;
    protected $primary;
    protected $published;

    
    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    
    /**
     * @return MarketWebPresence[]
     */
    public function getMarketWebPresences()
    {
        return $this->marketWebPresences;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    
    /**
     * @return bool
     */
    public function getPublished()
    {
        return $this->published;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['marketWebPresences']) && $data['marketWebPresences'] !== null) {
                $instance->marketWebPresences = array_map(function($item) { return MarketWebPresence::fromArray($item); }, $data['marketWebPresences']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = $data['primary'];
            }
            if (isset($data['published']) && $data['published'] !== null) {
                $instance->published = $data['published'];
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
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->marketWebPresences !== null) {
                $data['marketWebPresences'] = array_map(function($item) { return $item->asArray(); }, $this->marketWebPresences);
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->primary !== null) {
                $data['primary'] = $this->primary;
            }
            if ($this->published !== null) {
                $data['published'] = $this->published;
            }
            return $data;
        }
}
