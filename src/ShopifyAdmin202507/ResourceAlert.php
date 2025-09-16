<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\ResourceAlertAction;

class ResourceAlert
{
    protected $actions;
    protected $content;
    protected $dismissibleHandle;
    protected $icon;
    protected $severity;
    protected $title;

    
    /**
     * @return ResourceAlertAction[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    
    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    
    /**
     * @return string
     */
    public function getDismissibleHandle()
    {
        return $this->dismissibleHandle;
    }

    
    /**
     * @return ResourceAlertIconEnumObject
     */
    public function getIcon()
    {
        return $this->icon;
    }

    
    /**
     * @return ResourceAlertSeverityEnumObject
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    
    /**
     * @return string
     */
    public function getTitle()
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
                $instance->actions = array_map(function($item) { return ResourceAlertAction::fromArray($item); }, $data['actions']);
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
