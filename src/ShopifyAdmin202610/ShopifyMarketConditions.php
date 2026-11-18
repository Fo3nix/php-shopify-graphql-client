<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyChannelsCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyLocationsCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocationsCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyRegionsCondition;

/**
 * The conditions that determine whether a visitor is in a market.
 */
class ShopifyMarketConditions
{
    protected $channelsCondition;
    protected $companyLocationsCondition;
    protected $conditionTypes;
    protected $locationsCondition;
    protected $regionsCondition;

    
    /**
     * The channel conditions that determine whether a visitor is in the market.
     *
     * @return ShopifyChannelsCondition
     */
    public function getChannelsCondition(): ?ShopifyChannelsCondition
    {
        return $this->channelsCondition;
    }

    
    /**
     * The company location conditions that determine whether a visitor is in the market.
     *
     * @return ShopifyCompanyLocationsCondition
     */
    public function getCompanyLocationsCondition(): ?ShopifyCompanyLocationsCondition
    {
        return $this->companyLocationsCondition;
    }

    
    /**
     * The set of condition types that are defined for the market.
     *
     * @return string[] ShopifyMarketConditionTypeEnumObject values
     */
    public function getConditionTypes(): ?array
    {
        return $this->conditionTypes;
    }

    
    /**
     * The retail location conditions that determine whether a visitor is in the market.
     *
     * @return ShopifyLocationsCondition
     */
    public function getLocationsCondition(): ?ShopifyLocationsCondition
    {
        return $this->locationsCondition;
    }

    
    /**
     * The region conditions that determine whether a visitor is in the market.
     *
     * @return ShopifyRegionsCondition
     */
    public function getRegionsCondition(): ?ShopifyRegionsCondition
    {
        return $this->regionsCondition;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['channelsCondition']) && $data['channelsCondition'] !== null) {
                $instance->channelsCondition = ShopifyChannelsCondition::fromArray($data['channelsCondition']);
            }
            if (isset($data['companyLocationsCondition']) && $data['companyLocationsCondition'] !== null) {
                $instance->companyLocationsCondition = ShopifyCompanyLocationsCondition::fromArray($data['companyLocationsCondition']);
            }
            if (isset($data['conditionTypes']) && $data['conditionTypes'] !== null) {
                $instance->conditionTypes = $data['conditionTypes'];
            }
            if (isset($data['locationsCondition']) && $data['locationsCondition'] !== null) {
                $instance->locationsCondition = ShopifyLocationsCondition::fromArray($data['locationsCondition']);
            }
            if (isset($data['regionsCondition']) && $data['regionsCondition'] !== null) {
                $instance->regionsCondition = ShopifyRegionsCondition::fromArray($data['regionsCondition']);
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
            if ($this->channelsCondition !== null) {
                $data['channelsCondition'] = $this->channelsCondition->asArray();
            }
            if ($this->companyLocationsCondition !== null) {
                $data['companyLocationsCondition'] = $this->companyLocationsCondition->asArray();
            }
            if ($this->conditionTypes !== null) {
                $data['conditionTypes'] = $this->conditionTypes;
            }
            if ($this->locationsCondition !== null) {
                $data['locationsCondition'] = $this->locationsCondition->asArray();
            }
            if ($this->regionsCondition !== null) {
                $data['regionsCondition'] = $this->regionsCondition->asArray();
            }
            return $data;
        }
}
