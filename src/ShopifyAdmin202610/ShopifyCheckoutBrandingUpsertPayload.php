<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutBranding;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutBrandingUpsertUserError;

/**
 * Return type for `checkoutBrandingUpsert` mutation.
 */
class ShopifyCheckoutBrandingUpsertPayload
{
    protected $checkoutBranding;
    protected $userErrors;

    
    /**
     * Returns the new checkout branding settings.
     *
     * @return ShopifyCheckoutBranding
     */
    public function getCheckoutBranding(): ?ShopifyCheckoutBranding
    {
        return $this->checkoutBranding;
    }

    
    /**
     * The list of errors that occurred from executing the mutation.
     *
     * @return ShopifyCheckoutBrandingUpsertUserError[]
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
            if (isset($data['checkoutBranding']) && $data['checkoutBranding'] !== null) {
                $instance->checkoutBranding = ShopifyCheckoutBranding::fromArray($data['checkoutBranding']);
            }
            if (isset($data['userErrors']) && $data['userErrors'] !== null) {
                $instance->userErrors = array_map(function($item) { return ShopifyCheckoutBrandingUpsertUserError::fromArray($item); }, $data['userErrors']);
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
            if ($this->checkoutBranding !== null) {
                $data['checkoutBranding'] = $this->checkoutBranding->asArray();
            }
            if ($this->userErrors !== null) {
                $data['userErrors'] = array_map(function($item) { return $item->asArray(); }, $this->userErrors);
            }
            return $data;
        }
}
