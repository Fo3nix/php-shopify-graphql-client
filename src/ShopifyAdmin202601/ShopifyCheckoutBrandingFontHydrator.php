<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyCheckoutBrandingFontHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCheckoutBrandingFont
     */
    public static function fromArray(array $data): ShopifyCheckoutBrandingFont
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CheckoutBrandingFont: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CheckoutBrandingCustomFont':
                return ShopifyCheckoutBrandingCustomFont::fromArray($data);
            case 'CheckoutBrandingShopifyFont':
                return ShopifyCheckoutBrandingShopifyFont::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CheckoutBrandingFont: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCheckoutBrandingFont $object
     * @return array
     */
    public static function toArray(ShopifyCheckoutBrandingFont $object): array
    {
        if ($object instanceof ShopifyCheckoutBrandingCustomFont) {
            return ['__typename' => 'CheckoutBrandingCustomFont'] + $object->asArray();
        }
        if ($object instanceof ShopifyCheckoutBrandingShopifyFont) {
            return ['__typename' => 'CheckoutBrandingShopifyFont'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CheckoutBrandingFont');
    }
}
