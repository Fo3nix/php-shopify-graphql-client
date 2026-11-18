<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyResourceAlertAction;

/**
 * An alert message that appears in the Shopify admin about a problem with a store resource, with 1 or more actions to take. For example, you could use an alert to indicate that you're not charging taxes on some product variants.
 * They can optionally have a specific icon and be dismissed by merchants.
 */
class ShopifyResourceAlert
{
    protected $actions;
    protected $content;
    protected $dismissibleHandle;
    protected $icon;
    protected $severity;
    protected $title;

    
    /**
     * Buttons in the alert that link to related information.
     * For example, _Edit variants_.
     *
     * @return ShopifyResourceAlertAction[]
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }

    
    /**
     * The secondary text in the alert that includes further information or instructions about how to solve a problem.
     *
     * @return string
     */
    public function getContent(): mixed
    {
        return $this->content;
    }

    
    /**
     * Unique identifier that appears when an alert is manually closed by the merchant.
     * Most alerts can't be manually closed.
     *
     * @return string
     */
    public function getDismissibleHandle(): ?string
    {
        return $this->dismissibleHandle;
    }

    
    /**
     * An icon that's optionally displayed with the alert.
     *
     * @return string A ShopifyResourceAlertIconEnumObject value
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    
    /**
     * Indication of how important the alert is.
     *
     * @return string A ShopifyResourceAlertSeverityEnumObject value
     */
    public function getSeverity(): ?string
    {
        return $this->severity;
    }

    
    /**
     * The primary text in the alert that includes information or describes the problem.
     *
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['actions']) && $data['actions'] !== null) {
                $instance->actions = array_map(function($item) { return ShopifyResourceAlertAction::fromArray($item); }, $data['actions']);
            }
            if (isset($data['content']) && $data['content'] !== null) {
                $instance->content = $data['content'];
            }
            if (isset($data['dismissibleHandle']) && $data['dismissibleHandle'] !== null) {
                $instance->dismissibleHandle = $data['dismissibleHandle'];
            }
            if (isset($data['icon']) && $data['icon'] !== null) {
                $instance->icon = $data['icon'];
            }
            if (isset($data['severity']) && $data['severity'] !== null) {
                $instance->severity = $data['severity'];
            }
            if (isset($data['title']) && $data['title'] !== null) {
                $instance->title = $data['title'];
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
            if ($this->actions !== null) {
                $data['actions'] = array_map(function($item) { return $item->asArray(); }, $this->actions);
            }
            if ($this->content !== null) {
                $data['content'] = $this->content;
            }
            if ($this->dismissibleHandle !== null) {
                $data['dismissibleHandle'] = $this->dismissibleHandle;
            }
            if ($this->icon !== null) {
                $data['icon'] = $this->icon;
            }
            if ($this->severity !== null) {
                $data['severity'] = $this->severity;
            }
            if ($this->title !== null) {
                $data['title'] = $this->title;
            }
            return $data;
        }
}
