<?php

namespace WCWeightVendor\WPDesk\PluginBuilder\Plugin;

trait HookableParent
{
    /**
     * Hookable objects.
     *
     * @var array[Hookable]
     */
    private $hookable_objects = array();
    /**
     * Add hookable object.
     *
     * @param Hookable|HookablePluginDependant $hookable_object Hookable object.
     */
    public function add_hookable(Hookable $hookable_object)
    {
        if ($hookable_object instanceof HookablePluginDependant) {
            $hookable_object->set_plugin($this);
        }
        $this->hookable_objects[] = $hookable_object;
    }
    /**
     * Get hookable instance.
     *
     * @param string $class_name Class name.
     *
     * @return false|Hookable
     */
    public function get_hookable_instance_by_class_name($class_name)
    {
        foreach ($this->hookable_objects as $hookable_object) {
            if ($hookable_object instanceof $class_name) {
                return $hookable_object;
            }
        }
        return \false;
    }
    /**
     * Run hooks method on all hookable objects.
     */
    protected function hooks_on_hookable_objects()
    {
        /** @var Hookable $hookable_object $hookable_object */
        foreach ($this->hookable_objects as $hookable_object) {
            if ($hookable_object instanceof Conditional) {
                if ($hookable_object::is_needed()) {
                    $hookable_object->hooks();
                }
            } else {
                $hookable_object->hooks();
            }
        }
    }
}
