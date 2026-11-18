<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMarketWebPresence;

/**
 * A locale that's been enabled on a shop.
 */
class ShopifyShopLocale
{
    protected $locale;
    protected $marketWebPresences;
    protected $name;
    protected $primary;
    protected $published;

    
    /**
     * The locale ISO code.
     *
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    
    /**
     * The market web presences that use the locale.
     *
     * @return ShopifyMarketWebPresence[]
     */
    public function getMarketWebPresences(): ?array
    {
        return $this->marketWebPresences;
    }

    
    /**
     * The human-readable locale name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * Whether the locale is the default locale for the shop.
     *
     * @return bool
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    
    /**
     * Whether the locale is visible to buyers.
     *
     * @return bool
     */
    public function getPublished(): ?bool
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
                $instance->marketWebPresences = array_map(function($item) { return ShopifyMarketWebPresence::fromArray($item); }, $data['marketWebPresences']);
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
