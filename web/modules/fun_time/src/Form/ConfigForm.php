<?php 

namespace Drupal\fun_time\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class ConfigForm extends ConfigFormBase {

    Const CONFIGNAME = "config_form.settings.yml";

    public function getFormId() {
        return "config_form_settings";
    }

    protected function getEditableConfigNAmes() {
        return [
            static::CONFIGNAME,

        ];
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        $config = $this->config(static::CONFIGNAME);
        $form['title'] = [
            '#type' => 'textfield',
            '#title' => 'Title',
            '#default_value' => $config->get("title"),
        ];

        $form['admin_description'] = [
            '#type' => 'textfield',
            '#title' => 'Admin description',
            '#default_value' => $config->get("admin_description"),
        ];

        return Parent::buildForm($form, $form_state);
    }

    public function submitForm(array &$form, FormStateInterface $form_state) {
        $config = $this->config(static::CONFIGNAME);
        $config->set("title", $form_state->getValue("title"));
        $config->set("admin_description", $form_state->getValue("admin_description"));
        $config->save();

    }

}




?>