<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyCustomerMarketingConsentHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCustomerMarketingConsent
     */
    public static function fromArray(array $data): ShopifyCustomerMarketingConsent
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CustomerMarketingConsent: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CustomerWhatsAppMarketingConsent':
                return ShopifyCustomerWhatsAppMarketingConsent::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CustomerMarketingConsent: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCustomerMarketingConsent $object
     * @return array
     */
    public static function toArray(ShopifyCustomerMarketingConsent $object): array
    {
        if ($object instanceof ShopifyCustomerWhatsAppMarketingConsent) {
            return ['__typename' => 'CustomerWhatsAppMarketingConsent'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CustomerMarketingConsent');
    }
}
