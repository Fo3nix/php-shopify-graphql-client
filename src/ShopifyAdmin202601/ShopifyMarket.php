<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketCatalogConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketConditions;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketCurrencySettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketPriceInclusions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketRegionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketWebPresence;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMarketWebPresenceConnection;

/**
 * A merchant-defined group of buyers identified by conditions such as their
 * region, retail location, or company location. Each market allows configuration
 * of a distinct, localized buyer experience. Customizations include, but are
 * not limited to,
 * [currency](https://shopify.dev/api/admin-graphql/current/mutations/marketCurrencySettingsUpdate),
 * [pricing and product availability](https://shopify.dev/apps/internationalization/product-price-lists),
 * [web presence](https://shopify.dev/api/admin-graphql/current/objects/MarketWebPresence),
 * and content translations.
 */
class ShopifyMarket implements ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyNode
{
    protected $assignedCustomization;
    protected $catalogs;
    protected $catalogsCount;
    protected $conditions;
    protected $createdAt;
    protected $currencySettings;
    protected $enabled;
    protected $handle;
    protected $id;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $priceInclusions;
    protected $priceList;
    protected $primary;
    protected $regions;
    protected $status;
    protected $type;
    protected $webPresence;
    protected $webPresences;

    
    /**
     * Whether the market has a customization with the given ID.
     *
     * @return bool
     */
    public function getAssignedCustomization(): ?bool
    {
        return $this->assignedCustomization;
    }

    
    /**
     * The catalogs that belong to the market.
     *
     * @return ShopifyMarketCatalogConnection
     */
    public function getCatalogs(): ?ShopifyMarketCatalogConnection
    {
        return $this->catalogs;
    }

    
    /**
     * The number of catalogs that belong to the market.
     *
     * @return ShopifyCount
     */
    public function getCatalogsCount(): ?ShopifyCount
    {
        return $this->catalogsCount;
    }

    
    /**
     * The conditions under which a visitor is in the market.
     *
     * @return ShopifyMarketConditions
     */
    public function getConditions(): ?ShopifyMarketConditions
    {
        return $this->conditions;
    }

    
    /**
     * The date and time the market was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The market’s currency settings.
     *
     * @return ShopifyMarketCurrencySettings
     */
    public function getCurrencySettings(): ?ShopifyMarketCurrencySettings
    {
        return $this->currencySettings;
    }

    
    /**
     * Whether the market is enabled to receive visitors and sales. **Note**: Regions in inactive
     * markets can't be selected on the storefront or in checkout.
     *
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    
    /**
     * A short, human-readable unique identifier for the market. This is changeable by the merchant.
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
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

    
    /**
     * The name of the market. Not shown to customers.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The inclusive pricing strategy for a market. This determines if prices include duties and / or taxes.
     *
     * @return ShopifyMarketPriceInclusions
     */
    public function getPriceInclusions(): ?ShopifyMarketPriceInclusions
    {
        return $this->priceInclusions;
    }

    
    /**
     * The market’s price list, which specifies a percentage-based price adjustment as well as
     * fixed price overrides for specific variants.
     *
     * Markets with multiple catalogs can have multiple price lists. To query which price lists are connected to
     * a market, please query for price lists through the catalogs connection.
     *
     * @return ShopifyPriceList
     */
    public function getPriceList(): ?ShopifyPriceList
    {
        return $this->priceList;
    }

    
    /**
     * Whether the market is the shop’s primary market.
     *
     * @return bool
     */
    public function getPrimary(): ?bool
    {
        return $this->primary;
    }

    
    /**
     * The regions that comprise the market.
     *
     * @return ShopifyMarketRegionConnection
     */
    public function getRegions(): ?ShopifyMarketRegionConnection
    {
        return $this->regions;
    }

    
    /**
     * Status of the market. Replaces the enabled field.
     *
     * @return string A ShopifyMarketStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The type of the market.
     *
     * @return string A ShopifyMarketTypeEnumObject value
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    
    /**
     * The market’s web presence, which defines its SEO strategy. This can be a different domain,
     * subdomain, or subfolders of the primary domain. Each web presence comprises one or more
     * language variants. If a market doesn't have its own web presence, then the market is accessible on the
     * primary market's domains using [country
     * selectors](https://shopify.dev/themes/internationalization/multiple-currencies-languages#the-country-selector).
     * If it's the primary market and it has multiple web presences, then this field will return the primary domain web presence.
     *
     * @return ShopifyMarketWebPresence
     */
    public function getWebPresence(): ?ShopifyMarketWebPresence
    {
        return $this->webPresence;
    }

    
    /**
     * The market’s web presences, which defines its SEO strategy. This can be a different domain,
     * subdomain, or subfolders of the primary domain. Each web presence comprises one or more
     * language variants. If a market doesn't have any web presences, then the market is accessible on the
     * primary market's domains using [country
     * selectors](https://shopify.dev/themes/internationalization/multiple-currencies-languages#the-country-selector).
     *
     * @return ShopifyMarketWebPresenceConnection
     */
    public function getWebPresences(): ?ShopifyMarketWebPresenceConnection
    {
        return $this->webPresences;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['assignedCustomization']) && $data['assignedCustomization'] !== null) {
                $instance->assignedCustomization = $data['assignedCustomization'];
            }
            if (isset($data['catalogs']) && $data['catalogs'] !== null) {
                $instance->catalogs = ShopifyMarketCatalogConnection::fromArray($data['catalogs']);
            }
            if (isset($data['catalogsCount']) && $data['catalogsCount'] !== null) {
                $instance->catalogsCount = ShopifyCount::fromArray($data['catalogsCount']);
            }
            if (isset($data['conditions']) && $data['conditions'] !== null) {
                $instance->conditions = ShopifyMarketConditions::fromArray($data['conditions']);
            }
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['currencySettings']) && $data['currencySettings'] !== null) {
                $instance->currencySettings = ShopifyMarketCurrencySettings::fromArray($data['currencySettings']);
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
            }
            if (isset($data['handle']) && $data['handle'] !== null) {
                $instance->handle = $data['handle'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['priceInclusions']) && $data['priceInclusions'] !== null) {
                $instance->priceInclusions = ShopifyMarketPriceInclusions::fromArray($data['priceInclusions']);
            }
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = ShopifyPriceList::fromArray($data['priceList']);
            }
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = $data['primary'];
            }
            if (isset($data['regions']) && $data['regions'] !== null) {
                $instance->regions = ShopifyMarketRegionConnection::fromArray($data['regions']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['webPresence']) && $data['webPresence'] !== null) {
                $instance->webPresence = ShopifyMarketWebPresence::fromArray($data['webPresence']);
            }
            if (isset($data['webPresences']) && $data['webPresences'] !== null) {
                $instance->webPresences = ShopifyMarketWebPresenceConnection::fromArray($data['webPresences']);
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
            if ($this->assignedCustomization !== null) {
                $data['assignedCustomization'] = $this->assignedCustomization;
            }
            if ($this->catalogs !== null) {
                $data['catalogs'] = $this->catalogs->asArray();
            }
            if ($this->catalogsCount !== null) {
                $data['catalogsCount'] = $this->catalogsCount->asArray();
            }
            if ($this->conditions !== null) {
                $data['conditions'] = $this->conditions->asArray();
            }
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->currencySettings !== null) {
                $data['currencySettings'] = $this->currencySettings->asArray();
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            if ($this->handle !== null) {
                $data['handle'] = $this->handle;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->priceInclusions !== null) {
                $data['priceInclusions'] = $this->priceInclusions->asArray();
            }
            if ($this->priceList !== null) {
                $data['priceList'] = $this->priceList->asArray();
            }
            if ($this->primary !== null) {
                $data['primary'] = $this->primary;
            }
            if ($this->regions !== null) {
                $data['regions'] = $this->regions->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
            }
            if ($this->type !== null) {
                $data['type'] = $this->type;
            }
            if ($this->webPresence !== null) {
                $data['webPresence'] = $this->webPresence->asArray();
            }
            if ($this->webPresences !== null) {
                $data['webPresences'] = $this->webPresences->asArray();
            }
            return $data;
        }
}
