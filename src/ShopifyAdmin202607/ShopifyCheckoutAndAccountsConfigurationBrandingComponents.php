<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingCheckbox;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingControl;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyle;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingFooter;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingHeader;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingMain;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingButton;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingSelect;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingShared;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCheckoutAndAccountsConfigurationBrandingTextField;

/**
 * The base component customizations that apply to all surfaces.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingComponents
{
    protected $checkbox;
    protected $choiceList;
    protected $control;
    protected $divider;
    protected $favicon;
    protected $footer;
    protected $header;
    protected $headingLevel1;
    protected $headingLevel2;
    protected $headingLevel3;
    protected $main;
    protected $merchandiseThumbnail;
    protected $primaryButton;
    protected $secondaryButton;
    protected $select;
    protected $shared;
    protected $textField;

    
    /**
     * The checkboxes.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingCheckbox
     */
    public function getCheckbox(): ?ShopifyCheckoutAndAccountsConfigurationBrandingCheckbox
    {
        return $this->checkbox;
    }

    
    /**
     * The choice list.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList
     */
    public function getChoiceList(): ?ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList
    {
        return $this->choiceList;
    }

    
    /**
     * The form controls.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingControl
     */
    public function getControl(): ?ShopifyCheckoutAndAccountsConfigurationBrandingControl
    {
        return $this->control;
    }

    
    /**
     * The customizations for the page, content, main, and order summary dividers. For example, by setting the borderStyle to `DOTTED`, you can make these dividers render as dotted lines.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyle
     */
    public function getDivider(): ?ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyle
    {
        return $this->divider;
    }

    
    /**
     * The favicon.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingImage
     */
    public function getFavicon(): ?ShopifyCheckoutAndAccountsConfigurationBrandingImage
    {
        return $this->favicon;
    }

    
    /**
     * The footer.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingFooter
     */
    public function getFooter(): ?ShopifyCheckoutAndAccountsConfigurationBrandingFooter
    {
        return $this->footer;
    }

    
    /**
     * The header.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeader
     */
    public function getHeader(): ?ShopifyCheckoutAndAccountsConfigurationBrandingHeader
    {
        return $this->header;
    }

    
    /**
     * The Heading Level 1.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
     */
    public function getHeadingLevel1(): ?ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
    {
        return $this->headingLevel1;
    }

    
    /**
     * The Heading Level 2.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
     */
    public function getHeadingLevel2(): ?ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
    {
        return $this->headingLevel2;
    }

    
    /**
     * The Heading Level 3.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
     */
    public function getHeadingLevel3(): ?ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel
    {
        return $this->headingLevel3;
    }

    
    /**
     * The main area.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMain
     */
    public function getMain(): ?ShopifyCheckoutAndAccountsConfigurationBrandingMain
    {
        return $this->main;
    }

    
    /**
     * The merchandise thumbnails.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail
     */
    public function getMerchandiseThumbnail(): ?ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail
    {
        return $this->merchandiseThumbnail;
    }

    
    /**
     * The primary buttons.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingButton
     */
    public function getPrimaryButton(): ?ShopifyCheckoutAndAccountsConfigurationBrandingButton
    {
        return $this->primaryButton;
    }

    
    /**
     * The secondary buttons.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingButton
     */
    public function getSecondaryButton(): ?ShopifyCheckoutAndAccountsConfigurationBrandingButton
    {
        return $this->secondaryButton;
    }

    
    /**
     * The selects.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingSelect
     */
    public function getSelect(): ?ShopifyCheckoutAndAccountsConfigurationBrandingSelect
    {
        return $this->select;
    }

    
    /**
     * The shared settings.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingShared
     */
    public function getShared(): ?ShopifyCheckoutAndAccountsConfigurationBrandingShared
    {
        return $this->shared;
    }

    
    /**
     * The text fields.
     *
     * @return ShopifyCheckoutAndAccountsConfigurationBrandingTextField
     */
    public function getTextField(): ?ShopifyCheckoutAndAccountsConfigurationBrandingTextField
    {
        return $this->textField;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['checkbox']) && $data['checkbox'] !== null) {
                $instance->checkbox = ShopifyCheckoutAndAccountsConfigurationBrandingCheckbox::fromArray($data['checkbox']);
            }
            if (isset($data['choiceList']) && $data['choiceList'] !== null) {
                $instance->choiceList = ShopifyCheckoutAndAccountsConfigurationBrandingChoiceList::fromArray($data['choiceList']);
            }
            if (isset($data['control']) && $data['control'] !== null) {
                $instance->control = ShopifyCheckoutAndAccountsConfigurationBrandingControl::fromArray($data['control']);
            }
            if (isset($data['divider']) && $data['divider'] !== null) {
                $instance->divider = ShopifyCheckoutAndAccountsConfigurationBrandingDividerStyle::fromArray($data['divider']);
            }
            if (isset($data['favicon']) && $data['favicon'] !== null) {
                $instance->favicon = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::fromArray($data['favicon']);
            }
            if (isset($data['footer']) && $data['footer'] !== null) {
                $instance->footer = ShopifyCheckoutAndAccountsConfigurationBrandingFooter::fromArray($data['footer']);
            }
            if (isset($data['header']) && $data['header'] !== null) {
                $instance->header = ShopifyCheckoutAndAccountsConfigurationBrandingHeader::fromArray($data['header']);
            }
            if (isset($data['headingLevel1']) && $data['headingLevel1'] !== null) {
                $instance->headingLevel1 = ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel::fromArray($data['headingLevel1']);
            }
            if (isset($data['headingLevel2']) && $data['headingLevel2'] !== null) {
                $instance->headingLevel2 = ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel::fromArray($data['headingLevel2']);
            }
            if (isset($data['headingLevel3']) && $data['headingLevel3'] !== null) {
                $instance->headingLevel3 = ShopifyCheckoutAndAccountsConfigurationBrandingHeadingLevel::fromArray($data['headingLevel3']);
            }
            if (isset($data['main']) && $data['main'] !== null) {
                $instance->main = ShopifyCheckoutAndAccountsConfigurationBrandingMain::fromArray($data['main']);
            }
            if (isset($data['merchandiseThumbnail']) && $data['merchandiseThumbnail'] !== null) {
                $instance->merchandiseThumbnail = ShopifyCheckoutAndAccountsConfigurationBrandingMerchandiseThumbnail::fromArray($data['merchandiseThumbnail']);
            }
            if (isset($data['primaryButton']) && $data['primaryButton'] !== null) {
                $instance->primaryButton = ShopifyCheckoutAndAccountsConfigurationBrandingButton::fromArray($data['primaryButton']);
            }
            if (isset($data['secondaryButton']) && $data['secondaryButton'] !== null) {
                $instance->secondaryButton = ShopifyCheckoutAndAccountsConfigurationBrandingButton::fromArray($data['secondaryButton']);
            }
            if (isset($data['select']) && $data['select'] !== null) {
                $instance->select = ShopifyCheckoutAndAccountsConfigurationBrandingSelect::fromArray($data['select']);
            }
            if (isset($data['shared']) && $data['shared'] !== null) {
                $instance->shared = ShopifyCheckoutAndAccountsConfigurationBrandingShared::fromArray($data['shared']);
            }
            if (isset($data['textField']) && $data['textField'] !== null) {
                $instance->textField = ShopifyCheckoutAndAccountsConfigurationBrandingTextField::fromArray($data['textField']);
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
            if ($this->checkbox !== null) {
                $data['checkbox'] = $this->checkbox->asArray();
            }
            if ($this->choiceList !== null) {
                $data['choiceList'] = $this->choiceList->asArray();
            }
            if ($this->control !== null) {
                $data['control'] = $this->control->asArray();
            }
            if ($this->divider !== null) {
                $data['divider'] = $this->divider->asArray();
            }
            if ($this->favicon !== null) {
                $data['favicon'] = ShopifyCheckoutAndAccountsConfigurationBrandingImageValueHydrator::toArray($this->favicon);
            }
            if ($this->footer !== null) {
                $data['footer'] = $this->footer->asArray();
            }
            if ($this->header !== null) {
                $data['header'] = $this->header->asArray();
            }
            if ($this->headingLevel1 !== null) {
                $data['headingLevel1'] = $this->headingLevel1->asArray();
            }
            if ($this->headingLevel2 !== null) {
                $data['headingLevel2'] = $this->headingLevel2->asArray();
            }
            if ($this->headingLevel3 !== null) {
                $data['headingLevel3'] = $this->headingLevel3->asArray();
            }
            if ($this->main !== null) {
                $data['main'] = $this->main->asArray();
            }
            if ($this->merchandiseThumbnail !== null) {
                $data['merchandiseThumbnail'] = $this->merchandiseThumbnail->asArray();
            }
            if ($this->primaryButton !== null) {
                $data['primaryButton'] = $this->primaryButton->asArray();
            }
            if ($this->secondaryButton !== null) {
                $data['secondaryButton'] = $this->secondaryButton->asArray();
            }
            if ($this->select !== null) {
                $data['select'] = $this->select->asArray();
            }
            if ($this->shared !== null) {
                $data['shared'] = $this->shared->asArray();
            }
            if ($this->textField !== null) {
                $data['textField'] = $this->textField->asArray();
            }
            return $data;
        }
}
