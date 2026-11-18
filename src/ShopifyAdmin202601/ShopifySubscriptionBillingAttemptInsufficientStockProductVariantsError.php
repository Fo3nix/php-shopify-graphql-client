<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyProductVariantConnection;

/**
 * An inventory error caused by an issue with one or more of the contract merchandise lines.
 */
class ShopifySubscriptionBillingAttemptInsufficientStockProductVariantsError implements ShopifySubscriptionBillingAttemptProcessingError
{
    protected $code;
    protected $insufficientStockProductVariants;
    protected $message;

    
    /**
     * The code for the error.
     *
     * @return string A ShopifySubscriptionBillingAttemptErrorCodeEnumObject value
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * A list of product variants that caused the insufficient inventory error.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getInsufficientStockProductVariants(): ?ShopifyProductVariantConnection
    {
        return $this->insufficientStockProductVariants;
    }

    
    /**
     * An explanation of the error.
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
            if (isset($data['code']) && $data['code'] !== null) {
                $instance->code = $data['code'];
            }
            if (isset($data['insufficientStockProductVariants']) && $data['insufficientStockProductVariants'] !== null) {
                $instance->insufficientStockProductVariants = ShopifyProductVariantConnection::fromArray($data['insufficientStockProductVariants']);
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
            if ($this->code !== null) {
                $data['code'] = $this->code;
            }
            if ($this->insufficientStockProductVariants !== null) {
                $data['insufficientStockProductVariants'] = $this->insufficientStockProductVariants->asArray();
            }
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            return $data;
        }
}
