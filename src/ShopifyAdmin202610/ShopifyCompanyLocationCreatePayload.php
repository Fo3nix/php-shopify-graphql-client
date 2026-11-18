<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCompanyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyBusinessCustomerUserError;

/**
 * Return type for `companyLocationCreate` mutation.
 */
class ShopifyCompanyLocationCreatePayload
{
    protected $companyLocation;
    protected $userErrors;

    
    /**
     * The created company location.
     *
     * @return ShopifyCompanyLocation
     */
    public function getCompanyLocation(): ?ShopifyCompanyLocation
    {
        return $this->companyLocation;
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
            if (isset($data['companyLocation']) && $data['companyLocation'] !== null) {
                $instance->companyLocation = ShopifyCompanyLocation::fromArray($data['companyLocation']);
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
            if ($this->companyLocation !== null) {
                $data['companyLocation'] = $this->companyLocation->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
