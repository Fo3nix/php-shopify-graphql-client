<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyCustomerPaymentInstrumentHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyBankAccount|ShopifyCustomerCreditCard|ShopifyCustomerPaypalBillingAgreement|ShopifyCustomerShopPayAgreement
     */
    public static function fromArray(array $data): ShopifyBankAccount|ShopifyCustomerCreditCard|ShopifyCustomerPaypalBillingAgreement|ShopifyCustomerShopPayAgreement
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CustomerPaymentInstrument: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'BankAccount':
                return ShopifyBankAccount::fromArray($data);
            case 'CustomerCreditCard':
                return ShopifyCustomerCreditCard::fromArray($data);
            case 'CustomerPaypalBillingAgreement':
                return ShopifyCustomerPaypalBillingAgreement::fromArray($data);
            case 'CustomerShopPayAgreement':
                return ShopifyCustomerShopPayAgreement::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CustomerPaymentInstrument: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyBankAccount|ShopifyCustomerCreditCard|ShopifyCustomerPaypalBillingAgreement|ShopifyCustomerShopPayAgreement $object
     * @return array
     */
    public static function toArray(ShopifyBankAccount|ShopifyCustomerCreditCard|ShopifyCustomerPaypalBillingAgreement|ShopifyCustomerShopPayAgreement $object): array
    {
        if ($object instanceof ShopifyBankAccount) {
            return ['__typename' => 'BankAccount'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerCreditCard) {
            return ['__typename' => 'CustomerCreditCard'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerPaypalBillingAgreement) {
            return ['__typename' => 'CustomerPaypalBillingAgreement'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomerShopPayAgreement) {
            return ['__typename' => 'CustomerShopPayAgreement'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CustomerPaymentInstrument');
    }
}
