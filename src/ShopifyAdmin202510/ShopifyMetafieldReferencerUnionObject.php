<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\UnionObject;

class ShopifyMetafieldReferencerUnionObject extends UnionObject
{
    public function onShopifyAppInstallation()
    {
        $object = new ShopifyAppInstallationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyArticle()
    {
        $object = new ShopifyArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyBlog()
    {
        $object = new ShopifyBlogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCollection()
    {
        $object = new ShopifyCollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCompany()
    {
        $object = new ShopifyCompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCompanyLocation()
    {
        $object = new ShopifyCompanyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyCustomer()
    {
        $object = new ShopifyCustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDeliveryCustomization()
    {
        $object = new ShopifyDeliveryCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountAutomaticNode()
    {
        $object = new ShopifyDiscountAutomaticNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountCodeNode()
    {
        $object = new ShopifyDiscountCodeNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDiscountNode()
    {
        $object = new ShopifyDiscountNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyDraftOrder()
    {
        $object = new ShopifyDraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyFulfillmentOrder()
    {
        $object = new ShopifyFulfillmentOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyLocation()
    {
        $object = new ShopifyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyMarket()
    {
        $object = new ShopifyMarketQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyMetaobject()
    {
        $object = new ShopifyMetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyOrder()
    {
        $object = new ShopifyOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPage()
    {
        $object = new ShopifyPageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPaymentCustomization()
    {
        $object = new ShopifyPaymentCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProduct()
    {
        $object = new ShopifyProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyProductVariant()
    {
        $object = new ShopifyProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyShop()
    {
        $object = new ShopifyShopQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
