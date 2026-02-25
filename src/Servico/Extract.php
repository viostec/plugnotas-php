<?php

declare(strict_types=1);

namespace TecnoSpeed\Plugnotas\Servico;

final class Extract
{
    public static function toArray($object, $removeNull = false)
    {
        if (is_object($object)) {
            $methods = self::extractAndFilter($object, 'get');
            $result = [];
            foreach($methods as $getter) {
                $tmpData = $object->{$getter}();
                if (is_object($tmpData)) {
                    $tmpData = self::toArray($tmpData, $removeNull);
                }

                if ($removeNull && is_null($tmpData)) {
                    continue;
                }

                $result[self::getPropertyName($getter)] = $tmpData;
            }

            return $result;
        }

        throw new \Exception('toArray param require a object.');
    }

    private static function extractAndFilter($object, $filter)
    {
        $className = \get_class($object);
        $avaibleMethods = \get_class_methods($className);

        $reducer = function ($accumulator, $method) {
            $acc = $accumulator['result'];
            $filter = $accumulator['filter'];

            if (\substr($method, 0, strlen($filter)) == $filter) {
                array_push($acc, $method);
                return ['filter' => $filter, 'result' => $acc];
            }

            return ['filter' => $filter, 'result' => $acc];
        };

        return array_reduce($avaibleMethods, $reducer, ['filter' => $filter, 'result' => []])['result'];
    }

    private static function getPropertyName($method)
    {
        $property = \substr($method, 3, strlen($method));
        $property[0] = strtolower($property[0]);

        return $property;
    }
}
