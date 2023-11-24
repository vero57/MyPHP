<style>
    *{
        margin: 0;
        padding: 0;
        background-color: pink;
    }
</style>

<?php
class Dokumen_HTML {
    public static function menu(){
        ?>
        <ul style="list-style:none;display:flex;gap:10px;">
            <a href=""><li>Home</li></a>
            <a href=""><li>Profile</li></a>
            <a href=""><li>Gallery</li></a>
            <a href=""><li>Contact</li></a>
            <a href=""><li>About</li></a>
        </ul>
        <?php
    }

    public static function jumbotron() {
        ?>
        <h1>jumbotron</h1>

        <?php
    }

    public function __construct()
    {
        self::jumbotron();
    }

    public static function konten(){
        ?>
        <div style="width: 100%;height:100vh;background-color:black;font-size:2em;text-align:center;font-family:Arial, Helvetica, sans-serif;color:white;"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui laudantium blanditiis quas placeat fugit illo veritatis? Modi repudiandae explicabo quam asperiores nobis nostrum, consequuntur, eveniet repellat libero ex rerum porro laboriosam odio in at nihil vel. Et laborum iusto voluptatibus eveniet officia quod ducimus libero itaque explicabo atque odit accusamus ad, delectus sequi quos possimus ullam nulla adipisci. Modi nisi atque quas tempora repellat blanditiis voluptatibus expedita aut possimus. Praesentium molestias eos aperiam hic blanditiis iure asperiores similique sequi, ipsum, exercitationem vel veniam, neque labore odio repudiandae! Odit adipisci assumenda reiciendis animi et veritatis nihil, deserunt error quaerat iure officiis?</p></div>
        <?php
    }
}

class main{
    public function __construct(){
        Dokumen_HTML::konten();
    }

    public static function footnote(){
        ?>
        <div style="background-color: red;color:white;width:100%;height:20vh;text-align:center;"><p>SMKN1 CIBINONG BY GOJO SATIRU</p></div>
        <?php
    }
}

class footer extends main{
    public function __construct(){
        parent::footnote();
    }
}

Dokumen_HTML::menu();
new Dokumen_HTML();
new main();
new footer()


?>