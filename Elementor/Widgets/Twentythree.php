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
use Elementor\Scheme_Color;
use Elementor\Icons_Manager;

class Twentythree extends Widget_Base {

    public function get_name() {
        return 'oxilab-flip-box-twentythree';
    }

    public function get_title() {
        return esc_html__('Layouts Twentythree', OXI_FLIP_BOX_TEXTDOMAIN);
    }

    public function get_icon() {
        return 'eicon-menu-bar';
    }

    public function get_categories() {
        return ['oxilab-flipbox-extension'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
                'oxi_flip_frontend_section', [
            'label' => esc_html__('Frontend Section', OXI_FLIP_BOX_TEXTDOMAIN),
                ]
        );
        $this->add_control(
                'oxi_flip_frontend_icon',
                [
                    'label' => esc_html__('Icon', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-user-alt',
                        'library' => 'fa-solid',
                    ],
                ]
        );
        $this->add_control(
                'oxi_flip_frontend_title',
                [
                    'label' => esc_html__('Title', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::TEXT,
                    'default' => 'User Friendly',
                ]
        );

        $this->add_control(
                'oxi_flip_frontend_description',
                [
                    'label' => esc_html__('Description', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::TEXTAREA,
                    'default' => ''
                    . 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.',
                ]
        );

        $this->end_controls_section();
        $this->start_controls_section(
                'oxi_flip_backend_section', [
            'label' => esc_html__('Backend Section', OXI_FLIP_BOX_TEXTDOMAIN),
                ]
        );

        $this->add_control(
                'oxi_flip_backend_title',
                [
                    'label' => esc_html__('Title', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::TEXT,
                    'default' => 'Usre Friendly',
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
                'oxi_flip_backend_link',
                [
                    'label' => esc_html__('Link', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::URL,
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'section_flip_style', [
            'label' => esc_html__('Flip Style Button', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_control(
                'flip_boxes_flip_direction',
                [
                    'label' => esc_html__('Flip Direction ', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::SELECT,
                    'default' => 'oxi-addons-flip-box-flip-left-to-right',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 *' => 'transition-duration: {{SIZE}}s;',
                    ],
                ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
                'section_flip_gen_style', [
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23' => 'max-width:{{SIZE}}{{UNIT}};',
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
                            'max' => 2000,
                            'step' => 1,
                        ],
                        '%' => [
                            'min' => 1,
                            'max' => 200,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 1,
                            'max' => 100,
                            'step' => 1,
                        ]
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-boxes-body:after ' => 'padding-bottom:{{SIZE}}{{UNIT}};',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-section-box' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-section-box' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-section' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                        '{{WRAPPER}} .oxi-flip-box-col-style-23' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};', '{{WRAPPER}} .oxi-addons-flip-box-style-23' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );


        $this->end_controls_section();

        $this->start_controls_section(
                'section_flip_front_style', [
            'label' => esc_html__('Front Style', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_group_control(
                Group_Control_Background::get_type(), [
            'name' => 'section_flip_front_background',
            'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
            'types' => ['none', 'classic', 'gradient', 'video'],
            'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23  .oxi-addons-flip-box-front-section-box',
                ]
        );
        $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'flip_boxes_flip_front_border',
                    'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-section',
                ]
        );
        $this->add_group_control(
                Group_Control_Box_Shadow::get_type(), [
            'name' => 'flip_boxes_flip_front_border_shadow',
            'selector' => '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-section-box',
                ]
        );
        $this->add_responsive_control(
                'flip_boxes_flip_front_border_padding',
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
                        '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'flip_boxes_flip_front_border_margin',
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
                        '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-section-box' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'section_flip_front_icon_style', [
            'label' => esc_html__('Front Icon Style', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_responsive_control(
                'sa_flip_boxes_flip_icon_width_height',
                [
                    'label' => esc_html__('Width ', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::SLIDER,
                    'size_units' => ['px', '%', 'em'],
                    'range' => [
                        'px' => [
                            'min' => 1,
                            'max' => 600,
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
                        '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-icon i' => 'width:{{SIZE}}{{UNIT}}; height:{{SIZE}}{{UNIT}};',
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
                            'max' => 100,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 1,
                            'max' => 50,
                            'step' => 1,
                        ]
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-icon i' => 'font-size:{{SIZE}}{{UNIT}};',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-icon i' => 'color: {{VALUE}};'
                    ],
                ]
        );

        $this->add_group_control(
                Group_Control_Background::get_type(), [
            'name' => 'section_flip_front_icon_background',
            'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
            'types' => ['none', 'classic', 'gradient', 'video'],
            'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-icon i',
                ]
        );
        $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'flip_boxes_flip_icon_border',
                    'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-icon i',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-icon i' => 'border-radius:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'section_flip_frontend_heading_style', [
            'label' => esc_html__('Frontend Heading Style', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_responsive_control(
                'section_flip_frontend_heading_alignment',
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
                        '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-headding' => 'text-align: {{VALUE}};',
                    ],
                ]
        );
        $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'section_flip_frontend_heading',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-headding',
                ]
        );


        $this->add_control(
                'section_flip_frontend_title_color',
                [
                    'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::COLOR,
                    'default' => '#009e79',
                    'selectors' => [
                        '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-headding' => 'color: {{VALUE}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'flip_boxes_flip_frontend_heading_padding',
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
                        '{{WRAPPER}}  .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-headding' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'section_flip_frontend_desc_style', [
            'label' => esc_html__('Frontend Info Style', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_responsive_control(
                'section_flip_frontend_desc_alignment',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-info' => 'text-align: {{VALUE}};',
                    ],
                ]
        );
        $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'section_flip_desc_heading',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_3,
                    'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-info',
                ]
        );


        $this->add_control(
                'section_flip_desc_color',
                [
                    'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::COLOR,
                    'default' => '#3d3d3d',
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-info' => 'color: {{VALUE}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'flip_boxes_flip_desc_padding',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-front-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'section_flip_backend_style', [
            'label' => esc_html__('Backend Style', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_group_control(
                Group_Control_Background::get_type(), [
            'name' => 'section_flip_backend_background',
            'label' => __('Background', OXI_FLIP_BOX_TEXTDOMAIN),
            'types' => ['none', 'classic', 'gradient', 'video'],
            'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-section-box',
                ]
        );
        $this->add_group_control(
                Group_Control_Border::get_type(),
                [
                    'name' => 'flip_boxes_flip_backend_border',
                    'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-section',
                ]
        );
        $this->add_group_control(
                Group_Control_Box_Shadow::get_type(), [
            'name' => 'flip_boxes_flip_border_backend_shadow',
            'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-section-box',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-section' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'flip_boxes_flip_backend_margin',
                [
                    'label' => esc_html__('Margin', OXI_FLIP_BOX_TEXTDOMAIN),
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-section-box' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'section_flip_backend_heading_style', [
            'label' => esc_html__('Backend Heading Style', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_responsive_control(
                'section_flip_backend_heading_alignment',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-headding' => 'text-align: {{VALUE}};',
                    ],
                ]
        );
        $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'section_flip_backend_heading',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_1,
                    'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-headding',
                ]
        );


        $this->add_control(
                'section_flip_backend_title_color',
                [
                    'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::COLOR,
                    'default' => '#FFF',
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-headding' => 'color: {{VALUE}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'flip_boxes_flip_backend_heading_padding',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-headding' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
                'section_flip_backend_line', [
            'label' => esc_html__('Backend Line', OXI_FLIP_BOX_TEXTDOMAIN),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );
        $this->add_responsive_control(
                'flip_backend_line_width',
                [
                    'label' => esc_html__('Width', OXI_FLIP_BOX_TEXTDOMAIN),
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
                            'max' => 100,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 1,
                            'max' => 50,
                            'step' => 1,
                        ]
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-headding-border' => 'width:{{SIZE}}{{UNIT}};',
                    ],
                ]
        );

        $this->add_responsive_control(
                'flip_backend_line_height',
                [
                    'label' => esc_html__('Height', OXI_FLIP_BOX_TEXTDOMAIN),
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
                            'max' => 200,
                            'step' => 1,
                        ],
                        'em' => [
                            'min' => 1,
                            'max' => 50,
                            'step' => 1,
                        ]
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-headding-border' => 'height:{{SIZE}}{{UNIT}};',
                    ],
                ]
        );

        $this->add_control(
                'flip_backend_line_color',
                [
                    'label' => esc_html__('Line Color', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::COLOR,
                    'default' => '#FFF',
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-headding-border' => 'background: {{VALUE}};',
                    ],
                ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
                'section_flip_backend_desc_style', [
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-info' => 'text-align: {{VALUE}};',
                    ],
                ]
        );
        $this->add_group_control(
                Group_Control_Typography::get_type(),
                [
                    'name' => 'section_flip_backend_desc_heading',
                    'scheme' => Scheme_Typography::TYPOGRAPHY_3,
                    'selector' => '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-info',
                ]
        );


        $this->add_control(
                'section_flip_backend_desc_color',
                [
                    'label' => esc_html__('Color', OXI_FLIP_BOX_TEXTDOMAIN),
                    'type' => Controls_Manager::COLOR,
                    'default' => '#FFF',
                    'selectors' => [
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-info' => 'color: {{VALUE}};',
                    ],
                ]
        );
        $this->add_responsive_control(
                'flip_backend_boxes_flip_desc_padding',
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
                        '{{WRAPPER}} .oxi-addons-flip-box-style-23 .oxi-addons-flip-box-back-info' => 'padding:{{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
                'oxi_flip_section_support', [
            'label' => __('Unable To Use or Found Bugs?', OXI_FLIP_BOX_TEXTDOMAIN)
                ]
        );
        $this->add_control(
                'oxi_flip_section_support_get', [
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
            'description' => 'Are you in need of a feature that’s not available in our plugin or got some bugs? Feel free to do a <a href="https://wordpress.org/support/plugin/sb-image-hover-effects/" target="_blank">Support</a> request.'
                ]
        );
        $this->end_controls_section();
    }

    /**
     * Elementor icon render
     *
     * @return void
     */
    public function Oxilab_Icon_Render($settings) {
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

    public function render() {

        wp_enqueue_style('oxilab-flip-boxes', OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/css/flip-boxes.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        wp_enqueue_style('oxilab-flip-box-twentythree', OXI_FLIP_BOX_UPLOAD_URL . '/Elementor/assets/css/twentythree.css', false, OXI_FLIP_BOX_PLUGIN_VERSION);
        $settings = $this->get_settings();
        $icon = $image = $backinfo = $front_hadding = $front_info = $back_hadding = $back_icon = $fronticon = $img_icon = $bt = $bc = '';

        if (isset($settings['oxi_flip_frontend_icon']['value'])) {
            $fronticon = '<div class="oxi-addons-flip-box-front-icon">
                            ' . $this->Oxilab_Icon_Render($settings['oxi_flip_frontend_icon']) . '
                        </div>';
        }
        if ($settings['oxi_flip_frontend_title'] != '') {
            $front_hadding = ' <div class="oxi-addons-flip-box-front-headding">
                                    ' . $settings['oxi_flip_frontend_title'] . '
                                 </div>';
        }
        if ($settings['oxi_flip_frontend_description'] != '') {
            $front_info .= '<div class="oxi-addons-flip-box-front-info">
                                ' . $settings['oxi_flip_frontend_description'] . '
                            </div> ';
        }
        if ($settings['oxi_flip_backend_title'] != '') {
            $back_hadding = '  <div class="oxi-addons-flip-box-back-headding">
                                    ' . $settings['oxi_flip_backend_title'] . '
                                   <span class="oxi-addons-flip-box-back-headding-border"></span>
                               </div>';
        }
        if ($settings['oxi_flip_backend_info'] != '') {
            $backinfo = '   <div class="oxi-addons-flip-box-back-info">
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
        if ($settings['oxi_flip_backend_link']['url'] != '') {
            $bt = '<a ' . $this->get_render_attribute_string('oxi_flip_link') . '>';
            $bc = '</a>';
        }


        echo '      <div class="oxi-flip-box-col-style-23 ">
                        <div class="oxi-addons-flip-box-style-23">
                            ' . $bt . '
                                <div class="oxi-addons-flip-boxes-body">
                                    <div class="oxi-addons-flip-boxes-body-data">
                                        <div class="oxi-addons-flip-box-flip ' . $settings['flip_boxes_flip_direction'] . '">
                                            <div class="oxi-addons-flip-box-flip-data ' . $settings['flip_boxes_flip_effects'] . '">
                                                <div class="oxi-addons-flip-box-style">
                                                    <div class="oxi-addons-flip-box-front">
                                                        <div class="oxi-addons-flip-box-front-section-box">
                                                            <div class="oxi-addons-flip-box-front-section">
                                                                ' . $fronticon . ' 
                                                                ' . $front_hadding . '
                                                                ' . $front_info . '
                                                            </div>  
                                                        </div>
                                                    </div>
                                                    <div class="oxi-addons-flip-box-back">
                                                        <div class="oxi-addons-flip-box-back-section-box">
                                                            <div class="oxi-addons-flip-box-back-section">
                                                                ' . $back_hadding . '
                                                                ' . $backinfo . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         ' . $bc . '
                        </div>
                    </div>';
    }

}
