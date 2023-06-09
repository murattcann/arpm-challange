<?php
class Foo
{
    /** @var string **/
    private $sHelloString = 'Hello world!';
    
    /** @var array **/
    public $aArray = [
        "a" => "deneme", "test" => ["deneme"]
    ];

    public function printString(): void
    {
        echo $this->helloString;
    }

    /**
     * @return false|string
     */
	public function toJson(){
		return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
	}

    /**
     * @return string
     */
    public function __toString(): string
    {
        $properties = get_object_vars($this);
        $output = '';

        foreach ($properties as $name => $value) {
            if (is_array($value)) {
                $output .= "$name: [<br>";
                $output .= $this->recursiveArrayScan($value, '    ');
                $output .= "]<br>";
            }else {
                $output .= "$name: $value"."<br>";
            }
        }

        return "<pre>$output</pre>";
    }

    /**
     * @param $array
     * @param $indentation
     * @return string
     */
    private function recursiveArrayScan($array, $indentation = ''): string
    {
        $output = '';

        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $output .= "$indentation$key: [<br>";
                $output .= $this->recursiveArrayScan($value, $indentation . '    ');
                $output .= "$indentation]<br>";
            } else {
                $output .= "$indentation$key: $value<br>";
            }
        }

        return $output;
    }
}

$foo = new Foo();
echo "Foo class properties: <br>";
echo $foo;