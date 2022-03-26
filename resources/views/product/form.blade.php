Name:
<input type="text" name="name" id="name" value="{{isset($product->name) ?$product-> name:'' }}"/>
<br>
Expire:
<input type="text" name="expire" id="expire" value="{{isset($product->expire) ?$product-> expire:'' }}"/>
<br>
Brand:
<input type="text" name="brand" id="brand" value="{{isset($product->brand) ?$product-> brand:'' }}"/>
<br>
Type:
<input type="text" name="type" id="type" value="{{isset($product->type) ?$product-> type:'' }}"/>
<br>
<br>
<button type="submit">Save</button>
