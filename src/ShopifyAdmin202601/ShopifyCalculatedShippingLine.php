<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyBag;

/**
 * A shipping line item involved in order editing that may be newly added or have new changes applied.
 */
class ShopifyCalculatedShippingLine
{
    protected $id;
    protected $price;
    protected $stagedStatus;
    protected $title;

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The price of the shipping line when sold and before applying discounts. This field includes taxes if `Order.taxesIncluded` is true. Otherwise, this field doesn't include taxes for the shipping line.
     *
     * @return ShopifyMoneyBag
     */
    public function getPrice(): ?ShopifyMoneyBag
    {
        return $this->price;
    }

    
    /**
     * The staged status of the shipping line.
     *
     * @return string A ShopifyCalculatedShippingLineStagedStatusEnumObject value
     */
    public function getStagedStatus(): ?string
    {
        return $this->stagedStatus;
    }

    
    /**
     * The title of the shipping line.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyBag::fromArray($data['price']);
            }
            if (isset($data['stagedStatus']) && $data['stagedStatus'] !== null) {
                $instance->stagedStatus = $data['stagedStatus'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->stagedStatus !== null) {
                $data['stagedStatus'] = $this->stagedStatus;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
