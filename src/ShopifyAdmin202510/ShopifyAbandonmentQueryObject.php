<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAbandonmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "Abandonment";

    public function selectAbandonedCheckoutPayload(ShopifyAbandonmentAbandonedCheckoutPayloadArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAbandonedCheckoutQueryObject("abandonedCheckoutPayload");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAbandonmentType()
    {
        $this->selectField("abandonmentType");

        return $this;
    }

    public function selectApp(ShopifyAbandonmentAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCartUrl()
    {
        $this->selectField("cartUrl");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCustomer(ShopifyAbandonmentCustomerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerHasNoDraftOrderSinceAbandonment()
    {
        $this->selectField("customerHasNoDraftOrderSinceAbandonment");

        return $this;
    }

    public function selectCustomerHasNoOrderSinceAbandonment()
    {
        $this->selectField("customerHasNoOrderSinceAbandonment");

        return $this;
    }

    public function selectDaysSinceLastAbandonmentEmail()
    {
        $this->selectField("daysSinceLastAbandonmentEmail");

        return $this;
    }

    public function selectEmailSentAt()
    {
        $this->selectField("emailSentAt");

        return $this;
    }

    public function selectEmailState()
    {
        $this->selectField("emailState");

        return $this;
    }

    public function selectHoursSinceLastAbandonedCheckout()
    {
        $this->selectField("hoursSinceLastAbandonedCheckout");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInventoryAvailable()
    {
        $this->selectField("inventoryAvailable");

        return $this;
    }

    public function selectIsFromCustomStorefront()
    {
        $this->selectField("isFromCustomStorefront");

        return $this;
    }

    public function selectIsFromOnlineStore()
    {
        $this->selectField("isFromOnlineStore");

        return $this;
    }

    public function selectIsFromShopApp()
    {
        $this->selectField("isFromShopApp");

        return $this;
    }

    public function selectIsFromShopPay()
    {
        $this->selectField("isFromShopPay");

        return $this;
    }

    public function selectIsMostSignificantAbandonment()
    {
        $this->selectField("isMostSignificantAbandonment");

        return $this;
    }

    public function selectLastBrowseAbandonmentDate()
    {
        $this->selectField("lastBrowseAbandonmentDate");

        return $this;
    }

    public function selectLastCartAbandonmentDate()
    {
        $this->selectField("lastCartAbandonmentDate");

        return $this;
    }

    public function selectLastCheckoutAbandonmentDate()
    {
        $this->selectField("lastCheckoutAbandonmentDate");

        return $this;
    }

    public function selectMostRecentStep()
    {
        $this->selectField("mostRecentStep");

        return $this;
    }

    public function selectProductsAddedToCart(ShopifyAbandonmentProductsAddedToCartArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitProductInfoConnectionQueryObject("productsAddedToCart");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectProductsViewed(ShopifyAbandonmentProductsViewedArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCustomerVisitProductInfoConnectionQueryObject("productsViewed");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVisitStartedAt()
    {
        $this->selectField("visitStartedAt");

        return $this;
    }
}
