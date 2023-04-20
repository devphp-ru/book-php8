<?php
declare(strict_types=1);

namespace App\Chapter3\listing13;

class ShopProduct
{
	public string $title = 'Стандартный товар';
	public string $producerMainName = 'Фамилия автора';
	public string $producerFirstName = 'Имя автора';
	public float $price = 0;

	public function getProducer(): string
	{
		return $this->producerFirstName . ' ' . $this->producerMainName;
	}
}
