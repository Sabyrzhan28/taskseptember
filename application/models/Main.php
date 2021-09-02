<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function postsCount() {
		return $this->db->column('SELECT COUNT(id) FROM posts');
	}

	public function postValidate($post, $type) {
		$nameLen = iconv_strlen($post['name']);
		$textLen = iconv_strlen($post['text']);
		if ($nameLen < 3 or $nameLen > 20) {
			$this->error = 'Имя должно содержать от 3 до 20 символов';
			return false;
		} elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error = 'E-mail указан неверно';
			return false;
		} elseif ($textLen < 10 or $textLen > 5000) {
			$this->error = 'Текст должнен содержать от 10 до 5000 символов';
			return false;
		}
		return true;
	}

	public function postAdd($post) {
		$params = [
			'id' => '',
			'name' => $post['name'],
			'email' => $post['email'],
			'text' => $post['text'],
		];
		$this->db->query('INSERT INTO posts VALUES (:id, :name, :email, :text)', $params);
		return $this->db->lastInsertId();
	}

	public function postsList($route) {
		$max = 3;
		$sortby = 'name';
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return $this->db->row('SELECT * FROM posts ORDER BY '.$sortby.' DESC LIMIT :start, :max', $params);
	}

	



}