<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * A customer's computed statistics.
 */
class ShopifyCustomerStatistics
{
    protected $predictedSpendTier;
    protected $rfmGroup;

    
    /**
     * The predicted spend tier of a customer with a shop.
     *
     * @return string A ShopifyCustomerPredictedSpendTierEnumObject value
     */
    public function getPredictedSpendTier(): ?string
    {
        return $this->predictedSpendTier;
    }

    
    /**
     * The RFM (Recency, Frequency, Monetary) group of the customer.
     *
     * @return string A ShopifyCustomerRfmGroupEnumObject value
     */
    public function getRfmGroup(): ?string
    {
        return $this->rfmGroup;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['predictedSpendTier']) && $data['predictedSpendTier'] !== null) {
                $instance->predictedSpendTier = $data['predictedSpendTier'];
            }
            if (isset($data['rfmGroup']) && $data['rfmGroup'] !== null) {
                $instance->rfmGroup = $data['rfmGroup'];
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
            if ($this->predictedSpendTier !== null) {
                $data['predictedSpendTier'] = $this->predictedSpendTier;
            }
            if ($this->rfmGroup !== null) {
                $data['rfmGroup'] = $this->rfmGroup;
            }
            return $data;
        }
}
