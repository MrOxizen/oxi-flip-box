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
use \Elementor\Group_Control_Typography;
use \Elementor\Group_Control_Background;
use \Elementor\Scheme_Typography;
use Elementor\Icons_Manager;

class Seven extends Widget_Base
{

    public function get_name()
    {
        return 'oxilab-flip-box-seven';
    }

    public function get_title()
    {
        return esc_html__('Layouts Seven', OXI_FLIP_BOX_TEXTDOMAIN);
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
            'oxi_flip_frontend_title',
            [
                'label' => esc_html__('Title', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::TEXT,
                'default' => 'BUSINESS',
            ]
        );
        $this->add_control(
            'oxi_flip_frontend_icon',
            [
                'label' => esc_html__('Icon', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-copyright',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->add_control(
            'oxi_flip_frontend_info',
            [
                'label' => esc_html__('Info', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Certificate in Business Administration.',
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
            'oxi_flip_backend_info',
            [
                'label' => esc_html__('Info', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
            ]
        );
        $this->add_control(
            'oxi_flip_backend_button',
            [
                'label' => esc_html__('Button', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::TEXT,
                'default' => '+ View Application',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 *' => 'transition-duration: {{SIZE}}s; -moz-transition-duration: {{SIZE}}s; -webkit-transition-duration: {{SIZE}}s;',
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
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7' => 'max-width:{{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-boxes-body:after' => 'padding-bottom:{{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'flip_boxes_flip_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'flip_boxes_flip_border_shadow',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon i' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon i' => 'font-size:{{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'section_flip_front_icon_color',
            [
                'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#b2cc53',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon i' => 'color: {{VALUE}};'
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'section_flip_front_icon_background',
                'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
                'types' => ['none', 'classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon i',
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'flip_boxes_flip_icon_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon i',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon i' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-icon' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_front_heading_style',
            [
                'label' => esc_html__('Front Heading Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'section_flip_front_heading_alignment',
            [
                'label' => esc_html__('Title Alignment', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'section_flip_front_heading',
                'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding',
            ]
        );


        $this->add_control(
            'section_flip_front_title_color',
            [
                'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'flip_boxes_flip_heading_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-headding' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_front_info_style',
            [
                'label' => esc_html__('Front Info Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'section_flip_front_info_alignment',
            [
                'label' => esc_html__('Title Alignment', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'section_flip_front_info',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info',
            ]
        );


        $this->add_control(
            'section_flip_front_info_color',
            [
                'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'flip_boxes_flip_info_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-front-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section',
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'flip_boxes_flip_backend_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'flip_boxes_flip_border_backend_shadow',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_backend_desc_style',
            [
                'label' => esc_html__('Backend Info Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'section_flip_backend_desc_alignment',
            [
                'label' => esc_html__('Info Alignment', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'section_flip_back_desc_typ',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info',
            ]
        );


        $this->add_control(
            'section_flip_back_desc_color',
            [
                'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'section_flip_back_desc_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_flip_backend_button_style',
            [
                'label' => esc_html__('Backend Button Style', OXI_FLIP_BOX_TEXTDOMAIN),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control(
            'section_flip_backend_button_alignment',
            [
                'label' => esc_html__('Button Alignment', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', OXI_FLIP_BOX_TEXTDOMAIN),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button' => 'text-align: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'section_flip_button_typo',
                'scheme' => Scheme_Typography::TYPOGRAPHY_3,
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data',
            ]
        );
        $this->start_controls_tabs('section_flip_button_tabs');
        $this->start_controls_tab('normal', ['label' => esc_html__('Normal', SA_EL_ADDONS_TEXTDOMAIN)]);
        $this->add_control(
            'section_flip_button_color',
            [
                'label' => esc_html__('Color', SA_EL_ADDONS_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#181717',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'section_flip_button_background',
            [
                'label' => esc_html__('Background', SA_EL_ADDONS_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_flip_button_border',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data',
            ]
        );
        $this->add_responsive_control(
            'section_flip_button_border_radius',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'flip_boxes_flip_button_box-shadow',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data',
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab('section_flip_button_tabs_hover', ['label' => esc_html__('Hover', SA_EL_ADDONS_TEXTDOMAIN)]);
        $this->add_control(
            'section_flip_button_h_color',
            [
                'label' => esc_html__('Color', SA_EL_ADDONS_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '#ffffff',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'section_flip_button_background_h',
            [
                'label' => esc_html__('Background', SA_EL_ADDONS_TEXTDOMAIN),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'section_flip_button_border_h',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data:hover',
            ]
        );
        $this->add_responsive_control(
            'section_flip_button_border_radius_h',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data:hover' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'flip_boxes_flip_button_box-shadow_h',
                'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data:hover',
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();

        $this->add_responsive_control(
            'flip_boxes_flip_button_padding',
            [
                'label' => esc_html__('Padding', OXI_FLIP_BOX_TEXTDOMAIN),
                'type' => Controls_Manager::DIMENSIONS,
                'separator' => 'before',
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button-data' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'flip_boxes_flip_button_margin',
            [
                'label' => esc_html__('Margin', OXI_FLIP_BOX_TEXTDOMAIN),
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
                    '{{WRAPPER}} .oxi-addons-flip-box-style-7 .oxi-addons-flip-box-back-button' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
        wp_enqueue_style('oxilab-flip-box-two', OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/css/seven.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        $settings = $this->get_settings();
        $icon = $front_hadding = $front_info = $back_hadding = $backinfo = $button = $bt = $bc = '';

        if (isset($settings['oxi_flip_frontend_icon']['value'])) {
            $icon = '<div class="oxi-addons-flip-box-front-icon">
                    ' . $this->Oxilab_Icon_Render($settings['oxi_flip_frontend_icon']) . '
                </div>';
        }
        if ($settings['oxi_flip_frontend_title'] != '') {
            $front_hadding .= '<div class="oxi-addons-flip-box-front-headding">
                        ' . $settings['oxi_flip_frontend_title'] . '
                        </div> ';
        }
        if ($settings['oxi_flip_frontend_info'] != '') {
            $front_info .= '<div class="oxi-addons-flip-box-front-info">
                        ' . $settings['oxi_flip_frontend_info'] . '
                        </div> ';
        }


        if ($settings['oxi_flip_backend_info'] != '') {
            $backinfo .= '<div class="oxi-addons-flip-box-back-info">
                    ' . $settings['oxi_flip_backend_info'] . '
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
        if ($settings['oxi_flip_backend_button'] != '') {
            $button = '<div class="oxi-addons-flip-box-back-button">
                                <a ' . $this->get_render_attribute_string('oxi_flip_link') . ' class="oxi-addons-flip-box-back-button-data">
                                    ' . $settings['oxi_flip_backend_button'] . '  
                                </a>
                                </div> ';
        } elseif ($settings['oxi_flip_backend_button'] == '' && $settings['oxi_flip_backend_link']['url'] != '') {
            $bt = '<a ' . $this->get_render_attribute_string('oxi_flip_link') . '>';
            $bc = '</a>';
        }

        echo '<div class="oxi-addons-flip-box-style-7">
                ' . $bt . '
                <div class="oxi-addons-flip-boxes-body">
                    <div class="oxi-addons-flip-boxes-body-data">
                        <div class="oxi-addons-flip-box-flip ' . $settings['flip_boxes_flip_direction'] . '">
                            <div class="oxi-addons-flip-box-flip-data ' . $settings['flip_boxes_flip_effects'] . '">
                                <div class="oxi-addons-flip-box-style">
                                    <div class="oxi-addons-flip-box-front">
                                        <div class="oxi-addons-flip-box-front-section-box">
                                            <div class="oxi-addons-flip-box-front-section">                                             
                                                ' . $front_hadding . '
                                                ' . $front_info . '
                                                ' . $icon . '
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="oxi-addons-flip-box-back">
                                        <div class="oxi-addons-flip-box-back-section-box">
                                            <div class="oxi-addons-flip-box-back-section">
                                                ' . $backinfo . '
                                                ' . $button . '
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ' . $bc . '
            </div>';
    }
}
