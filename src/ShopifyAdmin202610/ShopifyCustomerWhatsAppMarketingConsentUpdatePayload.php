<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerPhoneNumber;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCustomerMarketingConsentError;

/**
 * Return type for `customerWhatsAppMarketingConsentUpdate` mutation.
 */
class ShopifyCustomerWhatsAppMarketingConsentUpdatePayload
{
    protected $customerPhoneNumber;
    protected $userErrors;

    
    /**
     * The [customer phone number](https://shopify.dev/docs/api/admin-graphql/latest/objects/CustomerPhoneNumber) with the updated WhatsApp marketing consent information.
     *
     * @return ShopifyCustomerPhoneNumber
     */
    public function getCustomerPhoneNumber(): ?ShopifyCustomerPhoneNumber
    {
        return $this->customerPhoneNumber;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCustomerMarketingConsentError[]
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
            if (isset($data['customerPhoneNumber']) && $data['customerPhoneNumber'] !== null) {
                $instance->customerPhoneNumber = ShopifyCustomerPhoneNumber::fromArray($data['customerPhoneNumber']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCustomerMarketingConsentError::fromArray($item); }, $data['userErrors']);
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
            if ($this->customerPhoneNumber !== null) {
                $data['customerPhoneNumber'] = $this->customerPhoneNumber->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
