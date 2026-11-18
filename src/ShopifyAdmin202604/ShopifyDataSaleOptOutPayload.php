<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyDataSaleOptOutUserError;

/**
 * Return type for `dataSaleOptOut` mutation.
 */
class ShopifyDataSaleOptOutPayload
{
    protected $customerId;
    protected $userErrors;

    
    /**
     * The ID of the customer whose email address has been opted out of data sale.
     *
     * @return string
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyDataSaleOptOutUserError[]
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
            if (isset($data['customerId']) && $data['customerId'] !== null) {
                $instance->customerId = $data['customerId'];
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyDataSaleOptOutUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->customerId !== null) {
                $data['customerId'] = $this->customerId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
