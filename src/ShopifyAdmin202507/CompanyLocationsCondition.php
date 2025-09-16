<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\CompanyLocationConnection;

class CompanyLocationsCondition
{
    protected $applicationLevel;
    protected $companyLocations;

    
    /**
     * @return MarketConditionApplicationTypeEnumObject
     */
    public function getApplicationLevel()
    {
        return $this->applicationLevel;
    }

    
    /**
     * @return CompanyLocationConnection
     */
    public function getCompanyLocations()
    {
        return $this->companyLocations;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['applicationLevel']) && $data['applicationLevel'] !== null) {
                $instance->applicationLevel = $data['applicationLevel'];
            }
            if (isset($data['companyLocations']) && $data['companyLocations'] !== null) {
                $instance->companyLocations = CompanyLocationConnection::fromArray($data['companyLocations']);
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
            if ($this->applicationLevel !== null) {
                $data['applicationLevel'] = $this->applicationLevel;
            }
            if ($this->companyLocations !== null) {
                $data['companyLocations'] = $this->companyLocations->asArray();
            }
            return $data;
        }
}
