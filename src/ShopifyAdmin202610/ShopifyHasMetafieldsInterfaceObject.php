<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Represents information about the metafields associated to the specified resource.
 */
class ShopifyHasMetafieldsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasMetafields";

    /**
     * A [custom field](https://shopify.dev/docs/apps/build/custom-data),
     * including its `namespace` and `key`, that's associated with a Shopify resource
     * for the purposes of adding and storing additional information.
     */
    public function selectMetafield(ShopifyHasMetafieldsMetafieldArgumentsObject $argsObject): ShopifyMetafieldQueryObject
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * A list of [custom fields](https://shopify.dev/docs/apps/build/custom-data)
     * that a merchant associates with a Shopify resource.
     */
    public function selectMetafields(?ShopifyHasMetafieldsMetafieldsArgumentsObject $argsObject = null): ShopifyMetafieldConnectionQueryObject
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function onAppInstallation(): ShopifyAppInstallationQueryObject
    {
        $object = new ShopifyAppInstallationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onArticle(): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlog(): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCartTransform(): ShopifyCartTransformQueryObject
    {
        $object = new ShopifyCartTransformQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollection(): ShopifyCollectionQueryObject
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompany(): ShopifyCompanyQueryObject
    {
        $object = new ShopifyCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyLocation(): ShopifyCompanyLocationQueryObject
    {
        $object = new ShopifyCompanyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomer(): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomerSegmentMember(): ShopifyCustomerSegmentMemberQueryObject
    {
        $object = new ShopifyCustomerSegmentMemberQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryCustomization(): ShopifyDeliveryCustomizationQueryObject
    {
        $object = new ShopifyDeliveryCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticNode(): ShopifyDiscountAutomaticNodeQueryObject
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeNode(): ShopifyDiscountCodeNodeQueryObject
    {
        $object = new ShopifyDiscountCodeNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountNode(): ShopifyDiscountNodeQueryObject
    {
        $object = new ShopifyDiscountNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrder(): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentConstraintRule(): ShopifyFulfillmentConstraintRuleQueryObject
    {
        $object = new ShopifyFulfillmentConstraintRuleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardCashOutTransaction(): ShopifyGiftCardCashOutTransactionQueryObject
    {
        $object = new ShopifyGiftCardCashOutTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardCreditTransaction(): ShopifyGiftCardCreditTransactionQueryObject
    {
        $object = new ShopifyGiftCardCreditTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onGiftCardDebitTransaction(): ShopifyGiftCardDebitTransactionQueryObject
    {
        $object = new ShopifyGiftCardDebitTransactionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onImage(): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onInventoryTransfer(): ShopifyInventoryTransferQueryObject
    {
        $object = new ShopifyInventoryTransferQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocation(): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarket(): ShopifyMarketQueryObject
    {
        $object = new ShopifyMarketQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMediaImage(): ShopifyMediaImageQueryObject
    {
        $object = new ShopifyMediaImageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrder(): ShopifyOrderQueryObject
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPage(): ShopifyPageQueryObject
    {
        $object = new ShopifyPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentCustomization(): ShopifyPaymentCustomizationQueryObject
    {
        $object = new ShopifyPaymentCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct(): ShopifyProductQueryObject
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant(): ShopifyProductVariantQueryObject
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onSellingPlan(): ShopifySellingPlanQueryObject
    {
        $object = new ShopifySellingPlanQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShop(): ShopifyShopQueryObject
    {
        $object = new ShopifyShopQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onValidation(): ShopifyValidationQueryObject
    {
        $object = new ShopifyValidationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
