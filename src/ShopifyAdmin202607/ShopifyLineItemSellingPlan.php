<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

/**
 * Represents the selling plan for a line item.
 */
class ShopifyLineItemSellingPlan
{
    protected $name;
    protected $sellingPlanId;

    
    /**
     * The name of the selling plan for display purposes.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The ID of the selling plan associated with the line item.
     *
     * @return string
     */
    public function getSellingPlanId(): ?string
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
