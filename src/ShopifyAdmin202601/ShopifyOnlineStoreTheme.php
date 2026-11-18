<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOnlineStoreThemeFileConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyTranslation;

/**
 * A theme for display on the storefront. Themes control the visual appearance and functionality of the online store through templates, stylesheets, and assets that determine how [products](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product), [collections](https://shopify.dev/docs/api/admin-graphql/latest/objects/Collection), and other content display to customers.
 *
 * Each theme has a [role](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme#field-OnlineStoreTheme.fields.role) that indicates its status. Main themes are live on the storefront, unpublished themes are inactive, demo themes require purchase before publishing, and development themes are temporary for previewing during development. The theme includes [translations](https://shopify.dev/docs/api/admin-graphql/latest/objects/OnlineStoreTheme#field-OnlineStoreTheme.fields.translations) for multi-language support.
 */
class ShopifyOnlineStoreTheme implements ShopifyHasPublishedTranslations, ShopifyNode
{
    protected $createdAt;
    protected $files;
    protected $id;
    protected $name;
    protected $prefix;
    protected $processing;
    protected $processingFailed;
    protected $role;
    protected $themeStoreId;
    protected $translations;
    protected $updatedAt;

    
    /**
     * The date and time when the theme was created.
     *
     * @return Carbon
     */
    public function getCreatedAt(): ?Carbon
    {
        return $this->createdAt;
    }

    
    /**
     * The files in the theme.
     *
     * @return ShopifyOnlineStoreThemeFileConnection
     */
    public function getFiles(): ?ShopifyOnlineStoreThemeFileConnection
    {
        return $this->files;
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
     * The name of the theme, set by the merchant.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The prefix of the theme.
     *
     * @return string
     */
    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    
    /**
     * Whether the theme is processing.
     *
     * @return bool
     */
    public function getProcessing(): ?bool
    {
        return $this->processing;
    }

    
    /**
     * Whether the theme processing failed.
     *
     * @return bool
     */
    public function getProcessingFailed(): ?bool
    {
        return $this->processingFailed;
    }

    
    /**
     * The role of the theme.
     *
     * @return string A ShopifyThemeRoleEnumObject value
     */
    public function getRole(): ?string
    {
        return $this->role;
    }

    
    /**
     * The theme store ID.
     *
     * @return int
     */
    public function getThemeStoreId(): ?int
    {
        return $this->themeStoreId;
    }

    
    /**
     * The published translations associated with the resource.
     *
     * @return ShopifyTranslation[]
     */
    public function getTranslations(): ?array
    {
        return $this->translations;
    }

    
    /**
     * The date and time when the theme was last updated.
     *
     * @return Carbon
     */
    public function getUpdatedAt(): ?Carbon
    {
        return $this->updatedAt;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['createdAt']) && $data['createdAt'] !== null) {
                $instance->createdAt = new Carbon($data['createdAt']);
            }
            if (isset($data['files']) && $data['files'] !== null) {
                $instance->files = ShopifyOnlineStoreThemeFileConnection::fromArray($data['files']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['prefix']) && $data['prefix'] !== null) {
                $instance->prefix = $data['prefix'];
            }
            if (isset($data['processing']) && $data['processing'] !== null) {
                $instance->processing = $data['processing'];
            }
            if (isset($data['processingFailed']) && $data['processingFailed'] !== null) {
                $instance->processingFailed = $data['processingFailed'];
            }
            if (isset($data['role']) && $data['role'] !== null) {
                $instance->role = $data['role'];
            }
            if (isset($data['themeStoreId']) && $data['themeStoreId'] !== null) {
                $instance->themeStoreId = $data['themeStoreId'];
            }
            if (isset($data['translations']) && $data['translations'] !== null) {
                $instance->translations = array_map(function($item) { return ShopifyTranslation::fromArray($item); }, $data['translations']);
            }
            if (isset($data['updatedAt']) && $data['updatedAt'] !== null) {
                $instance->updatedAt = new Carbon($data['updatedAt']);
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
            if ($this->createdAt !== null) {
                $data['createdAt'] = $this->createdAt->toIso8601String();
            }
            if ($this->files !== null) {
                $data['files'] = $this->files->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->prefix !== null) {
                $data['prefix'] = $this->prefix;
            }
            if ($this->processing !== null) {
                $data['processing'] = $this->processing;
            }
            if ($this->processingFailed !== null) {
                $data['processingFailed'] = $this->processingFailed;
            }
            if ($this->role !== null) {
                $data['role'] = $this->role;
            }
            if ($this->themeStoreId !== null) {
                $data['themeStoreId'] = $this->themeStoreId;
            }
            if ($this->translations !== null) {
                $data['translations'] = array_map(function($item) { return $item->asArray(); }, $this->translations);
            }
            if ($this->updatedAt !== null) {
                $data['updatedAt'] = $this->updatedAt->toIso8601String();
            }
            return $data;
        }
}
