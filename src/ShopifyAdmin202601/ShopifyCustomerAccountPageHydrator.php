<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyCustomerAccountPageHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCustomerAccountPage
     */
    public static function fromArray(array $data): ShopifyCustomerAccountPage
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CustomerAccountPage: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CustomerAccountAppExtensionPage':
                return ShopifyCustomerAccountAppExtensionPage::fromArray($data);
            case 'CustomerAccountNativePage':
                return ShopifyCustomerAccountNativePage::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CustomerAccountPage: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCustomerAccountPage $object
     * @return array
     */
    public static function toArray(ShopifyCustomerAccountPage $object): array
    {
        if ($object instanceof ShopifyCustomerAccountAppExtensionPage) {
            return ['__typename' => 'CustomerAccountAppExtensionPage'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerAccountNativePage) {
            return ['__typename' => 'CustomerAccountNativePage'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CustomerAccountPage');
    }
}
