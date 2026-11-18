<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCheckoutBrandingChoiceListGroup;

/**
 * Controls spacing customization for the grouped variant of choice list components in checkout forms.
 *
 * The `ChoiceList` object contains settings specifically for the 'group' variant styling through the [`ChoiceListGroup`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CheckoutBrandingChoiceListGroup) field, which determines the spacing between choice options.
 */
class ShopifyCheckoutBrandingChoiceList
{
    protected $group;

    
    /**
     * The settings that apply to the 'group' variant of ChoiceList.
     *
     * @return ShopifyCheckoutBrandingChoiceListGroup
     */
    public function getGroup(): ?ShopifyCheckoutBrandingChoiceListGroup
    {
        return $this->group;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['group']) && $data['group'] !== null) {
                $instance->group = ShopifyCheckoutBrandingChoiceListGroup::fromArray($data['group']);
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
            if ($this->group !== null) {
                $data['group'] = $this->group->asArray();
            }
            return $data;
        }
}
