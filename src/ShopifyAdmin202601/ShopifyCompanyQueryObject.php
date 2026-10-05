<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCompanyQueryObject extends QueryObject
{
    const OBJECT_NAME = "Company";

    /**
     * @deprecated Use `contactsCount` instead.
     */
    public function selectContactCount()
    {
        $this->selectField("contactCount");

        return $this;
    }

    public function selectContactRoles(ShopifyCompanyContactRolesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleConnectionQueryObject("contactRoles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContacts(ShopifyCompanyContactsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactConnectionQueryObject("contacts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContactsCount(ShopifyCompanyContactsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("contactsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectCustomerSince()
    {
        $this->selectField("customerSince");

        return $this;
    }

    public function selectDefaultCursor()
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    public function selectDefaultRole(ShopifyCompanyDefaultRoleArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactRoleQueryObject("defaultRole");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrders(ShopifyCompanyDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(ShopifyCompanyEventsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyEventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExternalId()
    {
        $this->selectField("externalId");

        return $this;
    }

    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLifetimeDuration()
    {
        $this->selectField("lifetimeDuration");

        return $this;
    }

    public function selectLocations(ShopifyCompanyLocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsCount(ShopifyCompanyLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMainContact(ShopifyCompanyMainContactArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCompanyContactQueryObject("mainContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(ShopifyCompanyMetafieldArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(ShopifyCompanyMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(ShopifyCompanyMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMetafieldConnectionQueryObject("metafields");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectOrders(ShopifyCompanyOrdersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrdersCount(ShopifyCompanyOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalSpent(ShopifyCompanyTotalSpentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalSpent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
