<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountRedeemCode;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\DiscountUserError;

class DiscountRedeemCodeBulkCreationCode
{
    protected $code;
    protected $discountRedeemCode;
    protected $errors;

    
    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    
    /**
     * @return DiscountRedeemCode
     */
    public function getDiscountRedeemCode()
    {
        return $this->discountRedeemCode;
    }

    
    /**
     * @return DiscountUserError[]
     */
    public function getErrors()
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
                $instance->discountRedeemCode = DiscountRedeemCode::fromArray($data['discountRedeemCode']);
            }
            if (isset($data['errors']) && $data['errors'] !== null) {
                $instance->errors = array_map(function($item) { return DiscountUserError::fromArray($item); }, $data['errors']);
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
