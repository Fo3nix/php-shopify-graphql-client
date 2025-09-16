<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

class LineItemSellingPlan
{
    protected $name;
    protected $sellingPlanId;

    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    
    /**
     * @return string
     */
    public function getSellingPlanId()
    {
        return $this->sellingPlanId;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['sellingPlanId']) && $data['sellingPlanId'] !== null) {
                $instance->sellingPlanId = $data['sellingPlanId'];
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
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->sellingPlanId !== null) {
                $data['sellingPlanId'] = $this->sellingPlanId;
            }
            return $data;
        }
}
