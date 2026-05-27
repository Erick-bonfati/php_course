<?php

namespace Alura\Mvc\Repository;

use PDO;
use Alura\Mvc\Entity\Video;

class VideoRepository {
  public function __construct(private PDO $pdo) {
    
  }

  public function add(Video $video): bool {
    $sql = 'INSERT INTO video (url, title) VALUES (?, ?)';
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $video->url);
    $statement->bindValue(2, $video->title);
    $result = $statement->execute();

    $id = $this->pdo->lastInsertId();
    $video->setId(intval($id));

    return $result;
  }

  public function findById(int $id): ?array {
    $sql = 'SELECT * FROM video WHERE id = ?';
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $id);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    return $result ?: null;
  }

  public function remove(int $id): bool {
    $sql = 'DELETE FROM video WHERE id = ?';
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $id);
    return $statement->execute();
  }

  public function update(Video $video): bool {
    $sql = 'UPDATE video SET url = ?, title = ? WHERE id = ?';
    $statement = $this->pdo->prepare($sql);
    $statement->bindValue(1, $video->url);
    $statement->bindValue(2, $video->title);
    $statement->bindValue(3, $video->id);
    return $statement->execute();
  }

  /**
   * @return Video[]
   */
  public function all(): array {

    $videoList = $this->pdo
      ->query('SELECT * FROM video;')
      ->fetchAll(PDO::FETCH_ASSOC);

    return array_map(function($videoData) {
      $video = new Video($videoData['url'], $videoData['title']);
      $video->setId(intval($videoData['id']));
      return $video;
    }, $videoList);
  }

}