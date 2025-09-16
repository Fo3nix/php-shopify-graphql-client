<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyLocationsCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\LocationsCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\RegionsCondition;

class MarketConditions
{
    protected $companyLocationsCondition;
    protected $conditionTypes;
    protected $locationsCondition;
    protected $regionsCondition;

    
    /**
     * @return CompanyLocationsCondition
     */
    public function getCompanyLocationsCondition()
    {
        return $this->companyLocationsCondition;
    }

    
    /**
     * @return MarketConditionTypeEnumObject[]
     */
    public function getConditionTypes()
    {
        return $this->conditionTypes;
    }

    
    /**
     * @return LocationsCondition
     */
    public function getLocationsCondition()
    {
        return $this->locationsCondition;
    }

    
    /**
     * @return RegionsCondition
     */
    public function getRegionsCondition()
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
            if (isset($data['companyLocationsCondition']) && $data['companyLocationsCondition'] !== null) {
                $instance->companyLocationsCondition = CompanyLocationsCondition::fromArray($data['companyLocationsCondition']);
            }
            if (isset($data['conditionTypes']) && $data['conditionTypes'] !== null) {
                $instance->conditionTypes = $data['conditionTypes'];
            }
            if (isset($data['locationsCondition']) && $data['locationsCondition'] !== null) {
                $instance->locationsCondition = LocationsCondition::fromArray($data['locationsCondition']);
            }
            if (isset($data['regionsCondition']) && $data['regionsCondition'] !== null) {
                $instance->regionsCondition = RegionsCondition::fromArray($data['regionsCondition']);
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
