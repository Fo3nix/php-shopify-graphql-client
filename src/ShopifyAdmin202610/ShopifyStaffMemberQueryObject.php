<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A user account that can access the Shopify admin to manage store operations. Includes personal information and account status.
 *
 * You can assign staff members to [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) objects for [B2B operations](https://shopify.dev/docs/apps/build/b2b), limiting their actions to those locations.
 */
class ShopifyStaffMemberQueryObject extends QueryObject
{
    const OBJECT_NAME = "StaffMember";

    /**
     * The type of account the staff member has.
     */
    public function selectAccountType(): static
    {
        $this->selectField("accountType");

        return $this;
    }

    /**
     * Whether the staff member is active.
     */
    public function selectActive(): static
    {
        $this->selectField("active");

        return $this;
    }

    /**
     * The image used as the staff member's avatar in the Shopify admin.
     */
    public function selectAvatar(?ShopifyStaffMemberAvatarArgumentsObject $argsObject = null): ShopifyImageQueryObject
    {
        $object = new ShopifyImageQueryObject("avatar");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The staff member's email address.
     */
    public function selectEmail(): static
    {
        $this->selectField("email");

        return $this;
    }

    /**
     * Whether the staff member's account exists.
     */
    public function selectExists(): static
    {
        $this->selectField("exists");

        return $this;
    }

    /**
     * The staff member's first name.
     */
    public function selectFirstName(): static
    {
        $this->selectField("firstName");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The staff member's initials, if available.
     */
    public function selectInitials(): static
    {
        $this->selectField("initials");

        return $this;
    }

    /**
     * Whether the staff member is the shop owner.
     */
    public function selectIsShopOwner(): static
    {
        $this->selectField("isShopOwner");

        return $this;
    }

    /**
     * The staff member's last name.
     */
    public function selectLastName(): static
    {
        $this->selectField("lastName");

        return $this;
    }

    /**
     * The staff member's preferred locale. Locale values use the format `language` or `language-COUNTRY`, where `language` is a two-letter language code, and `COUNTRY` is a two-letter country code. For example: `en` or `en-US`
     */
    public function selectLocale(): static
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * The staff member's full name.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The staff member's phone number.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * The data used to customize the Shopify admin experience for the staff member.
     */
    public function selectPrivateData(?ShopifyStaffMemberPrivateDataArgumentsObject $argsObject = null): ShopifyStaffMemberPrivateDataQueryObject
    {
        $object = new ShopifyStaffMemberPrivateDataQueryObject("privateData");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
