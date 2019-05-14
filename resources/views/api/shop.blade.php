<h1>Shop</h1>

<p>Today manu</p>
<div class="grid">
    <ul>
        @foreach( $items as $iteam)
        <li>{{ $iteam }}</li>
        @endforeach
    </ul>
    <p> go back <a href="/">Home</a></p>
</div>