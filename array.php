<?php 
    $array = [
        'fruit' => ['apple', 'pear', 'strawberry', 'cheer'],
        'red' => ['strawberry', 'cheer', 'tomato'],
        'sweet' => ['sugar', 'cake', 'strawberry'],
    ];

    $searchFor = "strawberry";
    $found = 0;
   
    /**
     * This method gets word count for not nested arrays
     * @param array $array
     * @param string $searchWord
     *
     * @return int
     */
    function getValueCount($array, $searchWord) : int{
        foreach ($array as $values) {
            $found += array_count_values($values)[$searchWord] ?? 0;
        }
    }

    /**
     * This method gets word count for nested arrays
     * @param array $array
     * @param string $searchWord
     *
     * @return int
     */
    function getValueCountRecursive($array, $searchWord) : int{
        $count = 0;
        foreach ($array as $value) {
            if (is_array($value)) {
                $count += getValueCountRecursive($value, $searchWord);
            } elseif ($value === $searchWord) {
                $count++;
            }
        }

        return $count;
    }


    $found = getValueCountRecursive($array, $searchFor);
    echo $found . " words found in array for ".$searchFor;
?>