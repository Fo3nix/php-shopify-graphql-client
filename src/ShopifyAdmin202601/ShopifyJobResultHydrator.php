<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

class ShopifyJobResultHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyJobResult
     */
    public static function fromArray(array $data): ShopifyJobResult
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate JobResult: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'CustomerSegmentMembersQuery':
                return ShopifyCustomerSegmentMembersQuery::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate JobResult: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyJobResult $object
     * @return array
     */
    public static function toArray(ShopifyJobResult $object): array
    {
        if ($object instanceof ShopifyCustomerSegmentMembersQuery) {
            return ['__typename' => 'CustomerSegmentMembersQuery'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of JobResult');
    }
}
