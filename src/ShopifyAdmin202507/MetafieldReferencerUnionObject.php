<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\UnionObject;

class MetafieldReferencerUnionObject extends UnionObject
{
    public function onAppInstallation()
    {
        $object = new AppInstallationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onArticle()
    {
        $object = new ArticleQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onBlog()
    {
        $object = new BlogQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCollection()
    {
        $object = new CollectionQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompany()
    {
        $object = new CompanyQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCompanyLocation()
    {
        $object = new CompanyLocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onCustomer()
    {
        $object = new CustomerQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryCustomization()
    {
        $object = new DeliveryCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountAutomaticNode()
    {
        $object = new DiscountAutomaticNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountCodeNode()
    {
        $object = new DiscountCodeNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDiscountNode()
    {
        $object = new DiscountNodeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDraftOrder()
    {
        $object = new DraftOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onFulfillmentOrder()
    {
        $object = new FulfillmentOrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onLocation()
    {
        $object = new LocationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMarket()
    {
        $object = new MarketQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onMetaobject()
    {
        $object = new MetaobjectQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onOrder()
    {
        $object = new OrderQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPage()
    {
        $object = new PageQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onPaymentCustomization()
    {
        $object = new PaymentCustomizationQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProduct()
    {
        $object = new ProductQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onProductVariant()
    {
        $object = new ProductVariantQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShop()
    {
        $object = new ShopQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
