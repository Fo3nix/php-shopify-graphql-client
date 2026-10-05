<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketCatalogConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCount;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketConditions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketCurrencySettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketDeliveryConfigurations;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyDiscountNodeConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketPriceInclusions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketRegionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyReturnPolicyProfile;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketWebPresence;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMarketWebPresenceConnection;

class ShopifyMarket
{
    protected $assignedCustomization;
    protected $catalogs;
    protected $catalogsCount;
    protected $childMarkets;
    protected $childMarketsCount;
    protected $conditions;
    protected $currencySettings;
    protected $delivery;
    protected $discounts;
    protected $discountsCount;
    protected $enabled;
    protected $handle;
    protected $id;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $name;
    protected $parentMarkets;
    protected $parentMarketsCount;
    protected $priceInclusions;
    protected $priceList;
    protected $primary;
    protected $regions;
    protected $returnPolicyProfile;
    protected $status;
    protected $type;
    protected $webPresence;
    protected $webPresences;

    
    /**
     * @return bool
     */
    public function getAssignedCustomization()
    {
        return $this->assignedCustomization;
    }

    
    /**
     * @return ShopifyMarketCatalogConnection
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getCatalogsCount()
    {
        return $this->catalogsCount;
    }

    
    /**
     * @return ShopifyMarketConnection
     */
    public function getChildMarkets()
    {
        return $this->childMarkets;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getChildMarketsCount()
    {
        return $this->childMarketsCount;
    }

    
    /**
     * @return ShopifyMarketConditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    
    /**
     * @return ShopifyMarketCurrencySettings
     */
    public function getCurrencySettings()
    {
        return $this->currencySettings;
    }

    
    /**
     * @return ShopifyMarketDeliveryConfigurations
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    
    /**
     * @return ShopifyDiscountNodeConnection
     */
    public function getDiscounts()
    {
        return $this->discounts;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getDiscountsCount()
    {
        return $this->discountsCount;
    }

    
    /**
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    
    /**
     * @return string
     */
    public function getHandle()
    {
        return $this->handle;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyMetafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return ShopifyMarketConnection
     */
    public function getParentMarkets()
    {
        return $this->parentMarkets;
    }

    
    /**
     * @return ShopifyCount
     */
    public function getParentMarketsCount()
    {
        return $this->parentMarketsCount;
    }

    
    /**
     * @return ShopifyMarketPriceInclusions
     */
    public function getPriceInclusions()
    {
        return $this->priceInclusions;
    }

    
    /**
     * @return ShopifyPriceList
     */
    public function getPriceList()
    {
        return $this->priceList;
    }

    
    /**
     * @return bool
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    
    /**
     * @return ShopifyMarketRegionConnection
     */
    public function getRegions()
    {
        return $this->regions;
    }

    
    /**
     * @return ShopifyReturnPolicyProfile
     */
    public function getReturnPolicyProfile()
    {
        return $this->returnPolicyProfile;
    }

    
    /**
     * @return ShopifyMarketStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return ShopifyMarketTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return ShopifyMarketWebPresence
     */
    public function getWebPresence()
    {
        return $this->webPresence;
    }

    
    /**
     * @return ShopifyMarketWebPresenceConnection
     */
    public function getWebPresences()
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
            if (isset($data['childMarkets']) && $data['childMarkets'] !== null) {
                $instance->childMarkets = ShopifyMarketConnection::fromArray($data['childMarkets']);
            }
            if (isset($data['childMarketsCount']) && $data['childMarketsCount'] !== null) {
                $instance->childMarketsCount = ShopifyCount::fromArray($data['childMarketsCount']);
            }
            if (isset($data['conditions']) && $data['conditions'] !== null) {
                $instance->conditions = ShopifyMarketConditions::fromArray($data['conditions']);
            }
            if (isset($data['currencySettings']) && $data['currencySettings'] !== null) {
                $instance->currencySettings = ShopifyMarketCurrencySettings::fromArray($data['currencySettings']);
            }
            if (isset($data['delivery']) && $data['delivery'] !== null) {
                $instance->delivery = ShopifyMarketDeliveryConfigurations::fromArray($data['delivery']);
            }
            if (isset($data['discounts']) && $data['discounts'] !== null) {
                $instance->discounts = ShopifyDiscountNodeConnection::fromArray($data['discounts']);
            }
            if (isset($data['discountsCount']) && $data['discountsCount'] !== null) {
                $instance->discountsCount = ShopifyCount::fromArray($data['discountsCount']);
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
            if (isset($data['parentMarkets']) && $data['parentMarkets'] !== null) {
                $instance->parentMarkets = ShopifyMarketConnection::fromArray($data['parentMarkets']);
            }
            if (isset($data['parentMarketsCount']) && $data['parentMarketsCount'] !== null) {
                $instance->parentMarketsCount = ShopifyCount::fromArray($data['parentMarketsCount']);
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
            if (isset($data['returnPolicyProfile']) && $data['returnPolicyProfile'] !== null) {
                $instance->returnPolicyProfile = ShopifyReturnPolicyProfile::fromArray($data['returnPolicyProfile']);
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
            if ($this->childMarkets !== null) {
                $data['childMarkets'] = $this->childMarkets->asArray();
            }
            if ($this->childMarketsCount !== null) {
                $data['childMarketsCount'] = $this->childMarketsCount->asArray();
            }
            if ($this->conditions !== null) {
                $data['conditions'] = $this->conditions->asArray();
            }
            if ($this->currencySettings !== null) {
                $data['currencySettings'] = $this->currencySettings->asArray();
            }
            if ($this->delivery !== null) {
                $data['delivery'] = $this->delivery->asArray();
            }
            if ($this->discounts !== null) {
                $data['discounts'] = $this->discounts->asArray();
            }
            if ($this->discountsCount !== null) {
                $data['discountsCount'] = $this->discountsCount->asArray();
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
            if ($this->parentMarkets !== null) {
                $data['parentMarkets'] = $this->parentMarkets->asArray();
            }
            if ($this->parentMarketsCount !== null) {
                $data['parentMarketsCount'] = $this->parentMarketsCount->asArray();
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
            if ($this->returnPolicyProfile !== null) {
                $data['returnPolicyProfile'] = $this->returnPolicyProfile->asArray();
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
