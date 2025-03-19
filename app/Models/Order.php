<?php

declare(strict_types=1);

namespace App\Models;

use Nette\Database\Explorer;
use Nette\Database\Table\Selection;

class Order
{
	public Explorer $db;

	public function __construct(Explorer $db)
	{
		$this->db = $db;
	}

	public function getTable(): Selection
	{
		return $this->db->table('order');
	}

	public function getOrderById(int $id): array
	{
		return $this->getTable()->where(['id' => $id])->fetchAll();
	}
}