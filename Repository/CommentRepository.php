<?php

namespace Repository;

use Model\Comment;
use PDO;

interface CommentRepository
{
    public function insert(Comment $comment): Comment;

    public function findById(int $id): ?Comment;

    public function findAll(): ?array;
}

class CommentRepositoryImpl implements CommentRepository
{
    public function __construct(private \PDO $connection) {}

    public function insert(Comment $comment): Comment
    {
        $sql = "insert into comment (name, comment_text) values (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$comment->getName(), $comment->getComment()]);

        $id = $this->connection->lastInsertId();
        $comment->setId($id);

        return $comment;
    }

    public function findById(int $id): ?Comment
    {
        $sql = "select * from comment where id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$id]);

        if ($row = $statement->fetch()) {
            return new Comment(
                id: $row["id"],
                name: $row["name"],
                comment_text: $row["comment_text"],
            );
        } else {
            return null;
        }
    }

    public function findAll(): array
    {
        $sql = "select * from comment";
        $statement = $this->connection->query($sql);

        $array = [];

        while ($row = $statement->fetch()) {
            $array[] = new Comment(
                id: $row["id"],
                name: $row["name"],
                comment_text: $row["comment_text"],
            );
        }

        return $array;
    }
}
