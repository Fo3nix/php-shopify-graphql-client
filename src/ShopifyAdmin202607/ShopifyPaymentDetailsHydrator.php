<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyPaymentDetailsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails
     */
    public static function fromArray(array $data): ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate PaymentDetails: the data has no __typename, select it in the query');
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
                throw new \InvalidArgumentException('Cannot hydrate PaymentDetails: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails $object
     * @return array
     */
    public static function toArray(ShopifyCardPaymentDetails|ShopifyLocalPaymentMethodsPaymentDetails|ShopifyPaypalWalletPaymentDetails|ShopifyShopPayInstallmentsPaymentDetails $object): array
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
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of PaymentDetails');
    }
}
