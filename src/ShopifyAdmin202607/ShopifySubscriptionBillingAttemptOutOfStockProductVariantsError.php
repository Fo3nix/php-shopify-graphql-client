<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyProductVariantConnection;

/**
 * An inventory error caused by an issue with one or more of the contract merchandise lines.
 */
class ShopifySubscriptionBillingAttemptOutOfStockProductVariantsError implements ShopifySubscriptionBillingAttemptProcessingError
{
    protected $code;
    protected $message;
    protected $outOfStockProductVariants;

    
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
     * An explanation of the error.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    
    /**
     * A list of responsible product variants.
     *
     * @return ShopifyProductVariantConnection
     */
    public function getOutOfStockProductVariants(): ?ShopifyProductVariantConnection
    {
        return $this->outOfStockProductVariants;
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
            if (isset($data['message']) && $data['message'] !== null) {
                $instance->message = $data['message'];
            }
            if (isset($data['outOfStockProductVariants']) && $data['outOfStockProductVariants'] !== null) {
                $instance->outOfStockProductVariants = ShopifyProductVariantConnection::fromArray($data['outOfStockProductVariants']);
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
            if ($this->message !== null) {
                $data['message'] = $this->message;
            }
            if ($this->outOfStockProductVariants !== null) {
                $data['outOfStockProductVariants'] = $this->outOfStockProductVariants->asArray();
            }
            return $data;
        }
}
