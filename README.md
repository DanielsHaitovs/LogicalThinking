Logical Thinking

#1 
"findOddEvenPair" - 
The function should accept a non-empty array of positive integer numbers, with an
additional invariant that the first and last elements of the array have different
parity (i.e., if the first element is odd, the last one is going to be even, and
vice versa), and return an index $ix such that $numbers[$ix] and $numbers[$ix + 1]
also have different parity.  You may return any index such that the above condition
holds, in case there are multiple valid answers, all will be accepted by the
automated grader.

For example, findOddEvenPair([1, 2]) should always return 0 ($numbers[0] and
$numbers[1] have different parity, and no other index would even produce a valid
pair, while findOddEvenPair([1, 2, 4, 3, 7]) may return either 0 (1 and 2 have
different parity) or 2 (4 and 3 also have different parity).

You may assume that the inputs provided to your function will always satisfy the
invariants described above, so you do not need to perform any input validation.

#2 
"SummationService" - 
Implement a class called SummationService, with a constructor accepting a non-empty
array of integers as its single argument, and one public method sum() accepting
two non-negative integers $a and $b as arguments, and returning an integer
containing the sum of the array elements with indices from $a to $b (inclusive).

You may assume that the constructor will always be called with a non-empty array of
integers, that $a and $b will always lie between 0 and count($array) - 1
(inclusive), and that $a will always be less than or equal to $b.  You do not need
to validate the arguments, or ensure any kind of sane behavior in case these
constraints are violated.

You do not need to concern yourself with issues of integer precision.  All test
inputs will be constructed such that computing the answer will not involve integer
overflows.

The fundamental property your solution must satisfy is that for all valid values of
$array, $a and $b:

    (new \SummationService($array))->sum($a, $b) ===
    array_sum(array_slice($array, $a, $b - $a + 1))

For a more concrete example, using:

    $service = new \SummationService([-1, 0, 2, 7, -15]);

A call to $service->sum(0, 0) must evaluate to -1, a call to $service->sum(1, 3)
must evaluate to 9, and a call to $service->sum(2, 4) must evaluate to -6.

#3
" longestSubstr" - 
Implement a function with the following signature:

    function longestSubstr(string $text): string

Given a string of lower- and upper-case Latin letters and digits as an input, the
function should return its longest substring that does not include any
two-character sequence more than once.  In case there are several such substrings
with the same number of characters in them, your function should return the
leftmost one.

Treat the input string in case-sensitive fashion.

You may assume that the input is always valid, so you do not need to concern
yourself with input validation.

A few simple examples:

    longestSubstr('aaa') === 'aa'

The only longer substring is 'aaa' itself, and that includes the 'aa' digraph twice
(starting from first and second characters of the string).

    longestSubstr('aZaZaZ') === 'aZa'

'ZaZ' is also a substring that has the same property and same length, but 'aZa'
first occurs to the left of it, starting with the very first character of the input
string.  Longer substrings of this string do not have the required property, e.g.
'aZaZ' includes the two-letter sequence 'aZ' twice.

    longestSubstring('aZAzaz') === 'aZAzaz'

The digraphs 'aZ', 'ZA', 'Az', 'za' and 'az' are all distinct when treated
case-sensitively.

