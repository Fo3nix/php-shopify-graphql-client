<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyShopLocale;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyDomain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMarket;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMarketConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202510\ShopifyMarketWebPresenceRootUrl;

class ShopifyMarketWebPresence
{
    protected $alternateLocales;
    protected $defaultLocale;
    protected $domain;
    protected $id;
    protected $market;
    protected $markets;
    protected $rootUrls;
    protected $subfolderSuffix;

    
    /**
     * @return ShopifyShopLocale[]
     */
    public function getAlternateLocales()
    {
        return $this->alternateLocales;
    }

    
    /**
     * @return ShopifyShopLocale
     */
    public function getDefaultLocale()
    {
        return $this->defaultLocale;
    }

    
    /**
     * @return ShopifyDomain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyMarket
     */
    public function getMarket()
    {
        return $this->market;
    }

    
    /**
     * @return ShopifyMarketConnection
     */
    public function getMarkets()
    {
        return $this->markets;
    }

    
    /**
     * @return ShopifyMarketWebPresenceRootUrl[]
     */
    public function getRootUrls()
    {
        return $this->rootUrls;
    }

    
    /**
     * @return string
     */
    public function getSubfolderSuffix()
    {
        return $this->subfolderSuffix;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['alternateLocales']) && $data['alternateLocales'] !== null) {
                $instance->alternateLocales = array_map(function($item) { return ShopifyShopLocale::fromArray($item); }, $data['alternateLocales']);
            }
            if (isset($data['defaultLocale']) && $data['defaultLocale'] !== null) {
                $instance->defaultLocale = ShopifyShopLocale::fromArray($data['defaultLocale']);
            }
            if (isset($data['domain']) && $data['domain'] !== null) {
                $instance->domain = ShopifyDomain::fromArray($data['domain']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['market']) && $data['market'] !== null) {
                $instance->market = ShopifyMarket::fromArray($data['market']);
            }
            if (isset($data['markets']) && $data['markets'] !== null) {
                $instance->markets = ShopifyMarketConnection::fromArray($data['markets']);
            }
            if (isset($data['rootUrls']) && $data['rootUrls'] !== null) {
                $instance->rootUrls = array_map(function($item) { return ShopifyMarketWebPresenceRootUrl::fromArray($item); }, $data['rootUrls']);
            }
            if (isset($data['subfolderSuffix']) && $data['subfolderSuffix'] !== null) {
                $instance->subfolderSuffix = $data['subfolderSuffix'];
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
            if ($this->alternateLocales !== null) {
                $data['alternateLocales'] = array_map(function($item) { return $item->asArray(); }, $this->alternateLocales);
            }
            if ($this->defaultLocale !== null) {
                $data['defaultLocale'] = $this->defaultLocale->asArray();
            }
            if ($this->domain !== null) {
                $data['domain'] = $this->domain->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->market !== null) {
                $data['market'] = $this->market->asArray();
            }
            if ($this->markets !== null) {
                $data['markets'] = $this->markets->asArray();
            }
            if ($this->rootUrls !== null) {
                $data['rootUrls'] = array_map(function($item) { return $item->asArray(); }, $this->rootUrls);
            }
            if ($this->subfolderSuffix !== null) {
                $data['subfolderSuffix'] = $this->subfolderSuffix;
            }
            return $data;
        }
}
