<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyApp;

/**
 * A discount code of a price rule.
 */
class ShopifyPriceRuleDiscountCode implements ShopifyNode
{
    protected $app;
    protected $code;
    protected $id;
    protected $usageCount;

    
    /**
     * The application that created the discount code.
     *
     * @return ShopifyApp
     */
    public function getApp(): ?ShopifyApp
    {
        return $this->app;
    }

    
    /**
     * The code to apply the discount.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
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
     * The number of times that the price rule has been used. This value is updated asynchronously and can be different than the actual usage count.
     *
     * @return int
     */
    public function getUsageCount(): ?int
    {
        return $this->usageCount;
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
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['usageCount']) && $data['usageCount'] !== null) {
                $instance->usageCount = $data['usageCount'];
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->usageCount !== null) {
                $data['usageCount'] = $this->usageCount;
            }
            return $data;
        }
}
