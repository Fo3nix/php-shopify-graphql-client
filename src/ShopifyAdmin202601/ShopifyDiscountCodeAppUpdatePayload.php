<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountCodeApp;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyDiscountUserError;

/**
 * Return type for `discountCodeAppUpdate` mutation.
 */
class ShopifyDiscountCodeAppUpdatePayload
{
    protected $codeAppDiscount;
    protected $userErrors;

    
    /**
     * The updated discount that the app provides.
     *
     * @return ShopifyDiscountCodeApp
     */
    public function getCodeAppDiscount(): ?ShopifyDiscountCodeApp
    {
        return $this->codeAppDiscount;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyDiscountUserError[]
     */
    public function getUserErrors(): ?array
    {
        return $this->userErrors;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['codeAppDiscount']) && $data['codeAppDiscount'] !== null) {
                $instance->codeAppDiscount = ShopifyDiscountCodeApp::fromArray($data['codeAppDiscount']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyDiscountUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->codeAppDiscount !== null) {
                $data['codeAppDiscount'] = $this->codeAppDiscount->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
