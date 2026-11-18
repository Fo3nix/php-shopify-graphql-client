<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyShopifyFunction;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMetafieldConnection;

/**
 * A fulfillment constraint rule.
 */
class ShopifyFulfillmentConstraintRule implements ShopifyHasMetafields, ShopifyNode
{
    protected $deliveryMethodTypes;
    protected $function;
    protected $id;
    protected $metafield;
    protected $metafields;

    
    /**
     * Delivery method types that the function is associated with.
     *
     * @return string[] ShopifyDeliveryMethodTypeEnumObject values
     */
    public function getDeliveryMethodTypes(): ?array
    {
        return $this->deliveryMethodTypes;
    }

    
    /**
     * The ID for the fulfillment constraint function.
     *
     * @return ShopifyShopifyFunction
     */
    public function getFunction(): ?ShopifyShopifyFunction
    {
        return $this->function;
    }

    
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
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     *
     * @return ShopifyMetafield
     */
    public function getMetafield(): ?ShopifyMetafield
    {
        return $this->metafield;
    }

    
    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     *
     * @return ShopifyMetafieldConnection
     */
    public function getMetafields(): ?ShopifyMetafieldConnection
    {
        return $this->metafields;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['deliveryMethodTypes']) && $data['deliveryMethodTypes'] !== null) {
                $instance->deliveryMethodTypes = $data['deliveryMethodTypes'];
            }
            if (isset($data['function']) && $data['function'] !== null) {
                $instance->function = ShopifyShopifyFunction::fromArray($data['function']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
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
            if ($this->deliveryMethodTypes !== null) {
                $data['deliveryMethodTypes'] = $this->deliveryMethodTypes;
            }
            if ($this->function !== null) {
                $data['function'] = $this->function->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            return $data;
        }
}
