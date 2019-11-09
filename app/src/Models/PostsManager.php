<?php

namespace Src\Models;

use Src\Models\Manager;
use Src\Models\Post;
use \PDO;

class postsManager extends Manager 
{
    public function getPosts()
    {
        $req = $this->db->query('SELECT id, title, imagePost, SUBSTRING(content,1,85) AS content, DATE_FORMAT(datePost, \'%d/%m/%Y\') AS datePost FROM posts ORDER BY datePost DESC');
        $aResp = $req->fetchAll(PDO::FETCH_ASSOC);
        if (!$aResp) {
            $obj = [];
        } else {
            foreach ($aResp as $post) {
                $obj[] = new Post($post);
            }
            
        }
        return $obj; 
    }

    public function getPost($id)
    {
        $req = $this->db->prepare('SELECT id, title, imagePost, content, DATE_FORMAT(datePost, \'%d/%m/%Y\') AS datePost FROM posts WHERE id = ?');
        $req->execute(array($id));
        return new Post($req->fetch(PDO::FETCH_ASSOC));
    }

    public function getLastPost()
    {
        $req = $this->db->query('SELECT id, title, imagePost, SUBSTRING(content,1,85) AS content, DATE_FORMAT(datePost, \'%d/%m/%Y\') AS datePost FROM posts ORDER BY id DESC LIMIT 0,1');
        return new Post($req->fetch(PDO::FETCH_ASSOC));
    }
    
    public function getPostsAdmin()
    {
        $req = $this->db->query('SELECT id, title, imagePost, SUBSTRING(content,1,85) AS content, DATE_FORMAT(datePost, \'%d/%m/%Y\') AS datePost FROM posts ORDER BY datePost DESC');
         $aResp = $req->fetchAll(PDO::FETCH_ASSOC);
         
        if (!$aResp) {
            $obj = [];
        } else {
            foreach ($aResp as $post) {
                $obj[] = new Post($post);
            }
        }
        return $obj;
    }

    public function createPostAdmin($title, $content)
    {
        $post = $this->db->prepare('INSERT INTO posts( title, content, datePost) VALUES(?, ?,  NOW())');
        $affectedPost = $post->execute(array($title, $content));
    return $affectedPost;
    }
    public function deletePostAdmin($id)
    {
        $post = $this->db->prepare('DELETE FROM posts WHERE id = ?');
        $deletePost = $post->execute(array($id));
        return $deletePost;
    }
     public function getModifArticleAdmin($id)
    {
        $req = $this->db->prepare('SELECT id, title, content FROM posts WHERE id = ?');
        $req->execute(array($id));
        return new Post($req->fetch(PDO::FETCH_ASSOC));
    }
    public function sendmodifPost($title, $content, $id)
    {
        $comments = $this->db->prepare('UPDATE posts SET title = ?, content = ?  WHERE id = ?');
        $returnArticle = $comments->execute(array($title, $content, $id));
        return $returnArticle;
    }
    
    
}