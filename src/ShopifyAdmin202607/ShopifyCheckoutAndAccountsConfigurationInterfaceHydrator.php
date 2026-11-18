<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyCheckoutAndAccountsConfigurationInterfaceHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCheckoutAndAccountsConfigurationInterface
     */
    public static function fromArray(array $data): ShopifyCheckoutAndAccountsConfigurationInterface
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CheckoutAndAccountsConfigurationInterface: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CheckoutAndAccountsConfiguration':
                return ShopifyCheckoutAndAccountsConfiguration::fromArray($data);
            case 'CheckoutAndAccountsConfigurationOverride':
                return ShopifyCheckoutAndAccountsConfigurationOverride::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CheckoutAndAccountsConfigurationInterface: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCheckoutAndAccountsConfigurationInterface $object
     * @return array
     */
    public static function toArray(ShopifyCheckoutAndAccountsConfigurationInterface $object): array
    {
        if ($object instanceof ShopifyCheckoutAndAccountsConfiguration) {
            return ['__typename' => 'CheckoutAndAccountsConfiguration'] + $object->asArray();
        }
        if ($object instanceof ShopifyCheckoutAndAccountsConfigurationOverride) {
            return ['__typename' => 'CheckoutAndAccountsConfigurationOverride'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CheckoutAndAccountsConfigurationInterface');
    }
}
