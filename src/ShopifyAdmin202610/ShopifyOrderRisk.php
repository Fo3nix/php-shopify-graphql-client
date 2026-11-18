<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Represents a fraud check on an order. This object is deprecated in favor of [OrderRiskAssessment](https://shopify.dev/api/admin-graphql/latest/objects/OrderRiskAssessment) and its enhanced capabilities.
 */
class ShopifyOrderRisk
{
    protected $display;
    protected $level;
    protected $message;

    
    /**
     * Whether the risk level is shown in the Shopify admin. If false, then this order risk is ignored when Shopify determines the overall risk level for the order.
     *
     * @return bool
     */
    public function getDisplay(): ?bool
    {
        return $this->display;
    }

    
    /**
     * The likelihood that an order is fraudulent, based on this order risk. The level can be set by Shopify risk analysis or by an app.
     *
     * @return string A ShopifyOrderRiskLevelEnumObject value
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    
    /**
     * The risk message that's shown to the merchant in the Shopify admin.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['display']) && $data['display'] !== null) {
                $instance->display = $data['display'];
            }
            if (isset($data['level']) && $data['level'] !== null) {
                $instance->level = $data['level'];
            }
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
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
            if ($this->display !== null) {
                $data['display'] = $this->display;
            }
            if ($this->level !== null) {
                $data['level'] = $this->level;
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            return $data;
        }
}
