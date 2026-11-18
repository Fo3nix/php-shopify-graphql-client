<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * Resources that metafield definitions can be applied to.
 */
class ShopifyHasMetafieldDefinitionsInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "HasMetafieldDefinitions";

    /**
     * List of metafield definitions.
     *
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(?ShopifyHasMetafieldDefinitionsMetafieldDefinitionsArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConnectionQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

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
