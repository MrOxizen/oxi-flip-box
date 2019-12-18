<?php

namespace OXI_FLIP_BOX_UPLOAD_PATH\Elementor\Widgets;

/**
 * Description of Widgets
 *
 * @author biplo
 */

use \Elementor\Controls_Manager as Controls_Manager;
use \Elementor\Widget_Base as Widget_Base;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Background;
use Elementor\Icons_Manager;

class Eight extends Widget_Base
{

    public function get_name()
    {
        return 'oxilab-flip-box-eight';
    }

    public function get_title()
    {
        return esc_html__('Layouts Eight', OXI_FLIP_BOX_TEXTDOMAIN);
    }

    public function get_icon()
    {
        return 'eicon-flip-box';
    }

    public function get_categories()
    {
        return ['oxilab-flipbox-extension'];
    }

    protected function _register_controls()
    {
        $this->start_controls_section(
            'oxi_flip_frontend_section',
            [
                'label' => esc_html__('Frontend Section', OXI_FLIP_BOX_TEXTDOMAIN),
            ]
        );

        $this->add_control(
            'oxi_flip_frontend_icon',
            [
                'label' => esc_html__('Icon', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-balance-scale',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'oxi_flip_backend_section',
            [
                'label' => esc_html__('Backend Section', OXI_FLIP_BOX_TEXTDOMAIN),
            ]
        );
        $this->add_control(
            'oxi_flip_backend_icon',
            [
                'label' => esc_html__('Icon', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-balance-scale',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->add_control(
            'oxi_flip_backend_link',
            [
                'label' => esc_html__('Link', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_style',
            [
                'label' => esc_html__('Flip Style Button', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'flip_boxes_flip_direction',
            [
                'label' => esc_html__('Flip Direction ', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SELECT,
                'default' => 'oxi-addons-flip-box-flip-top-to-bottom',
                'options' => [
                    'oxi-addons-flip-box-flip-top-to-bottom' => __('Top To Bottom', OXI_FLIP_BOX_TEXTDOMAIN),
                    'oxi-addons-flip-box-flip-bottom-to-top' => __('Bottom To Top', OXI_FLIP_BOX_TEXTDOMAIN),
                    'oxi-addons-flip-box-flip-left-to-right' => __('Left To Right', OXI_FLIP_BOX_TEXTDOMAIN),
                    'oxi-addons-flip-box-flip-right-to-left' => __('Right To Left', OXI_FLIP_BOX_TEXTDOMAIN),
                ],
            ]
        );
        $this->add_control(
            'flip_boxes_flip_effects',
            [
                'label' => esc_html__('Flip Effects ', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SELECT,
                'default' => 'easing_easeInOutExpo',
                'options' => [
                    'easing_easeInOutExpo' => __('EaseOutBack', OXI_FLIP_BOX_TEXTDOMAIN),
                    'easing_easeInOutCirc' => __('EaseInOutExpo', OXI_FLIP_BOX_TEXTDOMAIN),
                    'easing_easeOutBack' => __('EaseInOutCirc', OXI_FLIP_BOX_TEXTDOMAIN),
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_flip_boxes_flip_time',
            [
                'label' => esc_html__('Flip Time', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10,
                        'step' => 0.01,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 *' => 'transition-duration: {{SIZE}}s; -moz-transition-duration: {{SIZE}}s; -webkit-transition-duration: {{SIZE}}s;',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_gen_style',
            [
                'label' => esc_html__('General Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );


        $this->add_responsive_control(
            'sa_flip_boxes_flip_width',
            [
                'label' => esc_html__('Width', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'default' => [
                    'size' => 200,
                    'unit' => 'px',
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8' => 'max-width:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_flip_boxes_flip_height',
            [
                'label' => esc_html__('Height', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 1000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-boxes-body:after' => 'padding-bottom:{{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'sa_flip_boxes_flip_radius',
            [
                'label' => esc_html__('Border Radius', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_flip_boxes_flip_margin',
            [
                'label' => esc_html__('Margin', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_front_style',
            [
                'label' => esc_html__('Front Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_flip_front_background',
                'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
                'types' => ['none', 'classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'flip_boxes_flip_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'flip_boxes_flip_border_shadow',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section',
            ]
        );
        $this->add_responsive_control(
            'flip_boxes_flip_front_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_front_icon_style',
            [
                'label' => esc_html__('Front Icon Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'sa_flip_boxes_flip_icon_width_height',
            [
                'label' => esc_html__('Width Height', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 300,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 10,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon i' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_flip_boxes_flip_icon_size',
            [
                'label' => esc_html__('Size', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 10,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon i' => 'font-size:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_flip_front_icon_color',
            [
                'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon i' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_flip_front_icon_background',
                'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
                'types' => ['none', 'classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon i',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'flip_boxes_flip_icon_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon i',
            ]
        );

        $this->add_responsive_control(
            'flip_boxes_flip_icon_radius',
            [
                'label' => esc_html__('Border Radius', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon i' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'flip_boxes_flip_front_icon_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-front-icon' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'section_flip_backend_style',
            [
                'label' => esc_html__('Backend Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_flip_backend_background',
                'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
                'types' => ['none', 'classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'flip_boxes_flip_backend_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'flip_boxes_flip_border_backend_shadow',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section',
            ]
        );
        $this->add_responsive_control(
            'flip_boxes_flip_backend_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
            'section_flip_back_icon_style',
            [
                'label' => esc_html__('Back Icon Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_responsive_control(
            'sa_flip_boxes_flip_back_icon_width_height',
            [
                'label' => esc_html__('Width Height', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 300,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 10,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon i' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'sa_flip_boxes_flip_back_icon_size',
            [
                'label' => esc_html__('Size', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 200,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 50,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 10,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon i' => 'font-size:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_flip_back_icon_color',
            [
                'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#00717d',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon i' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_flip_back_icon_background',
                'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
                'types' => ['none', 'classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon i',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'flip_boxes_flip_back_icon_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon i',
            ]
        );

        $this->add_responsive_control(
            'flip_boxes_flip_back_icon_radius',
            [
                'label' => esc_html__('Border Radius', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon i' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'flip_boxes_flip_back_icon_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'range' => [
                    'px' => [
                        'min' => 1,
                        'max' => 2000,
                        'step' => 1,
                    ],
                    '%' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ],
                    'em' => [
                        'min' => 1,
                        'max' => 100,
                        'step' => 1,
                    ]
                ],
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-8 .oxi-addons-flip-box-back-icon' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'oxi_flip_section_support',
            [
                'label' => __('Unable To Use or Found Bugs?', OXI_FLIP_BOX_TEXTDOMAIN)
            ]
        );
        $this->add_control(
            'oxi_flip_section_support_get',
            [
                'label' => __('Need Support', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::CHOOSE,
                'toggle' => FALSE,
                'options' => [
                    '1' => [
                        'title' => __('', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fas fa-headset',
                    ],
                ],
                'default' => '1',
                'description' => 'Are you in need of a feature that’s not available in our plugin or got some bugs? Feel free to do a <a href="https://wordpress.org/support/plugin/image-hover-effects-ultimate-visual-composer/" target="_blank">Support</a> request.'
            ]
        );
        $this->end_controls_section();
    }

    /**
     * Elementor icon render
     *
     * @return void
     */
    public function Oxilab_Icon_Render($settings)
    {
        if (version_compare(ELEMENTOR_VERSION, '2.6', '>=')) {
            ob_start();
            Icons_Manager::render_icon($settings, ['aria-hidden' => 'true']);
            $list = ob_get_contents();
            ob_end_clean();
            $rt = $list;
        } else {
            $rt = '<i aria-hidden="true" class="' . esc_attr($settings) . '"></i>';
        }
        return $rt;
    }

    public function render()
    {

        wp_enqueue_style('oxilab-flip-boxes', OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/css/flip-boxes.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_style('oxilab-flip-box-two', OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/css/eight.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        $settings = $this->get_settings();
        $fronticon = $backicon = $bt = $bc = '';

        if (isset($settings['oxi_flip_frontend_icon']['value'])) {
            $fronticon = '<div class="oxi-addons-flip-box-front-icon">
                    ' . $this->Oxilab_Icon_Render($settings['oxi_flip_frontend_icon']) . '
                </div>';
        }

        if (isset($settings['oxi_flip_backend_icon']['value'])) {
            $backicon = '<div class="oxi-addons-flip-box-back-icon">
                    ' . $this->Oxilab_Icon_Render($settings['oxi_flip_backend_icon']) . '
                </div>';
        }

        $this->add_render_attribute('oxi_flip_link', [
            'href' => esc_attr($settings['oxi_flip_backend_link']['url']),
        ]);

        if ($settings['oxi_flip_backend_link']['is_external']) {
            $this->add_render_attribute('oxi_flip_link', 'target', '_blank');
        }

        if ($settings['oxi_flip_backend_link']['nofollow']) {
            $this->add_render_attribute('oxi_flip_link', 'rel', 'nofollow');
        }
        if ($settings['oxi_flip_backend_link']['url'] != '') {
            $bt = '<a ' . $this->get_render_attribute_string('oxi_flip_link') . '>';
            $bc = '</a>';
        }

        echo '<div class="oxi-addons-flip-box-style-8">' . $bt . '
                <div class="oxi-addons-flip-boxes-body">
                    <div class="oxi-addons-flip-boxes-body-data">
                        <div class="oxi-addons-flip-box-flip ' . $settings['flip_boxes_flip_direction'] . '">
                            <div class="oxi-addons-flip-box-flip-data ' . $settings['flip_boxes_flip_effects'] . '">
                                <div class="oxi-addons-flip-box-style">
                                    <div class="oxi-addons-flip-box-front">
                                        <div class="oxi-addons-flip-box-front-section-box">
                                            <div class="oxi-addons-flip-box-front-section">                                             
                                                ' . $fronticon . '
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="oxi-addons-flip-box-back">
                                        <div class="oxi-addons-flip-box-back-section-box">
                                            <div class="oxi-addons-flip-box-back-section">
                                                ' . $backicon . '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>' . $bc . '
            </div>';
    }
}
