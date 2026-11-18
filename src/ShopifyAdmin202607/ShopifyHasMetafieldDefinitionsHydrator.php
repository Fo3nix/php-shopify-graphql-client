<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

class ShopifyHasMetafieldDefinitionsHydrator
{
    /**
     * Hydrates the result class matching the __typename of the data
     *
     * @param array $data
     * @return ShopifyHasMetafieldDefinitions
     */
    public static function fromArray(array $data): ShopifyHasMetafieldDefinitions
    {
        if (!isset($data['__typename'])) {
            throw new \InvalidArgumentException('Cannot hydrate HasMetafieldDefinitions: the data has no __typename, select it in the query');
        }
        switch ($data['__typename']) {
            case 'Article':
                return ShopifyArticle::fromArray($data);
            case 'Blog':
                return ShopifyBlog::fromArray($data);
            case 'Collection':
                return ShopifyCollection::fromArray($data);
            case 'Company':
                return ShopifyCompany::fromArray($data);
            case 'CompanyLocation':
                return ShopifyCompanyLocation::fromArray($data);
            case 'Customer':
                return ShopifyCustomer::fromArray($data);
            case 'DeliveryCustomization':
                return ShopifyDeliveryCustomization::fromArray($data);
            case 'DiscountAutomaticNode':
                return ShopifyDiscountAutomaticNode::fromArray($data);
            case 'DiscountCodeNode':
                return ShopifyDiscountCodeNode::fromArray($data);
            case 'DiscountNode':
                return ShopifyDiscountNode::fromArray($data);
            case 'InventoryTransfer':
                return ShopifyInventoryTransfer::fromArray($data);
            case 'Location':
                return ShopifyLocation::fromArray($data);
            case 'Market':
                return ShopifyMarket::fromArray($data);
            case 'Order':
                return ShopifyOrder::fromArray($data);
            case 'Page':
                return ShopifyPage::fromArray($data);
            case 'PaymentCustomization':
                return ShopifyPaymentCustomization::fromArray($data);
            case 'Product':
                return ShopifyProduct::fromArray($data);
            case 'ProductVariant':
                return ShopifyProductVariant::fromArray($data);
            case 'SellingPlan':
                return ShopifySellingPlan::fromArray($data);
            case 'Shop':
                return ShopifyShop::fromArray($data);
            case 'Validation':
                return ShopifyValidation::fromArray($data);
            default:
                throw new \InvalidArgumentException('Cannot hydrate HasMetafieldDefinitions: unknown type "' . $data['__typename'] . '", regenerate the schema objects');
        }
    }

    /**
     * Converts a hydrated object to an array, including its __typename so it can be hydrated again
     *
     * @param ShopifyHasMetafieldDefinitions $object
     * @return array
     */
    public static function toArray(ShopifyHasMetafieldDefinitions $object): array
    {
        if ($object instanceof ShopifyArticle) {
            return ['__typename' => 'Article'] + $object->asArray();
        }
        if ($object instanceof ShopifyBlog) {
            return ['__typename' => 'Blog'] + $object->asArray();
        }
        if ($object instanceof ShopifyCollection) {
            return ['__typename' => 'Collection'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompany) {
            return ['__typename' => 'Company'] + $object->asArray();
        }
        if ($object instanceof ShopifyCompanyLocation) {
            return ['__typename' => 'CompanyLocation'] + $object->asArray();
        }
        if ($object instanceof ShopifyCustomer) {
            return ['__typename' => 'Customer'] + $object->asArray();
        }
        if ($object instanceof ShopifyDeliveryCustomization) {
            return ['__typename' => 'DeliveryCustomization'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountAutomaticNode) {
            return ['__typename' => 'DiscountAutomaticNode'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountCodeNode) {
            return ['__typename' => 'DiscountCodeNode'] + $object->asArray();
        }
        if ($object instanceof ShopifyDiscountNode) {
            return ['__typename' => 'DiscountNode'] + $object->asArray();
        }
        if ($object instanceof ShopifyInventoryTransfer) {
            return ['__typename' => 'InventoryTransfer'] + $object->asArray();
        }
        if ($object instanceof ShopifyLocation) {
            return ['__typename' => 'Location'] + $object->asArray();
        }
        if ($object instanceof ShopifyMarket) {
            return ['__typename' => 'Market'] + $object->asArray();
        }
        if ($object instanceof ShopifyOrder) {
            return ['__typename' => 'Order'] + $object->asArray();
        }
        if ($object instanceof ShopifyPage) {
            return ['__typename' => 'Page'] + $object->asArray();
        }
        if ($object instanceof ShopifyPaymentCustomization) {
            return ['__typename' => 'PaymentCustomization'] + $object->asArray();
        }
        if ($object instanceof ShopifyProduct) {
            return ['__typename' => 'Product'] + $object->asArray();
        }
        if ($object instanceof ShopifyProductVariant) {
            return ['__typename' => 'ProductVariant'] + $object->asArray();
        }
        if ($object instanceof ShopifySellingPlan) {
            return ['__typename' => 'SellingPlan'] + $object->asArray();
        }
        if ($object instanceof ShopifyShop) {
            return ['__typename' => 'Shop'] + $object->asArray();
        }
        if ($object instanceof ShopifyValidation) {
            return ['__typename' => 'Validation'] + $object->asArray();
        }
        throw new \InvalidArgumentException('Cannot convert ' . get_class($object) . ' to an array of HasMetafieldDefinitions');
    }
}
