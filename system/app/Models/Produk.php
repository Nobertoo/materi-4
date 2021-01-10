<?php

namespace App\Models;

class Produk extends Model{
	protected $table = 'produk';

	protected $casts = [
		'created_at' => 'datetime',
		'berat' => 'decimal:2'
	];

	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}
	function getTanggalProduksiAttribute(){
		$tanggal = $this->created_at;
		return strftime("%d %b %Y", strtotime($this->created_at));
	}
}