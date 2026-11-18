<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

/**
 * A new [shipping line](https://shopify.dev/api/admin-graphql/latest/objects/shippingline)
 * added as part of an order edit.
 */
class ShopifyOrderStagedChangeAddShippingLine
{
    protected $phone;
    protected $presentmentTitle;
    protected $price;
    protected $title;

    
    /**
     * The phone number at the shipping address.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The shipping line's title that's shown to the buyer.
     *
     * @return string
     */
    public function getPresentmentTitle(): ?string
    {
        return $this->presentmentTitle;
    }

    
    /**
     * The price that applies to the shipping line.
     *
     * @return ShopifyMoneyV2
     */
    public function getPrice(): ?ShopifyMoneyV2
    {
        return $this->price;
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
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['presentmentTitle']) && $data['presentmentTitle'] !== null) {
                $instance->presentmentTitle = $data['presentmentTitle'];
            }
            if (isset($data['price']) && $data['price'] !== null) {
                $instance->price = ShopifyMoneyV2::fromArray($data['price']);
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
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->presentmentTitle !== null) {
                $data['presentmentTitle'] = $this->presentmentTitle;
            }
            if ($this->price !== null) {
                $data['price'] = $this->price->asArray();
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
