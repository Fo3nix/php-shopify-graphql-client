<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyPaymentInstrumentHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyBankAccount|ShopifyVaultCreditCard|ShopifyVaultPaypalBillingAgreement
     */
    public static function fromArray(array $data): ShopifyBankAccount|ShopifyVaultCreditCard|ShopifyVaultPaypalBillingAgreement
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate PaymentInstrument: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'BankAccount':
                return ShopifyBankAccount::fromArray($data);
            case 'VaultCreditCard':
                return ShopifyVaultCreditCard::fromArray($data);
            case 'VaultPaypalBillingAgreement':
                return ShopifyVaultPaypalBillingAgreement::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate PaymentInstrument: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyBankAccount|ShopifyVaultCreditCard|ShopifyVaultPaypalBillingAgreement $object
     * @return array
     */
    public static function toArray(ShopifyBankAccount|ShopifyVaultCreditCard|ShopifyVaultPaypalBillingAgreement $object): array
    {
        if ($object instanceof ShopifyBankAccount) {
            return ['__typename' => 'BankAccount'] + $object->asArray();
        }
        if ($object instanceof ShopifyVaultCreditCard) {
            return ['__typename' => 'VaultCreditCard'] + $object->asArray();
        }
        if ($object instanceof ShopifyVaultPaypalBillingAgreement) {
            return ['__typename' => 'VaultPaypalBillingAgreement'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of PaymentInstrument');
    }
}
