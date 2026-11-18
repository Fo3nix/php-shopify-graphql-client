<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyCommentEventSubjectHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyCommentEventSubject
     */
    public static function fromArray(array $data): ShopifyCommentEventSubject
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate CommentEventSubject: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Company':
                return ShopifyCompany::fromArray($data);
            case 'CompanyLocation':
                return ShopifyCompanyLocation::fromArray($data);
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            case 'DraftOrder':
                return ShopifyDraftOrder::fromArray($data);
            case 'InventoryTransfer':
                return ShopifyInventoryTransfer::fromArray($data);
            case 'Order':
                return ShopifyOrder::fromArray($data);
            case 'PriceRule':
                return ShopifyPriceRule::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate CommentEventSubject: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyCommentEventSubject $object
     * @return array
     */
    public static function toArray(ShopifyCommentEventSubject $object): array
    {
        if ($object instanceof ShopifyCompany) {
            return ['__typename' => 'Company'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyLocation) {
            return ['__typename' => 'CompanyLocation'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        if ($object instanceof ShopifyDraftOrder) {
            return ['__typename' => 'DraftOrder'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransfer) {
            return ['__typename' => 'InventoryTransfer'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrder) {
            return ['__typename' => 'Order'] + $object->asArray();
        }
        if ($object instanceof ShopifyPriceRule) {
            return ['__typename' => 'PriceRule'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of CommentEventSubject');
    }
}
