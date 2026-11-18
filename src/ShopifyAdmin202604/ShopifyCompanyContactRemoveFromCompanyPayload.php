<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyBusinessCustomerUserError;

/**
 * Return type for `companyContactRemoveFromCompany` mutation.
 */
class ShopifyCompanyContactRemoveFromCompanyPayload
{
    protected $removedCompanyContactId;
    protected $userErrors;

    
    /**
     * The ID of the removed company contact.
     *
     * @return string
     */
    public function getRemovedCompanyContactId(): ?string
    {
        return $this->removedCompanyContactId;
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
            if (isset($data['removedCompanyContactId']) && $data['removedCompanyContactId'] !== null) {
                $instance->removedCompanyContactId = $data['removedCompanyContactId'];
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
            if ($this->removedCompanyContactId !== null) {
                $data['removedCompanyContactId'] = $this->removedCompanyContactId;
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
