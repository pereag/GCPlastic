<?php
namespace Src\Models;
class Post
{
	protected $error = [];
	protected $id;
	protected $title;
	protected $imagePost;
	protected $content;
	protected $datePost;
	const TITRE_INVALIDE = 1; 
	const CONTENU_INVALIDE = 2;
	public function __construct($values = [])
	{
		if (!empty($values)) {
			$this->hydrate($values);
		}
	}
	public function hydrate($data)
	{
		foreach ($data as $attribut => $value) {
			$method = 'set'.ucfirst($attribut);
			if (is_callable([$this, $method])) {
				$this->$method($value);
			}
		}
	}
/*-----setters-----*/
	public function setId($id)
	{
		$this->id = (int) $id;
	}
	public function setTitle($title)
	{
		if (!is_string($title) and empty($title)) {
			$this->error[] = self::TITRE_INVALIDE;
		} else {
			$this->title = $title;
		}
	}
	public function setContent($content)
	{
		if (!is_string($content)) {
			$this->error[] = self::CONTENU_INVALIDE;
		} else {
			$this->content = $content;
		}
	}
	public function setDatePost($datePost)
	{
		$this->datePost = $datePost;
	}
	public function setImagePost($imagePost)
	{
		$this->imagePost = (string) $imagePost;
	}
/*-----getters-----*/
	public function getError()
	{
		return $this->error;
	}
	public function getId()
	{
		return $this->id;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getDatePost()
	{
		return $this->datePost;
	}
	public function getImagePost()
	{
		return $this->imagePost;
	}
}