<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class MarketingBudget
{
    protected $budgetType;
    protected $total;

    
    /**
     * @return MarketingBudgetBudgetTypeEnumObject
     */
    public function getBudgetType()
    {
        return $this->budgetType;
    }

    
    /**
     * @return MoneyV2
     */
    public function getTotal()
    {
        return $this->total;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['budgetType']) && $data['budgetType'] !== null) {
                $instance->budgetType = $data['budgetType'];
            }
            if (isset($data['total']) && $data['total'] !== null) {
                $instance->total = MoneyV2::fromArray($data['total']);
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
            if ($this->budgetType !== null) {
                $data['budgetType'] = $this->budgetType;
            }
            if ($this->total !== null) {
                $data['total'] = $this->total->asArray();
            }
            return $data;
        }
}
