<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCompanyAddress;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyBusinessCustomerUserError;

/**
 * Return type for `companyLocationAssignAddress` mutation.
 */
class ShopifyCompanyLocationAssignAddressPayload
{
    protected $addresses;
    protected $userErrors;

    
    /**
     * The list of updated addresses on the company location.
     *
     * @return ShopifyCompanyAddress[]
     */
    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyBusinessCustomerUserError[]
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
            if (isset($data['addresses']) && $data['addresses'] !== null) {
                $instance->addresses = array_map(function($item) { return ShopifyCompanyAddress::fromArray($item); }, $data['addresses']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyBusinessCustomerUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->addresses !== null) {
                $data['addresses'] = array_map(function($item) { return $item->asArray(); }, $this->addresses);
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
