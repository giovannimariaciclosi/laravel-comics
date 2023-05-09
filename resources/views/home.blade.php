@extends('layouts/main-layout')

@section('content')
<main>
  <div id="container">
    <div class="current-btn">Current Series</div>

    <AppCard v-for="comic in comics" :thumb="comic.thumb" :series="comic.series"></AppCard>

    <div class="load-more-btn">Load More</div>

  </div>
</main>
@endsection