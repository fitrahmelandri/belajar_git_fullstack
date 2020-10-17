<?php

class product
    {
    private $nama;
    private $stok;
    private $kategori;

    function __construct($nama="rinso", $stok=10 , $kategori="pencuci pakaian") 
    {
        $this->nama = $nama;
        $this->stok = $stok;
        $this->kategori = $kategori;
    }
    function call_identity()
    {
        echo "<p>"."nama : ".$this->nama. " stok : ".
        $this->stok. " kategori : ". $this->kategori."</p>";
    }
    function set_nama($nama)
    {
        $this->nama = $nama;
    }
    function get_nama()
    {
        return $this->nama;
    }
    function set_stok($stok)
    {
        $this->stok = $stok;
    }
    function get_stok()
    {
        return $this->stok;
    }
    function set_kategori($kategori)
    {
        $this->kategori = $kategori;
    }
    function get_kategori()
    {
        return $this->kategori;
    }
}

$prdct = new product("rinso", 10, "pencuci pakaian");
$prdct->set_kategori("Sabun");
$prdct->call_identity();
