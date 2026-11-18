<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

class ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImage
     */
    public static function fromArray(array $data): ShopifyCheckoutAndAccountsConfigurationBrandingImage
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CheckoutAndAccountsConfigurationBrandingImageValue: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CheckoutAndAccountsConfigurationBrandingImage':
                return ShopifyCheckoutAndAccountsConfigurationBrandingImage::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CheckoutAndAccountsConfigurationBrandingImageValue: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCheckoutAndAccountsConfigurationBrandingImage $object
     * @return array
     */
    public static function toArray(ShopifyCheckoutAndAccountsConfigurationBrandingImage $object): array
    {
        if ($object instanceof ShopifyCheckoutAndAccountsConfigurationBrandingImage) {
            return ['__typename' => 'CheckoutAndAccountsConfigurationBrandingImage'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CheckoutAndAccountsConfigurationBrandingImageValue');
    }
}
