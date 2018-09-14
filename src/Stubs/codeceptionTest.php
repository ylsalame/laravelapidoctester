<?php
/*
 * Generated on {{ timestamp }}
 * Generated by ApiDocTester
*/

class test{{ className }}
{
    use Codeception\Util\Shared\Asserts;

    public function genericTestMethod(ApiTester $I)
    {
        Codeception\Util\JsonType::addCustomFilter('customDateFilter', function ($value) {
            $format = 'Y-m-d H:i:s';
            $d = DateTime::createFromFormat($format, $value);
            return $d && $d->format($format) == $value;
        });

        $I->wantTo('{{ title }}');
        $I->send{{ type }}(
            '{{ url }}',
            {{ input }}
        );
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::{{ responseCode }});
        $I->seeResponseIsJson();
        {{ output }}
    }
}
