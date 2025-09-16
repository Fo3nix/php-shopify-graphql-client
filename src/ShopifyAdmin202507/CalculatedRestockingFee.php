<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;

class CalculatedRestockingFee
{
    protected $amountSet;
    protected $id;
    protected $percentage;

    
    /**
     * @return MoneyBag
     */
    public function getAmountSet()
    {
        return $this->amountSet;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['amountSet']) && $data['amountSet'] !== null) {
                $instance->amountSet = MoneyBag::fromArray($data['amountSet']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['percentage']) && $data['percentage'] !== null) {
                $instance->percentage = $data['percentage'];
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
            if ($this->amountSet !== null) {
                $data['amountSet'] = $this->amountSet->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->percentage !== null) {
                $data['percentage'] = $this->percentage;
            }
            return $data;
        }
}
