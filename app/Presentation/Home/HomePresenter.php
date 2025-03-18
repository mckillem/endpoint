<?php

declare(strict_types=1);

namespace App\Presentation\Home;

use App\Models\Order;
use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{

	private Order $order;

	public function __construct(Order $order)
	{
		$this->order = $order;
	}

	public function actionGetOrder(int $id): void
	{
		echo $this->order->getOrderById($id);
	}
}
