<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

/**
 * Controls the spacing between options in the 'group' variant of [`ChoiceList`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBrandingChoiceList) components.
 *
 * This setting adjusts the vertical spacing between choice options to improve readability and visual organization. The spacing value helps create clear separation between options, making it easier for customers to scan and select from available choices.
 *
 * Learn more about [checkout customization](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBranding).
 */
class ShopifyCheckoutBrandingChoiceListGroup
{
    protected $spacing;

    
    /**
     * The spacing between UI elements in the list.
     *
     * @return string A ShopifyCheckoutBrandingSpacingKeywordEnumObject value
     */
    public function getSpacing(): ?string
    {
        return $this->spacing;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['spacing']) && $data['spacing'] !== null) {
                $instance->spacing = $data['spacing'];
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
            if ($this->spacing !== null) {
                $data['spacing'] = $this->spacing;
            }
            return $data;
        }
}
