<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountRedeemCode;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDiscountUserError;

/**
 * A result of a discount redeem code creation operation created by a bulk creation.
 */
class ShopifyDiscountRedeemCodeBulkCreationCode
{
    protected $code;
    protected $discountRedeemCode;
    protected $errors;

    
    /**
     * The code to use in the discount redeem code creation operation.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    
    /**
     * The successfully created discount redeem code.
     *
     * If the discount redeem code couldn't be created, then this field is `null``.
     *
     * @return ShopifyDiscountRedeemCode
     */
    public function getDiscountRedeemCode(): ?ShopifyDiscountRedeemCode
    {
        return $this->discountRedeemCode;
    }

    
    /**
     * A list of errors that occurred during the creation operation of the discount redeem code.
     *
     * @return ShopifyDiscountUserError[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
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
            if (isset($data['discountRedeemCode']) && $data['discountRedeemCode'] !== null) {
                $instance->discountRedeemCode = ShopifyDiscountRedeemCode::fromArray($data['discountRedeemCode']);
            }
            if (isset($data['errors']) && $data['errors'] !== null) {
                $instance->errors = array_map(function($item) { return ShopifyDiscountUserError::fromArray($item); }, $data['errors']);
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
            if ($this->discountRedeemCode !== null) {
                $data['discountRedeemCode'] = $this->discountRedeemCode->asArray();
            }
            if ($this->errors !== null) {
                $data['errors'] = array_map(function($item) { return $item->asArray(); }, $this->errors);
            }
            return $data;
        }
}
