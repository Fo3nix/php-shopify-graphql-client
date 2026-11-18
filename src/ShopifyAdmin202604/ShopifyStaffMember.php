<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyImage;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStaffMemberPrivateData;

/**
 * A user account that can access the Shopify admin to manage store operations. Includes personal information and account status.
 *
 * You can assign staff members to [`CompanyLocation`](https://shopify.dev/docs/api/admin-graphql/latest/objects/CompanyLocation) objects for [B2B operations](https://shopify.dev/docs/apps/build/b2b), limiting their actions to those locations.
 */
class ShopifyStaffMember implements ShopifyNode
{
    protected $accountType;
    protected $active;
    protected $avatar;
    protected $email;
    protected $exists;
    protected $firstName;
    protected $id;
    protected $initials;
    protected $isShopOwner;
    protected $lastName;
    protected $locale;
    protected $name;
    protected $phone;
    protected $privateData;

    
    /**
     * The type of account the staff member has.
     *
     * @return string A ShopifyAccountTypeEnumObject value
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    
    /**
     * Whether the staff member is active.
     *
     * @return bool
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    
    /**
     * The image used as the staff member's avatar in the Shopify admin.
     *
     * @return ShopifyImage
     */
    public function getAvatar(): ?ShopifyImage
    {
        return $this->avatar;
    }

    
    /**
     * The staff member's email address.
     *
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    
    /**
     * Whether the staff member's account exists.
     *
     * @return bool
     */
    public function getExists(): ?bool
    {
        return $this->exists;
    }

    
    /**
     * The staff member's first name.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The staff member's initials, if available.
     *
     * @return string[]
     */
    public function getInitials(): ?array
    {
        return $this->initials;
    }

    
    /**
     * Whether the staff member is the shop owner.
     *
     * @return bool
     */
    public function getIsShopOwner(): ?bool
    {
        return $this->isShopOwner;
    }

    
    /**
     * The staff member's last name.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    
    /**
     * The staff member's preferred locale. Locale values use the format `language` or `language-COUNTRY`, where `language` is a two-letter language code, and `COUNTRY` is a two-letter country code. For example: `en` or `en-US`
     *
     * @return string
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    
    /**
     * The staff member's full name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The staff member's phone number.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    
    /**
     * The data used to customize the Shopify admin experience for the staff member.
     *
     * @return ShopifyStaffMemberPrivateData
     */
    public function getPrivateData(): ?ShopifyStaffMemberPrivateData
    {
        return $this->privateData;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['accountType']) && $data['accountType'] !== null) {
                $instance->accountType = $data['accountType'];
            }
            if (isset($data['active']) && $data['active'] !== null) {
                $instance->active = $data['active'];
            }
            if (isset($data['avatar']) && $data['avatar'] !== null) {
                $instance->avatar = ShopifyImage::fromArray($data['avatar']);
            }
            if (isset($data['email']) && $data['email'] !== null) {
                $instance->email = $data['email'];
            }
            if (isset($data['exists']) && $data['exists'] !== null) {
                $instance->exists = $data['exists'];
            }
            if (isset($data['firstName']) && $data['firstName'] !== null) {
                $instance->firstName = $data['firstName'];
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['initials']) && $data['initials'] !== null) {
                $instance->initials = $data['initials'];
            }
            if (isset($data['isShopOwner']) && $data['isShopOwner'] !== null) {
                $instance->isShopOwner = $data['isShopOwner'];
            }
            if (isset($data['lastName']) && $data['lastName'] !== null) {
                $instance->lastName = $data['lastName'];
            }
            if (isset($data['locale']) && $data['locale'] !== null) {
                $instance->locale = $data['locale'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['phone']) && $data['phone'] !== null) {
                $instance->phone = $data['phone'];
            }
            if (isset($data['privateData']) && $data['privateData'] !== null) {
                $instance->privateData = ShopifyStaffMemberPrivateData::fromArray($data['privateData']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->accountType !== null) {
                $data['accountType'] = $this->accountType;
            }
            if ($this->active !== null) {
                $data['active'] = $this->active;
            }
            if ($this->avatar !== null) {
                $data['avatar'] = $this->avatar->asArray();
            }
            if ($this->email !== null) {
                $data['email'] = $this->email;
            }
            if ($this->exists !== null) {
                $data['exists'] = $this->exists;
            }
            if ($this->firstName !== null) {
                $data['firstName'] = $this->firstName;
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->initials !== null) {
                $data['initials'] = $this->initials;
            }
            if ($this->isShopOwner !== null) {
                $data['isShopOwner'] = $this->isShopOwner;
            }
            if ($this->lastName !== null) {
                $data['lastName'] = $this->lastName;
            }
            if ($this->locale !== null) {
                $data['locale'] = $this->locale;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->phone !== null) {
                $data['phone'] = $this->phone;
            }
            if ($this->privateData !== null) {
                $data['privateData'] = $this->privateData->asArray();
            }
            return $data;
        }
}
