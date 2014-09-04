<?php

/**
 * @file
 * Contains \Drupal\wizzlern_pegi\Plugin\Block\NewGames.
 */

namespace Drupal\wizzlern_pegi\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityManagerInterface;
use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;

/**
 * Provides a recent games block.
 *
 * @Block(
 *   id = "wizzlern_pegi_new_games",
 *   subject = @Translation("New games"),
 *   admin_label = @Translation("New games")
 * )
 */
class NewGames extends BlockBase implements ContainerFactoryPluginInterface {

  /**
   * The entity manager
   *
   * @var EntityManagerInterface
   */
  protected $entityManager;

  /**
   * The entity query manager
   *
   * @var QueryFactory
   */
  protected $entityQuery;

  /**
   * Constructs a new NewGames block instance.
   *
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @param EntityManagerInterface $entity_manager
   * @param QueryFactory $entity_query
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, EntityManagerInterface $entity_manager, QueryFactory $entity_query) {

    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->entityManager = $entity_manager;
    $this->entityQuery = $entity_query;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {

    return new static($configuration, $plugin_id, $plugin_definition, $container->get('entity.manager'), $container->get('entity.query'));
  }

  /**
   * Implements \Drupal\block\BlockBase::blockBuild().
   */
  public function build() {
    $items = array();

    // EXCERCISES
    // 1. Find out what methods are available from $this->entityQuery.
    // 2. Find an entity query example that loads nodes.
    // 3. Write an entity query for: published nodes of type 'game', sorted
    //    most recent nodes first. Use debug() to output the query result.
    // 4. Build an array of links to the nodes that have node titles as link text.

    // $nodes is an array of nodes. The result form the entity query.
    $nodes = array();
    
    /** @var \Drupal\node\Entity\Node $node */
    foreach ($nodes as $node) {
      $items[] = ''; // $items is an array of links. Build the links here.
    }

    // This is how to render an HTML list of items.
    // @see template_preprocess_item_list
    return array(
      '#theme' => 'item_list',
      '#items' => $items,
    );

  }
}
