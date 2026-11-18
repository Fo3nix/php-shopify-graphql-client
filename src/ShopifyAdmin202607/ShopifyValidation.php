<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFunctionsErrorHistory;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafield;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldDefinitionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMetafieldConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyShopifyFunction;

/**
 * A server-side validation that enforces business rules before customers complete their purchases. Each validation links to a [`ShopifyFunction`](https://shopify.dev/docs/api/functions/latest/cart-and-checkout-validation) that implements the validation logic.
 *
 * Validations run on Shopify's servers and are enforced throughout the checkout process. Validation errors always block checkout progress. The `blockOnFailure` setting determines whether runtime exceptions, like timeouts, also block checkout. Tracks runtime exception history for the validation function and supports custom data through [`Metafield`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Metafield) objects.
 */
class ShopifyValidation implements ShopifyHasMetafieldDefinitions, ShopifyHasMetafields, ShopifyNode
{
    protected $blockOnFailure;
    protected $enabled;
    protected $errorHistory;
    protected $id;
    protected $metafield;
    protected $metafieldDefinitions;
    protected $metafields;
    protected $shopifyFunction;
    protected $title;

    
    /**
     * Whether the validation should block on failures other than expected violations.
     *
     * @return bool
     */
    public function getBlockOnFailure(): ?bool
    {
        return $this->blockOnFailure;
    }

    
    /**
     * Whether the validation is enabled on the merchant checkout.
     *
     * @return bool
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    
    /**
     * The error history on the most recent version of the validation function.
     *
     * @return ShopifyFunctionsErrorHistory
     */
    public function getErrorHistory(): ?ShopifyFunctionsErrorHistory
    {
        return $this->errorHistory;
    }

    
    /**
     * Global ID for the validation.
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
     * List of metafield definitions.
     *
     * @return ShopifyMetafieldDefinitionConnection
     */
    public function getMetafieldDefinitions(): ?ShopifyMetafieldDefinitionConnection
    {
        return $this->metafieldDefinitions;
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
     * The Shopify Function implementing the validation.
     *
     * @return ShopifyShopifyFunction
     */
    public function getShopifyFunction(): ?ShopifyShopifyFunction
    {
        return $this->shopifyFunction;
    }

    
    /**
     * The merchant-facing validation name.
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
            if (isset($data['blockOnFailure']) && $data['blockOnFailure'] !== null) {
                $instance->blockOnFailure = $data['blockOnFailure'];
            }
            if (isset($data['enabled']) && $data['enabled'] !== null) {
                $instance->enabled = $data['enabled'];
            }
            if (isset($data['errorHistory']) && $data['errorHistory'] !== null) {
                $instance->errorHistory = ShopifyFunctionsErrorHistory::fromArray($data['errorHistory']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['metafield']) && $data['metafield'] !== null) {
                $instance->metafield = ShopifyMetafield::fromArray($data['metafield']);
            }
            if (isset($data['metafieldDefinitions']) && $data['metafieldDefinitions'] !== null) {
                $instance->metafieldDefinitions = ShopifyMetafieldDefinitionConnection::fromArray($data['metafieldDefinitions']);
            }
            if (isset($data['metafields']) && $data['metafields'] !== null) {
                $instance->metafields = ShopifyMetafieldConnection::fromArray($data['metafields']);
            }
            if (isset($data['shopifyFunction']) && $data['shopifyFunction'] !== null) {
                $instance->shopifyFunction = ShopifyShopifyFunction::fromArray($data['shopifyFunction']);
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
            if ($this->blockOnFailure !== null) {
                $data['blockOnFailure'] = $this->blockOnFailure;
            }
            if ($this->enabled !== null) {
                $data['enabled'] = $this->enabled;
            }
            if ($this->errorHistory !== null) {
                $data['errorHistory'] = $this->errorHistory->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->metafield !== null) {
                $data['metafield'] = $this->metafield->asArray();
            }
            if ($this->metafieldDefinitions !== null) {
                $data['metafieldDefinitions'] = $this->metafieldDefinitions->asArray();
            }
            if ($this->metafields !== null) {
                $data['metafields'] = $this->metafields->asArray();
            }
            if ($this->shopifyFunction !== null) {
                $data['shopifyFunction'] = $this->shopifyFunction->asArray();
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
