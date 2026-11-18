<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyBasePaymentDetailsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyBasePaymentDetails
     */
    public static function fromArray(array $data): ShopifyBasePaymentDetails
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate BasePaymentDetails: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CardPaymentDetails':
                return ShopifyCardPaymentDetails::fromArray($data);
            case 'LocalPaymentMethodsPaymentDetails':
                return ShopifyLocalPaymentMethodsPaymentDetails::fromArray($data);
            case 'PaypalWalletPaymentDetails':
                return ShopifyPaypalWalletPaymentDetails::fromArray($data);
            case 'ShopPayInstallmentsPaymentDetails':
                return ShopifyShopPayInstallmentsPaymentDetails::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate BasePaymentDetails: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyBasePaymentDetails $object
     * @return array
     */
    public static function toArray(ShopifyBasePaymentDetails $object): array
    {
        if ($object instanceof ShopifyCardPaymentDetails) {
            return ['__typename' => 'CardPaymentDetails'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocalPaymentMethodsPaymentDetails) {
            return ['__typename' => 'LocalPaymentMethodsPaymentDetails'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaypalWalletPaymentDetails) {
            return ['__typename' => 'PaypalWalletPaymentDetails'] + $object->asArray();
        }
        if ($object instanceof ShopifyShopPayInstallmentsPaymentDetails) {
            return ['__typename' => 'ShopPayInstallmentsPaymentDetails'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of BasePaymentDetails');
    }
}
