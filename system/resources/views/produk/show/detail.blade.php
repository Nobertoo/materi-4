<p>
	{{$produk->harga}} |
 	Stok : {{$produk->stok}} |
	Berat : {{$produk->berat}} kg |
	Tanggal Produksi : {{$produk->created_at->diffForHumans()}} 
</p>