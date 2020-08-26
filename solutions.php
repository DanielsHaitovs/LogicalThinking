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

echo '<br>';

// 1. THIS DOES NOT WORK EVEN USING NAIVE DATA EXAMPLES FORM THE ASSESSMENT ITSELF, JUSR TRY 'aaa' AS INPUT, EXPECTED 'aa' BUT GOT ''
// 2. SAME APPLIES TO 'aZAzaz', EXPECTED 'aZAzaz' BUT GOT ''
// 3. EVEN IF YOU MAKE IT WORK, IT'S STILL VERY SLOW, YOU CAN DO IT IN 1 PASS USING HASHSET AND STACK
// - have two indexes (i, j) tracking beginning / ending of the sequence
// - MOVE J forward until moment when HASHSET does not contain '2-char sequence' it producing with previous letter
// - MOVE I forward and remove sequence it produced with prior letter until removing '2-char sequence' that was precenting J to move forward


echo '<br> <h1>Task Nr.3</h1>';

//$text = 'kkkbnbfoalbaskbqnbwer0rasdfalm12nb3k';
//kbnbfoalbaskb
//nbfoalbaskbqnb
//$text = 'aaa';
//$text = 'aZaZaZ';
$text = 'aZAzaz';
echo $text . '<br>';
echo '<br>' . longestSubstr($text) . '<br>';
function longestSubstr(string $text): string
{

    $result = '';
    while (strlen($text) > 1) {
        $base = substr($text, 0, 1);
        $str = $base;

        $text = substr($text, 1);
        if (substr_count($text, $base)) {
            for ($i = 0; $i <= strpos($text, $base); $i++) {
                $str .= $text[$i];
            }
            if (strlen($str) > strlen($result)) {
                $result = $str;
                echo '<br>';
            }
        }
    }

    return $result;
}
