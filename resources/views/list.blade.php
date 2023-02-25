<h1>Product List </h1>
<table border="1">
	<tr>
		<td>ID</td>
		<td>Name</td>
		<td>Price</td>
		<td>Action</td>
	</tr>
	@foreach($products as $product)
		<tr>
		<td>{{$product['id']}}</td>
		<td>{{$product['name']}}</td>
		<td>{{$product['price']}}</td>
		<td><input id="card-holder-name" type="text">
		<div id="card-element"></div>
 
<button id="card-button" data-secret="">
    BUY NOW
</button></td>
	</tr>
	@endforeach
</table>
<span>{{$products->links()}}</span>
<style>
	.w-5{
		display: none;
	}
</style>