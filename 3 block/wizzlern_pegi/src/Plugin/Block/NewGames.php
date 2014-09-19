<?php

/**
 * @file
 * Contains ...
 */

// EXCERCISES
// Use namespacing for this class.
// 1. Add the correct namespace for this class below.
// 2. Complete the @file definition above.

namespace

use Drupal\Core\Block\BlockBase;

/**
 * Provides a recent games block.
 *
 * @Block(
 *   id = "wizzlern_pegi_new_games",
 *   subject = @Translation("New games"),
 *   admin_label = @Translation("New games")
 * )
 */
class NewGames extends BlockBase {

  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $output = NULL;
    $items = array();

    // EXCERCISES
    // Add dummy block output.
    // 1. What formats for $output are allowed here? Search for examples.
    // 2. Output some dummy text in the block.
    // 3. $items is an array of strings. Make this into an HTML-list (<ul><li>)
    //    as output.

    return $output;
  }
}
