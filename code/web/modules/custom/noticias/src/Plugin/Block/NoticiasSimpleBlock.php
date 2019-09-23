<?php

/**
 * @file
 * Contains \Drupal\noticias\plugin\Block\NoticiasSimpleBlock
 */

namespace Drupal\noticias\Plugin\Block; 

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @Block (
 *  id = "noticias_simple",
 *  admin_label = @Translation("Bloque de noticias")
 * )
 */

class NoticiasSimpleBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
    public function defaultConfiguration() {
        return array(
            'noticias_block_string' => $this->t('Valor por defecto. Este bloque se creo a las %time', array('%time' => date('c'))),
        );
    }

    /**
     * {@inheritdoc}
     */
    public function blockForm($form, FormStateInterface $form_state) {
        
        $form['noticias_block_string_text'] = array(
            '#type' => 'textarea',
            '#title' => $this->t('Contenido del bloque'),
            '#description' => $this->t('Este texto aparecerá en el bloque.'),
            '#default_value' => $this->configuration['noticias_block_string'],
        );
        return $form;
    }

    /**
     * {@inheritdoc}
     */
    public function blockSubmit($form, FormStateInterface $form_state) {
        $this->configuration['noticias_block_string'] = $form_state->getValue('noticias_block_string_text');
    }


    /**
     * {@inheritdoc}
     */
    public function build() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->configuration['noticias_block_string'],
        );
    }

}