<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_3c4ec9c562b3c6fb36f1760d22af220ae46ea28b187c00dd18add1f55a1035e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a98bc194763062a38ca1739a715479726bc37c878b19fd023156324e0665a972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98bc194763062a38ca1739a715479726bc37c878b19fd023156324e0665a972->enter($__internal_a98bc194763062a38ca1739a715479726bc37c878b19fd023156324e0665a972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_87aff0dfecab9ff2b1858ebc387fd1a633a3a694c3517678af8fd846a7c4113a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87aff0dfecab9ff2b1858ebc387fd1a633a3a694c3517678af8fd846a7c4113a->enter($__internal_87aff0dfecab9ff2b1858ebc387fd1a633a3a694c3517678af8fd846a7c4113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_a98bc194763062a38ca1739a715479726bc37c878b19fd023156324e0665a972->leave($__internal_a98bc194763062a38ca1739a715479726bc37c878b19fd023156324e0665a972_prof);

        
        $__internal_87aff0dfecab9ff2b1858ebc387fd1a633a3a694c3517678af8fd846a7c4113a->leave($__internal_87aff0dfecab9ff2b1858ebc387fd1a633a3a694c3517678af8fd846a7c4113a_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_449f658efec660819da4fe284fabac2628e3103e4a62fc6f253886222273d6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449f658efec660819da4fe284fabac2628e3103e4a62fc6f253886222273d6e7->enter($__internal_449f658efec660819da4fe284fabac2628e3103e4a62fc6f253886222273d6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_19a93f3793f38fd1bf466a37c624d20ed9e90417dba867304bf4ca73cb35e6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a93f3793f38fd1bf466a37c624d20ed9e90417dba867304bf4ca73cb35e6a2->enter($__internal_19a93f3793f38fd1bf466a37c624d20ed9e90417dba867304bf4ca73cb35e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_19a93f3793f38fd1bf466a37c624d20ed9e90417dba867304bf4ca73cb35e6a2->leave($__internal_19a93f3793f38fd1bf466a37c624d20ed9e90417dba867304bf4ca73cb35e6a2_prof);

        
        $__internal_449f658efec660819da4fe284fabac2628e3103e4a62fc6f253886222273d6e7->leave($__internal_449f658efec660819da4fe284fabac2628e3103e4a62fc6f253886222273d6e7_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_88ef30fcae3056143e9a11032c05e278e635c704137667ea7e37dcb0733d6dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ef30fcae3056143e9a11032c05e278e635c704137667ea7e37dcb0733d6dbb->enter($__internal_88ef30fcae3056143e9a11032c05e278e635c704137667ea7e37dcb0733d6dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_5dbd8ef4a62b23525c068f0550669917e2f4f4ef771507a0d00329999651a2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbd8ef4a62b23525c068f0550669917e2f4f4ef771507a0d00329999651a2a0->enter($__internal_5dbd8ef4a62b23525c068f0550669917e2f4f4ef771507a0d00329999651a2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_5dbd8ef4a62b23525c068f0550669917e2f4f4ef771507a0d00329999651a2a0->leave($__internal_5dbd8ef4a62b23525c068f0550669917e2f4f4ef771507a0d00329999651a2a0_prof);

        
        $__internal_88ef30fcae3056143e9a11032c05e278e635c704137667ea7e37dcb0733d6dbb->leave($__internal_88ef30fcae3056143e9a11032c05e278e635c704137667ea7e37dcb0733d6dbb_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ba71e70232c75e66ade6534ff748a3325df012b01404858b1ada3a8b92885266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba71e70232c75e66ade6534ff748a3325df012b01404858b1ada3a8b92885266->enter($__internal_ba71e70232c75e66ade6534ff748a3325df012b01404858b1ada3a8b92885266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cf91c5eaf1502ed7c10823a4855aa9922034ceb3c2a250879505749ac7b6e0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf91c5eaf1502ed7c10823a4855aa9922034ceb3c2a250879505749ac7b6e0c9->enter($__internal_cf91c5eaf1502ed7c10823a4855aa9922034ceb3c2a250879505749ac7b6e0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cf91c5eaf1502ed7c10823a4855aa9922034ceb3c2a250879505749ac7b6e0c9->leave($__internal_cf91c5eaf1502ed7c10823a4855aa9922034ceb3c2a250879505749ac7b6e0c9_prof);

        
        $__internal_ba71e70232c75e66ade6534ff748a3325df012b01404858b1ada3a8b92885266->leave($__internal_ba71e70232c75e66ade6534ff748a3325df012b01404858b1ada3a8b92885266_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_c942ecf06de55545aa0fb85535bd19c8197c0b0bd09fc1ba0564c275ec9a174c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c942ecf06de55545aa0fb85535bd19c8197c0b0bd09fc1ba0564c275ec9a174c->enter($__internal_c942ecf06de55545aa0fb85535bd19c8197c0b0bd09fc1ba0564c275ec9a174c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_500962611a1b4c8b954b78e529fad1c5d354f828314bf5f5078687b23c403660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500962611a1b4c8b954b78e529fad1c5d354f828314bf5f5078687b23c403660->enter($__internal_500962611a1b4c8b954b78e529fad1c5d354f828314bf5f5078687b23c403660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_8313a82ad8f7dbf385061c079234e5a3dc44dd0d960d4940e76a35ce93c2dda7 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_ba021ce9240ef85c49647c0431b14c265c144f57f9f9c6632f842a74b7aebac8 = "{{") && ('' === $__internal_ba021ce9240ef85c49647c0431b14c265c144f57f9f9c6632f842a74b7aebac8 || 0 === strpos($__internal_8313a82ad8f7dbf385061c079234e5a3dc44dd0d960d4940e76a35ce93c2dda7, $__internal_ba021ce9240ef85c49647c0431b14c265c144f57f9f9c6632f842a74b7aebac8)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_500962611a1b4c8b954b78e529fad1c5d354f828314bf5f5078687b23c403660->leave($__internal_500962611a1b4c8b954b78e529fad1c5d354f828314bf5f5078687b23c403660_prof);

        
        $__internal_c942ecf06de55545aa0fb85535bd19c8197c0b0bd09fc1ba0564c275ec9a174c->leave($__internal_c942ecf06de55545aa0fb85535bd19c8197c0b0bd09fc1ba0564c275ec9a174c_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_df0e6cf05d8f3a63876197e2c06adad37c382c7c1f971361e6ad79a3bacfffe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df0e6cf05d8f3a63876197e2c06adad37c382c7c1f971361e6ad79a3bacfffe1->enter($__internal_df0e6cf05d8f3a63876197e2c06adad37c382c7c1f971361e6ad79a3bacfffe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_330c4ff2576350ab3479b2e8aeab15790cd2ab1579e93b254de95fbac8a822ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330c4ff2576350ab3479b2e8aeab15790cd2ab1579e93b254de95fbac8a822ff->enter($__internal_330c4ff2576350ab3479b2e8aeab15790cd2ab1579e93b254de95fbac8a822ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_330c4ff2576350ab3479b2e8aeab15790cd2ab1579e93b254de95fbac8a822ff->leave($__internal_330c4ff2576350ab3479b2e8aeab15790cd2ab1579e93b254de95fbac8a822ff_prof);

        
        $__internal_df0e6cf05d8f3a63876197e2c06adad37c382c7c1f971361e6ad79a3bacfffe1->leave($__internal_df0e6cf05d8f3a63876197e2c06adad37c382c7c1f971361e6ad79a3bacfffe1_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_986982a073e27dce854584bc93ec74d91f754a9863ed17e0cf5f474282f2fa26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_986982a073e27dce854584bc93ec74d91f754a9863ed17e0cf5f474282f2fa26->enter($__internal_986982a073e27dce854584bc93ec74d91f754a9863ed17e0cf5f474282f2fa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_7c4c99fe85671f655f0d65edfda34adaf83aed1be29723ab71e5ec0aa992489f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c4c99fe85671f655f0d65edfda34adaf83aed1be29723ab71e5ec0aa992489f->enter($__internal_7c4c99fe85671f655f0d65edfda34adaf83aed1be29723ab71e5ec0aa992489f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_7c4c99fe85671f655f0d65edfda34adaf83aed1be29723ab71e5ec0aa992489f->leave($__internal_7c4c99fe85671f655f0d65edfda34adaf83aed1be29723ab71e5ec0aa992489f_prof);

        
        $__internal_986982a073e27dce854584bc93ec74d91f754a9863ed17e0cf5f474282f2fa26->leave($__internal_986982a073e27dce854584bc93ec74d91f754a9863ed17e0cf5f474282f2fa26_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3c570a3d0dacac0498836981554ab46420e613a27360d59ae3a8d58b602e3176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c570a3d0dacac0498836981554ab46420e613a27360d59ae3a8d58b602e3176->enter($__internal_3c570a3d0dacac0498836981554ab46420e613a27360d59ae3a8d58b602e3176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_794dab06e4a4bd4ceca8f921ac58036035be800b18138f35a8275b922d797096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794dab06e4a4bd4ceca8f921ac58036035be800b18138f35a8275b922d797096->enter($__internal_794dab06e4a4bd4ceca8f921ac58036035be800b18138f35a8275b922d797096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_794dab06e4a4bd4ceca8f921ac58036035be800b18138f35a8275b922d797096->leave($__internal_794dab06e4a4bd4ceca8f921ac58036035be800b18138f35a8275b922d797096_prof);

        
        $__internal_3c570a3d0dacac0498836981554ab46420e613a27360d59ae3a8d58b602e3176->leave($__internal_3c570a3d0dacac0498836981554ab46420e613a27360d59ae3a8d58b602e3176_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2b16f19205bf5d8a16068afa307150fe8304025bcc35d8832421bb3c9842795e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b16f19205bf5d8a16068afa307150fe8304025bcc35d8832421bb3c9842795e->enter($__internal_2b16f19205bf5d8a16068afa307150fe8304025bcc35d8832421bb3c9842795e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_fba5f278e022fe617c0b99c0f0e8fe57c9e4bcb37f4a8a91e21767b9a4ab4c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba5f278e022fe617c0b99c0f0e8fe57c9e4bcb37f4a8a91e21767b9a4ab4c62->enter($__internal_fba5f278e022fe617c0b99c0f0e8fe57c9e4bcb37f4a8a91e21767b9a4ab4c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_fba5f278e022fe617c0b99c0f0e8fe57c9e4bcb37f4a8a91e21767b9a4ab4c62->leave($__internal_fba5f278e022fe617c0b99c0f0e8fe57c9e4bcb37f4a8a91e21767b9a4ab4c62_prof);

        
        $__internal_2b16f19205bf5d8a16068afa307150fe8304025bcc35d8832421bb3c9842795e->leave($__internal_2b16f19205bf5d8a16068afa307150fe8304025bcc35d8832421bb3c9842795e_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9fb2cd8e8e46bacde0925b8187476e91b56fff33c2605f8658c3bf3e1ced6bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fb2cd8e8e46bacde0925b8187476e91b56fff33c2605f8658c3bf3e1ced6bb6->enter($__internal_9fb2cd8e8e46bacde0925b8187476e91b56fff33c2605f8658c3bf3e1ced6bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_e10b2ede01eb05ea62993dd4036ee8d76958264c02350d687a5436ec473b4fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10b2ede01eb05ea62993dd4036ee8d76958264c02350d687a5436ec473b4fcc->enter($__internal_e10b2ede01eb05ea62993dd4036ee8d76958264c02350d687a5436ec473b4fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_e10b2ede01eb05ea62993dd4036ee8d76958264c02350d687a5436ec473b4fcc->leave($__internal_e10b2ede01eb05ea62993dd4036ee8d76958264c02350d687a5436ec473b4fcc_prof);

        
        $__internal_9fb2cd8e8e46bacde0925b8187476e91b56fff33c2605f8658c3bf3e1ced6bb6->leave($__internal_9fb2cd8e8e46bacde0925b8187476e91b56fff33c2605f8658c3bf3e1ced6bb6_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_4ff9985e373963d1fcb2c20e8ccabb7989eb4f4a5d71fe206b7c1319fe0d24e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff9985e373963d1fcb2c20e8ccabb7989eb4f4a5d71fe206b7c1319fe0d24e3->enter($__internal_4ff9985e373963d1fcb2c20e8ccabb7989eb4f4a5d71fe206b7c1319fe0d24e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_35fd02a97a2ca170f5bfeff8228f7151e5788276d9d1ccc823ff0c274f19fa76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35fd02a97a2ca170f5bfeff8228f7151e5788276d9d1ccc823ff0c274f19fa76->enter($__internal_35fd02a97a2ca170f5bfeff8228f7151e5788276d9d1ccc823ff0c274f19fa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_35fd02a97a2ca170f5bfeff8228f7151e5788276d9d1ccc823ff0c274f19fa76->leave($__internal_35fd02a97a2ca170f5bfeff8228f7151e5788276d9d1ccc823ff0c274f19fa76_prof);

        
        $__internal_4ff9985e373963d1fcb2c20e8ccabb7989eb4f4a5d71fe206b7c1319fe0d24e3->leave($__internal_4ff9985e373963d1fcb2c20e8ccabb7989eb4f4a5d71fe206b7c1319fe0d24e3_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_50d2b5668b373faf0e326454cf4cf193dbf7b01a2817e142c3e17ed82a88952a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d2b5668b373faf0e326454cf4cf193dbf7b01a2817e142c3e17ed82a88952a->enter($__internal_50d2b5668b373faf0e326454cf4cf193dbf7b01a2817e142c3e17ed82a88952a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5dbd29413bb1b3ef93f6b5be6f1f9e551f99f453ea93a560e49d1458d545ac17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbd29413bb1b3ef93f6b5be6f1f9e551f99f453ea93a560e49d1458d545ac17->enter($__internal_5dbd29413bb1b3ef93f6b5be6f1f9e551f99f453ea93a560e49d1458d545ac17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_5dbd29413bb1b3ef93f6b5be6f1f9e551f99f453ea93a560e49d1458d545ac17->leave($__internal_5dbd29413bb1b3ef93f6b5be6f1f9e551f99f453ea93a560e49d1458d545ac17_prof);

        
        $__internal_50d2b5668b373faf0e326454cf4cf193dbf7b01a2817e142c3e17ed82a88952a->leave($__internal_50d2b5668b373faf0e326454cf4cf193dbf7b01a2817e142c3e17ed82a88952a_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_269a4a6494eac92b45ae800323ac929b5cf51c53a26935307290e0ab22d96402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_269a4a6494eac92b45ae800323ac929b5cf51c53a26935307290e0ab22d96402->enter($__internal_269a4a6494eac92b45ae800323ac929b5cf51c53a26935307290e0ab22d96402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_23aa18d9d43f07f4fcdef6440057165544ab0c0e7ac0c736558be879552f1517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23aa18d9d43f07f4fcdef6440057165544ab0c0e7ac0c736558be879552f1517->enter($__internal_23aa18d9d43f07f4fcdef6440057165544ab0c0e7ac0c736558be879552f1517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_23aa18d9d43f07f4fcdef6440057165544ab0c0e7ac0c736558be879552f1517->leave($__internal_23aa18d9d43f07f4fcdef6440057165544ab0c0e7ac0c736558be879552f1517_prof);

        
        $__internal_269a4a6494eac92b45ae800323ac929b5cf51c53a26935307290e0ab22d96402->leave($__internal_269a4a6494eac92b45ae800323ac929b5cf51c53a26935307290e0ab22d96402_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_234d1f3fb65534adcddada0cd5408f379d61fef46bd200139d2ba3ed78f31181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234d1f3fb65534adcddada0cd5408f379d61fef46bd200139d2ba3ed78f31181->enter($__internal_234d1f3fb65534adcddada0cd5408f379d61fef46bd200139d2ba3ed78f31181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7b754f0e69240919874800c9fd8d29a60527bdc10b99c390337c310aa76ecaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b754f0e69240919874800c9fd8d29a60527bdc10b99c390337c310aa76ecaa4->enter($__internal_7b754f0e69240919874800c9fd8d29a60527bdc10b99c390337c310aa76ecaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_7b754f0e69240919874800c9fd8d29a60527bdc10b99c390337c310aa76ecaa4->leave($__internal_7b754f0e69240919874800c9fd8d29a60527bdc10b99c390337c310aa76ecaa4_prof);

        
        $__internal_234d1f3fb65534adcddada0cd5408f379d61fef46bd200139d2ba3ed78f31181->leave($__internal_234d1f3fb65534adcddada0cd5408f379d61fef46bd200139d2ba3ed78f31181_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_5983e63f0a9aaaeb4dff7e42d643dcef3f14ca88e0ea59d8e67cd01bb9fd03a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5983e63f0a9aaaeb4dff7e42d643dcef3f14ca88e0ea59d8e67cd01bb9fd03a6->enter($__internal_5983e63f0a9aaaeb4dff7e42d643dcef3f14ca88e0ea59d8e67cd01bb9fd03a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_113eb597695d5bdafe863fd063badfbdd62ce7ebcf9296ca40275d3223d81a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113eb597695d5bdafe863fd063badfbdd62ce7ebcf9296ca40275d3223d81a53->enter($__internal_113eb597695d5bdafe863fd063badfbdd62ce7ebcf9296ca40275d3223d81a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_113eb597695d5bdafe863fd063badfbdd62ce7ebcf9296ca40275d3223d81a53->leave($__internal_113eb597695d5bdafe863fd063badfbdd62ce7ebcf9296ca40275d3223d81a53_prof);

        
        $__internal_5983e63f0a9aaaeb4dff7e42d643dcef3f14ca88e0ea59d8e67cd01bb9fd03a6->leave($__internal_5983e63f0a9aaaeb4dff7e42d643dcef3f14ca88e0ea59d8e67cd01bb9fd03a6_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_b7966c7820c0f4210b9a48388f3b2f95d740ccf677cb0c25654b7591f274cd2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7966c7820c0f4210b9a48388f3b2f95d740ccf677cb0c25654b7591f274cd2b->enter($__internal_b7966c7820c0f4210b9a48388f3b2f95d740ccf677cb0c25654b7591f274cd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e573f49f4c85a273fd11f6d1aa2805fa01aceacdc7f15485bd95573ae7b28e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e573f49f4c85a273fd11f6d1aa2805fa01aceacdc7f15485bd95573ae7b28e6f->enter($__internal_e573f49f4c85a273fd11f6d1aa2805fa01aceacdc7f15485bd95573ae7b28e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e573f49f4c85a273fd11f6d1aa2805fa01aceacdc7f15485bd95573ae7b28e6f->leave($__internal_e573f49f4c85a273fd11f6d1aa2805fa01aceacdc7f15485bd95573ae7b28e6f_prof);

        
        $__internal_b7966c7820c0f4210b9a48388f3b2f95d740ccf677cb0c25654b7591f274cd2b->leave($__internal_b7966c7820c0f4210b9a48388f3b2f95d740ccf677cb0c25654b7591f274cd2b_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_eebbc279983d6f45506f7bd68e0c9eed3338ae85db85fc13f39ab97b95ef48e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eebbc279983d6f45506f7bd68e0c9eed3338ae85db85fc13f39ab97b95ef48e2->enter($__internal_eebbc279983d6f45506f7bd68e0c9eed3338ae85db85fc13f39ab97b95ef48e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_75dbd144a577c5e1b315d48f113d2dbbf7b3c790c399ed0daff66c443e75624f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dbd144a577c5e1b315d48f113d2dbbf7b3c790c399ed0daff66c443e75624f->enter($__internal_75dbd144a577c5e1b315d48f113d2dbbf7b3c790c399ed0daff66c443e75624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_75dbd144a577c5e1b315d48f113d2dbbf7b3c790c399ed0daff66c443e75624f->leave($__internal_75dbd144a577c5e1b315d48f113d2dbbf7b3c790c399ed0daff66c443e75624f_prof);

        
        $__internal_eebbc279983d6f45506f7bd68e0c9eed3338ae85db85fc13f39ab97b95ef48e2->leave($__internal_eebbc279983d6f45506f7bd68e0c9eed3338ae85db85fc13f39ab97b95ef48e2_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_c25d4b001fded5f3858136062a7d6ef90cfb1ccd0e74cc28c404c21d0f1516a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25d4b001fded5f3858136062a7d6ef90cfb1ccd0e74cc28c404c21d0f1516a2->enter($__internal_c25d4b001fded5f3858136062a7d6ef90cfb1ccd0e74cc28c404c21d0f1516a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_bcc329f195a8be86d58b25a5329458a9b67eae69069d07e133e6f21ec28088de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc329f195a8be86d58b25a5329458a9b67eae69069d07e133e6f21ec28088de->enter($__internal_bcc329f195a8be86d58b25a5329458a9b67eae69069d07e133e6f21ec28088de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_bcc329f195a8be86d58b25a5329458a9b67eae69069d07e133e6f21ec28088de->leave($__internal_bcc329f195a8be86d58b25a5329458a9b67eae69069d07e133e6f21ec28088de_prof);

        
        $__internal_c25d4b001fded5f3858136062a7d6ef90cfb1ccd0e74cc28c404c21d0f1516a2->leave($__internal_c25d4b001fded5f3858136062a7d6ef90cfb1ccd0e74cc28c404c21d0f1516a2_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_73f6a532ce5bb821d8d882c8eebb4f0d876669adaf102068de7d9e04286e1751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f6a532ce5bb821d8d882c8eebb4f0d876669adaf102068de7d9e04286e1751->enter($__internal_73f6a532ce5bb821d8d882c8eebb4f0d876669adaf102068de7d9e04286e1751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ae6d0e82095a150657a6db75f2859157999119e4e1b750fc85aaf5c49214b590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6d0e82095a150657a6db75f2859157999119e4e1b750fc85aaf5c49214b590->enter($__internal_ae6d0e82095a150657a6db75f2859157999119e4e1b750fc85aaf5c49214b590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_ae6d0e82095a150657a6db75f2859157999119e4e1b750fc85aaf5c49214b590->leave($__internal_ae6d0e82095a150657a6db75f2859157999119e4e1b750fc85aaf5c49214b590_prof);

        
        $__internal_73f6a532ce5bb821d8d882c8eebb4f0d876669adaf102068de7d9e04286e1751->leave($__internal_73f6a532ce5bb821d8d882c8eebb4f0d876669adaf102068de7d9e04286e1751_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1b2164dcf48b383bc4fb15b329dc8019c8129c6863aa30442da5f875d7cd28c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2164dcf48b383bc4fb15b329dc8019c8129c6863aa30442da5f875d7cd28c8->enter($__internal_1b2164dcf48b383bc4fb15b329dc8019c8129c6863aa30442da5f875d7cd28c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1153dde2234297f378349f74d509e6c9608a82286f578b52ffed5b62cb90d761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1153dde2234297f378349f74d509e6c9608a82286f578b52ffed5b62cb90d761->enter($__internal_1153dde2234297f378349f74d509e6c9608a82286f578b52ffed5b62cb90d761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_1153dde2234297f378349f74d509e6c9608a82286f578b52ffed5b62cb90d761->leave($__internal_1153dde2234297f378349f74d509e6c9608a82286f578b52ffed5b62cb90d761_prof);

        
        $__internal_1b2164dcf48b383bc4fb15b329dc8019c8129c6863aa30442da5f875d7cd28c8->leave($__internal_1b2164dcf48b383bc4fb15b329dc8019c8129c6863aa30442da5f875d7cd28c8_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e74c57a76a720fce552d983744891a33a9c437c8fb95822e7bc7ea33eeb74a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e74c57a76a720fce552d983744891a33a9c437c8fb95822e7bc7ea33eeb74a3f->enter($__internal_e74c57a76a720fce552d983744891a33a9c437c8fb95822e7bc7ea33eeb74a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_f6b171f2222da4186b0506dc1f003697f978b8e909fc01a8ee38772c2aac0047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b171f2222da4186b0506dc1f003697f978b8e909fc01a8ee38772c2aac0047->enter($__internal_f6b171f2222da4186b0506dc1f003697f978b8e909fc01a8ee38772c2aac0047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_f6b171f2222da4186b0506dc1f003697f978b8e909fc01a8ee38772c2aac0047->leave($__internal_f6b171f2222da4186b0506dc1f003697f978b8e909fc01a8ee38772c2aac0047_prof);

        
        $__internal_e74c57a76a720fce552d983744891a33a9c437c8fb95822e7bc7ea33eeb74a3f->leave($__internal_e74c57a76a720fce552d983744891a33a9c437c8fb95822e7bc7ea33eeb74a3f_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_27975bff5ae0f847f594084880a0ae4e227de2e6e2523920454505180ba8aea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27975bff5ae0f847f594084880a0ae4e227de2e6e2523920454505180ba8aea6->enter($__internal_27975bff5ae0f847f594084880a0ae4e227de2e6e2523920454505180ba8aea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_87ea561ac532f542e9b76ef7fa3b4f08c0c0ec8cf3a896b637f1f6e198f88516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ea561ac532f542e9b76ef7fa3b4f08c0c0ec8cf3a896b637f1f6e198f88516->enter($__internal_87ea561ac532f542e9b76ef7fa3b4f08c0c0ec8cf3a896b637f1f6e198f88516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_87ea561ac532f542e9b76ef7fa3b4f08c0c0ec8cf3a896b637f1f6e198f88516->leave($__internal_87ea561ac532f542e9b76ef7fa3b4f08c0c0ec8cf3a896b637f1f6e198f88516_prof);

        
        $__internal_27975bff5ae0f847f594084880a0ae4e227de2e6e2523920454505180ba8aea6->leave($__internal_27975bff5ae0f847f594084880a0ae4e227de2e6e2523920454505180ba8aea6_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_087deef8e8b9b8ec2fdd90807d2c01a86e404d28c63c06fca93cf2f46f85c599 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087deef8e8b9b8ec2fdd90807d2c01a86e404d28c63c06fca93cf2f46f85c599->enter($__internal_087deef8e8b9b8ec2fdd90807d2c01a86e404d28c63c06fca93cf2f46f85c599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_e72f028dba5a3258cf1def08ad82a6264859409ca3c2ec340dc693702d45a0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72f028dba5a3258cf1def08ad82a6264859409ca3c2ec340dc693702d45a0da->enter($__internal_e72f028dba5a3258cf1def08ad82a6264859409ca3c2ec340dc693702d45a0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e72f028dba5a3258cf1def08ad82a6264859409ca3c2ec340dc693702d45a0da->leave($__internal_e72f028dba5a3258cf1def08ad82a6264859409ca3c2ec340dc693702d45a0da_prof);

        
        $__internal_087deef8e8b9b8ec2fdd90807d2c01a86e404d28c63c06fca93cf2f46f85c599->leave($__internal_087deef8e8b9b8ec2fdd90807d2c01a86e404d28c63c06fca93cf2f46f85c599_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c26f60fe11373f0d3ae1428e75b69e6adf20f462162ed410de816281e6132e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26f60fe11373f0d3ae1428e75b69e6adf20f462162ed410de816281e6132e44->enter($__internal_c26f60fe11373f0d3ae1428e75b69e6adf20f462162ed410de816281e6132e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_1f8338ecadfcddff7db3b7c577dd18a2b3785140e8f3406650d205cb6fa1418c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f8338ecadfcddff7db3b7c577dd18a2b3785140e8f3406650d205cb6fa1418c->enter($__internal_1f8338ecadfcddff7db3b7c577dd18a2b3785140e8f3406650d205cb6fa1418c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_1f8338ecadfcddff7db3b7c577dd18a2b3785140e8f3406650d205cb6fa1418c->leave($__internal_1f8338ecadfcddff7db3b7c577dd18a2b3785140e8f3406650d205cb6fa1418c_prof);

        
        $__internal_c26f60fe11373f0d3ae1428e75b69e6adf20f462162ed410de816281e6132e44->leave($__internal_c26f60fe11373f0d3ae1428e75b69e6adf20f462162ed410de816281e6132e44_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2ccb3ceab8e81b4e69ebd221a284e0d8798db54882f98a7405595d6e70d4baaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccb3ceab8e81b4e69ebd221a284e0d8798db54882f98a7405595d6e70d4baaa->enter($__internal_2ccb3ceab8e81b4e69ebd221a284e0d8798db54882f98a7405595d6e70d4baaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_ef2757dbc1947cafb8be9ee257d1d42020f40a6b958c01ccc0d4e87f10e89115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2757dbc1947cafb8be9ee257d1d42020f40a6b958c01ccc0d4e87f10e89115->enter($__internal_ef2757dbc1947cafb8be9ee257d1d42020f40a6b958c01ccc0d4e87f10e89115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ef2757dbc1947cafb8be9ee257d1d42020f40a6b958c01ccc0d4e87f10e89115->leave($__internal_ef2757dbc1947cafb8be9ee257d1d42020f40a6b958c01ccc0d4e87f10e89115_prof);

        
        $__internal_2ccb3ceab8e81b4e69ebd221a284e0d8798db54882f98a7405595d6e70d4baaa->leave($__internal_2ccb3ceab8e81b4e69ebd221a284e0d8798db54882f98a7405595d6e70d4baaa_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4e046bcf0aa24574e2475892e05deca7ef1c0efaf80130b8a5308518aadf6c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e046bcf0aa24574e2475892e05deca7ef1c0efaf80130b8a5308518aadf6c6a->enter($__internal_4e046bcf0aa24574e2475892e05deca7ef1c0efaf80130b8a5308518aadf6c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9821373b233c585466f6a57dd6ad7bf161e505bf846753949539806e726e4b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9821373b233c585466f6a57dd6ad7bf161e505bf846753949539806e726e4b25->enter($__internal_9821373b233c585466f6a57dd6ad7bf161e505bf846753949539806e726e4b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_9821373b233c585466f6a57dd6ad7bf161e505bf846753949539806e726e4b25->leave($__internal_9821373b233c585466f6a57dd6ad7bf161e505bf846753949539806e726e4b25_prof);

        
        $__internal_4e046bcf0aa24574e2475892e05deca7ef1c0efaf80130b8a5308518aadf6c6a->leave($__internal_4e046bcf0aa24574e2475892e05deca7ef1c0efaf80130b8a5308518aadf6c6a_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_b6c2c3e889f580eef4c0361b9875ed88c91779864b00978303c8864a4a059e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c2c3e889f580eef4c0361b9875ed88c91779864b00978303c8864a4a059e4d->enter($__internal_b6c2c3e889f580eef4c0361b9875ed88c91779864b00978303c8864a4a059e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d1ab674a606ccc745aebc5f7af64fb14aa69096c11b0dbdbea418e4d4021909f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ab674a606ccc745aebc5f7af64fb14aa69096c11b0dbdbea418e4d4021909f->enter($__internal_d1ab674a606ccc745aebc5f7af64fb14aa69096c11b0dbdbea418e4d4021909f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_d1ab674a606ccc745aebc5f7af64fb14aa69096c11b0dbdbea418e4d4021909f->leave($__internal_d1ab674a606ccc745aebc5f7af64fb14aa69096c11b0dbdbea418e4d4021909f_prof);

        
        $__internal_b6c2c3e889f580eef4c0361b9875ed88c91779864b00978303c8864a4a059e4d->leave($__internal_b6c2c3e889f580eef4c0361b9875ed88c91779864b00978303c8864a4a059e4d_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_62b109b48bf72db5713cd3f118316545e401705bc6f848dd3fd78eb27c08920c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b109b48bf72db5713cd3f118316545e401705bc6f848dd3fd78eb27c08920c->enter($__internal_62b109b48bf72db5713cd3f118316545e401705bc6f848dd3fd78eb27c08920c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_b180439df4ff9150f7add4dd5d3e114be3121470e7a56a88a3e54e5c4bea971f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b180439df4ff9150f7add4dd5d3e114be3121470e7a56a88a3e54e5c4bea971f->enter($__internal_b180439df4ff9150f7add4dd5d3e114be3121470e7a56a88a3e54e5c4bea971f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_b180439df4ff9150f7add4dd5d3e114be3121470e7a56a88a3e54e5c4bea971f->leave($__internal_b180439df4ff9150f7add4dd5d3e114be3121470e7a56a88a3e54e5c4bea971f_prof);

        
        $__internal_62b109b48bf72db5713cd3f118316545e401705bc6f848dd3fd78eb27c08920c->leave($__internal_62b109b48bf72db5713cd3f118316545e401705bc6f848dd3fd78eb27c08920c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/var/www/html/TP4/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
