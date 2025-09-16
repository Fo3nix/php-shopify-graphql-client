<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StaffMemberQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMember";

    public function selectAccountType()
    {
        $this->selectField("accountType");

        return $this;
    }

    public function selectActive()
    {
        $this->selectField("active");

        return $this;
    }

    public function selectAvatar(StaffMemberAvatarArgumentsObject $argsObject = null)
    {
        $object = new ImageQueryObject("avatar");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEmail()
    {
        $this->selectField("email");

        return $this;
    }

    public function selectExists()
    {
        $this->selectField("exists");

        return $this;
    }

    public function selectFirstName()
    {
        $this->selectField("firstName");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInitials()
    {
        $this->selectField("initials");

        return $this;
    }

    public function selectIsShopOwner()
    {
        $this->selectField("isShopOwner");

        return $this;
    }

    public function selectLastName()
    {
        $this->selectField("lastName");

        return $this;
    }

    public function selectLocale()
    {
        $this->selectField("locale");

        return $this;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectPhone()
    {
        $this->selectField("phone");

        return $this;
    }

    public function selectPrivateData(StaffMemberPrivateDataArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberPrivateDataQueryObject("privateData");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
