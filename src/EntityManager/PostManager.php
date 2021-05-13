<?php

namespace EntityManager;

use App\EntityManager\BDD;
use PDO;

class PostManager extends BDD
{

    protected string $table;
    protected string $entity;
    protected string $post;

    public function __construct($postId)
    {

        $this->post = $this->getPost($postId);

    }

    /**
     * Find all blog posts
     */
    public function getAllPosts()
    {

        $sql = 'SELECT * FROM ' . $this->table;
        $query = $this->db->prepare($sql);
        $query->fetchAll(PDO::FETCH_ASSOC);

        return $query->execute();

    }

    /**
     * Find all blog posts according to a specific author 
     */
    public function getPostsbyAuthor($author)
    {

        $sql = 'SELECT * FROM' . $this->table . 'WHERE author = ?';
        $query = $this->db->prepare($sql);

        return $query->execute([$author]);

    }

    /**
     * Find a specific blog posts
     */
    public function getPost($postId)
    {

        $sql = 'SELECT * FROM' . $this->table . 'WHERE id = ?';
        $query = $this->db->prepare($sql);

        return $query->execute([$postId]);

    }

    /**
     * Create a new blog post
     */
    public function createPost($entity): bool
    {

        $properties[] = array_values($this->getTables($entity));

        $tables = implode(', ', $this->getTables($entity[0]));
        $values = implode(', ', $this->getValues($entity[0]));

        $sql = 'INSERT INTO ' . $this->table . '(' . $tables . ') VALUES (' . $values . ')';
        $query = $this->db->prepare($sql);

        return $query->execute();

    }

    /**
     * Edit a specific blog post
     */
    public function editPost($entity): bool
    {

        $tables = implode(', ', $this->getTables($entity));

        $sql = 'UPDATE ' . $this->table . ' SET ' . $tables . ' WHERE id = :id';
        $query = $this->db->prepare($sql);
        $query->bindValue(':id', $entity->getId());

        return $query->execute();

    }

    /**
     * Delete a specific blog post
     */
    public function deletePost($postId): bool
    {

        $sql = 'DELETE FROM ' . $this->table . ' WHERE id = ?';
        $query = $this->db->prepare($sql);

        return $query->execute([$postId]);

    }

    /**
     * Retrieve an array of columns name to use in SQL queries 
     */
    protected function getTables(array $properties): array
    {

        $tables = [];
        foreach ($properties as $table)
        {
            $tables[] = $this->table . '.' . $table;
        }

        return $this->tables;
            
    }

    /**
     * Retrieve an array of  values to use in SQL queries
     */
    protected function getValues(array $properties): array
    {

        $values = [];
        foreach ($properties as $value)
        {
            $values[] = $this->table . '.' . $value;
        }

        return $this->values;

    }

}