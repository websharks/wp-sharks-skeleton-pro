<?php
declare (strict_types = 1);
namespace WebSharks\WpSharks\Skeleton\Pro\Classes;

use WebSharks\WpSharks\Skeleton\Pro\Classes;
use WebSharks\WpSharks\Skeleton\Pro\Interfaces;
use WebSharks\WpSharks\Skeleton\Pro\Traits;
#
use WebSharks\WpSharks\Skeleton\Pro\Classes\AppFacades as a;
use WebSharks\WpSharks\Skeleton\Pro\Classes\SCoreFacades as s;
use WebSharks\WpSharks\Skeleton\Pro\Classes\CoreFacades as c;
#
use WebSharks\WpSharks\Core\Classes as SCoreClasses;
use WebSharks\WpSharks\Core\Interfaces as SCoreInterfaces;
use WebSharks\WpSharks\Core\Traits as SCoreTraits;
#
use WebSharks\Core\WpSharksCore\Classes as CoreClasses;
use WebSharks\Core\WpSharksCore\Classes\Core\Base\Exception;
use WebSharks\Core\WpSharksCore\Interfaces as CoreInterfaces;
use WebSharks\Core\WpSharksCore\Traits as CoreTraits;
#
use function assert as debug;
use function get_defined_vars as vars;

/**
 * App.
 *
60624.34776 Initial release.
 */
class App extends SCoreClasses\App
{
    /**
     * Version.
     *
60624.34776
     *
     * @type string Version.
     */
    const VERSION = '160624.34776'; //v//

    /**
     * Constructor.
     *
60624.34776 Initial release.
     *
     * @param array $instance Instance args.
     */
    public function __construct(array $instance = [])
    {
        $instance_base = [
            '©di' => [
                '©default_rule' => [
                    'new_instances' => [
                    ],
                ],
            ],

            '§specs' => [
                /*
                    '§is_pro'          => false,
                    '§in_wp'           => false,
                    '§is_network_wide' => false,

                    '§type'            => '',
                    '§file'            => '',
                */
            ],

            '©brand' => [
                /*
                    '©name'        => '',
                    '©acronym'     => '',

                    '©slug'        => '',
                    '©text_domain' => '',
                    '©var'         => '',

                    '§domain'      => '',
                    '§domain_path' => '',
                */
            ],

            '§pro_option_keys' => [],
            '§default_options' => [],

            '§conflicts' => [
                '§plugins' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
                '§themes' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
                '§deactivatable_plugins' => [
                    /*
                        '[slug]'  => '[name]',
                    */
                ],
            ],
            '§dependencies' => [
                '§plugins' => [
                    /*
                        '[slug]' => [
                            'name'        => '',
                            'url'         => '',
                            'archive_url' => '',
                            'in_wp'       => true,
                            'test'        => function(string $slug) {},

                            A test function is optional.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `reason`      = One of: `needs-upgrade|needs-downgrade`.
                                - `min_version` = Min version, if `reason=needs-upgrade`.
                                - `max_version` = Max version, if `reason=needs-downgrade`.
                        ],
                    */
                ],
                '§themes' => [
                    /*
                        '[slug]' => [
                            'name'        => '',
                            'url'         => '',
                            'archive_url' => '',
                            'in_wp'       => true,
                            'test'        => function(string $slug) {},

                            A test function is optional.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `reason`      = One of: `needs-upgrade|needs-downgrade`.
                                - `min_version` = Min version, if `reason=needs-upgrade`.
                                - `max_version` = Max version, if `reason=needs-downgrade`.
                        ],
                    */
                ],
                '§others' => [
                    /*
                        '[arbitrary key]' => [
                            'name'        => '', // Short plain-text name; i.e., '[name]' Required
                            'description' => '', // Brief rich-text description; i.e., It requires [description].
                            'test'        => function(string $key) {},

                            A test function is required.
                            A successful test must return nothing.
                            A failed test must return an array with:
                                - `how_to_resolve` = Brief rich-text description; i.e., → To resolve, [how_to_resolve].
                                - `cap_to_resolve` = Cap required to satisfy; e.g., `manage_options`.
                        ],
                    */
                ],
            ],
        ];
        parent::__construct($instance_base, $instance);
    }

    /**
     * Early hook setup handler.
     *
60624.34776 Initial release.
     */
    protected function onSetupEarlyHooks()
    {
        parent::onSetupEarlyHooks();
    }

    /**
     * Other hook setup handler.
     *
60624.34776 Initial release.
     */
    protected function onSetupOtherHooks()
    {
        parent::onSetupOtherHooks();
    }
}
