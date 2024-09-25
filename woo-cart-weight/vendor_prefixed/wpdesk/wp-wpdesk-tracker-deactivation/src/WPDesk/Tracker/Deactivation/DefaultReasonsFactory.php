<?php

namespace WCWeightVendor\WPDesk\Tracker\Deactivation;

class DefaultReasonsFactory implements \WCWeightVendor\WPDesk\Tracker\Deactivation\ReasonsFactory
{
    public function createReasons() : array
    {
        $reasons = [];
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('not_selected', '', '', \false, '', \true, \true);
        $reasons[$reason->getValue()] = $reason;
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('plugin_stopped_working', \__('The plugin suddenly stopped working', 'woo-cart-weight'));
        $reasons[$reason->getValue()] = $reason;
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('broke_my_site', \__('The plugin broke my site', 'woo-cart-weight'));
        $reasons[$reason->getValue()] = $reason;
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('found_better_plugin', \__('I have found a better plugin', 'woo-cart-weight'), '', \true, \__('What\'s the plugin\'s name?', 'woo-cart-weight'));
        $reasons[$reason->getValue()] = $reason;
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('plugin_for_short_period', \__('I only needed the plugin for a short period', 'woo-cart-weight'));
        $reasons[$reason->getValue()] = $reason;
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('no_longer_need', \__('I no longer need the plugin', 'woo-cart-weight'));
        $reasons[$reason->getValue()] = $reason;
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('temporary_deactivation', \__('It\'s a temporary deactivation. I\'m just debugging an issue.', 'woo-cart-weight'));
        $reasons[$reason->getValue()] = $reason;
        $reason = new \WCWeightVendor\WPDesk\Tracker\Deactivation\Reason('other', \__('Other', 'woo-cart-weight'), '', \true, \__('Please let us know how we can improve our plugin', 'woo-cart-weight'));
        $reasons[$reason->getValue()] = $reason;
        return $reasons;
    }
}