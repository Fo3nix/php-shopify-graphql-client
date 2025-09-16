<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CompanyQueryObject extends QueryObject
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

    public function selectContactRoles(CompanyContactRolesArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleConnectionQueryObject("contactRoles");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContacts(CompanyContactsArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactConnectionQueryObject("contacts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContactsCount(CompanyContactsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("contactsCount");
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

    public function selectDefaultRole(CompanyDefaultRoleArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactRoleQueryObject("defaultRole");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectDraftOrders(CompanyDraftOrdersArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderConnectionQueryObject("draftOrders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(CompanyEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
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

    public function selectLocations(CompanyLocationsArgumentsObject $argsObject = null)
    {
        $object = new CompanyLocationConnectionQueryObject("locations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLocationsCount(CompanyLocationsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("locationsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMainContact(CompanyMainContactArgumentsObject $argsObject = null)
    {
        $object = new CompanyContactQueryObject("mainContact");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(CompanyMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(CompanyMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(CompanyMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectOrders(CompanyOrdersArgumentsObject $argsObject = null)
    {
        $object = new OrderConnectionQueryObject("orders");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrdersCount(CompanyOrdersCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("ordersCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalSpent(CompanyTotalSpentArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalSpent");
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
