<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifySubscriptionContractCalculationCadence;

class ShopifySubscriptionContractCalculationMultipleFulfillmentConfig
{
    protected $cadence;
    protected $numberOfFulfillments;

    
    /**
     * @return ShopifySubscriptionContractCalculationCadence
     */
    public function getCadence()
    {
        return $this->cadence;
    }

    
    /**
     * @return int
     */
    public function getNumberOfFulfillments()
    {
        return $this->numberOfFulfillments;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cadence']) && $data['cadence'] !== null) {
                $instance->cadence = ShopifySubscriptionContractCalculationCadence::fromArray($data['cadence']);
            }
            if (isset($data['numberOfFulfillments']) && $data['numberOfFulfillments'] !== null) {
                $instance->numberOfFulfillments = $data['numberOfFulfillments'];
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
            if ($this->cadence !== null) {
                $data['cadence'] = $this->cadence->asArray();
            }
            if ($this->numberOfFulfillments !== null) {
                $data['numberOfFulfillments'] = $this->numberOfFulfillments;
            }
            return $data;
        }
}
