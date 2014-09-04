<?php

/**
 * @file
 * Contains ...
 */

// EXCERCISES
// 1. Add the correct of this class here.
// namespace ...

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
    $output = '';
    $items = array();
    
    // EXCERCISES
    // 1. Find out what formats for $output are allowed.
    // 2. Output some dummy text in the block.
    // 3. $items is an array of strings. Make this into an HTML-list as output.

    return $output;
  }
}
