<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

class ShopifyRolloutCheckoutAndAccountsConfigurationChangeHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyRolloutCheckoutAndAccountsConfigurationChange
     */
    public static function fromArray(array $data): ShopifyRolloutCheckoutAndAccountsConfigurationChange
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate RolloutCheckoutAndAccountsConfigurationChange: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'RolloutCheckoutAndAccountsConfigurationPublishChange':
                return ShopifyRolloutCheckoutAndAccountsConfigurationPublishChange::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate RolloutCheckoutAndAccountsConfigurationChange: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyRolloutCheckoutAndAccountsConfigurationChange $object
     * @return array
     */
    public static function toArray(ShopifyRolloutCheckoutAndAccountsConfigurationChange $object): array
    {
        if ($object instanceof ShopifyRolloutCheckoutAndAccountsConfigurationPublishChange) {
            return ['__typename' => 'RolloutCheckoutAndAccountsConfigurationPublishChange'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of RolloutCheckoutAndAccountsConfigurationChange');
    }
}
