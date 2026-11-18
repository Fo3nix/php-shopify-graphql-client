<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyCheckoutAndAccountsConfigurationBrandingFontGroupHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup
     */
    public static function fromArray(array $data): ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CheckoutAndAccountsConfigurationBrandingFontGroup: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CheckoutAndAccountsConfigurationBrandingCustomFontGroup':
                return ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup::fromArray($data);
            case 'CheckoutAndAccountsConfigurationBrandingShopifyFontGroup':
                return ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CheckoutAndAccountsConfigurationBrandingFontGroup: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup $object
     * @return array
     */
    public static function toArray(ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup|ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup $object): array
    {
        if ($object instanceof ShopifyCheckoutAndAccountsConfigurationBrandingCustomFontGroup) {
            return ['__typename' => 'CheckoutAndAccountsConfigurationBrandingCustomFontGroup'] + $object->asArray();
        }
        if ($object instanceof ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontGroup) {
            return ['__typename' => 'CheckoutAndAccountsConfigurationBrandingShopifyFontGroup'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CheckoutAndAccountsConfigurationBrandingFontGroup');
    }
}
