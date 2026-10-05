<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCompanyLocationsCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocationsCondition;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyRegionsCondition;

class ShopifyMarketConditions
{
    protected $companyLocationsCondition;
    protected $conditionTypes;
    protected $locationsCondition;
    protected $regionsCondition;

    
    /**
     * @return ShopifyCompanyLocationsCondition
     */
    public function getCompanyLocationsCondition()
    {
        return $this->companyLocationsCondition;
    }

    
    /**
     * @return ShopifyMarketConditionTypeEnumObject[]
     */
    public function getConditionTypes()
    {
        return $this->conditionTypes;
    }

    
    /**
     * @return ShopifyLocationsCondition
     */
    public function getLocationsCondition()
    {
        return $this->locationsCondition;
    }

    
    /**
     * @return ShopifyRegionsCondition
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
