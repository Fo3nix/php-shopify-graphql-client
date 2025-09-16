<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketCatalogConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Count;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketConditions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketCurrencySettings;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\Metafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketPriceInclusions;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\PriceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketRegionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketWebPresence;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MarketWebPresenceConnection;

class Market
{
    protected $assignedCustomization;
    protected $catalogs;
    protected $catalogsCount;
    protected $conditions;
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
     * @return bool
     */
    public function getAssignedCustomization()
    {
        return $this->assignedCustomization;
    }

    
    /**
     * @return MarketCatalogConnection
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }

    
    /**
     * @return Count
     */
    public function getCatalogsCount()
    {
        return $this->catalogsCount;
    }

    
    /**
     * @return MarketConditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    
    /**
     * @return MarketCurrencySettings
     */
    public function getCurrencySettings()
    {
        return $this->currencySettings;
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
     * @return Metafield
     */
    public function getMetafield()
    {
        return $this->metafield;
    }

    
    /**
     * @return MetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions()
    {
        return $this->metafieldDefinitions;
    }

    
    /**
     * @return MetafieldConnection
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
     * @return MarketPriceInclusions
     */
    public function getPriceInclusions()
    {
        return $this->priceInclusions;
    }

    
    /**
     * @return PriceList
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
     * @return MarketRegionConnection
     */
    public function getRegions()
    {
        return $this->regions;
    }

    
    /**
     * @return MarketStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
    }

    
    /**
     * @return MarketTypeEnumObject
     */
    public function getType()
    {
        return $this->type;
    }

    
    /**
     * @return MarketWebPresence
     */
    public function getWebPresence()
    {
        return $this->webPresence;
    }

    
    /**
     * @return MarketWebPresenceConnection
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
                $instance->catalogs = MarketCatalogConnection::fromArray($data['catalogs']);
            }
            if (isset($data['catalogsCount']) && $data['catalogsCount'] !== null) {
                $instance->catalogsCount = Count::fromArray($data['catalogsCount']);
            }
            if (isset($data['conditions']) && $data['conditions'] !== null) {
                $instance->conditions = MarketConditions::fromArray($data['conditions']);
            }
            if (isset($data['currencySettings']) && $data['currencySettings'] !== null) {
                $instance->currencySettings = MarketCurrencySettings::fromArray($data['currencySettings']);
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
                $instance->metafield = Metafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = MetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = MetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['priceInclusions']) && $data['priceInclusions'] !== null) {
                $instance->priceInclusions = MarketPriceInclusions::fromArray($data['priceInclusions']);
            }
            if (isset($data['priceList']) && $data['priceList'] !== null) {
                $instance->priceList = PriceList::fromArray($data['priceList']);
            }
            if (isset($data['primary']) && $data['primary'] !== null) {
                $instance->primary = $data['primary'];
            }
            if (isset($data['regions']) && $data['regions'] !== null) {
                $instance->regions = MarketRegionConnection::fromArray($data['regions']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
            }
            if (isset($data['type']) && $data['type'] !== null) {
                $instance->type = $data['type'];
            }
            if (isset($data['webPresence']) && $data['webPresence'] !== null) {
                $instance->webPresence = MarketWebPresence::fromArray($data['webPresence']);
            }
            if (isset($data['webPresences']) && $data['webPresences'] !== null) {
                $instance->webPresences = MarketWebPresenceConnection::fromArray($data['webPresences']);
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
