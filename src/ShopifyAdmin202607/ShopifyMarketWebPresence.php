<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopLocale;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDomain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarket;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMarketWebPresenceRootUrl;

/**
 * The market’s web presence, which defines its SEO strategy. This can be a different domain
 * (e.g. `example.ca`), subdomain (e.g. `ca.example.com`), or subfolders of the primary
 * domain (e.g. `example.com/en-ca`). Each web presence comprises one or more language
 * variants. If a market does not have its own web presence, it is accessible on the shop’s
 * primary domain via [country
 * selectors](https://shopify.dev/themes/internationalization/multiple-currencies-languages#the-country-selector).
 *
 * Note: while the domain/subfolders defined by a market’s web presence are not applicable to
 * custom storefronts, which must manage their own domains and routing, the languages chosen
 * here do govern [the languages available on the Storefront
 * API](https://shopify.dev/custom-storefronts/internationalization/multiple-languages) for the countries in
 * this market.
 */
class ShopifyMarketWebPresence implements ShopifyNode
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
     * The ShopLocale object for the alternate locales. When a domain is used, these locales will be
     * available as language-specific subfolders. For example, if English is an
     * alternate locale, and `example.ca` is the market’s domain, then
     * `example.ca/en` will load in English.
     *
     * @return ShopifyShopLocale[]
     */
    public function getAlternateLocales(): ?array
    {
        return $this->alternateLocales;
    }

    
    /**
     * The ShopLocale object for the default locale. When a domain is used, this is the locale that will
     * be used when the domain root is accessed. For example, if French is the default locale,
     * and `example.ca` is the market’s domain, then `example.ca` will load in French.
     *
     * @return ShopifyShopLocale
     */
    public function getDefaultLocale(): ?ShopifyShopLocale
    {
        return $this->defaultLocale;
    }

    
    /**
     * The web presence’s domain.
     * This field will be null if `subfolderSuffix` isn't null.
     *
     * @return ShopifyDomain
     */
    public function getDomain(): ?ShopifyDomain
    {
        return $this->domain;
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
     * The associated market. This can be null for a web presence that isn't associated with a market.
     *
     * @return ShopifyMarket
     */
    public function getMarket(): ?ShopifyMarket
    {
        return $this->market;
    }

    
    /**
     * The associated markets for this web presence.
     *
     * @return ShopifyMarketConnection
     */
    public function getMarkets(): ?ShopifyMarketConnection
    {
        return $this->markets;
    }

    
    /**
     * The list of root URLs for each of the web presence’s locales. As of version `2024-04` this value will no longer have a trailing slash.
     *
     * @return ShopifyMarketWebPresenceRootUrl[]
     */
    public function getRootUrls(): ?array
    {
        return $this->rootUrls;
    }

    
    /**
     * The market-specific suffix of the subfolders defined by the web presence. Example: in `/en-us` the subfolder suffix is `us`. This field will be null if `domain` isn't null.
     *
     * @return string
     */
    public function getSubfolderSuffix(): ?string
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
