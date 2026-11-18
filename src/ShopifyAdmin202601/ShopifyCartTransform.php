<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMetafieldConnection;

/**
 * A deployed cart transformation function that actively modifies how products appear and behave in customer carts. Cart transforms enable sophisticated merchandising strategies by programmatically merging, expanding, or updating cart line items based on custom business logic.
 *
 * Use the `CartTransform` object to:
 * - Monitor active bundling and cart modification logic
 * - Track transform function deployment status and configuration
 * - Manage error handling behavior for cart processing failures
 * - Coordinate multiple transforms when running complex merchandising strategies
 * - Analyze transform performance and customer interaction patterns
 *
 * Each cart transform links to a specific [Shopify Function](https://shopify.dev/docs/apps/build/functions) that contains the actual cart modification logic. The `blockOnFailure` setting determines whether cart processing should halt when the transform encounters errors, or whether it should allow customers to proceed with unmodified carts. This flexibility ensures merchants can balance feature richness with checkout reliability.
 *
 * Transform functions operate during cart updates, product additions, and checkout initiation, providing multiple touchpoints to enhance the shopping experience. They integrate seamlessly with existing cart APIs while extending functionality beyond standard product catalog capabilities.
 *
 * The function ID connects to your deployed function code, while the configuration settings control how the transform behaves in different scenarios. Multiple transforms can work together, processing cart modifications in sequence to support complex merchandising workflows.
 *
 * Learn more about [customized bundles](https://shopify.dev/docs/apps/selling-strategies/bundles/add-a-customized-bundle), and about the [Cart Transform Function API](https://shopify.dev/docs/api/functions/latest/cart-transform).
 */
class ShopifyCartTransform implements ShopifyHasMetafields, ShopifyNode
{
    protected $blockOnFailure;
    protected $functionId;
    protected $id;
    protected $metafield;
    protected $metafields;

    
    /**
     * Whether a run failure will block cart and checkout operations.
     *
     * @return bool
     */
    public function getBlockOnFailure(): ?bool
    {
        return $this->blockOnFailure;
    }

    
    /**
     * The ID for the Cart Transform function.
     *
     * @return string
     */
    public function getFunctionId(): ?string
    {
        return $this->functionId;
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
            if (isset($data['blockOnFailure']) && $data['blockOnFailure'] !== null) {
                $instance->blockOnFailure = $data['blockOnFailure'];
            }
            if (isset($data['functionId']) && $data['functionId'] !== null) {
                $instance->functionId = $data['functionId'];
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
            if ($this->blockOnFailure !== null) {
                $data['blockOnFailure'] = $this->blockOnFailure;
            }
            if ($this->functionId !== null) {
                $data['functionId'] = $this->functionId;
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
