<?php

/**
 * @file
 * Contains \Drupal\noticias\plugin\Block\NoticiasSimpleBlock
 */

namespace Drupal\noticias\Plugin\Block; 

use Drupal\Core\Block\BlockBase;

/**
 * @Block (
 *  id = "noticias_simple",
 *  admin_label = @Translation("Bloque de noticias")
 * )
 */

class NoticiasSimpleBlock extends BlockBase {

    public function defaultConfiguration() {
        return array(
            'noticias_block_string' => $this->t('Valor por defecto. Este bloque se creo a las %time', array('%time' => date('c'))),
        );
    }

    /**
     * 
     */

    public function build() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->configuration['noticias_block_string'],
        );
    }

}