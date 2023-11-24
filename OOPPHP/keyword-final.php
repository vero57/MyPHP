<?php
// KEYWORD FINAL 
final class hewan{
    // code
}

// akan menghasilkan error dikarenakan kata kunci final akan menncegah terjadinya pewarisan
class kucing extends hewan{
    // code
}


// Adapun dalam overriding
final class hewan{
    final public function melompat(){

    }
}


class kuciing extends hewan{
    public function melompat(){

    }
}
?>