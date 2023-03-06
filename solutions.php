<?php


$numbers = [];

for ($a = 0; $a < 5; $a++) {
    $numbers[] = rand(0, 10);
}


/**
 * @param $numbers
 */
function findOddEvenPair($numbers)
{
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 == 0) {
            for ($j = $i + 1; $j < count($numbers); $j++) {
                if ($numbers[$j] % 2 == 1) {
                    return $i = $j - 1;
                }
            }
        } else {
            for ($j = $i + 1; $j < count($numbers); $j++) {
                if ($numbers[$j] % 2 == 0) {
                    return $i = $j - 1;
                }
            }
        }
    }
}

if (findOddEvenPair($numbers) === NULL) {
    echo 'The is no pair of ODD&EVEN numbers';
} else {
    echo findOddEvenPair($numbers);
}


echo '<br>';

echo 'stage';

$service = new SummationService($numbers);

echo '<br>';
echo $service->sum(1, 4);


class SummationService
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data)
    {

        $this->data = $data;
    }

    public function sum(int $a, int $b): int
    {
        for ($i = 1; $i < count($this->data); $i++) {
            $this->data[$i] = $this->data[$i - 1] + $this->data[$i];
        }
        if ($a != 0) {
            return $this->data[$b] - $this->data[$a - 1];
        } else {
            return $this->data[$b];
        }
    }
}
$text = 'aZaZaZ';
echo '<br><br>' . longestSubstr($text) . '<br>';
function longestSubstr(string $text): string
{
    $temp = $text;
    $result = '';

    do {
        $base = substr($text, 0, 2);
        if (substr_count($text, $base, 1)) {
            $step = substr($text, 0, strpos($text, $base, 1) + 1);
            if (strlen($step) > strlen($result)) {
                $result = $step;
            }
        }
        $text = substr($text, 1);
    } while (strlen($text) > 1);

    if ($result == '') {
        $result = $temp;
    }

    return $result;
}

