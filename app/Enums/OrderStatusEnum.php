<?php

namespace App\Enums;

enum OrderStatusEnum: int
{
    case CART = 1;
    case PENDING = 2;
    case PAID = 3;
    case CANCELED = 4;
    case REJECTED = 5;

    public function getName(): string
    {
        return match ($this) {
            self::CART => 'Carrinho',
            self::PENDING => 'Pendente',
            self::PAID => 'Pago',
            self::CANCELED => 'Cancelado',
            self::REJECTED => 'Não aprovado',
            default => 'Passo do checkout não encontrado',
        };
    }

    public function getStyles():string
    {
        return match ($this) {
            self::CART => 'px-2 py-0 text-xs rounded-full bg-gray-100 text-gray-800',
            self::PENDING => 'px-2 py-0 text-xs rounded-full bg-yellow-100 text-gray-800',
            self::PAID => 'px-2 py-0 text-xs rounded-full bg-green-100 text-gray-800',
            self::CANCELED => 'px-2 py-0 text-xs rounded-full bg-red-100 text-gray-800',
            self::REJECTED => 'px-2 py-0 text-xs rounded-full bg-amber-100 text-gray-800',
            default => 'px-2 py-0 text-xs rounded-full bg-indigo-100 text-gray-800',
        };
    }
}
