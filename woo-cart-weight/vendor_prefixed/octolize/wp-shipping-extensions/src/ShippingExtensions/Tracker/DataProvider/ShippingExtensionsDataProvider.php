<?php

/**
 * Class ShippingExtensionsDataProvider
 */
namespace WCWeightVendor\Octolize\ShippingExtensions\Tracker\DataProvider;

use WCWeightVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker;
/**
 * Provider data for page.
 */
class ShippingExtensionsDataProvider implements \WPDesk_Tracker_Data_Provider
{
    private const PROVIDER_KEY = 'shipping_extensions';
    /**
     * @var ViewPageTracker
     */
    private $tracker;
    /**
     * @param ViewPageTracker $tracker
     */
    public function __construct(\WCWeightVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker $tracker)
    {
        $this->tracker = $tracker;
    }
    /**
     * @return array
     */
    public function get_data() : array
    {
        return [self::PROVIDER_KEY => ['views' => [\WCWeightVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker::OPTION_DIRECT => $this->tracker->get_views(\WCWeightVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker::OPTION_DIRECT), \WCWeightVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker::OPTION_PLUGINS_LIST => $this->tracker->get_views(\WCWeightVendor\Octolize\ShippingExtensions\Tracker\ViewPageTracker::OPTION_PLUGINS_LIST)]]];
    }
}
