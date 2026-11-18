<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyFunctionsAppBridge;

/**
 * The details about the app extension that's providing the
 * [discount type](https://help.shopify.com/manual/discounts/discount-types).
 * This information includes the app extension's name and
 * [client ID](https://shopify.dev/docs/apps/build/authentication-authorization/client-secrets),
 * [App Bridge configuration](https://shopify.dev/docs/api/app-bridge),
 * [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations),
 * [function ID](https://shopify.dev/docs/apps/build/functions/input-output/metafields-for-input-queries),
 * and other metadata about the discount type, including the discount type's name and description.
 */
class ShopifyAppDiscountType
{
    protected $app;
    protected $appBridge;
    protected $appKey;
    protected $description;
    protected $discountClass;
    protected $discountClasses;
    protected $functionId;
    protected $targetType;
    protected $title;

    
    /**
     * The name of the app extension that's providing the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types).
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The [App Bridge configuration](https://shopify.dev/docs/api/app-bridge)
     * for the [discount type](https://help.shopify.com/manual/discounts/discount-types).
     *
     * @return ShopifyFunctionsAppBridge
     */
    public function getAppBridge(): ?ShopifyFunctionsAppBridge
    {
        return $this->appBridge;
    }

    
    /**
     * The [client ID](https://shopify.dev/docs/apps/build/authentication-authorization/client-secrets)
     * of the app extension that's providing the [discount type](https://help.shopify.com/manual/discounts/discount-types).
     *
     * @return string
     */
    public function getAppKey(): ?string
    {
        return $this->appKey;
    }

    
    /**
     * A description of the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types)
     * provided by the app extension.
     *
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    
    /**
     * The [discount class](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that's used to control how discounts can be combined.
     *
     * @return string A ShopifyDiscountClassEnumObject value
     */
    public function getDiscountClass(): ?string
    {
        return $this->discountClass;
    }

    
    /**
     * The list of [discount classes](https://help.shopify.com/manual/discounts/combining-discounts/discount-combinations)
     * that this app extension supports.
     *
     * @return string[] ShopifyDiscountClassEnumObject values
     */
    public function getDiscountClasses(): ?array
    {
        return $this->discountClasses;
    }

    
    /**
     * The
     * [function ID](https://shopify.dev/docs/apps/build/functions/input-output/metafields-for-input-queries)
     * associated with the app extension providing the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types).
     *
     * @return string
     */
    public function getFunctionId(): ?string
    {
        return $this->functionId;
    }

    
    /**
     * The type of line item on an order that the
     * [discount type](https://help.shopify.com/manual/discounts/discount-types) applies to.
     * Valid values: `SHIPPING_LINE` and `LINE_ITEM`.
     *
     * @return string A ShopifyDiscountApplicationTargetTypeEnumObject value
     */
    public function getTargetType(): ?string
    {
        return $this->targetType;
    }

    
    /**
     * The name of the [discount type](https://help.shopify.com/manual/discounts/discount-types)
     * that the app extension is providing.
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
            if (isset($data['app']) && $data['app'] !== null) {
                $instance->app = ShopifyApp::fromArray($data['app']);
            }
            if (isset($data['appBridge']) && $data['appBridge'] !== null) {
                $instance->appBridge = ShopifyFunctionsAppBridge::fromArray($data['appBridge']);
            }
            if (isset($data['appKey']) && $data['appKey'] !== null) {
                $instance->appKey = $data['appKey'];
            }
            if (isset($data['description']) && $data['description'] !== null) {
                $instance->description = $data['description'];
            }
            if (isset($data['discountClass']) && $data['discountClass'] !== null) {
                $instance->discountClass = $data['discountClass'];
            }
            if (isset($data['discountClasses']) && $data['discountClasses'] !== null) {
                $instance->discountClasses = $data['discountClasses'];
            }
            if (isset($data['functionId']) && $data['functionId'] !== null) {
                $instance->functionId = $data['functionId'];
            }
            if (isset($data['targetType']) && $data['targetType'] !== null) {
                $instance->targetType = $data['targetType'];
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
            if ($this->app !== null) {
                $data['app'] = $this->app->asArray();
            }
            if ($this->appBridge !== null) {
                $data['appBridge'] = $this->appBridge->asArray();
            }
            if ($this->appKey !== null) {
                $data['appKey'] = $this->appKey;
            }
            if ($this->description !== null) {
                $data['description'] = $this->description;
            }
            if ($this->discountClass !== null) {
                $data['discountClass'] = $this->discountClass;
            }
            if ($this->discountClasses !== null) {
                $data['discountClasses'] = $this->discountClasses;
            }
            if ($this->functionId !== null) {
                $data['functionId'] = $this->functionId;
            }
            if ($this->targetType !== null) {
                $data['targetType'] = $this->targetType;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
