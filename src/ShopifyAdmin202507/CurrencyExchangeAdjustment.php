<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyV2;

class CurrencyExchangeAdjustment
{
    protected $adjustment;
    protected $finalAmountSet;
    protected $id;
    protected $originalAmountSet;

    
    /**
     * @return MoneyV2
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    
    /**
     * @return MoneyV2
     */
    public function getFinalAmountSet()
    {
        return $this->finalAmountSet;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return MoneyV2
     */
    public function getOriginalAmountSet()
    {
        return $this->originalAmountSet;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adjustment']) && $data['adjustment'] !== null) {
                $instance->adjustment = MoneyV2::fromArray($data['adjustment']);
            }
            if (isset($data['finalAmountSet']) && $data['finalAmountSet'] !== null) {
                $instance->finalAmountSet = MoneyV2::fromArray($data['finalAmountSet']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['originalAmountSet']) && $data['originalAmountSet'] !== null) {
                $instance->originalAmountSet = MoneyV2::fromArray($data['originalAmountSet']);
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
            if ($this->adjustment !== null) {
                $data['adjustment'] = $this->adjustment->asArray();
            }
            if ($this->finalAmountSet !== null) {
                $data['finalAmountSet'] = $this->finalAmountSet->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->originalAmountSet !== null) {
                $data['originalAmountSet'] = $this->originalAmountSet->asArray();
            }
            return $data;
        }
}
