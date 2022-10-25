@extends('layouts.layout')



@section('content')
    <a href="{{ route('products.index') }}" class="btn btn-primary">Go to products</a>
    <?php
    //Traccia1
    $a = [1, 2, 3, 4, 5];
    $b = [];
    $product = array_product($a);
    for ($i = 1; $i <= count($a); $i++) {
        array_push($b, $product / $i);
    }
    echo '</br> array di partenza ';
    print_r($a);
    echo '</br> array di arrivo ';
    print_r($b);
    
    //Traccia2
    echo '</br> array 1 ';
    $firstArray = ['casa', 'auto', 'città', 'pc'];
    print_r($firstArray);
    
    echo '</br> array 2 ';
    $secondArray = ['macchina', 'pc', 'città', 'casa'];
    print_r($secondArray);
    
    echo '</br>';
    print_r(array_unique(array_merge($firstArray, $secondArray)));
    
    //Traccia3
    
    class TextInput
    {
        public $result = '';
    
        public function add($input)
        {
            $this->result = $this->result . $input;
        }
    
        public function getValue()
        {
            return $this->result;
        }
    }
    
    class NumericInput extends TextInput
    {
        public function add($input)
        {
            $new_input = preg_replace('/\D/', '', $input);
            $this->result = $this->result . $new_input;
        }
    }
    $input = new NumericInput();
    $input->add('1');
    $input->add('casa');
    $input->add('0');
    echo '</br> Risultato text input </br>';
    echo $input->getValue();
    
    //Traccia 4
    
    $n1 = 2329;
    $n2 = 99;
    function checkLastDigit(&$n1, $n2)
    {
        echo '</br> Numero 1</br>';
        echo $n1;
        echo '</br> Numero 2</br>';
        echo $n2;
        if ($n1 <= 0 || $n2 <= 0 || substr($n1, -1) !== substr($n2, -1)) {
            echo '</br> false </br>';
            echo false;
        } else {
            echo '</br> true </br>';
            echo true;
        }
    }
    checkLastDigit($n1, $n2);
    ?>
@endsection
